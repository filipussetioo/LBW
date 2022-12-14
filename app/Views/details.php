<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script defer type="text/javascript" src="../assets/javascript/javascript.js"></script>
    <script defer type="text/javascript" src="../assets/javascript/js-carousel.js"></script>

    <script src="https://kit.fontawesome.com/8a2b672019.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <?= view('template/header.php', ['css_dependencies' => ['']]) ?>
</head>
<body>
    <?= view('template/navbar.php')?>
<div class="details_title">
    <h1>Details</h1>
</div>
<div class="wrap">
    <div class="search">
            <form class ="search" action="details" method="POST">
            <input type="text" name="title" class="searchTerm" placeholder="What are you looking for?">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
            </form> 
    </div>
</div>
<div class="details_container">
    <img class="details_image" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces/75aHn1NOYXh4M7L5shoeQ6NGykP.jpg" />
    <div class="details_title">
        <h1>Nganga Movie</h1>
    </div>
    <div class="details_overview">
        <h2>overview</h2>
        <p>It's Ted the Bellhop's first night on the job...and the hotel's very 
            unusual guests are about to place him in some outrageous predicaments. 
            It seems that this evening's room service is serving up one unbelievable 
            happening after another.</p>
    </div>
    <div class="details_release">
        <p>Release Date : 1995-12-09</p>
    </div>
    <div class="details_vote">
        <p>Vote Average : 5.7</p>
    </div>
    <div class="details_streaming_platform">
        <p>image streaming platform</p>
    </div>


</div>
</body>
</html>