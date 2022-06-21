<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data</title>
</head>
<body>
    <?php
        include "connection.php";

        $NAME = $_POST["NAME"];
        $PASSWORD = $_POST["PASSWORD"];


        $query = "INSERT INTO USER_ACCOUNT (NAME, PASSWORD) VALUES('$NAME', '$PASSWORD')";
        $result = $conn->query($query);

        if($result === TRUE){
            echo "Created data succesfull";
        }else{
            echo "error input data";
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

