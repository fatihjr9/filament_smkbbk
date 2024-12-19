<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SMK Bina Bangsa Kersana</title>
    </head>
    <body class="font-sans antialiased">
        <div>
            <section style="border-bottom: 4px dotted black; padding-bottom:1rem;">
                <table style="width: 100%; border-collapse: collapse; vertical-align: middle;">
                    <tr>
                        <!-- Kolom Kiri -->
                        <td style="width: 70%; vertical-align: middle; padding: 0;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <!-- Logo -->
                                    <td style="width: 15%; vertical-align: middle; padding: 0;">
                                        <img src="./logo.png" style="width: 3.5rem; margin: 0;" />
                                    </td>
                                    <!-- Teks Keterangan -->
                                    <td style="width: 85%; vertical-align: middle; transform:translateX(-0.5rem);">
                                        <h5 style="margin: 0; font-weight: bold; font-size: .75rem;">Formulir Pendaftaran PPDB</h5>
                                        <h5 style="margin: 0; font-weight: bold; font-size: .75rem;">SMK Bina Bangsa Kersana</h5>
                                        <h5 style="margin: 0; font-weight: bold; font-size: .75rem;">Tahun Ajaran 2025/2026</h5>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <!-- Kolom Kanan -->
                        <td style="width: 30%; text-align: right; vertical-align: middle; padding: 0; transform: translateY(-0.5rem);">
                            <h5 style="margin-bottom: 0.25rem; font-weight: 600; font-size: .75rem;">Nomor Pendaftaran</h5>
                            <div style="border: 1px solid #c0c0c0; padding: 0.5rem; display: inline-block;">
                                <h5 style="margin: 0; font-weight: 600; font-size: .75rem;">{{$pendaftaran->no_registrasi}}</h5>
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="margin-top: .75rem;">
                    <!-- DATA CALON SISWA -->
                    <table style="width: 100%; border-collapse: collapse; font-size: .75rem;">
                        <thead>
                            <tr style="background-color: #0056b3; color: white;">
                                <th colspan="2" style="padding: 0.5rem; text-align: left;">DATA CALON SISWA</th>
                                <th style="padding: 0.5rem; text-align: left;">{{$pendaftaran->jurusan}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">1</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Nama Lengkap</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->nama_siswa}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">2</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Asal SMP / MTS</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->asal_sekolah}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">3</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Alamat Sekolah</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->alamat_asal_sekolah}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">4</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Tempat / Tanggal Lahir</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->tmpt_lahir_siswa}} / {{ \Carbon\Carbon::parse($pendaftaran->tgl_lahir_siswa)->translatedFormat('d F Y') }}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">5</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Jenis Kelamin</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->jenis_kelamin}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">6</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Agama</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->agama}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">7</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Alamat</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">
                                    Desa : {{$pendaftaran->dusun}}<br>
                                    Kecamatan : {{$pendaftaran->kecamatan}}<br>
                                    Kabupaten : {{$pendaftaran->kota}}<br>
                                    Provinsi : {{$pendaftaran->provinsi}}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- DATA ORANG TUA -->
                    <table style="width: 100%; border-collapse: collapse; font-size: .75rem;">
                        <thead>
                            <tr style="background-color: #0056b3; color: white;">
                                <th colspan="3" style="padding: 0.5rem; text-align: left;">DATA ORANG TUA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">12</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Nama Orang Tua / Wali</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">
                                    Ayah : {{$pendaftaran->nama_ayah}}<br>
                                    Ibu : {{$pendaftaran->nama_ibu}}
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">13</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Nomor HP / WhatsApp Orang Tua</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->no_hp}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- TANGGAL PENDAFTARAN -->
                    <table style="width: 100%; border-collapse: collapse; font-size: .75rem;">
                        <thead>
                            <tr style="background-color: #0056b3; color: white;">
                                <th colspan="3" style="padding: 0.5rem; text-align: left;">TANGGAL PENDAFTARAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{ \Carbon\Carbon::parse($pendaftaran->tgl_daftar)->translatedFormat('d F Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section style="margin-top:0.75rem;">
                <table style="width: 100%; border-collapse: collapse; vertical-align: middle;">
                    <tr>
                        <!-- Kolom Kiri -->
                        <td style="width: 70%; vertical-align: middle; padding: 0;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <!-- Logo -->
                                    <td style="width: 15%; vertical-align: middle; padding: 0;">
                                        <img src="./logo.png" style="width: 3.5rem; margin: 0;" />
                                    </td>
                                    <!-- Teks Keterangan -->
                                    <td style="width: 85%; vertical-align: middle; transform:translateX(-0.5rem);">
                                        <h5 style="margin: 0; font-weight: bold; font-size: .75rem;">Formulir Pendaftaran PPDB</h5>
                                        <h5 style="margin: 0; font-weight: bold; font-size: .75rem;">SMK Bina Bangsa Kersana</h5>
                                        <h5 style="margin: 0; font-weight: bold; font-size: .75rem;">Tahun Ajaran 2025/2026</h5>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <!-- Kolom Kanan -->
                        <td style="width: 30%; text-align: right; vertical-align: middle; padding: 0; transform: translateY(-0.5rem);">
                            <h5 style="margin-bottom: 0.25rem; font-weight: 600; font-size: .75rem;">Nomor Pendaftaran</h5>
                            <div style="border: 1px solid #c0c0c0; padding: 0.5rem; display: inline-block;">
                                <h5 style="margin: 0; font-weight: 600; font-size: .75rem;">{{$pendaftaran->no_registrasi}}</h5>
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="margin-top: .5rem;">
                    <!-- DATA CALON SISWA -->
                    <table style="width: 100%; border-collapse: collapse; font-size: .75rem;">
                        <thead>
                            <tr style="background-color: #0056b3; color: white;">
                                <th colspan="2" style="padding: 0.5rem; text-align: left;">DATA CALON SISWA</th>
                                <th style="padding: 0.5rem; text-align: left;">{{$pendaftaran->jurusan}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">1</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Nama Lengkap</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->nama_siswa}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">2</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Asal SMP / MTS</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->asal_sekolah}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">3</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Alamat Sekolah</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->alamat_asal_sekolah}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">4</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Tempat / Tanggal Lahir</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->tmpt_lahir_siswa}} / {{ \Carbon\Carbon::parse($pendaftaran->tgl_lahir_siswa)->translatedFormat('d F Y') }}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">5</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Jenis Kelamin</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->jenis_kelamin}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">6</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Agama</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{$pendaftaran->agama}}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">7</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">Alamat</td>
                                <td style="border: 1px solid black; padding: 0.5rem;">
                                    Desa : {{$pendaftaran->dusun}}<br>
                                    Kecamatan : {{$pendaftaran->kecamatan}}<br>
                                    Kabupaten : {{$pendaftaran->kota}}<br>
                                    Provinsi : {{$pendaftaran->provinsi}}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- TANGGAL PENDAFTARAN -->
                    <table style="width: 100%; border-collapse: collapse; font-size: .75rem;">
                        <thead>
                            <tr style="background-color: #0056b3; color: white;">
                                <th colspan="3" style="padding: 0.5rem; text-align: left;">TANGGAL PENDAFTARAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid black; padding: 0.5rem;">{{ \Carbon\Carbon::parse($pendaftaran->tgl_daftar)->translatedFormat('d F Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 style="margin-bottom: 0.25rem; font-weight: 600; font-size: .75rem;">NOTE : DIBAWA SAAT DAFTAR ULANG</h5>
                    <table style="width: 100%; border-collapse: collapse; font-size: .75rem; margin-top: .75rem;">
                        <tr>
                            <!-- Kolom QR Code -->
                            <td style="width: 40%; text-align: center; vertical-align: top;">
                                @if ($qrCode)
                                    <img src="data:image/png;base64,{{ $qrCode }}" alt="QR Code" style="width: 4rem; margin-bottom: .5rem;">
                                @else
                                    <p>Tidak ada grup WhatsApp yang sesuai dengan jurusan.</p>
                                @endif
                                <p style="margin: 0; font-weight: bold; font-size: 0.75rem;">SCAN UNTUK GABUNG GRUP</p>
                                <p style="margin: 0; font-size: 0.75rem;">{{ $waGrupLink ? $waGrupLink : 'Tidak tersedia' }}</p>
                            </td>

                            <!-- Kolom Kosong (opsional) -->
                            <td style="width: 20%;"></td>

                            <!-- Kolom Tanda Tangan -->
                            <td style="width: 40%; text-align: center; vertical-align: top;">
                                <p style="margin: 0; font-weight: bold; font-size: 0.75rem;">{{ $penyelenggara->jabatan }}</p>
                                <img src="{{ public_path('storage/' . $penyelenggara->ttd) }}" alt="Tanda Tangan {{ $penyelenggara->nama }}" style="width: 4rem; height: auto;" />
                                <p style="margin: 0; font-weight: bold;">{{ $penyelenggara->nama }}</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
    </body>
</html>
