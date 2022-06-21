<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form action="insert.php" method="post">
        <input type="text" name="NAME" placeholder="enter name" required>
        <input type="password" name="PASSWORD" placeholder="enter password" required>
        <input type="submit" value="submit">
    </form>

   
    
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PASSWORD</th>
        </tr>
        <?php 
        include "connection.php";
        $sql = "SELECT * FROM USER_ACCOUNT";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
        ?>

        <tr>
            <td>
                <?php echo $row["ID"] ?>
            </td>
            <td>
                <?php echo $row["NAME"] ?>
            </td>
            <td>
                <?php echo $row["PASSWORD"] ?>
            </td>
            
               
                 <?php 
                    $ID = $row["ID"];
                    $NAME = $row["NAME"];
                    echo "<td><a href=\"delete.php?ID=$ID\">delete</a></td>";
                    echo "<td><a href=\"update.php?ID=$ID&NAME=$NAME\">update</a></td>";
                ?>
            
        </tr>
        
        <?php    } ?>
    </table>

    </div>
    
    <?php
        
        
    ?>
</body>
</html>