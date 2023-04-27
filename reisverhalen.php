<!DOCTYPE html>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    a {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
h1 {
    text-align:center;
    color:white;
}
body {
background-color:blue;
}
p {
    color:white;
}
        </style>
<body>
    
    <h1>Mijn reisverhalen</h1>
    <a href = "http://localhost/Websites%20(niet%20school)/Home.php">Terug naar Home</a>
    
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ovmtr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT img,title,story FROM reisverhaal";
$result = $conn->query($sql);
$result->fetch_all();
Foreach ($result as $item) { 

    // output data of each row

        echo "<img width = '400px' src  = ".$item['img']."><br><br>";
        echo "<p>".$item["title"]."</p>";
        echo $item["story"]."<br><br>";

    }

$conn->close();
?>
</body>
</html>