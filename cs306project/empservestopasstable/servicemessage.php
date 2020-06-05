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

        <tr> <th> EMPLOYEE ID </th> <th> PASSENGER ID </th>  </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM empservestopass";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $eid = $row['eid'];
            $pid = $row['pid'];

            echo "<tr>" . "<th>" . $eid . "</th>" . "<th>" . $pid . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>