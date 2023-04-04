<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $DataBarang = DataBarang::where('kode_barang', 'LIKE', '%' . request('search') . '%')
                ->orWhere('nama_barang', 'LIKE', '%' . request('search') . '%')
                ->orWhere('kategori_barang', 'LIKE', '%' . request('search') . '%')
                ->orWhere('harfa', 'LIKE', '%' . request('search') . '%')
                ->orWhere('qty', 'LIKE', '%' . request('search') . '%')
                ->paginate(5);
    
            return view('data_barangs.index', ['data_barangs' => $data_barangs]);
        }else{
            $DataBarang = DataBarang::orderBy('kode_barang', 'desc')->paginate(5);
            return view('data_barangs.index', compact('data_barangs'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            ]);

            //fungsi eloquent untuk menambah data
            DataBarang::create($request->all());

            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('data_barangs.index')
            ->with('success', 'Data Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kode_barang)
    {
        $DataBarang = DataBarang::find($Nim);
        return view('data_barangs.detail', compact('DataBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $Nim
     * @return \Illuminate\Http\Response
     */
    public function edit(string $kode_barang)
    {
        $DataBarang = DataBarang::find($kode_barang);
        return view('data_barangs.edit', compact('DataBarang'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $kode_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            ]);

            //fungsi eloquent untuk mengupdate data inputan kita
            DataBarang::find($kode_barang)->update($request->all());

            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('data_barangs.index')
            ->with('success', 'Data Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kode_barang)
    {
        DataBarang::find($kode_barang)->delete();
        return redirect()->route('data_barangs.index')
        -> with('success', 'Data Barang Berhasil Dihapus');
    }
}
