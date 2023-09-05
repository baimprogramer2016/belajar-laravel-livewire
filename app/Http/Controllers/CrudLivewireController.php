<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudLivewireController extends Controller
{
    //
    public function index()
    {
        return view('pages.crud-livewire');
    }
}
