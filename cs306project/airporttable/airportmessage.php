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

        <tr> <th> ID </th> <th> NAME </th> <th>CITY</th> </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM airport";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $aid = $row['id'];
            $aname = $row['name'];
            $acity = $row['city'];

            echo "<tr>" . "<th>" . $aid . "</th>" . "<th>" . $aname . "</th>" . "<th>" . $acity . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>