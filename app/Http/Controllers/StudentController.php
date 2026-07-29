<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    return "Ini adalah halaman data siswa";
    }

    public function show(string $id)
    {
        return "menampilkan detail siswa dengan ID : {$id}";
    }

    public function create(string $id)
    {
        return "Menampilkan halaman tambah siswa";
    }

    public function store(string $id)
    {
        return "Menampilkan halaman tambah siswa";
    }

    public function edit(string $id)
    {
        return "Menampilkan halaman edit siswa: {$id}";
    }
    
    public function update(string $id)
    {
        return "Menampilkan halaman update siswa: {$id}";
    }
    
    public function destroy(string $id)
    {
        return "Menampilkan halaman hapus siswa: {$id}";
    }

}
