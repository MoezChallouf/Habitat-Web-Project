<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function Index()
    {
        return view('admin.allreferences');
    }

    public function AddReference()
    {
        return view('admin.addreference');
    }
}
