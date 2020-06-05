<?php

include "config.php";

if (isset($_POST['ids'])){

    $selection_id = $_POST['ids'];

    $sql_statement = "DELETE FROM flight_belong_to_company WHERE fid = $selection_id";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: deleteflightbelongs.php");

}

else
{

    echo "The form is not set.";

}

?>