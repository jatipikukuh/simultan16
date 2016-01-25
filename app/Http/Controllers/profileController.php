<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\biodataRequest;
use App\Http\Controllers\Controller;
use DB;
use View;
use App\User;
use App\Porfile;
use App\ProfileSaintek;
use App\ProfileSoshum;
use Input;
use Validator;
use Redirect;
use App\Http\Controllers\Redierct;


class profileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }
    public function rule()
    {
        return view::make('user.rule');
    }

    public function show(Request $request)
    {
        
        $cu = Auth::user()->id;
        $email = Auth::user()->email;
        if ($email == 'admin1') {
            return Redirect::to('list/@L4Y/1');
        }
        {

        if ($cu <= 448) {
            $disabel = DB::table('profil_saintek')->where('id', $cu)->get();
        }
        else{
            $disabel = DB::table('profil_soshum')->where('id', $cu)->get();
        }

        $pil = Auth::user()->pilihan;
        $no_pes = Auth::user()->nomor_peserta;
        
        if ($pil == "Saintek") {
            $no_tengah = "0081";
            
        }
        else{
            $no_tengah = "0080";
            
        }
       // $count=0;
/*
        for ($i=16; $i <=448 ; $i=$i+16) { 
            if ($no_pes <= $i) {
                $count++;
            }
        }
        $ruang = $count;
*/
        $count = $no_pes / 16;
        $ruang = 1+$no_pes;


        if ($cu <=448) {
            $pili = "Saintek";
        }
        else{
            $pili = 'Soshum';
        }

        //$wkwk = $no_pes;
        $anu = count($disabel);
        if ($anu != 0) {
            return View::make('user.kartu')->with('cu',$disabel)->with('nomor_tengah',$no_tengah)->with('ruang',$ruang);//->with('wkwk',$wkwk);
        }
        //kosong maka ke biodata
        else{
            return View::make('user.biodata')->with('pili',$pili);//->with('disabel',$disabel);
        }
        }
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;

        $rules = array(
            'nama_lengkap'      => 'required|min:5|max:30',
            'alamat'            => 'required|min:10|max:50',
            'e_mail'            => 'required|email|max:40',
            'nomor_hp'          => 'required|min:11|max:15',
            'nomor_induk_siswa' => 'required|max:20',
            'asal_sekolah'      => 'required|max:40',
            'pilihan'           => '',
            'jurusan_1'         => 'required|max:50',
            'jurusan_2'         => 'max:50',
            'image'             => 'max:300|required'
            );

        $post = Input::all();
        $validator =Validator::make($post,$rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator)->withInput();
        }
        if ($id <= 448) {
            $peserta = new ProfileSaintek;    
        }
        else{
            $peserta = new ProfileSoshum;
        }
        
// image
        $peserta->original_image = Input::file('image')->getClientOriginalName();
        $peserta->extension = Input::file('image')->getClientOriginalExtension();

        $rand1 = rand(10000,99999);
        $rand2 = rand(10000,99999);
        $time = time();
        $fileName = $rand1."_".$rand2."_".$time.".".Input::file('image')->getClientOriginalExtension();
        $peserta->image = $fileName;
// end image

        $peserta->id = $id;
        $peserta->nama_lengkap = Input::get('nama_lengkap');
        $peserta->alamat = Input::get('alamat');
        $peserta->e_mail = Input::get('e_mail');
        $peserta->nomor_hp = Input::get('nomor_hp');
        $peserta->nomor_induk_siswa = Input::get('nomor_induk_siswa');
        $peserta->asal_sekolah = Input::get('asal_sekolah');

        if ($id <= 448) {
            $peserta->pilihan = 'Saintek';
        }else{
            $peserta->pilihan = 'Soshum';
        }
        //menemtukan ruang


        $peserta->jurusan_1 = Input::get('jurusan_1');
        $peserta->jurusan_2 = Input::get('jurusan_2');
        $peserta->save();



        $request->file('image');
        $destinationPath = 'uploads';
        //move to disk
        Input::file('image')->move($destinationPath, $fileName);
        
        return Redirect::to('user');
    }
    public function show_all(Request $request,$room)
    {
        if (Auth::user()->email = 'admin1') {
        $anu = 16 * $room;
        $una = $anu-16;

        $dataSaintek = DB::table("profil_saintek")->select('id','nama_lengkap', 'alamat', 'e_mail','nomor_hp','jurusan_1','jurusan_2','asal_sekolah','pilihan','nomor_peserta')
        ->whereBetween('nomor_peserta', [$una,$anu])->orderBy('nomor_peserta','ASC')->get();
        $dataSoshum = DB::table("profil_soshum")->select('id','nama_lengkap', 'alamat', 'e_mail','nomor_hp','jurusan_1','jurusan_2','asal_sekolah','pilihan','nomor_peserta')
        ->whereBetween('nomor_peserta', [$una,$anu])->orderBy('nomor_peserta','ASC')->get();

        return View::make('user.list')->with('dataSaintek',$dataSaintek)->with('dataSoshum',$dataSoshum)->with('room',$room);
        }
        else{
            return "Forbidden";
        }
        
    }

}
