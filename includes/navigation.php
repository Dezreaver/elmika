<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
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
                    $query = "SELECT * FROM navigation";
                    $navItems = mysqli_query($connection, $query);

                    $rows = [];
                    while($row = mysqli_fetch_assoc($navItems)) {
                        $rows[] = [
                            'title' => $row['nav_title'],
                            'link' => $row['nav_link']
                        ];
                    }
                ?>

                <?php foreach($rows as $row):?>

                        <a class="nav-item nav-link" href="<?=$row['link']; ?>"><?=$row['title']; ?></a>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</nav>