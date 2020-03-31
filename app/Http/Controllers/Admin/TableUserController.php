<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TableUserController extends Controller
{
    public function index(Request $tableuser)
    {
        $requests = User::get();

        return view('pages.table_user.view', compact('requests'));
    }

    public function show($id)
    {
        $requests = User::find($id);

        return view('pages.table_user.edit', compact('requests'));
    }

    public function updateuser($id)
    {
        User::where('id', $id)->update([
            'name' => request()->name,
            'email' => request()->email,
            'job_title' => request()->job_title,
            'roles' => request()->roles,
        ]);

        return "<script>alert('Berhasil');
        document.location='".route('view.user')."'</script>";
    }

    public function destroy($id)
    {
        $request = User::find($id);
        $request->delete();

        return redirect()->route('view.user');

    }
}
