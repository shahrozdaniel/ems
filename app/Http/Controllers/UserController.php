<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function login()
	{
		return view('login');
	}

	public function authenticate(Request $request)
	{
		try {
			$name = $request->name;
			$password = $request->password;

			if (auth()->attempt(['name' => $name, 'password' => $password])) {
				return redirect()->route('dashboard');
			}

			return redirect()->back()->with('error', 'Error: Invalid credentials');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	public function logout()
	{
		auth()->logout();
		return redirect()->route('login');
	}
}
