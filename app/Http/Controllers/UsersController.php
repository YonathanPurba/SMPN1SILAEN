<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

     
     public function store(Request $request)
     {
         // Membuat aturan validasi
         $rules = [
             'email' => 'required|email',
             'password' => 'required|string|min:8',
         ];
     
         // Membuat pesan kustom untuk validasi
         $customMessages = [
             'email.required' => 'Email harus diisi.',
             'email.email' => 'Format email tidak valid.',
             'password.required' => 'Password harus diisi.',
             'password.string' => 'Password harus berupa teks.',
             'password.min' => 'Password harus terdiri dari minimal 8 karakter.',
         ];
     
         // Melakukan validasi
         $validator = Validator::make($request->all(), $rules, $customMessages);
     
         // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan kesalahan
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validasi tidak berhasil. Silakan periksa kembali isian Anda.');
         }
     
         // Jika validasi berhasil, lanjutkan dengan menyimpan data
         $request->request->add(['password' => bcrypt($request->password)]);
         User::create($request->all());
         
         // Redirect ke halaman yang ditentukan dengan pesan sukses
         return redirect()->route('admin.users.index')->with('success', 'Data berhasil ditambah.');
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
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->request->add(['password' => $request->password ? bcrypt($request->password) : $request->old_password]);
        $user->update($request->all());
        return redirect()->route('admin.users.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success','Data berhasil dihapus');
    }

    // UserController.php

public function checkEmail(Request $request)
{
    $email = $request->email;

    $exists = User::where('email', $email)->exists();

    return response()->json(['exists' => $exists]);
}

}
