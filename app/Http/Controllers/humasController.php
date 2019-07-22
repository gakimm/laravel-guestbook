<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\humas;
use Auth;
use Hash;
class humasController extends Controller
{

	public function ubah(Request $request){
		if (Hash::check($request->pawal, Auth::user()->password)) {
			$user = Auth::user();
			$user->password = bcrypt($request->pbaru);
			$user->save();
			return back()->with('pesan','Password berhasil diubah !');

		}else{
			return back()->with('pesan','Gagal !');
		}
	}

	public function index(){
		$all = humas::all()->count();
    	$today = humas::whereRaw('DATE(created_at) = CURDATE()')->count();
    	return view('humas.dashboard',['all'=>$all,'today'=>$today]);
	}

	public function tampilhari(){
		$datamu = humas::whereRaw('DATE(created_at) = CURDATE()')->latest()->SimplePaginate(5);

		return view('humas.hari',compact('datamu'));
	}

	public function show(){
		$datu =  humas::all();
		return view('humas.data',compact('datu'));
	}

	public function repot(){
		$datus =  humas::all();
		return view('humas.report',compact('datus'));
	}


	public function delete($id){
			$hapus = humas::where('id',$id)->delete();
		return back()->with('pesan','Data berhasil dihapus !');
	}

	public function input(){
		return view('humas.input');
	}

     public function simpan(Request $request)
	{
		$this->validate($request,[
			'nama_tamu'=>'required',
			'jk'=>'required',
			'alamat'=>'required',
			'status'=>'required',
			'jaminan'=>'required',
			'keterangan'=>'required'
		]);

		$sql = humas::where('nama_tamu',$request->nama_tamu)->count();
		if($sql > 0){
			return back()->with('warning','Tamu ada ! Kamu Bohong !');
		}else{
			humas::create([
				'id'=>$request->id,
				'nama_tamu'=>$request->nama_tamu,
				'jk'=>$request->jk,
				'alamat'=>$request->alamat,
				'status'=>$request->status,
				'jaminan'=>$request->jaminan,
				'keterangan'=>$request->keterangan
			]);
		}

			return back()->with('pesan','Data berhasil di simpan!');
		
	}
}
