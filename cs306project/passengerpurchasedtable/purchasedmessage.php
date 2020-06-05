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

        <tr> <th> PASSENGER ID </th> <th> PASSENGER NAME </th> <th> PASSENGER ADDRESS </th> <th> TICKET ID </th> </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM pass_purchased_info";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $pid = $row['pid'];
            $tid = $row['tid'];
            $pname = $row['pname'];
            $address = $row['address'];

            echo "<tr>" . "<th>" . $pid . "</th>" . "<th>" . $pname . "</th>" . "<th>" . $address . "</th>" . "<th>" . $tid . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>