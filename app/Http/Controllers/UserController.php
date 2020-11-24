<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Auth;

class UserController extends Controller
{
    private $val;

    protected function validateUser()
    {
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
       
    }

    protected function validateUserUpdateSameEmail()
    {
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
       
    }
    
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $val = $this->validateUser();

        User::create([
            'name' => $val['name'],
            'email' => $val['email'],
            'password' => Hash::make($val['password']),
        ]);

        return redirect('/users');
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        if (request()->email == $user->email) {
            $val = $this->validateUserUpdateSameEmail();
        }
        else {
            $val = $this->validateUser();
        }

        $user->update([
            'name' => $val['name'],
            'email' => $val['email'],
            'password' => Hash::make($val['password'])
        ]);
        
        return redirect('/users');
    }

    public function delete(User $user)
    {
        return view('users.delete', [
            'user' => $user,
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        
        return redirect('/users');
    }
}
