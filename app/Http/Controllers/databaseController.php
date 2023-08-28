<?php

namespace App\Http\Controllers;
use App\Models\tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\database;
use Illuminate\Http\Request;

class databaseController extends Controller
{
    private $colums =['Title','publisher','description','updete_publisher','user_id'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        $test = database::get();

        return view('admin.datasets.index', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(tag $tag): View
    {
        $test = $tag;
       return view('admin.datasets.create',compact('test')); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {/* اطول طريقه وليست عملية
        $test = new database;
        $test->Title =$request->Title;
        $test->description =$request->description;
        $test->publisher =$request->publisher;
        $test->updete_publisher =$request->updete_publisher;
        $test->save();*/
        // ياخذ البيانات الموجوده بالمديول
       // database::create($request->only('Title','description', 'publisher','updete_publisher'));
      //  return redirect('database');
       // database::create($request->only($this->colums));
       $data = $request->validate([
            'Title'=>'required|string',
            'publisher' =>'required|string',
            'description' =>'required|string',
            'updete_publisher' =>'required|string',
        ]);
       $data['user_id'] = auth()->user()->id;
        database::create($data);
        return redirect('database');

//
//        return redirect('database');

       // return 'welcome store'; //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(database $database):View
    {

//        $test = database::find($id);
        $test = $database;
        return view('admin.datasets.show',compact('test')) ; //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // TODO: replace $id with $database
    public function edit(database $database):View
    {
        $test = $database;
      return view('admin.datasets.edit',compact('test'))  ;//
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
        database::where('id',$id)->update($request->only($this->colums));
        return redirect('database');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // TODO: replace $id with $database
    public function destroy(database $database)
    {
        $test = $database;
        $test->delete();
        return redirect('database');  //
    }
}
