<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;
use App\Models\Jurusan;
use App\Models\Organisasi;
use App\Models\Pendaftaran;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function heroContent()
    {
        $currentYear = Carbon::now()->year;
        $data = Pengumuman::latest()->first();
        $eskul = Ekstrakulikuler::all();
        $fasilitas = Fasilitas::all();
        $pendaftaran = Pendaftaran::whereYear(
            "created_at",
            Carbon::now()->year
        )->count();
        $totalPerJurusan = Jurusan::withCount([
            "pendaftaran" => function ($query) use ($currentYear) {
                $query->whereYear("tgl_daftar", $currentYear);
            },
        ])->get();

        // dd($totalPerJurusan);

        return view(
            "pages.index",
            compact(
                "data",
                "eskul",
                "fasilitas",
                "pendaftaran",
                "totalPerJurusan"
            )
        );
    }
    public function jurusanDetail($name)
    {
        $data = Jurusan::where("nama", $name)
            ->with(["organisasis", "produk"]) // Load relasi organisasis
            ->firstOrFail();
        return view("pages.detail.jurusan", compact("data"));
    }
    public function pengumumanDetail($name)
    {
        $data = Pengumuman::where("nama", $name)->firstOrFail();
        return view("pages.detail.pengumuman", compact("data"));
    }
    public function pengumuman(Request $request)
    {
        $search = $request->input("search");
        $data = Pengumuman::when($search, function ($query, $search) {
            $query->where("nama", "like", "%{$search}%");
        })
            ->latest()
            ->get();
        return view("pages.pengumuman", compact("data"));
    }
    public function organisasi()
    {
        $data = Organisasi::all();
        return view("pages.lainnya.organisasi", compact("data"));
    }
}
