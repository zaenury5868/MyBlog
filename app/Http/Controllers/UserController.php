<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(10);
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|max:8',
            'email' => 'required|email',
            'type' => 'required',
        ]);
        if ($request->input('password')) {
            # code...
            $password = bcrypt($request->password);
        }else{
            $password = bcrypt('1234');
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'password' => $password
        ]);
        return redirect()->back()->with('success', 'User berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
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
        $this->validate($request, [
            'name' => 'required|min:4|max:8',
            'type' => 'required',
        ]);
        if($request->input('password')){
            $user_data = [
                'name' => $request->name,
                'type' => $request->type,
                'password' => bcrypt($request->password)
            ];
        }else {
            $user_data = [
                'name' => $request->name,
                'type' => $request->type,
            ];
        }
        $user = User::find($id);
        $user->update($user_data);
        return redirect()->route('user.index')->with('success', 'User berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'User berhasil dihapus');
    }
}