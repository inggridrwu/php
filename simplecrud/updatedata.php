<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
</head>
<body>
    <?php
        include "connection.php";

        $NAME = $_POST["NAME"];
        $PASSWORD = $_POST["PASSWORD"];
        $ID = $_POST["ID"];

        $query = "UPDATE USER_ACCOUNT SET ID = $ID ,NAME = '$NAME', PASSWORD = '$PASSWORD' WHERE USER_ACCOUNT.ID = $ID; ";

       
        $result = $conn->query($query);

        if($result === TRUE){
            echo "update data succesfull";
        }else{
            echo "error update data";
        }
        $conn->close();
    ?>

    you will be redirected in 2 seconds
    <script>
        setTimeout(() => {
            window.location.href = "http://localhost/crud/index.php"
        }, 2000);
    </script>
</body>
</html>

