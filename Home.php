<!DOCTYPE html>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom</title>
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
        </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ovmtr";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
<?php
require_once('includeDB2.php')
?>
    <h1>Op Vakantie Met De Ridders</h1>
    <a style = "margin:0px 250px;" href = "http://localhost/Websites%20(niet%20school)/Reisverhalen.php">Alle reisverhalen</a>

    <form action="commentAction2.php" method="post">
   
    <p style = "font-size:20px;float:left;">Naam:</p><br><br><br><br> <input style = "height:30px;font-size:30px;border-width:5px;" type="text" name="Name"><br>
    <p style = "font-size:20px;float:left;">Je reactie:</p><br><br><br><br> <input style = "height:30px;font-size:30px;border-width:5px;" type = "text" name = "Comment"><br><br>
    <div class = "button">
<input type="submit" name = "submit" value = "Plaats reactie" style = "font-size:20px;font-weight:bold;"> 
    </div>

</form>
<p style = text-align:right;color:white;>Recente reacties:</p>
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
    
    $sql = "SELECT ID, Name, Comment FROM user";
    $result = $conn->query($sql);
    
        // output data of each row
        while($row = $result->fetch_assoc()) {
            Foreach ($result as $item) { 
            echo "<br><br><br><p style = 'font-size:15px;float:right;color:white;'<br>Naam: ". $item["Name"]. " <br><br> Reactie:<br> ". $item["Comment"]."</p><br><br><br>";
        }
    }
    $conn->close();
    ?> 
    <script>
function admin() {
email = prompt("Voer je emailadres in:");
switch (email) {
    case 'kyanderidder@ziggo.nl':
        wachtwoord = prompt("Voer je wachtwoord in:");
}
switch (wachtwoord) {
    case 'DQUm=[htqe!Gv0%&]N2y?9Q:|~e5[i27c*m#n]U}:bC>mS."Ok0%)BE[\1CtCVl6.Br*:mf;L?zG<K=%a&B37=a(d3]}U!,={@#':
        window.location.href = 'http://localhost/Websites%20(niet%20school)/Add%20reisverhaal.php';
}
}
</script>
</body>
</html>