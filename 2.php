<?php

        function formValidation($dUsername, $dPassword)
        {
            // Username Validation
            echo (!preg_match("/^[a-z]{5,9}+$/", $dUsername)) ? "Invalid Username : $dUsername" : "Valid Username : $dUsername";
            echo "<br>";

            // Password Validation
            echo (!preg_match("/^(.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}+$/", $dPassword)) ? "Invalid Password : $dPassword" : "Valid Password : $dPassword";
        }

        $username = "siska";
        $password = "CreateYourFutureCode!123";

        formValidation($username, $password);
