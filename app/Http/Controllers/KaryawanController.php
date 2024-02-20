<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function viewcreateform(){
        return view('adddata');
    }

    public function createdata(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:5|max:20',
            'age' => 'required|numeric',
            'address' => 'required|min:10|max:40',
            'phoneNumber' => 'required|regex:/^08[0-9]{8,11}$/'
        ]);
        Karyawan::create([
           'name' => $request->name,
           'age' => $request->age,
           'address' => $request->address,
           'phoneNumber' => $request->phoneNumber
        ]);
        return redirect('/');
    }
    public function view(){
       $karyawan = Karyawan::all();
       return view('welcome')->with('semuakaryawan', $karyawan);
    }

    public function updateform($id){
        $karyawan = Karyawan::findOrFail($id);
        return view('update')->with('karyawan', $karyawan);
    }

    public function update($id, Request $request, Karyawan $karyawan){
        $this->validate($request, [
            'name' => 'required|string|min:5|max:20',
            'age' => 'required|numeric',
            'address' => 'required|min:10|max:40',
            'phoneNumber' => 'required|regex:/^08[0-9]{8,11}$/'
        ]);
        $karyawan = Karyawan::findOrFail($id)-> update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'phoneNumber' => $request->phoneNumber
        ]);
        return redirect('/');
    }

    public function delete($id){
        $karyawan = Karyawan::findOrFail($id);
        if($karyawan != NULL){
            Karyawan::destroy($id);
        }

        return redirect('/');
    }
}
