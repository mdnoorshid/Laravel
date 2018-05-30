<html>
<head>
   <title>Employee Management | Add</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2 style="color:blue;font-weight:  bold;margin-left: 169px;">Insert Employee Data</h2>
<form action="/home/create" method="post" style="align-items:  center;margin-left: 194px;">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
     <table>
       <tr>
         <td style="color:orange;">Name</td>
         <td><input type="text" name="empname"></td>
         <td style="color:orange;">Email</td>
         <td><input type="text" name="email"></td>
       </tr>     
       <tr>
               <td colspan = '2'>
               <input type="submit" value="Add Employee" class="btn btn-success" style="margin-top: 15px;margin-left: 75px;">
               </td>
            </tr>
     </table>
 </form>
 <div>
</body>
</html>