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

        <tr> <th> ID </th> <th> STORE NAME </th> <th>STORE CATEGORY</th> </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM store";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $sid = $row['sid'];
            $sname = $row['sname'];
            $category = $row['category'];

            echo "<tr>" . "<th>" . $sid . "</th>" . "<th>" . $sname . "</th>" . "<th>" . $category . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>