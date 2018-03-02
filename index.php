<!-- Header -->

<?php include "includes/header.php"; ?>

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
        <h2>Latest News</h2>
        <div class="row">
            <div class="col-md-12">

                <?php $posts = printLatestNews("SELECT * FROM news LIMIT 3", true); ?>

                <div class="row">
                    <?php foreach($posts as $post):?>
                        <div class="col-lg-4">
                            <h3>
                                <?=$post['heading']; ?>
                            </h3>
                            <p>
                                <?=$post['content']; ?>
                            </p>
                            <a class="btn btn-primary" href="#" role="button">
                                Read More &raquo;
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="about_us">
        <h2>About Us</h2>
        <p>Elmika was established in 1993 as a joint stock company.</p>
        <p>
            Elmika is research and development organization which develops electronic measurement instruments,
            components and systems for microwave, millimeter and sub-millimeter (THz) wave frequency ranges,
            including signal generators, scalar and vector network analyzers, power meters, frequency meters,
            direct reading attenuators, frequency converters for spectrum analyzers, waveguide components and
            antennas for wireless applications.
        </p>
        <p>
            Elmika main power is the team of 60 employees including 25 scientists and research engineers,
            who have 10-30 year experience in millimeter wave technology.
        </p>
        <p>
            Elmika provides integration and test services to match individual customer need. Complete turnkey
            systems including installation services are offered. Custom design measurement and communication
            sub-systems and components are designed, developed, and manufactured.
        </p>
    </section>

</div>

<!-- Footer -->

<?php include "includes/footer.php" ?>