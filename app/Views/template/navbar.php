<div class="title-bar">
    <h3 id="title">MovieKu</h3>
        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="#news">Detail</a></li>
            <li><a href="#contact">Genre</a></li>
            <li><a href="/watchlist">Watchlist</a></li>
        </ul>
        <?php if (session()->get('name') == ""): ?>
            <a class="account-button" data-modal="signin-modal">Login / Register</a>
        <?php else:?>
            <a class="account-button" ><?= strtoupper(session()->get('name')) ?></a>
        <?php endif;?>
</div>
