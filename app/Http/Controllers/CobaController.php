<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;

class CobaController extends Controller
{

    public function index()
    {
        $friends = Friends::orderBy('id', 'desc')->get();

        return view('friends.index', compact('friends'));
    }
    public function create()
    {
        return view('friends.create');
    }
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_telp' => 'required|numeric',
            'alamat' => 'required',
        ]);
 
        $friends = new friends;
 
        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_telp;
        $friends->alamat = $request->alamat;
 
        $friends->save();

        return redirect('/');
    }
    public function show($id)
    {
        $friend = friends::where('id', $id)->first();
        return view('friends.show', ['friends' => $friend]);
    }
    public function edit($id)
    {
        $friend = friends::where('id', $id)->first();
        return view('friends.edit', ['friends' => $friend]);
    }
        public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_telp' => 'required|numeric',
            'alamat' => 'required',
        ]);
        friends::find($id)->update([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        friends::find($id)->delete();
        return redirect('/');
    }
}
