<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Google_Client;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    

    public function prosesLogin(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            session(['user' => Auth::user()]);
            if (auth()->user()->isAdmin === 1) {
                return view('user.home');
            } else {
                $users = User::all(); // Ambil semua pengguna dari database
                return view('admin.home', compact('users'));
            }
        } else {
            return redirect(route('login'))->with('failed', 'Email or Password Wrong');
        }
    }

    public function prosesRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->isAdmin = 1;
        $user->save();
        return redirect(route('login'))->with('success', 'Register Success');
    }

    public function dashboard()
    {
        if (auth()->user()->isAdmin === 1) {
            return view('user.home');
        } else {
            return view('admin.home');
        }
    }

    

    public function profile()
    {
        $data = auth()->user();
        return view('pages.profile', compact('data'));
    }

    public function updateProfile(User $user, Request $request)
    {
        $dataUser = User::find($user->id);
        if ($request->password) {
            $dataUser->name = $request->name;
            $dataUser->email = $request->email;
            $dataUser->password = Hash::make($request->password);
            $dataUser->update();

            Auth::logout();
            return redirect(route('login'))->with('success', 'Password Changed Successfully');
        } else {
            $dataUser->name = $request->name;
            $dataUser->email = $request->email;
            $dataUser->update();

            return redirect(route('profile'));
        }
    }

    public function deleteAccount(User $user)
    {
        $user->delete();
        Auth::logout();
        return redirect(route('login'))->with('success', 'Account Successfully Deleted');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function downloadKartuPeserta()
    {
        $user = Auth::user();
        $fileName = 'kartupeserta_' . $user->id . '.pdf'; // Sesuaikan ekstensi dengan yang Anda gunakan
        $filePath = 'public/uploads/kp/' . $fileName;

        if (Storage::exists($filePath)) {
            return Storage::download($filePath, $fileName);
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
    }

   


   

}
