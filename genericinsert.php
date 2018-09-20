<?php
function GenericInsertData($table, $formdata)
    {
        $db_host="localhost";
        $db_user="root";
        $db_pass="password";
        $db_name="db";
        
        $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
         if(!$con){
            die("connection failed : ". mysqli_connect_error());
        }
      
          // retrieve the keys of the array (column titles)
    $fields = array_keys($formdata);

    // build the query
    $sql = "INSERT INTO ".$table."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $formdata)."')";

    // run and return the query result resource
   $run_query=mysqli_query($con, $sql) or die(mysqli_error($con));
            if($run_query){
                     echo "success";
                 }else{
                     echo "An Error Occured";
                 }
        
              
    }
?>
