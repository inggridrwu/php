<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete data</title>
</head>
<body>
    <?php
        include "connection.php";
        
        $sql = "DELETE FROM USER_ACCOUNT WHERE USER_ACCOUNT.ID = ".$_GET["ID"];
        $result = $conn->query($sql);

        if($result){
            echo "success delete DATA with ID: ". $_GET["ID"];
        }else{
            echo "failed delete DATA with ID: ". $_GET["ID"];
        }
    ?>
    <br><br>
    you will be redirected in 2 seconds
    
    <script>
        setTimeout(() => {
            window.location.href = "http://localhost/crud/index.php"
        }, 2000);
    </script>
</body>
</html>