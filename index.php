<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check Connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

    $sql = "SELECT Username, Password, Name, Status FROM member where UserID = '003' ";
    $result = $conn->query($sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data from DB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><label for="name">ชื่อ :</label></td> 
                        <td><?php echo $row['Username']; ?></td>
                        <td><label for="pword">รหัสผ่าน :</label>
                        <td><?php echo $row['Name']; ?></td>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Sname">ชื่อจริง :</label></td>
                        <td><?php echo $row['Password']; ?></td>
                        <td><label for="status">สถานะผู้ใช้งาน :</label></td>
                        <td><?php echo $row['Status']; ?></td>
                    </tr>
                <?php endwhile ?>
        </table>
    </div>
</body>
</html>