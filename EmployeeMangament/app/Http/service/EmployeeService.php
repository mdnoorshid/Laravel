<?php

namespace App\Http\service;
use DB;

use Illuminate\Http\Request;

class EmployeeService
{

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
     *Service method to fetch employees
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       // echo "inside show method....."."<br>";
        $employees = DB::select('select * from employees limit 100');
        // return view('emp_view',['empdata' =>  $employees]);
        return  $employees;
    }

    /**
     * Service method to create employee
     */
    public function createEmployee(Request $request){
      $empname = $request -> input('empname');
      $email = $request -> input('email');
      $id = DB::insert('insert into employees(emp_name,email) value(?,?)',[$empname,$email]);
      return $id;
    }


    /**
     * method to update employee.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($name,$email,$id)
    {
       
        // echo "$name"."<br>";
        // echo "$email"."<br>";
        // echo "$id"."<br>";

     DB::update('update employees set emp_name = ? , email=? where emp_id = ?',[$name,$email,$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from employees where emp_id = ?',[$id]);
    }
}
