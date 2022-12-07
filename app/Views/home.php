<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script defer type="text/javascript" src="../assets/javascript/javascript.js"></script>
    <script defer type="text/javascript" src="../assets/javascript/js-carousel.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <?= view('template/header.php', ['css_dependencies' => ['']]) ?>
</head>

<body class="">
    <!-- popup -->
    <div class="title-bar">
        <h3 id="title">MovieKu</h3>
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">Trending</a></li>
            <li><a href="#contact">Genre</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        <a class="account-button" data-modal="signin-modal">Make Account</a>
    </div>
    
<!--login modal-->
 <div class="scroll-down">SCROLL DOWN
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
   <path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z"/> 
 </svg></div>
<div class="container" id="modal-container"></div>
<div class="modal">
  <div class="modal-container">
    <div class="modal-left">
      <h1 class="modal-title">Welcome!</h1>
      <p class="modal-desc">Fanny pack hexagon food truck, street art waistcoat kitsch.</p>
      <div class="input-block">
        <label for="email" class="input-label">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
      </div>
      <div class="input-block">
        <label for="password" class="input-label">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>
      <div class="modal-buttons">
        <a href="" class="">Forgot your password?</a>
        <button class="input-button">Login</button>
      </div>
      <p class="sign-up">Don't have an account? <a href="#">Sign up now</a></p>
    </div>
    <div class="modal-right">
        <img src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=dfd2ec5a01006fd8c4d7592a381d3776&auto=format&fit=crop&w=1000&q=80" alt="">
    </div>
    <button class="icon-button close-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
    <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
</svg>
      </button>
  </div>
  <button class="modal-button">Click here to login</button>
</div>

<!--carousel-->
<div class="slider-container">
    <div  id="trending-title">
        <h1>Trending Movies</h1>
    </div>
    <div class="slider-content">

        <div class="slider-single">
            <img class="slider-single-image" src="https://image.tmdb.org/t/p/w1920_and_h800_multi_faces/bQXAqRx2Fgc46uCVWgoPz5L5Dtr.jpg" alt="1" />
            <h1 class="slider-single-title" >Black Adam</h1>
            <h3 class="slider-single-title">
            Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods and imprisoned just as quickly Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.
            </h3>
        </div>

        <div class="slider-single">
            <img class="slider-single-image" src="https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/jsoz1HlxczSuTx0mDl2h0lxy36l.jpg" alt="2" />
            <h1 class="slider-single-title">Through the Mountains</h1>
            <h3 class="slider-single-title">
        
            </h3>
        </div>

        <div class="slider-single">
            <img class="slider-single-image" src="https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/jsoz1HlxczSuTx0mDl2h0lxy36l.jpg" alt="3" />
            <h1 class="slider-single-title">Through the Mountains</h1>
            <h3 class="slider-single-title">
        
            </h3>
        </div>


        <div class="slider-single">
            <img class="slider-single-image" src="https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/jsoz1HlxczSuTx0mDl2h0lxy36l.jpg" alt="4" />
            <h1 class="slider-single-title">Through the Mountains</h1>
            <h3 class="slider-single-title">
        
            </h3>
        </div>


        <div class="slider-single">
            <img class="slider-single-image" src="https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/jsoz1HlxczSuTx0mDl2h0lxy36l.jpg" alt="5" />
            <h1 class="slider-single-title">Through the Mountains</h1>
            <h3 class="slider-single-title">
        
            </h3>
        </div>

        <div class="slider-single">
            <img class="slider-single-image" src="https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/jsoz1HlxczSuTx0mDl2h0lxy36l.jpg" alt="6" />
            <h1 class="slider-single-title">Through the Mountains</h1>
            <h3 class="slider-single-title">
        
            </h3>
        </div>
    </div>
</div>

    <!-- tool -->
    <div class="tool">
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>

        <nav class="menu">
            <ul class="menu-nav">
                <li class="nav-item  current">
                    <a href="#" class="nav-link" id="change-theme">
                        <i class="fas fa-adjust"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="change-font">
                        <i class="fas fa-font"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <!-- navigasi -->
    <div class="navbar">
        <div class="nav-logo">
            <h1 class="logo">Om-John</h1>
        </div>

        <div class="nav-menu-mid">
            <a href="../dist/index.html"><h3>Home</h3></a>
            <a href="../dist/catalogue.html"><h3>Catalogue</h3></a>
            <a href="../dist/faq.html"><h3>FAQ</h3></a>
        </div>

        <div class="nav-menu-right">
            <div class="nav-menu-right-cur">
                <a class="currency"><strong>Currency :</strong></a>
                <div class="nav-dropdown">
                    <button class="nav-drop-btn">USD</button>
                    <div class="nav-drop-cont">
                        <a class="currency-idr">IDR</a>
                        <a >EUR</a>
                        <a >AUD</a>
                    </div>
                </div>
            </div>
            <div class="nav-menu-right-icon">
                <a href="../dist/cart.html">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                </a>
                <a href="#" class= "signin-btn">
                    <i class="fas fa-user-circle fa-2x"></i>
                </a>
            </div>
        </div>
    </div> 

    <!-- hero -->
    <div class="hero">
        <div class="hero-image" style="background-image: url('../res/santiago-yanez-SmzQhQuv5Cg-unsplash.jpg');">
            <div class="hero-content">
                <h1 class="title">
                     Buku Om John
                </h1>
                <div class="hero-btn">
                    <p>Shop Now</p> <p>→</p>
                </div>
            </div>
        </div>
    </div>

   
