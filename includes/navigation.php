<nav class="navbar navbar-expand-md fixed-top navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/logo.gif" alt="Elmika Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">

                <?php
                    $navs = listNavigation();
                ?>

                <?php foreach($navs as $nav):?>

                        <a class="nav-item nav-link <?=($nav['title'] == $current) ? 'active' : ''; ?>" href="<?=$nav['link']; ?>"><?=$nav['title']; ?></a>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</nav>