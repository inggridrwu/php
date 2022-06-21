<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
        include "connection.php";
        echo "update data with ID : ".$_GET["ID"];
    ?>

    <br><br>
    <form action="updatedata.php" method="post">
        <?php
            echo '<input type="hidden" name="ID" value="' .$_GET["ID"]. '">';
        ?>
        <input type="text" name="NAME" placeholder="enter name" required>
        <input type="password" name="PASSWORD" placeholder="enter password" required>
        <input type="submit" value="submit">
    </form>

 
</body>
</html>