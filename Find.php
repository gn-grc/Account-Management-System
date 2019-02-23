<!doctype html>
<html>
     <head>
          <title>AMS - Find</title>
     </head>
     <body>

          <?php

          if(isset($_POST['btnFind'])){
               $firstName = $_GET['fName'];
               $lastName = $_GET['lName'];

               $address = "";
               $birthdate = "";

               $fileName = strtoupper($firstName . "_" . $lastName) . ".txt";

               if(file_exists($fileName)){
                    $message = "Welcome ";

                    $record = file($fileName);

                    //firstname and lastname is set already
                    $address = $record[2];
                    $birthdate = $record[3];


               }else{
                    $firstName = "";
                    $lastName = "";

                    $message = "No account found. Please add an account!";
               }

          }else {
               //header("Location: " . $_SERVER['HTTP_REFERER']);

               header("Location: http://localhost/Web/Account%20Management/Home.php");
               exit;
          }

          ?>

          <table border="2" style="border:solid black;">

               <!-- Title -->
               <tr>

                    <td colspan="3"><h1>Account Management System</h1></td>

               </tr>

               <!-- text -->
               <tr>

                    <td colspan="3">
                         <?php
                              echo "<p style=\"text-align:center; font-size:20px;\" >" . $message . $firstName . "</p>";
                         ?>
                    </td>

               </tr>

               <!-- Name -->
               <tr>

                    <td width="100px">
                         <p style="text-align:center;">Full Name</p>
                    </td>

                    <td colspan="2">

                         <?php
                         echo "<p style=\"font-size:20px; margin-left:10px;\">" . $firstName . " " . $lastName . "</p>";
                         ?>

                    </td>

               </tr>

               <!-- Address -->
               <tr>

                    <td>
                         <p style="text-align:center;">Address</p>
                    </td>

                    <td colspan="2">

                         <?php
                         echo "<p style=\"font-size:20px; margin-left:10px;\">" . $address . "</p>";
                         ?>

                    </td>

               </tr>

               <!-- Birthdate -->
               <tr>

                    <td>
                         <p style="text-align:center;">Birthdate</p>
                    </td>

                    <td colspan="2">

                         <?php
                         echo "<p style=\"font-size:20px; margin-left:10px;\">" . $birthdate . "</p>";
                         ?>

                    </td>

               </tr>

               <!-- Button  -->
               <tr>

                    <td colspan="3">

                         <form action="Home.php" method="get">
                              <p style="text-align:center;"><input type="submit" name="btnHome" value="Home" style="font-size:18px;"></p>
                         </form>

                    </td>

               </tr>

          </table>


     </body>
</html>
