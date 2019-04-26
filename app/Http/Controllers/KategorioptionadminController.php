<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriOptionAdmin;

class KategorioptionadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_option_admins = KategoriOptionAdmin::all();

        return view('kategori-option-admin.index', compact('kategori_option_admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori-option-admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required|max:255',
        ]);
      $kategoriadminoptions = KategoriOptionAdmin::create($validatedData);

      return redirect('/kategori-option-admin')->with('success', 'kategori admin option is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_option_admins = KategoriOptionAdmin::findOrFail($id);

        return view('kategori-option-admin.edit', compact('kategori_option_admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);
        KategoriOptionAdmin::whereId($id)->update($validatedData);

        return redirect('/kategori-option-admin')->with('success', 'kategori admin option is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $kategoriadminoptions = KategoriOptionAdmin::findOrFail($id);
      $kategoriadminoptions->delete();

      return redirect('/kategori-option-admin')->with('success', 'kategori admin option is successfully deleted');
    }
}
