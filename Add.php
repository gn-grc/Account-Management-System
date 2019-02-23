<!doctype html>
<html>
     <head>
          <title>AMS - Add</title>
     </head>
     <body>

          <?php

          if(isset($_POST['btnAdd'])){

               $filePath = strtoupper( $_POST['fName'] . "_" . $_POST['lName'] ) . ".txt";

               $record = fopen($filePath, 'w');

               fwrite($record, $_POST['fName'] . "\r\n");
               fwrite($record, $_POST['lName'] . "\r\n");
               fwrite($record, $_POST['address'] . "\r\n");
               fwrite($record, $_POST['month'] . "/" . $_POST['date'] . "/" . $_POST['year'] . "\r\n");

               fclose($record);

               header("Location: http://localhost/Web/Account%20Management/Home.php");
               exit;
          }

          ?>

          <table border="2" style="border:solid black;" cellpadding="8">

               <!-- Title -->
               <tr>

                    <td  colspan="3"><h1>Account Management System</h1></td>

               </tr>

               <!-- Text -->
               <tr>

                    <td colspan="3">
                         <p style="text-align:center;">Welcome</p>
                    </td>

               </tr>

               <form action="Home.php" method="post">

                    <!-- First Name -->
                    <tr>

                    <td width="150px"><p style="text-align:center; font-size:18px; font-weight:bold;">First Name</p></td>

                    <td colspan="2">

                         <p><input type="text" name="fName" style="width:200px;" required></p>

                    </td>

               </tr>

                    <!-- Last Name -->
                    <tr>

                    <td width="150px"><p style="text-align:center; font-size:18px; font-weight:bold;">Last Name</p></td>

                    <td colspan="2">

                         <p><input type="text" name="lName" style="width:200px;" required></p>

                    </td>

               </tr>

                    <!-- Address -->
                    <tr>

                    <td width="150px"><p style="text-align:center; font-size:18px; font-weight:bold;">Address</p></td>

                    <td colspan="2">

                         <input type="text" name="address" style="width:200px;" required>

                    </td>

               </tr>

                    <!-- Birthday -->
                    <tr>

                         <td width="150px"><p style="text-align:center; font-size:18px; font-weight:bold;">Birthday</p></td>

                    <td colspan="2">

                         <center>
                              <table border="2" style="border:black;" cellpadding="5" width="220px">

                              <!-- Names -->
                              <tr>

                                   <td style="text-align:center;" width="50"><p>Month</p></td>
                                   <td style="text-align:center;" width="50"><p>Date</p></td>
                                   <td style="text-align:center;" width="50"><p>Year</p></td>

                              </tr>

                              <!-- Input -->
                              <tr>

                                   <td>

                                        <p style="text-align:center;"><input type="number" name="month" style="width:46px;" min="1" max="12" required></p>

                                   </td>

                                   <td>

                                        <p style="text-align:center;"><input type="number" name="date" style="width:46px;" min="1" max="31" required></p>

                                   </td>

                                   <td>

                                        <p style="text-align:center;"><input type="number" name="year" style="width:46px;" min="0000" max="2019" required></p>

                                   </td>

                              </tr>

                         </table>
                         </center>

                    </td>

               </tr>

                    <!-- Button -->
                    <tr>

                         <td colspan="3">

                              <p style="text-align:center;"><input type="submit" name="btnSubmit" value="Submit" style="font-size:20px; width:200px; height:50px;"></p>

                         </td>

                    </tr>

               </form>

          </table>

     </body>
</html>
