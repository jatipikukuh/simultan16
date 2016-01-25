<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\simultanRequest;
use App\Http\Controllers\Controller;
use View;
use App\Username;
use Input;
use Response;
use DB;
use Redirect;
use App\Http\Requests\PhotoRequest;
use App\Image;
use File;
use Validator;

class simultanController extends Controller
{

    public function index()
    {
        $data = DB::table('sosialisasi')->orderBy('sekolah','asc')->get();

        return View::make('auth.login')->with('data',$data);
    }

    public function home()
    {

        $user = rand(100000,999999);     
        $pass = rand(100000,999999);

        return View::make('user.home')->with('user',$user)->with('pass',$pass);
    }

    public function bikinUsername(simultanRequest $request)
    {   

        $peserta = new Username;
        $peserta->username= Input::get('username');
        $peserta->password= Input::get('password');
        $peserta->pass = Input::get('pass');
        $peserta->save();

        return Redierct::to('/bikin');
    }

    public function cetakUsername()
    {
        
        $hasil = DB::table("username")->select('id','username', 'password')->whereBetween('id',[1,448])
        ->orderBy('id','ASC')->get();
        
        return View::make('user.tiket')->with('hasil', $hasil);
    }

    public function show(Request $request,$room)
    {
        $cu = Auth::user()->id;

        $anu = 16 * $room;
        $una = $anu-16;

        $dataSaintek = DB::table("profil_saintek")->select('id','nama_lengkap', 'alamat', 'e_mail','nomor_hp','asal_sekolah','pilihan','nomor_peserta')
        ->whereBetween('nomor_peserta', [$una,$anu])->orderBy('nomor_peserta','ASC')->get();
        $dataSoshum = DB::table("profil_soshum")->select('id','nama_lengkap', 'alamat', 'e_mail','nomor_hp','asal_sekolah','pilihan','nomor_peserta')
        ->whereBetween('nomor_peserta', [$una,$anu])->orderBy('nomor_peserta','ASC')->get();



        return View::make('user.list')->with('dataSaintek',$dataSaintek)->with('dataSoshum',$dataSoshum)->with('room',$room);
    }

    public function delete($id)
    {
        DB::table('profil')->where('id',$id)->delete();

        return Redirect::to('list/@L4Y');
        //return view('sukses');
    }

    public function ava()
    {
        return View::make('ava.ava');
    }

    public function avaStore(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'name' => 'required|max:30',
            'photo' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('ava')
                        ->withErrors($validator)
                        ->withInput();
        }

        $input = new Image;
        $input->name = Input::get('name');

        //----------------------------------------

        $input->original_name = Input::file('photo')->getClientOriginalName();
        $input->extension = Input::file('photo')->getClientOriginalExtension();
        $input->size = Input::file('photo')->getSize();

        $rand1 = rand(10000,99999);
        $time = time();
        $fileName = $rand1."_".$time.".".Input::file('photo')->getClientOriginalExtension();

        $input->file_name = $fileName;
        $input->save();

        $destinationPath = 'avas';
        //move to disk

        Input::file('photo')->move($destinationPath, $fileName);

        return Redirect::to('ava/save/'.$fileName);
    }

    public function avaSave($fileName)
    {
        $data  = DB::table('image')->select('file_name','id')->where('file_name',$fileName)->get();

        return View::make('ava.show')->with('data',$data);
    }
    public function avaDel($id)
    {
        $files = Image::find($id)->file_name;  
        DB::table('image')->where('id',$id)->delete();

        $dir = public_path().'/avas/'.$files;
        
        File::delete($dir);

        return Redirect::to('ava');
    }
    public function avaAll()
    {
        $data  = DB::table('image')->select('file_name','id','name')->get();

        return View::make('ava.all')->with('data',$data);
    }
}
