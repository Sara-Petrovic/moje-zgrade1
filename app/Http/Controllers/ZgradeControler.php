<?php

namespace App\Http\Controllers;

use App\Models\Zgrada;
use Illuminate\Http\Request;

class ZgradeControler extends Controller
{
    //kako kontroler obradjuje odredjeni view u zavisnosti u od posta
    public function index(){
        $zgrade = auth()->user()->zgrade();
        return view('dashboard', compact('zgrade'));
    }

    public function add(){
        return view('add');
    }

    public function create(Request $request){
        $this->validate($request,['adresa'=>'required']);
        $zgrada = new Zgrada();
        $zgrada->adresa = $request->adresa;
        $zgrada->tekuci_racun = $request->tekuci_racun;
        $zgrada->banka = $request->banka;
        $zgrada->broj_stanova = $request->broj_stanova;
        $zgrada->user_id = auth()->user()->id;
        $zgrada->save();
        return redirect('/dashboard');
    }

    
    public function edit(Zgrada $zgrada){
        if(auth()->user()->id == $zgrada->user_id){
            return view('edit',compact('zgrada'));
        }{
            return redirect('dashboard');
        }
    }

    public function update(Request $request, Zgrada $zgrada){

        if(isset($_POST['delete'])){
            $zgrada->delete();
            return redirect('dashboard');
        }
        else{
            $this->validate($request,['adresa'=>'required']);
            $zgrada->adresa = $request->adresa;
            $zgrada->tekuci_racun = $request->tekuci_racun;
            $zgrada->banka = $request->banka;
            $zgrada->broj_stanova = $request->broj_stanova;
            $zgrada->save();
            return redirect('dashboard');
        }
    }
}
