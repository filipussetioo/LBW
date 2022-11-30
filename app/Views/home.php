<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= view('template/header.php', ['css_dependencies' => ['']]) ?>
</head>

<body class="">
    <!-- popup -->
    <div class="title-bar">
        <div id="title">MovieKu</div>
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">Trending</a></li>
            <li><a href="#contact">Genre</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        <a class="account-button" data-modal="signin-modal">Make Account</a>
    </div>
    

    <!-- modal signin -->
    <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form action="/">
            <h2>Signin</h2>
            <div>
              <input class="email" type="text" name="name" placeholder="Email" />
              <input type="password" name="name" placeholder="Password" />

            <button type="submit" href="/">Submit</button>
          </form>
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