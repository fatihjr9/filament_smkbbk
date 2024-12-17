<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ClientController::class, "heroContent"])->name("home");
Route::get("/template", function () {
    return view("pages.lainnya.template");
});

Route::get("/pendaftaran-sukses", function () {
    return view("pages.success");
})->name("success-index");

Route::get("/organisasi-sekolah", [
    ClientController::class,
    "organisasi",
])->name("org-index");
Route::get("/pengumuman", [ClientController::class, "pengumuman"])->name(
    "pengumuman-index"
);

Route::get("/program-studi/{name}", [
    ClientController::class,
    "jurusanDetail",
])->name("jurusan-detail");
Route::get("/profil-sekolah", function () {
    return view("pages.profil");
})->name("profil-index");
// pendaftaran
Route::get("/daftar-ppdb", [
    PendaftaranController::class,
    "dataRegistration",
])->name("ppdb-index");
Route::post("/daftar-ppdb", [
    PendaftaranController::class,
    "postRegistration",
])->name("ppdb-post");
Route::get("/track-ppdb", [
    PendaftaranController::class,
    "trackRegistration",
])->name("ppdb-track");
Route::get("/pendaftaran/download/{id}", [
    PendaftaranController::class,
    "downloadRegistration",
])->name("ppdb-download");