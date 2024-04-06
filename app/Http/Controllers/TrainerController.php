<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */




    public function index()
    {

        $users=User::all();
        return view('trainer.index',compact('users'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        DB::table('users')->insert([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'class'  => $request->get('class'),
            'phone'  => $request->get('phone'),
            'age'  => $request->get('age'),
        ]);
        return redirect(route('trainer.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::where('id',$id)->get()->first();
        return view('trainer.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $user = User::find($id);
        return view('trainer.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
    $user->name = $request->input('name');
    $user->class = $request->input('class');
    $user->email = $request->input('email');
    $user->age = $request->input('age');
    $user->phone = $request->input('phone');

    $user->save();
    return redirect(route('trainer.index'))->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

    return redirect()->route('trainer.index')
         ->withSuccess(__('trainer deleted successfully.'));
    }
}
