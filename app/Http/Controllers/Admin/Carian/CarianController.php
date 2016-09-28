<?php

namespace App\Http\Controllers\Admin\Carian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Members;

class CarianController extends Controller
{
    public function nama() {

        // $members = Members::orderBy('nama', 'asc')->paginate(15);

        return view('admin.carian.nama');
    }
}
