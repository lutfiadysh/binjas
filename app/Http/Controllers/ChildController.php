<?php

namespace App\Http\Controllers;

use App\Child;
use App\User;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index(User $model)
    {
        $users = $model->all();

        return view('child.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::findOrFail($id);

        return view('child.create',compact('user'));
    }

    public function store(Request $request,Child $model)
    {   
        $model->create($request->all());

        return redirect()->route('child.index')->withStatus(__('Child successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $child = $user->children;
        return view('child.show',compact('user','child'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Child $id)
    {
        $child = Child::findOrFail($id);
        return view('child.edit', compact('child'));
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
        $child->update($request->all());

        return redirect()->withStatus(__('User successfully updated.'));
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
