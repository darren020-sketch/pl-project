<?php

namespace App\Http\Controllers\Schoolclass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        return "Menampilkan form update kelas dengan ID: {$id}" ;
    }
}
