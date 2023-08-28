<?php

namespace App\Http\Controllers;

use App\Models\database;
use App\Models\tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class tagController extends Controller
{
    private $colums2 =['Title','id'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = tag::get();

        return view('admin.tags.index_tag', compact('test'));
    }  //


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create_tag'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Title'=>'required|string',
                    ]);
       // $data['id'] = auth()->user()->id;
        tag::create($data);
        return redirect('tags'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // TODO: replace $id with $tag
    public function show(tag $tag):View
    {
//
        $test = $tag;
        return view('admin.tags.show_tag',compact('test')) ; //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tag $tag):View
    {
        $test = $tag;
        return view('admin.tags.edit_tag',compact('test'))  ;//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id):RedirectResponse
    {// select from databess where id=1
        tag::where('id',$id)->update($request->only($this->colums2));
        return redirect('tags');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tag $tag)
    {
        $test = $tag;
        $test->delete();
        return redirect('tags');  //
    }
}
