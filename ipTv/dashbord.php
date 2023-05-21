<?php
    session_start();
    include "connecte.php";

        $query = "SELECT * FROM dataClients";
        $result = mysqli_query($conn, $query);
?>
<?php if (isset($_SESSION['username'])): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            padding: 0;
            margin: 0;
            font-family:Arial, Helvetica, sans-serif;
        }
        div
        {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table 
        {
        width: 80%;
        border-collapse: collapse;
        /* color: white; */
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        .table {
        table-layout: fixed;
        }

        td.message {
            max-width: 300px !important;
            word-wrap: break-word !important;
            }
    </style>
</head>
<body>
    <p><a href="logOut.php"> log out</a></p>
    <div>
        <table>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Tel</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
            <?php
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['firstname'] . '</td>';
                        echo '<td>' . $row['lastname'] . '</td>';
                        echo '<td>' . $row['phone'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td class="message">' . $row['message'] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo 'No data found.';
                }
            ?>
        </table>
    </div>
</body>
</html>
<?php else: 
    header("Location: admin.php");?>
<?php endif; ?>