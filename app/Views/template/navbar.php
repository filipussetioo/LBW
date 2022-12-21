<div class="title-bar">
    <h3 id="title">MovieKu</h3>
        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="#news">Detail</a></li>
            <li><a href="#contact">Genre</a></li>
            <li><a href="/watchlist">Watchlist</a></li>
        </ul>
        <?php if (empty(session()->get('name'))): ?>
            <a class="account-button" data-modal="signin-modal">Login / Register</a>
        <?php else:?>

        <ul>
            <li><a class="account-button session" ><?= strtoupper(session()->get('name')) ?></a></li>
            <li><a style="color: white;" href="<?= base_url(); ?>/home/logout"><i class="fa-solid fa-right-from-bracket"></i></a></li>
        </ul>
        <?php endif;?>
</div>
