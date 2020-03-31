<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Requests;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $requests = Requests::all();
        var_dump($requests);
        // return view('pages.admin.dashboard',[
        //     'requests' => $requests
        // ]);
    }

    // public function create()
    // {
    //     return view('pages.admin.create');
    // }

    // public function store(Request $request)
    // {
    //     $data = [
    //         'subject' => $request->subject,
    //         'note' => $request->note,
    //         'attachment' => $request->attachment,
    //         'request_date' => $request->request_date,
    //         'request_status' => $request->request_status
    //     ];

    //     Requests::create($data);
    //     return redirect(route('dashboard'));
    // }
}
