<?php
    $dsn="mysql:dbname=blogdb;host=localhost";
    $user_name="root";
    $password= "";
    $conn= new PDO($dsn,$user_name,$password);
    //echo 'connected';
    $sql='select * from datablog ';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    function search_blog(string $search) : array {
        global $conn;
        $search=$_GET['search'];
        $stmt=$conn->prepare("select * from datablog where datablog.title like ? ");
        $stmt->execute(["%$search%"]);
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    
    
    
    

?>