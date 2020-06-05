<?php

include "config.php";

if (isset($_POST['ename'])){

    $ename = $_POST['ename'];
    $eage = $_POST['eage'];
    $ejob = $_POST['ejob'];

    echo $ename . " " . $eage . " " . $ejob . "<br>";

    $sql_statement = "INSERT INTO employee(ename, age, job )
					VALUES ('$ename','$eage','$ejob')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: employeeinsert.php");

}

else
{

    echo "The form is not set.";

}


?>