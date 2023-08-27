<?php 
$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "goodweb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM articles";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>

    <title>All articles</title>
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
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
        echo '<th>articleid</th>';
        echo '<th>Username</th>';
        echo '<th>Article name</th>';
        echo '<th>article text</th>';
        echo '<th>publication date</th>';
        echo '</tr>';
        
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'.$row["articleid"].'</td>';
            echo '<td>'.$row["username"].'</td>';
            echo '<td>'.$row["articlename"].'</td>';
            echo '<td>'.$row["articletext"].'</td>';
            echo '<td>'.$row["publication_date"].'</td>';

            echo '<td><a href="deletearticles.php?id='.$row["articleid"].'">Delete</a></td>';
            echo '<td><a href="editarticle.php?id='.$row["articleid"].'">Edit</a></td>';
            echo '</tr>';
        }
        
        echo '</table>';
        
    } else {
        echo "No records found.";
    }
    ?>
    <a href="author_page.php">Return to author page</a>
</body>
</html>

<?php
$conn->close();
?>