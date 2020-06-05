<?php

include "config.php";

if (isset($_POST['ids'])){

    $selection_id = $_POST['ids'];

    $sql_statement = "DELETE FROM tickets WHERE tid = $selection_id";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: deleteticket.php");

}

else
{

    echo "The form is not set.";

}

?>