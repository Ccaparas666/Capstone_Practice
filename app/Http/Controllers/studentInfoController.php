<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentInfo;


class studentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ADDING
        // echo "TEST";
        // $studentinfo = new studentinfo();

        // $studentinfo ->idNo = "C19-0210";
        // $studentinfo ->firstName = "test222";
        // $studentinfo ->middleName = "test2222";
        // $studentinfo ->lastName = "test3222";
        // $studentinfo ->suffix = "Jr.";
        // $studentinfo ->course = "BSIT";
        // $studentinfo ->year = "3";
        // $studentinfo ->birthday = "2000-12-21";
        // $studentinfo ->gender = "Male";

        // $studentinfo->save();

        // echo "Student Information Successfully saved in the database";
// --------------------------------------------------------------------------
        //Delete 
        // find() -- using the field name 'id' (default)
        // where() -- using another field name
        // SELECT * FROM studenInfo WHERER sNO = 2
        // --------------------------------
        // $studentinfo = studentinfo::where('sNO', 2);
        // $studentinfo->delete();
        // echo "Student Information Successfully delete in the database";

// -----------------------------------------------------------------------
        // //UPDATE RECORD ON DATABASE
        // $studentinfo = studentinfo::where('sNo',1)->update(['firstName'=> 'Carms Caps']);
        // // $studentinfo->save();
        // echo "Student Information Successfully update in the database";

        //RETRIEVE RECORDS
        $studentinfo = studentinfo::all();
        return $studentinfo;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
