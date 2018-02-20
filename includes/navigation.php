<?php include "includes/db.php"; ?>

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

                    while($row = mysqli_fetch_assoc($navItems)) {
                        $navTitle = $row['nav_title'];

                        echo "<a class=\"nav-item nav-link\" href=\"#\">{$navTitle}</a>";
                    }

                ?>

            </div>
        </div>
    </div>
</nav>