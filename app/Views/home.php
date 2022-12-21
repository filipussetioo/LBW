<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?= view('template/header.php', ['css_dependencies' => ['']]) ?>
</head>

<body class="">
    <?= view('template/navbar.php', ['css_dependencies' => ['']]) ?>
<!--login modal-->
 <div class="scroll-down">SCROLL DOWN
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
   <path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z"/> 
 </svg></div>
<div class="container" id="modal-container"></div>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">

            </div>

<form method="POST" action="<?= base_url(); ?>/home/login">
<?= csrf_field(); ?>
<div class="modal">
  <div class="modal-container">
    <div class="modal-left">
      <h1 class="modal-title">Welcome!</h1>
      <p class="modal-desc">Fanny pack hexagon food truck, street art waistcoat kitsch.</p>
      <div class="input-block">
        <label for="username" class="input-label">Username</label>
        <input type="text" name="username" id="username" placeholder="username">
      </div>
      <div class="input-block">
        <label for="password" class="input-label">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>
      <div class="modal-buttons">
        <a href="" class="">Forgot your password?</a>
        <button class="input-button">Login</button>
      </div>
      <p class="sign-up">Don't have an account? <a href="/register">Sign up now</a></p>
    </div>
    <div class="modal-right">
        <img src="https://image.tmdb.org/t/p/w500/7IkQm8L0FjECw38jFLCJ6t510nZ.jpg" alt="">
    </div>
    <button class="icon-button close-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
            <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
        </svg>
    </button>
  </div>
  <button class="modal-button">Click here to login</button>
</div>
</form>
<!--carousel-->
<div class="slider-container">
    <div  id="trending-title">
        <h1>Trending Movies</h1>
    </div>
    <div class="slider-content">
            <?php foreach($dataMovies['results'] as $key =>$value): ?>
                <div class="slider-single">
                    <img class="slider-single-image" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces/<?= $value['backdrop_path']?>">
                    <h1 class="slider-single-title">
                        <?= $value['title']?>
                    </h1>
                    <h3 class="slider-single-title bot">
                        <div class="slider-single-detail text">
                            <?php if(!empty($value['overview'])): ?>
                                <?= $value['overview']?>
                            <?php endif;?>
                            <?php if(empty($value['overview'])): ?>
                                <p>Deskripsi untuk film ini belum tersedia.</p>
                            <?php endif;?>
                        </div>
                        <div class="slider-single-detail vote">
                            <h4>Vote Average</h4>
                            <?= $value['vote_average']?>
                        </div>
                        <div>
                            <form  method="POST" action="<?= base_url(); ?>/home/addWatchlist">

                                <input type="text" name="id-film" id="id-film" value="<?= $value['id']?>">

                                <button type="submit" class="register-button">Add to Watchlist</button>
                            </form>    
                        </div>
                    </h3>
                </div>
            <?php endforeach; ?>
        
    </div>
</div>

<div class="slider-container2">
    <div  id="trending-title">
        <h1>Trending Series <?= session()->get('name'); ?></h1>
    </div>
    <div class="slider-content2">
        <?php foreach($dataSeries['results'] as $valueSeries):?>
        <div class="slider-single2">
            <img class="slider-single-image2" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces/<?= $valueSeries['backdrop_path']?>" alt="1" />
            <h1 class="slider-single-title2" ><?= $valueSeries['name'] ?></h1>
            <h3 class="slider-single-title2">
                <?php if(!empty($valueSeries['overview'])): ?>
                    <?= $value['overview']?>
                <?php endif;?>
                <?php if(empty($valueSeries['overview'])): ?>
                    <p>Deskripsi untuk film ini belum tersedia.</p>
                <?php endif;?>
                <div class="slider-single-detail vote">
                            <h4>Vote Average</h4>
                            <?= $valueSeries['vote_average'];?>
                </div>
            </h3>
        </div>
        <?php endforeach?>

        
    </div>
</div>
</html>