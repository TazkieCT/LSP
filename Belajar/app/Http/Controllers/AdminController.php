<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aspirasi;
use App\Models\Input_Aspirasi;
use App\Models\Kategori;

class AdminController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        return back()->with('LoginError', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }

    public function index()
    {
        return View('Admin', [
            'title' => 'Admin',
            'kategori' => Kategori::all(),
            'aspirasi' => Aspirasi::latest()->where('feedback',  null)->fillter(request(['search', 'kategori', 'waktu', 'status']))->paginate(5),
            'selesai' => Aspirasi::latest()->where('status', "Selesai")->where('feedback', '!=', null)->fillter(request(['search', 'kategori', 'waktu']))->paginate(5)
        ]);
    }

    public function status(Request $request)
    {
        Aspirasi::where('id_aspirasi',  $request->id_aspirasi)
        ->update(['status' => $request->status]);
        return redirect('/admin');
    }

    public function delete($id)
    {
        $data = Aspirasi::find($id);
        $data->delete();
        return redirect()->route('admin')->with('success', 'data berhasil di hapus');
    }
}