<!-- intro -->
    <div class="intro">
        <div class="intro-left">
            <div class="intro-left-content">
                <div class="content-top">
                    <h1>
                        Toko paling keren
                    </h1>
                    <h2>
                        Lorem Ipsum
                    </h2>
                </div>
                <div class="content-bot">
                    <h2>Lorem ipsum dolor sit amet consecte<br>tur adipisicing elit. 
                        Debitis eos non ab  <br>is! Ipsa adipisci pariatur dolores nisi? <br>
                        Quas, et dolores vel expedita amet </h2>
                </div>
            </div>
            <div class="intro-button">
                <div>
                    <p>Get to know us</p> <p>→</p>
                </div>
            </div>
        </div>
        <div class="intro-right" style="background-image: url('../res/john-schnobrich-bNCKsUyQYmM-unsplash.jpg');">

        </div>
    </div>
<!-- txt banner -->
    <div class="text-banner">
        <h1>
            Best Seller 
        </h1>
    </div>
<!-- best seller -->
    <div class="best-seller">
        <div class="container">
            <div class="innerContainer">
                <div class="card">
                    <div class="imgBox">
                        <img src="../res/action2.jpg" alt="">
                    </div>
                    <div class="contentBox">
                        <div class="content">
                            <h3>
                                Title 1
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quas, perspiciatis delectus iusto quos consequatur veritatis a obcaecati vel esse. Maiores culpa labore impedit officia possimus enim voluptate animi doloremque.
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="btn">
                    <a class="harga">Rp.100000</a>
                    <a class="dummy-button">Add to cart</a>
                </div>
            </div>
            <div class="innerContainer">
                <div class="card">
                    <div class="imgBox">
                        <img src="../res/Buku.jpg" alt="">
                    </div>
                    <div class="contentBox">
                        <div class="content">
                            <h3>
                                Title 2
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quas, perspiciatis delectus iusto quos consequatur veritatis a obcaecati vel esse. Maiores culpa labore impedit officia possimus enim voluptate animi doloremque.
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="btn">
                    <a class="harga">Rp.100000</a>
                    <a>Add to cart</a>
                </div>
            </div>
            <div class="innerContainer">
                <div class="card">
                    <div class="imgBox">
                        <img src="../res/Buku.jpg" alt="">
                    </div>
                    <div class="contentBox">
                        <div class="content">
                            <h3>
                                Title 3
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quas, perspiciatis delectus iusto quos consequatur veritatis a obcaecati vel esse. Maiores culpa labore impedit officia possimus enim voluptate animi doloremque.
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="btn">
                    <a class="harga">Rp.100000</a>
                    <a>Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <div class="footer">
        <p><i class="fab fa-github"></i> <span> : </span> <a href="https://github.com/adityafjri/TubesIMK" target="_blank">Trace Our Work Here !</a></p>
        <p>Kelompok 10</p>
        <p>© Copyright 2021</p>
    </div>

    
    
    

</body>
<script>
    const popup = document.querySelector('.popup');
    const close = document.querySelector('#close');
    const overlay = document.querySelector('.overlay');
    // const signinbtn = document.querySelector('.signin-btn');
    // const signin = document.querySelector('.signin');
    // const signinpop = document.querySelector('.signinpop');
    // const exit = document.querySelector('#exit');

    window.onload = function(){
        setTimeout(function(){
            popup.style.display = "block";
            overlay.style.display = "block";
        }, 1000)
    }
    close.addEventListener('click',()=>{
        popup.style.display = "none";
        overlay.style.display = "none";
    })
    // signinbtn.onclick = function(){
    //     signin.style.display = "block";
    //     signinpop.style.display = "block";
    // }
    exit.onclick = function(){
        signin.style.display = "none";
        signinpop.style.display = "none";
    }

</script>
<script src="../dist/js/main.js"></script>
        
</html>