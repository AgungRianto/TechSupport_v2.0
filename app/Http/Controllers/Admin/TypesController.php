<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Types;
use Illuminate\Http\Request;
use Mockery\Matcher\Type;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $types)
    {
        $types = Types::get();

        return view('pages.trouble_type.view', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = \App\Types::all();

        return view('pages.trouble_type.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $types)
    {
        $data = $types->all();

        Types::insert([
            'type_name' => $types->type_name,
            'description' => $types->description,
        ]);

        return redirect(route('view.type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = Types::find($id);

        return view('pages.trouble_type.edit', compact('types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatetype($id)
    {
        Types::where('id', $id)->update([
            'type_name' => request()->type_name,
            'description' => request()->description,
        ]);
        return redirect(route('view.type'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = Types::find($id);
        $request->delete();

        return redirect()->route('view.type');
    }
}
