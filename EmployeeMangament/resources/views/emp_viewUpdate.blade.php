<html>
<head>
<title>Employee Update</title>
</head>

<body>
   <form action="/update" method = "post">
   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
     <h3>Updating {{$name}} having id {{$id}}</h3>
     <table>
     <tr>
         <td>Id</td>
         <td><input type="text" name="id" value={{$id}}></td>
       </tr>  
       <tr>
         <td>Name</td>
         <td><input type="text" name="emp_name"></td>
       </tr>  
       <tr>
         <td>Email</td>
         <td><input type="text" name="emp_mail"></td>
       </tr>    
       <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Employee"/>
               </td>
            </tr>
     </table>
  </form>
</body>



</html>