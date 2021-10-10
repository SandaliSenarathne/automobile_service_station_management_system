<?php
    require_once("../db.php");
    $id = $_GET['id'];
    //mysql delete from category where id
    $sql = "DELETE FROM category WHERE id = '$id';";
    echo($sql);
    $result = $conn->query($sql);
    echo($result);
    if($result){
        echo("done");
    }else{
        echo("error");
    }
    $conn->close();
   
?>