<!-- Header -->

<?php include "includes/header.php"; ?>

<!-- Navigation -->

<?php include "includes/navigation.php"; ?>

<div id="main-content" class="container">


    <section id="carousel">
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/carousel1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/carousel2.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="slogan">
            <h3 class="text-center"><i>Millimeter-Wave Measurement Instruments and Waveguide Components</i></h3>
        </div>

    </section>

    <section id="news">

        <div class="row">
            <div class="col-md-8">
                <div class="row">

                <?php

                    $query = "SELECT * FROM products";
                    $allProducts = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($allProducts)) {

                        $post_title = $row['post_title'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];

                ?>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/products/<?php echo $post_image; ?>" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#"><?php echo $post_title; ?></a>
                                </h4>
                                <p class="card-text"><?php echo $post_content; ?></p>
                            </div>
                        </div>
                    </div>


                <?php } ?>
                </div>
            </div>

            <?php include "includes/sidebar.php"?>

        </div>

    </section>

</div>

<!-- Footer -->

<?php include "includes/footer.php" ?>