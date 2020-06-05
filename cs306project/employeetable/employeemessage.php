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

        <tr> <th> ID </th> <th> EMPLOYEE NAME </th> <th>EMPLOYEE AGE</th> <th>EMPLOYEE JOB</th></tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM employee";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $eid = $row['eid'];
            $ename = $row['ename'];
            $eage = $row['age'];
            $ejob = $row['job'];

            echo "<tr>" . "<th>" . $eid . "</th>" . "<th>" . $ename . "</th>" . "<th>" . $eage . "</th>" . "<th>" . $ejob . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>