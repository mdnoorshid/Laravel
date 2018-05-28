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
   <h1 style="margin-left: 480px;color: blue;font-weight:bold;">Employee Management</h1>
      <table border="1" class="table table-striped table-hover">
        <tr  style="text-align:center;">
          <th>ID</th>
          <th>Name</th>
        </tr>
         @foreach ($empdata as $emp)
          <tr>
            <td style="text-align:left;">{{$emp -> id}}</td>
            <td style="text-align:left;">{{$emp -> name}} <span>
            <form action="/delete/<?php echo $emp -> id; ?>">
                 <input type="submit" value="Delete Employee" style="margin-top: -28px;margin-left: 125px;" class="btn btn-danger">
            </form> 
            <form action="/updatepage/<?php echo$emp -> id; ?>/<?php echo $emp -> name; ?>">
                 <input type="submit" value="Update Employee" style="margin-top: -50px;margin-left: 268px;" class="btn btn-info">
            </form></td>
          </tr>
          @endforeach
      </table>
    <form action="/insert">
         <input type="submit" value="Add Employee" style="margin-top: 12px;" class="btn btn-success btn-lg btn-block">
     </form>
    </div>  
     
  

     <!-- <form action="/updatepage">
         <input type="submit" value="Update Employee" style="margin-top: -10px;margin-left: 445px;" class="btn btn-info">
       </form> -->

     <!-- <form action="/deletepage">
         <input type="submit" value="Delete Employee" style="margin-top: -8px;margin-left: 451px;" class="btn btn-danger">
      </form> -->

   



   </body>

</html>