<?php
    require_once('config.php');
    $blogsid=$_GET['id'];
    $iddelete=$_GET['id'];
    function update($blogsid) : void {
        $image=md5(time()).".".pathinfo($_FILES['image']['name'] , PATHINFO_EXTENSION);
        global $conn;
        $sql='update datablog set title=? , subTitle=? , description=?  where id=?';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$_POST['title'] , $_POST['sub_title'] , $_POST['description'] , $blogsid]);
        header('location:blog.php');
        
    }
    update($blogsid);

    function delete_blog($iddelete) : void {
        global $conn;
        $sql='delete from datablog where id=?';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$iddelete]);
        header('location:blog.php');
    }

    delete_blog($iddelete);
?>