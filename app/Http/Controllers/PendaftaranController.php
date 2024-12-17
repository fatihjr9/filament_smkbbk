<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Penyelenggara;
use App\Models\WaGrup;
use App\Models\Pendaftaran;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PendaftaranController extends Controller
{
    public function dataRegistration()
    {
        $jurusan = Jurusan::all();
        $thnAjaran = TahunAjaran::latest()->first();
        $noReg = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));
        return view("pages.ppdb", compact("jurusan", "thnAjaran", "noReg"));
    }
    public function trackRegistration(Request $request)
    {
        $search = $request->input("search");
        $data = null;
        if ($search) {
            $data = Pendaftaran::query()
                ->where("no_registrasi", "like", "%{$search}%")
                ->orWhere("nama_siswa", "like", "%{$search}%")
                ->get();
        }

        return view("pages.lainnya.track-ppdb", compact("data"));
    }
    public function downloadRegistration($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $waGrup = WaGrup::where("jurusan", $pendaftaran->jurusan)->first();
        $penyelenggara = Penyelenggara::latest()->first();
        $qrCode = null;
        if ($waGrup) {
            $qrCode = base64_encode(
                QrCode::format("png")
                    ->size(200)
                    ->generate($waGrup->link)
            );
            $waGrupLink = $waGrup->link;
        }

        $pdf = Pdf::loadView("pages.lainnya.template", [
            "pendaftaran" => $pendaftaran,
            "qrCode" => $qrCode,
            "waGrupLink" => $waGrupLink,
            "penyelenggara" => $penyelenggara,
        ]);
        return $pdf->download("pendaftaran_" . $pendaftaran->id . ".pdf");
    }
    public function postRegistration(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            "tgl_daftar" => "required|date",
            "tingkat" => "required|string",
            "no_registrasi" => "required|string",
            "jurusan" => "required|string",
            // siswa
            "nama_siswa" => "required|string",
            "jenis_kelamin" => "required|string",
            "nisn" => "required|string",
            "nis" => "required|string",
            "nik" => "required|string",
            "npsn" => "required|string",
            "tmpt_lahir_siswa" => "required|string",
            "tgl_lahir_siswa" => "required|date",
            "agama" => "required|string",
            "kebutuhan_khusus_siswa" => "required|string",
            "alamat_siswa" => "required|string",
            "dusun" => "required|string",
            "rt" => "required|integer",
            "rw" => "required|integer",
            "kelurahan" => "required|string",
            "kecamatan" => "required|string",
            "kodepos" => "required|integer",
            "kota" => "required|string",
            "provinsi" => "required|string",
            "transport" => "required|string",
            "jenis_tinggal" => "required|string",
            "telp_rmh" => "nullable|string",
            "telp_hp" => "required|string",
            "email" => "nullable|string|email",
            "no_kks" => "nullable|integer",
            "kps" => "nullable|string",
            "no_kps" => "nullable|integer",
            "usul_kip" => "nullable|string",
            "layak_kip" => "nullable|string",
            "penerima_kip" => "nullable|string",
            "no_kip" => "nullable|integer",
            "nama_kip" => "nullable|string",
            "menolak_kip" => "nullable|string",
            // Orang tua (ayah)
            "nama_ayah" => "required|string",
            "tgl_lahir_ayah" => "required|date",
            "kebutuhan_khusus_ayah" => "required|string",
            "pekerjaan_ayah" => "required|string",
            "pendidikan_ayah" => "required|string",
            "penghasilan_ayah" => "required|integer",
            // Orang tua (ibu)
            "nama_ibu" => "required|string",
            "tgl_lahir_ibu" => "required|date",
            "kebutuhan_khusus_ibu" => "required|string",
            "pekerjaan_ibu" => "required|string",
            "pendidikan_ibu" => "required|string",
            "penghasilan_ibu" => "required|integer",
            // Orang tua (wali)
            "nama_wali" => "nullable|string",
            "tgl_lahir_wali" => "nullable|date",
            "kebutuhan_khusus_wali" => "nullable|string",
            "pekerjaan_wali" => "nullable|string",
            "pendidikan_wali" => "nullable|string",
            "penghasilan_wali" => "nullable|integer",
            // Data Periodik
            "tb" => "required|integer",
            "bb" => "required|integer",
            "jarak_kesekolah" => "required|integer",
            "jarak_kesekolah_lainnya" => "required|integer",
            "waktu_kesekolah" => "nullable|integer",
            "waktu_kesekolah_lainnya" => "required|integer",
            "saudara_kandung" => "required|integer",
            "uk_baju" => "required|string",
        ]);

        try {
            Pendaftaran::create($data);
            return redirect()->route("success-index");
        } catch (\Exception $e) {
            return back()->withErrors(["error" => $e->getMessage()]);
        }
    }
}
