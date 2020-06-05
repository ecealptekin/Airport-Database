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

        <tr> <th> COMPANY ID </th> <th> COMPANY NAME </th> <th>COMPANY COUNTRY</th> <th>COMPANY CITY</th> </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM airline_company";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $acid = $row['acid'];
            $aname = $row['cname'];
            $acountry = $row['country'];
            $acity = $row['city'];

            echo "<tr>" . "<th>" . $acid . "</th>" . "<th>" . $aname . "</th>" . "<th>" . $acountry . "</th>" . "<th>" . $acity . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>