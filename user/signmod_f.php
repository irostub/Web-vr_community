<?php session_start(); ?>
<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/origin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/0c26b5d8a0.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>VR Community : Sign Modify</title>

</head>

<body>
   <?php
        include_once("../dbconn.php");
    
        if(!isset($_SESSION['id']))
        {
            echo "<SCRIPT type='text/javascript'>
                alert(\"비정상적인 접근입니다..\");
                window.location.replace(\"../index.php\");</SCRIPT>";
        }
        $id = $_SESSION['id'];
        $sql = "select * from user where id = '$id'";
        $result = $conn->query($sql); 
    
        $row = $result->fetch_assoc();
        ?>
    <div class="container">
        <!--헤드라인-->
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="../index.php">VR COMMUNITY</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Login</a>
                </div>
            </div>
        </header>

        <!--메뉴바-->
        <div class="nav-scroller py-1 mb-2 border-bottom">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="../index.php">VR News</a>
                <a class="p-2 text-muted" href="../movie.php">Video</a>
                <a class="p-2 text-muted" href="../gameinfo.php">GameInfo</a>
                <a class="p-2 text-muted" href="../community.php">Community</a>
                <a class="p-2 text-muted" href="../portfolio.php">About</a>
            </nav>
        </div>
    </div>

    <main role="main" class="container">
        <!--포스팅 게시글-->
        <div class="row">
            <div class="col blog-main">
                <div class="pb-4 pt-md-5 mb-2 text-center">
                    <h1 class="font-italic">SIGN MODIFY</h1>
                    <p>Do you want modify your password?</p>
                </div>

                <div class="pt-md-3 border-top">
                    <form action="signmod_b.php" method="post" class="form-signin">
                        <h1 class="h3 mb-3 font-weight-normal">Sign Modify</h1>
                        <label for="inputEmail" class="sr-only">id</label>
                        <input type="text" id="inputid" name="id" class="mb-3 form-control" value="<?= $row['id'] ?>" readonly autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="pw" class="mb-3 form-control" placeholder="New Password" required>
                        <input type="text" id="inputname" name="name" class="mb-3 form-control" value="<?= $row['name'] ?>" readonly>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Modify!</button>
                        <button onclick="location.href='signdel.php?id=<?=$row['id']?>'" class="btn btn-lg btn-primary btn-block" type="button">drop out Account</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
                    </form>
                </div>

            </div>
        </div>
    </main>
    <!--<a href="" style="position:fixed; right: 15%; bottom: 3%;"><img src="pageup1.png" alt=""></a>-->
    <footer class="blog-footer">
        <h4>Contact us : SNS</h4>
        <div class="text-center center-block">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i></a>
            <a href="https://mail.naver.com/"><i class="fas fa-envelope"></i></a>
        </div>
        <hr>
        <p>Copyright 2019. <a href="https://getbootstrap.com/">Shindongmin</a> All pictures cannot be copied without permission</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
</body>

</html>
