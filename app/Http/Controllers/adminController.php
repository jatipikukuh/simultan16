<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App\Sosialisasi;
use Input;
use Validator;
use Redirect;
use DB;
use Auth;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return View::make('admin.login');
    }

    public function login()
    {
        $username = Input::get('username');
        $password = Input::get('password');
        
        $isiTabel = DB::table('admin')->where('usernmae', $username)->where('password',$password)->get();

        return Redirect::to('/list/@L4Y/1');
    }
    public function sosialisasi()
    {
        Auth::user()->id;
        $data = DB::table('sosialisasi')->get();

        return View::make('admin.sosialisasi')->with('data',$data);
    }

    public function addSosialisasi(Request $request)
    {
        Auth::user()->id;
         $rules = array(
            'hari'      => 'required|min:3|max:10',
            'tanggal'   => 'required|min:6|max:20',
            'sekolah'   => 'required|min:6|max:20',
            'konfirmasi'=> 'required'
            );

        $post = Input::all();
        $validator =Validator::make($post,$rules);
        if ($validator->fails()) {
            return Redirect::to('S0s14l1545i')->withInput()->withErrors($validator)->withInput();
        }

        $record = new Sosialisasi;
        $record->hari = Input::get('hari');
        $record->tanggal = Input::get('tanggal');
        $record->sekolah = Input::get('sekolah');
        $record->konfirmasi = Input::get('konfirmasi');
        $record->save();

        $sukses = "Data berhasil Dimasukkan";
        return Redirect::to('S0s14l1545i')->with('sukses',$sukses);
    }

    public function deleteSosialisasi($id)
    {
        DB::table('sosialisasi')->where('id',$id)->delete();

        $sukses = "Data Berhasil dihapus";
        return Redirect::to('S0s14l1545i')->with('sukses',$sukses);
     //   return View::make('admin.cek')->with('id',$id);
    }
    public function editSosialisasi($id)
    {
        $data = DB::table('sosialisasi')->where('id',$id)->get();

        return View::make('admin.editSos')->with('data',$data);
    }
    public function updateSosialisasi($id)
    {
        $hari       = Input::get('hari');
        $tanggal    = Input::get('tanggal');
        $sekolah    = Input::get('sekolah');
        $konfirmasi = Input::get('konfirmasi');

        DB::table('sosialisasi')
            ->where('id', $id)
            ->update(['hari' => $hari,
                    'tanggal' => $tanggal,
                    'sekolah' => $sekolah,
                    'konfirmasi' => $konfirmasi]);
        return Redirect::to('S0s14l1545i');
    }


}

