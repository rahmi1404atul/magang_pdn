<?php

namespace App\Http\Controllers\Mapel;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMapelRequest;
use App\Http\Requests\MapelRequest;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;


class MapelController extends Controller
{
    public function index(){
        $data['mapel']= Mapel::get();
        return view('mapel/mapel',$data);
    }
    public function tambahm(){
        return view('mapel/tambahm');
    }
    public function savem(MapelRequest $r){
        if($r->validated()){
            $gambarbuku = $r->gambarbuku->getClientOriginalName();
            $r->gambarbuku->move('gambarbuku/',$gambarbuku);

            Mapel::create([
                'namamapel' => $r->namamapel,
                'guru' => $r->guru,
                'kelas' => $r->kelas,
                'jadwal' => $r->jadwal,
                'gambarbuku' => $gambarbuku
            ]);
       return redirect('mapel')->with('pesan','input data berhasil');
        }
       
    }
    
    public function editm($id){
        $data['mapel']= Mapel::where('id',$id)->first();

        return view('mapel/editm',$data);
    }
    

    public function updatem(UpdateMapelRequest $r, $id){
        if($r->validated()){
            if($r->gambarbuku){
                $cek = Mapel::where('id',$id)->first();
                if(file::exists(public_path('gambarbuku/'.$cek->gambarbuku))){
                    file::delete(public_path('gambarbuku/'.$cek->gambarbuku));
                }
                $gambarbuku = $r->gambarbuku->getClientOriginalName();
                $r->gambarbuku->move('gambarbuku/',$gambarbuku);

                $data['gambarbuku'] = $gambarbuku;
            }
            $data['namamapel'] = $r->namamapel;
            $data['guru'] = $r->guru;
            $data['kelas'] = $r->kelas;
            $data['jadwal'] = $r->jadwal;

            Mapel::where('id',$id)->update($data);

            return redirect('Mapel');
        }
}

public function hapusm($id){
    mapel::where('id',$id)->delete();

    return back();
}

public function dash(){
    return view('home.dashboard');
}
}
