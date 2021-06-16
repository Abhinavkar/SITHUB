<?php

$name = "root";
$password ="";
$server = 'localhost';
$db = 'login';


$con =mysqli_connect($server,$name,$password,$db);

if($con){
    //echo "connection successfull";

     ?>

     <script>
     alert('connection successfull')
     </script>
     <?php

}else{
    echo "No connection";
    die("no connection" .mysqli_connect_error());
}

?>
