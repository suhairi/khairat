<?php

namespace App\Http\Controllers\Admin\Ahli;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Members;

use Validator;
use Session;

class DaftarController extends Controller
{
    public function daftar() {

        $members = Members::orderBy('nama', 'asc')->paginate(15);

        return view('admin.ahli.index', compact('members'));
    }

    public function postDaftar(Request $request) {

        $validation = Validator::make($request->all(), [
            'nama'      => 'required',
            'nokp'      => 'required',
            'no_ahli'   => 'required|'
       ]);

        if($validation->fails()) {
            Session::flash('error', 'Gagal. Daftar Ahli gagal dilaksanakan.');
            return redirect()->back();
        }

        // Check if nokp is already exist in the database

        $member = Members::where('nokp', $request->nokp)->first();

        if($member != null) {
            Session::flash('error', 'Gagal. Ahli dengan No KP ' . $request->nokp . ' telah wujud.');
            return redirect()->back();
        }

        // Saving into the database

        $member = new Members;

        $member->nama       = strtoupper($request->nama);
        $member->nokp       = $request->nokp;
        $member->no_ahli    = $request->no_ahli;
        $member->dob        = $request->dob;
        $member->no_tel     = $request->no_tel;
        $member->pekerjaan  = strtoupper($request->pekerjaan);
        $member->alamat     = strtoupper($request->alamat);
        $member->status     = 'AKTIF';

        if($member->save()) {
            Session::flash('success', 'Berjaya. Daftar Ahli Baru.');
        } else {
            Session::flash('error', 'Gagal. Daftar Ahli Baru gagal.');
        }

        return redirect('/daftar');
    }
}
