<?php

include "config.php";

if (isset($_POST['cname'])){

    $cname = $_POST['cname'];
    $country = $_POST['country'];
    $city = $_POST['city'];

    echo $cname . " " . $country . " " . $city . "<br>";

    $sql_statement = "INSERT INTO airline_company(cname, country, city)
					VALUES ('$cname','$country','$city')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: companyinsert.php");

}

else
{

    echo "The form is not set.";

}


?>