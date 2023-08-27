<?php
$search = $_POST['search'];
$column = $_POST['column'];

$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "goodweb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE $column LIKE '%$search%'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Search Results</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>User Search Results</h1>
    <?php
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>User Type</th>';
        echo '<th>Username</th>';
        echo '<th>Userid</th>';
        echo '<th>Action</th>';
        echo '</tr>';
        
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'.$row["name"].'</td>';
            echo '<td>'.$row["usertype"].'</td>';
            echo '<td>'.$row["username"].'</td>';
            echo '<td>'.$row["userid"].'</td>';
            echo '<td><a href="delete.php?id='.$row["userid"].'">Delete</a></td>';
            echo '</tr>';
        }
        
        echo '</table>';
    } else {
        echo "No records found.";
    }
    ?>
</body>
</html>

<?php
$conn->close();
?>
