<?php
    require_once('config2.php');
    $errors='';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    $pass=$_POST['pass'];
    $passPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/'; 
    
    
    if(empty($name)){
        $errors.='Name is Not Valid';
        //header('Location: login.php?error=' . urlencode($errors));
    }

    if(!preg_match($pattern,$email)){
        $errors.='Email is Not Valid';
        //header('Location: login.php?error=' . urlencode($errors));
    }

    if(!preg_match($passPattern,$pass)){
        $errors.='Password is Not Valid';
        header('Location: login.php?error=' . urlencode($errors));
    }else{
        $pass=md5($_POST['pass']);
    }
    $sql = "SELECT * FROM users WHERE email=?";
        $do = $conn->prepare($sql);
        $do->execute([$email]);
        $result = $do->fetchAll(PDO::FETCH_ASSOC);
        
        if(!empty($result)) {
            $errors='Email is Used';
        header('Location: login.php?error=' . urlencode($errors));
        }else{
            
        $sql = "INSERT INTO users (name, email, pass) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name , $email , $pass]);
        if($stmt){
            header('location:login.php?welcome=hello');
        }
    }
        
    
    
?>