<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function Index()
    {
        return view('admin.allpartners');
    }

    public function AddPartner()
    {
        return view('admin.addpartner');
    }
}
