<?php

namespace App\Http\Controllers\cms;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = Auth::user();
        return view('cms.account.index', compact('auth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Auth $auth)
    {
        $auth = Auth::user();
        return view('cms.account.user.edit', compact('auth'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => Str::slug($request->title),
            'image' => 'nullable|image|mimes:jpg,png|max:1024'
        ]);

        $user = Auth::user();
        
     

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = '/images/users/';

            if ($request->oldImage) {
                File::delete(public_path('images/users/' . $user->image));
            }
            
            $filename = $request->name. '-' . time() . '.' . $image->extension();
            $image->move(public_path($path), $filename);
        }

        $user->update([
            'name' => $request->name,
            'image' => $request->hasFile('image') ? $filename : null
        ]);

        return redirect()->route('user.index')
        ->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
