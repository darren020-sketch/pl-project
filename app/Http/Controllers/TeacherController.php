<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
         $title = 'Sistem Sekolah - Daftar Guru';
       $teachers = [
        [
            'id' => 1,
            'nip' => '198501012024',
            'name' => 'Budi Santoso',
            'gender' => 'Laki-Laki',
            'subject' => 'Akuntansi Dasar',
            'phone' => '081234560001',
            'status' => 'Aktif',
        ],
        [
            'id' => 2,
            'nip' => '198703152024',
            'name' => 'Siti Aminah',
            'gender' => 'Perempuan',
            'subject' => 'Jaringan Komputer',
            'phone' => '081234560002',
            'status' => 'Aktif',
        ]
    
        ];
        return view('teachers.index',[
            'title' => $title,
            'teachers' => $teachers
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $title = 'Sistem Sekolah - Tambah Guru';
 
        return view('teachers.create',[
            'title'=>$title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return "Melakukan penambahan data guru";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail guru';
 
        return view('teachers.show',[
            'title'=>$title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Edit Guru';
 
        return view('teachers.edit',[
            'title'=>$title
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data guru";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus data guru";
    }

}
