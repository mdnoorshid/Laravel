<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\service\EmployeeService;
use Mail;
use Illuminate\Support\Facades\Input;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the employees
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empctrl = new EmployeeService();
       //app('App\Http\Controllers\EmployeeController') -> show();
      
       $employees =   $empctrl -> show(); 
    //   print_r($employees); 
      return view('emp_view',['empdata' =>  $employees]);
    }

    public function addEmployee(Request $request){
        $empctrl = new EmployeeService();
       $id = $empctrl -> createEmployee($request);
       $name = $request -> input('empname');
       $email = $request -> input('email');
       if($id == 1){
           $mailPage = 'mail';
           $subject ="Congrats added Successfully";
          $this -> sendEmailNotification($name,$email,$mailPage,$subject);
           echo "Records inserted successfully , check mail for notification <br/>";
           echo '<a href="/home/createform"> Click Here </a> to go back.'."<br/>";
           echo '<a href="/home"> Click here</a> to Go to HOME PAGE'."<br/>";
       }
    }

    public function addForm(){
        return view('emp_create');
    }

    public function updateForm($id,$name){
        return view('emp_viewUpdate',['id' => $id, 'name' => $name]);
    }

    public function updateEmployee(Request $request){
        $name = $request -> input('emp_name');
        $email = $request -> input('emp_mail'); 
        $id = $request -> input('id');     
      
        // echo "$name"."<br>";
        // echo "$email"."<br>";
        // echo "$id"."<br>";

        $empctrl = new EmployeeService();
        $empctrl -> update($name,$email,$id);

        $mailPage = 'mailupdate';
        $subject = "Sucessfully Edited";


        $this -> sendEmailNotification($name,$email,$mailPage,$subject);
        echo "<h4 style='color:green;'>Check your mail for notification!!</h4>";
        
        // return redirect()->route('home');
        echo "<script>setTimeout(\"location.href = 'http://127.0.0.1:8000/home';\",1500);</script>";
    }


    public function deleteView($id){
       return view('emp_deletepage' ,['id' => $id]);
    }

    public function deleteRecord(){
       $empctrl = new EmployeeService();
       $id = Input::get('id');
       $empctrl -> destroy($id);
       return redirect()->route('home');
    }
   
    public function sendEmailNotification($empName,$emailId,$mailPage,$subject){
       // print_r("empName ==> ".$empName." emailId".$emailId);
        $data =array('name' => $empName,'email' => $emailId,'subject' => $subject);
        Mail::send($mailPage, $data, function($message) use ($data) {
            $message->to($data['email'], '')->subject
               ($data['subject']);
            $message->from('md.noorshid@reactiveworks.in','Reactiveworks');
         });
    }

}
