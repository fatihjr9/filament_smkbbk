<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Organisasi;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function heroContent()
    {
        $data = Pengumuman::latest()->first();
        return view("pages.index", compact("data"));
    }
    public function jurusanDetail($name)
    {
        $data = Jurusan::where("nama", $name)
            ->with("organisasis") // Load relasi organisasis
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
