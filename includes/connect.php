<?php
$con=mysqli_connect('localhost:3307','root','','mystore');
if($con){
    echo " ";

}else{

    die(mysqli_error($con));
}


?>
