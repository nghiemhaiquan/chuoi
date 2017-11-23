<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Http\Requests\SingerRequest;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singers = Singer::all();

        return view('admin.singer.list')->with('singers', $singers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.singer.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SingerRequest $request)
    {
        $singer = Singer::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'description' => $request->description,
            'country' => $request->country,
        ]);
        $singer->save();

        return redirect()->route('admin.singer.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singer = Singer::find($id);

        return view('admin.singer.update')->with('singer', $singer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SingerRequest $request, $id)
    {
        $singer = Singer::find($id);
        $singer->name = $request->name;
        $singer->gender = $request->gender;
        $singer->description = $request->description;
        $singer->country = $request->country;
        $singer->save();

        return redirect()->route('admin.singer.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singer = Singer::find($id);
        $singer->delete();

        return redirect()->route('admin.singer.list');
    }
}
