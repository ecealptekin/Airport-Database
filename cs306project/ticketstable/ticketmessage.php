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

        <tr> <th> TICKET ID </th> <th> TICKET PRICE </th> <th>TICKET SEAT</th> <th>TICKET DATE</th> </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM tickets";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $tid = $row['tid'];
            $tprice = $row['price'];
            $tseat = $row['seat'];
            $tdate = $row['date'];

            echo "<tr>" . "<th>" . $tid . "</th>" . "<th>" . $tprice . "</th>" . "<th>" . $tseat . "</th>" . "<th>" . $tdate . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>