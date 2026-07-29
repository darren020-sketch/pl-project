<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan halaman daftar siswa";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Menampilkan halaman tambah siswa";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Melakukan penambahan data siswa";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Menampilkan siswa dengan ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Menampilkan halaman edit siswa";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data siswa";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus data siswa";
    }

}
