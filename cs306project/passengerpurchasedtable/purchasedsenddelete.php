<?php

include "config.php";

if (isset($_POST['ids'])){

    $selection_id = $_POST['ids'];

    $sql_statement = "DELETE FROM pass_purchased_info WHERE pid = $selection_id";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: deletepurchasedinfo.php");

}

else
{

    echo "The form is not set.";

}

?>