<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('list', ['users' => $users]);
    }

    public function create()
    {
        $user = User::all();
        return view('form', ['user' => $user, 'action' => 'create', 'actionUrl' => 'store']);
    }
    public function store(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
        ]);

        User::create($validationData);

        return redirect('/')->with('success', 'User created successfully.');
    }

    public function edit(int $id)
    {
        $user = user::findOrFail($id);
        return view('form', ['user' => $user, 'action' => 'update', 'actionUrl' => 'update/' . $id]);
    }

    public function update(Request $request, int $id)
    {
        $validationData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
        ]);

        $user = user::findOrFail($id);
        $user->update($validationData);

        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->save();

        return redirect('/')->with('success', 'User updated successfully.');
    }

    public function delete(int $id)
    {
        $user = user::findOrFail($id);
        $user->delete();

        return redirect('/')->with('success', 'User deleted successfully.');
    }
}
