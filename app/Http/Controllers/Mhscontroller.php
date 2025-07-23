<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\MahasiswaModel; // Import the MahasiswaModel

class Mhscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inputData()
    {
        return view('mhsinsert');
    }
    public function index()
    {
        $semuaData = MahasiswaModel::all();
        return view('mhs', compact('semuaData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function saveData(Request $request)
    {
        //dd($request);
        $request->validate([
            'nim'=>'required|min:5|max:10|unique:App\Models\MahasiswaModel,nim',
            'nama'=>'required|min:5',
            'foto'=>'nullable|mimes:jpg,png|max:1024'
        ]);

        if($request->hasfile('foto')){
            $fileName = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('foto'), $fileName);
        }

        $data = new MahasiswaModel;
        $data['nim'] = $request->nim;
        $data['nama'] = $request->nama;
        $data['kelas'] = $request->kelas;
        $data['foto'] = $fileName;
        $data->save();
        return redirect()->route('mhs-insert')->with('success', 'Data Mahasiswa Berhasil Disimpan');
        //INSERT INTO tabel_mhs VALUES('', '', '');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function mhsEdit(string $id)
    {
        $data = MahasiswaModel::findOrFail($id);
        return view('mhsedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = MahasiswaModel::findOrFail($id);
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->save();

    return redirect()->route('mhs-baru')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function mhsDelete(string $id)
    {
        $data = MahasiswaModel::FindOrFail($id);
        $data->delete();
        return redirect()->route('mhs-baru');
    }
}
