<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    /**
     * Fungsi Index untuk menampilkan data semua Laptop
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Smartphone::all();
    }

    /**
     * Fungsi create untuk menambahkan Laptop
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $smartphone = new Smartphone();
        $smartphone->nama = $request->nama;
        $smartphone->tipe = $request->tipe;
        $smartphone->ram = $request->ram;
        $smartphone->prosesor = $request->prosesor;
        $smartphone->harga = $request->harga;
        $smartphone->save();

        return "Data Laptop Berhasil Ditambahkan";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $tipe = $request->tipe;
        $ram = $request->ram;
        $prosesor = $request->prosesor;
        $harga = $request->harga;

        $smartphone = Smartphone::find($id);
        $smartphone->nama = $nama;
        $smartphone->tipe = $tipe;
        $smartphone->ram = $ram;
        $smartphone->prosesor = $prosesor;
        $smartphone->harga = $harga;
        $smartphone->save();

        return "Data Laptop Berhasil Diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $smartphone = Smartphone::find($id);
        $smartphone->delete();

        return "Data Laptop Berhasil Dihapus";
    }
}
