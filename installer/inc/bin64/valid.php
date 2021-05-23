<?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fname"])) {
               $nameErr = "db name is required";
            }else {
               $name = test_input($_POST["fname"]);
            }
            
            if (empty($_POST["pass"])) {
               $emailErr = "db password is required";
            }else {
               $email = test_input($_POST["pass"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = " Invalid db password "; 
               }
            }
            
            if (empty($_POST["website"])) {
               $website = "";
            }else {
               $website = test_input($_POST["website"]);
            }
            
            if (empty($_POST["user"])) {
               $comment = "db user is required";
            }else {
               $comment = test_input($_POST["user"]);
            }
        }
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>