<?php

include "config.php";

if (isset($_POST['ids'])){

    $selection_id = $_POST['ids'];

    $sql_statement = "DELETE FROM ticket_belongs_to_flight WHERE fid = $selection_id";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: deleteticketbelongs.php");

}

else
{

    echo "The form is not set.";

}

?>