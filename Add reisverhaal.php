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
        </style>
<body>
    <h1>Reisverhaal toevoegen</h1>
    <a href = "http://localhost/Websites%20(niet%20school)/Home.php">Terug naar Home</a><br><br>
<form action="reisverhaal action.php" method = "post">
<input style = "margin:left;" type="file"  accept="image/*" name="img" id="file" style="display: none;"><br><br><br><br>
<p style = text-align:left;>Titel:</p>
<input type = "text" name = "title"><br><br><br><br>
<p style = text-align:left;>Verhaal:</p>
<input type = "text" name = "story"><br><br><br><br>
<input type="submit" name = "submit2" value = "Plaats reisverhaal" style = "font-size:20px;font-weight:bold;"> 
</form>
</body>
</html>