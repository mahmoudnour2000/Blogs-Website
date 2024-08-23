<?php
    require_once('config.php');
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo "<script>alert('$error');</script>";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/addblog.css">
</head>

<body>
    <div class="textheader">
        <h2>Enter Your Blog</h2>
        <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two
            columns
            stack
            on top of each other instead of next to each other.</p>
    </div>

    <div class="container">
        <form action="add.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="title">Title</label>
                </div>
                <div class="col-75">
                    <input type="text" id="title" name="title" placeholder="Your Title..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Sub Title</label>
                </div>
                <div class="col-75">
                    <input type="text" id="sub_title" name="sub_title" placeholder="Your sub_title..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="image">Image</label>
                </div>
                <div class="col-75">
                    <input type="file" id="image" name="image">
                </div>
            </div>
            <div class=" row">
                <div class="col-25">
                    <label for="subject">Description</label>
                </div>
                <div class="col-75">
                    <textarea id="description" name="description" placeholder="Write Description.."
                        style="height:200px"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>