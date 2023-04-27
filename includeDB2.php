<?php
function MakeConnection(){
    $servername="localhost";
    $username="root";
    $password="";
    $database="ovmtr";

try{
    $pdo = new PDO("mysql:host=" . $servername .";dbname=" . $database, $username, $password);

     $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e)
{
    die("ERROR: Verbinding mislukt" .$e->getMessage());

}
return $pdo;
}

function selectAll()
{
    $con=MakeConnection();
    $query="SELECT * FROM comments";
    $stmt =$con->prepare($query);
    try{
        $stmt->execute();
        $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch(PDOException $e){echo 'Exception because '.$e;}
    
}

function insertImage($img,$title,$story)
{
    $con=MakeConnection();
    $query="INSERT INTO reisverhaal(img, title, story) VALUES (:img,:title,:story)";
    $stmt = $con->prepare($query);
    try{
        $stmt->execute(array(':img'=>$img, ':title'=>$title, ':story'=>$story));
    }
    catch(PDOException $e){echo 'Exception because '.$e;}
}





function insertComment($name,$comment)
{
   $con=MakeConnection();
    $query="INSERT INTO user(Name, Comment) VALUES (:Name,:Comment)";
    $stmt =$con->prepare($query);
    try{
        $stmt->execute(array(':Name'=>$name,':Comment'=>$comment));
    }
    catch(PDOException $e){echo 'Exception because '.$e;} 
      
      
}

function checkUser($email)
{
   $con = MakeConnection();   
   
    $query="SELECT * FROM comments WHERE email=:email";
    $stmt = $con->prepare($query);
    try{
      $stmt->execute(array(':email'=>$email));
      $result =$stmt->fetch(PDO::FETCH_ASSOC);
         
       return $result;
    }catch(PDOException $e){echo 'Exception because '.$e;}
      
     
    
}

function delete($id)
{
    
    $con=MakeConnection();
    $query = "DELETE from comments WHERE id=$id";
    $stmt=$con->prepare($query);
    $stmt->execute(array());
}

function insertUser($username,$email,$password)
{
   $con=MakeConnection();
    $query="INSERT INTO comments(Name,Comment) VALUES (:Name,:Comment)";
    $stmt =$con->prepare($query);
    try{
        $stmt->execute(array(':Name'=>$username,':Comment'=>$comment));
    }
    catch(PDOException $e){echo 'Exception because '.$e;} 
      
      
}


?>