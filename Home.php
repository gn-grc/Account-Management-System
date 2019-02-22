<!doctype html>
<html>
     <head>
          <title>Account Management System</title>
     </head>
     <body>

          <table border="2" style="border:solid black;" cellpadding="7">

               <!-- Title -->
               <tr>
                    <td colspan="3">
                         <h1>Account Management System</h1>
                    </td>
               </tr>

               <!-- Find account -->
               <tr>
                    <td>
                         <p><b>Find Account</b></p>
                    </td>

                    <form action="Find.php" method="get">

                         <td>
                              <p>First name <input type="text" name="fName" required></p>
                              <p>Last name <input type="text" name="lName" style="margin-left:2px;" required></p>
                         </td>
                         <td>
                              <p><input type="submit" name="btnFind" value="Find" style="width:70px; height:35px; font-size:15px;"></p>
                         </td>

                    </form>

               </tr>

               <!-- Add account -->
               <tr>
                    <td colspan="3">
                         <p style="text-align:center;"><b><i>No account? No problem</i></b></p>
                    </td>
               </tr>

               <!-- Add account 2 -->
               <tr>
                    <td colspan="3">

                         <form action="Add.php" method="get">
                              <p style="text-align:center;"><input type="submit" name="btnAdd" value="Add" style="width:200px; height:40px; font-size:20px;"></p>
                         </form>

                    </td>
               </tr>

          </table>

     </body>
</html>
