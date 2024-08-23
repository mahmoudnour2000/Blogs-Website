<?php
    session_start();
    if (!isset($_SESSION['email']['name'])) {
        header("location:login.php");
    }
    require_once('config.php');
    
    if(!empty($_GET)){
        $result=search_blog($_GET['search']);
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>My Blog Templets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
    body {
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        font-size: 16px;
        line-height: 1.7;
        color: #eee;
    }

    .header {
        height: 30vh;
        background-image:
            linear-gradient(to right bottom,
                rgba(0, 0, 0, 0.8),
                rgba(0, 0, 0, 0.8)),
            url('img/communityIcon_olk9f7nto6891.jpg');

        background-size: cover;
        background-position: top;
        position: relative;

        clip-path: polygon(0 0, 100% 0, 100% 25vh, 0 100%);
    }

    .brand-box {
        position: absolute;
        top: 40px;
        left: 40px;
    }

    .brand {
        font-size: 20px;
        font-weight: bolder;
        color: #eee;
    }

    .text-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .heading-primary {
        color: #fff;
        text-transform: uppercase;

        backface-visibility: hidden;
        margin-bottom: 30px;
    }

    .heading-primary-main {
        display: block;
        font-size: 26px;
        font-weight: 400;
        letter-spacing: 5px;
    }

    .heading-primary-sub {
        display: block;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 7.4px;
    }

    .btn:link,
    .btn:visited {
        text-transform: uppercase;
        text-decoration: none;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 100px;
        transition: all .2s;
        position: relative;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .btn:active {
        transform: translateY(-1px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .btn-white {
        background-color: red;
        color: white;
        font-weight: bold;
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Raleway", sans-serif
    }

    input[type=text] {
        width: 220px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
        width: 100%;
    }
    </style>
</head>

<body class="w3-light-grey">



    <header class="header">
        <div class="brand-box">
            <span class="brand">Mahmoud Nour</span>
        </div>

        <div class="text-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main">Blogs</span>
                <span class="heading-primary-sub">The secondary heading</span>
            </h1>
            <a href="logout.php" class="btn btn-white btn-animated">logout</a>
        </div>
    </header>



    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>MY BLOG</b></h1>
            <p>Welcome to the blog of <span class="w3-tag">
                    <?php  echo $_SESSION['email']['name']   ?></span></p>
        </header>


        <div class='w3-col m8 s1 '>
            <p><a href="addblog.php"><button class='w3-button w3-padding-large w3-white w3-border w3-block '><b>add
                            blog</b></button></a>
            </p>
        </div>
        <!-- Grid -->
        <div class="w3-row">

            <!-- Blog entries -->
            <div class="w3-col l8 s12">
                <!-- Blog entry -->

                <?php
                foreach($result as $blogs ) {
                    echo "<div class='w3-card-4 w3-margin w3-white'>
                    <img src='img/$blogs[image]' 'style='width:20px'>
                    <div class='w3-container'>
                        <h3><b>$blogs[title]</b></h3>
                        <h5>$blogs[subTitle], <span class='w3-opacity'>April 7, 2014</span></h5>
                    </div>

                    <div class='w3-container'>
                        <p>$blogs[description]</p>
                        <div class='w3-row'>
                            <div class='w3-col m3 s12'>
                                <p><button class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE
                                            »</b></button></p>
                            </div>
                            <div class='w3-col m5 s12'>
                                <p><a href='updatedata.php?id=$blogs[id]><button class='w3-button w3-padding-large w3-white w3-border'><b>Update
                                            »</b></button></a></p>
                            </div>
                            <div class='w3-col m4 w3-hide-small w3-text-red'>
                                <p><a  href='function.php?id=$blogs[id]><span class='w3-padding-large  w3-right'><b>DELETE  </b></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>";
                }
                    
                ?>

                <hr>


            </div>

            <!-- Introduction menu -->

            <div class="w3-col l4 ">
                <form action="">
                    <input type="text" name="search" placeholder="Search Our Blogs..">
                    <button type="submit" class="w3-button w3-padding-large w3-white w"><b>
                            Search</b>
                    </button>
                </form>

                <!-- About Card -->
                <div class=" w3-card w3-margin w3-margin-top">
                    <img src="img/صورة مستقل .jpg" style="width:100%">
                    <div class="w3-container w3-white">
                        <h4><b>Mahmoud Nour Mohamed</b></h4>
                        <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love
                            and a
                            interest of lorem ipsum and mauris neque quam blog. I want to share my world with
                            you.
                        </p>
                    </div>

                </div>




                <hr>

                <!-- Posts -->
                <!-- <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Lorem</span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Ipsum</span><br>
                            <span>Praes tinci sed</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Dorum</span><br>
                            <span>Ultricies congue</span>
                        </li>
                        <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                            <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right"
                                style="width:50px">
                            <span class="w3-large">Mingsum</span><br>
                            <span>Lorem ipsum dipsum</span>
                        </li>
                    </ul>
                </div> -->
                <hr>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                        </p>
                    </div>
                </div>

                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div><br>

        <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
        <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
        <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>

</body>

</html>