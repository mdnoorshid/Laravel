<html>
  <head>
    <title>View Employee Records</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
   
   <body>
   <div class="container">
   <h1 style="margin-left: 430px;color: blue;font-weight:bold;">Employee Management</h1>
      
      <table border="1" style="border-right:none; border-bottom:none;" class="table table-striped table-hover">
        <tr  style="text-align:center;">
          <th>Emp Id</th>
          <th>Employee Name</th>
          <th>Email</th>
          <th>Registration Date</th>
        </tr>
         @foreach ($empdata as $emp)
          <tr>
            <td style="text-align:left; border-bottom: 1px;solid;black">{{$emp ->  emp_id}}</td>
            <td style="text-align:left;">{{$emp -> emp_name}} <span>
            <td style="text-align:left;">{{$emp ->  email}}</td>
            <td style="text-align:left;">{{$emp ->  reg_date}}</td>
            <td style="border:none;">
            <form action="/deletepage/<?php echo $emp -> emp_id; ?>">
                 <input type="submit" value="Delete Employee" style="margin-top: -1px;margin-left: 12px;" class="btn btn-danger">
            </form> 
            <form action="/updatepage/<?php echo $emp ->  emp_id; ?>/<?php echo $emp ->  emp_name; ?>">

                 <input type="submit" value="Update Employee" style="margin-top: -50px;margin-left: 152px;" class="btn btn-info">
            </form></td>
          </tr>
          @endforeach
      </table>
   
    <form action="/home/createform">
         <input type="submit" value="Add Employee" style="margin-top: 12px;" class="btn btn-success btn-lg btn-block">
     </form>
    </div>  

   </body>

</html>