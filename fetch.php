<?php
function GenericFetchData($table, $orderby)
    {
        $db_host="localhost";
        $db_user="root";
        $db_pass="password";
        $db_name="db";
        
        $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
         if(!$con){
            die("connection failed : ". mysqli_connect_error());
        }
        
      
            $query = "SELECT * FROM $table ORDER BY $orderby asc";
            $stmt=mysqli_query($con,$query) or die(mysqli_error($con));

            if(mysqli_num_rows($stmt) > 0)
            {
                return $stmt;
        
           }
            else
            {
                echo "No data";
            }
        
              
    }

    ?>
