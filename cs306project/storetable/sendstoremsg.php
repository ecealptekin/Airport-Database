<?php

include "config.php";

if (isset($_POST['sname'])){

    $sname = $_POST['sname'];
    $category = $_POST['category'];

    echo $sname . " " . $category . "<br>";

    $sql_statement = "INSERT INTO store(sname, category)
					VALUES ('$sname','$category')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: storeinsert.php");

}

else
{

    echo "The form is not set.";

}


?>