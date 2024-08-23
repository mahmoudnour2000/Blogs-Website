<?php
    require_once('config.php');

    $vaild='';
    if(!empty($_POST["title"])){
        $title = $_POST["title"];
    }else{
        $vaild='Title is Empty Text';
        header('Location: addblog.php?error=' . urlencode($vaild));
    }

    if(!empty($_POST["sub_title"])){
        $subTitle = $_POST["sub_title"];
    }else{
        $vaild ='subTitle is Empty Text';
        header('Location: addblog.php?error=' . urlencode($vaild));
    }

    if(!empty($_POST["description"])){
        $description = $_POST["description"];
    }else{
        $vaild ='description is Empty Text';
        header('Location: addblog.php?error=' . urlencode($vaild));
    }
    
    

    if(empty($vaild)){
        $image=md5(time()).".".pathinfo($_FILES['image']['name'] , PATHINFO_EXTENSION);
    print_r($image);
    $sql='insert into datablog (title , subTitle , description , image)values(?,?,?,?)';
    $stmt=$conn->prepare($sql);
    $cheak=$stmt->execute([$_POST['title'] , $_POST['sub_title'] , $_POST['description'] , $image]);
    echo 'done' ;

    if($cheak){
        move_uploaded_file($_FILES['image']['tmp_name'],"img/".$image);
    }
    header('location:blog.php');
    }
    
    ?>