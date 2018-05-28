<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;


class EmpoyeeController extends Controller
{
   
    //method to return insert view
    public function insertForm(){
        return view('emp_create');
    }

    //method to do insert function
    public function insertData(Request $request){
      $name = $request -> input('emp_name');
      DB::insert('insert into employees(name) value(?)',[$name]);
      echo "Records inserted successfully...";
      echo '<a href="/insert"> Click Here </a> to go back.'."<br/>";
      echo '<a href="/"> Click here</a> to Go to HOME PAGE'."<br/>";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employees = DB::select('select * from employees');
      return view('emp_view',['empdata' => $employees]);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $name = $request -> input('emp_name');
        DB::update('update employees set name = ? where id = ?',[$name,$id]);
        echo "Records updated successfully .<br/>";
        echo '<a href="/updatepage"> Click Here </a> to go back.'."<br/>";
        echo '<a href="/"> Click here</a> to Go to HOME PAGE'."<br/>";
    }

    public function viewUpdate(Request $request,$id,$name){
          return view('emp_viewUpdate',['id' => $id,'name' => $name]);
    }

    public function deleteView(){
    return view('emp_deletepage');
    }

    public function deleteRecord(Request $request,$id){
       DB::delete('delete from employees where id = ?',[$id]);
      return redirect()->route('home');
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
