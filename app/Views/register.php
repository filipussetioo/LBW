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
 <div class="register-container" id="register-container"></div>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
<form method="POST" action="<?= base_url(); ?>/register/process">
<?= csrf_field(); ?>
<div class="register">
  <div class="register-container">
    <div class="register-left">
      <p class="register-desc">Fill your data to register.</p>
      <div class="input-block">
        <label for="username" class="input-label">Username</label>
        <input type="text" name="username" id="username" placeholder="username">
      </div>
      <div class="input-block">
        <label for="password" class="input-label">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>
      <div class="input-block">
        <label for="password_conf" class="input-label">Password</label>
        <input type="password" name="password_conf" id="password_conf" placeholder="Password">
      </div>
      <div class="input-block">
        <label for="name" class="input-label">Name</label>
        <input type="text" name="name" id="name" placeholder="name">
      </div>
    </div>
  </div>
  <button type="submit" class="register-button">Click here to register</button>
</div>
</html>