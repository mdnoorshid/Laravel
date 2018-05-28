<html>
<head>
   <title>Delete Employee</title>
</head>
<body>
 <form action = "/delete" method = "post">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
     <table>
       <tr>
         <td>Id</td>
         <td><input type="text" name="id" value="{{$emp -> id}}"></td>
       </tr>     
       <tr>
            <td colspan = '2'>
                  <input type = 'submit' value = "Confirm delete"/>
               </td>
            </tr>
     </table>
 </form>
</body>
</html>