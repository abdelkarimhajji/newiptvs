<?php
    include "connecte.php";
    session_start();
    if (isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (!empty($email) && !empty($password))
        {
            $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();


            if (mysqli_num_rows($result) > 0)
            {
                $_SESSION['username'] = $email;
                header('Location: dashbord.php');
                exit;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/admin.css">
    <script src="https://kit.fontawesome.com/696da253b9.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/58ddd4ceae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9oW3/1d+Q0OZ4j7bK6vEq9K8KkzI9g9B9v1E3zNn2b9W8LdRJyWd2+OjKuu1YDyKvQn98ZtRyZaJ4s2BcVX7XQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <section>
        <form action="admin.php" method="post">
            <!-- <div style="width:50%"> -->
                <i class="fa-solid fa-user"></i>
                <input type="text" name="email" require placeholder="Email">
                <input type="password" name="password" require placeholder="Password">
                <input type="submit" name="submit" class="submit">
            <!-- </div> -->
        </form>
    </section>
</body>
</html>