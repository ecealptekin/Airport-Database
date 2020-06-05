<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: transparent;
        }
        tr {
            font-size: 14px;
        }
    </style>

</head>
<body>

<div align="center">

    <table>

        <tr> <th> FLIGHT ID </th> <th> DEPARTURE TIME </th> <th> ARRIVAL TIME </th> <th> COMPANY ID </th> </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM flight_belong_to_company";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $acid = $row['acid'];
            $fid = $row['fid'];
            $fdep = $row['dep_hour'];
            $farr = $row['arrival'];

            echo "<tr>" . "<th>" . $fid . "</th>" . "<th>" . $fdep . "</th>" . "<th>" . $farr . "</th>" . "<th>" . $acid . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>