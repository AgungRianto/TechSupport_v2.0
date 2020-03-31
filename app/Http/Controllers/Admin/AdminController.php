<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Requests;
use App\Types;
use App\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $requests = Requests::get();
        foreach($requests as $rqs){
            $rqs->detail_comment = Comments::where('request_id', $rqs->id)->get();
        }

        // return $requests;

        return view('pages.admin.dashboard', compact('requests'));
    }

    public function view(Request $request)
    {
        $requests = Requests::get();

        return view('pages.trouble_ticket.view', compact('requests'));
    }

    public function detail($id)
    {
        $request = Requests::find($id);

        return view('pages.trouble_ticket.detail', compact('request'));
    }

    public function create()
    {
        $users = \App\User::all();
        $requests = \App\Requests::all();
        $types = \App\Types::all();

        return view('pages.admin.create', compact('users', 'requests', 'types'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        // $file = $request->file('attachment');
        // $filename = time() . '.' . $request->file('attachment')->getClientOriginalExtension();
        // $filePath = 'public\storage';
        // $file->move($filePath, $filename);

        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $ext = $attachment->getClientOriginalExtension();
            if ($request->file('attachment')->isValid()) {
                $attachment_name = date('YmdHis'). ".$ext";
                $upload_path = storage_path('public\storage');
                $request->file('attachment')->move($upload_path, $attachment_name);
                $data['attachment'] = $attachment_name;
            }
        }

        Requests::insert([
            'user_name' => $request->user_name,
            'subject' => $request->subject,
            'type_name' => $request->type_name,
            'note'=> $request->note,
            'attachment' => $attachment_name,
            'request_date' => $request->request_date,
        ]);

        return redirect(route('dashboard'));
    }

    public function update($id) {

        Requests::where('id', $id)->update([
            'request_status' => request()->request_status,
            'officer' => request()->officer,
        ]);
        return redirect(URL('/admin'));
    }

    public function updatedetail($id) {

        Requests::where('id', $id)->update([
            'request_status' => request()->request_status,
            'officer' => request()->officer,
        ]);
        return redirect(route('detail.trouble_ticket', $id));
    }

    public function destroy($id)
    {
        $request = Requests::find($id);
        $request->delete();
        $request = Comments::where('request_id', '=', $request->id);
        $request->delete();

        return redirect()->route('view.trouble_ticket');
    }
}
