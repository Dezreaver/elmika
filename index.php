<!-- Header -->
<?php
    $current = "home";
    include "includes/header.php";
?>

<div id="main-content" class="container">


    <?php
    $query = "SELECT * FROM carousel";
    $carouselList = mysqli_query($connection, $query);

    $carouselItems = [];
    while($row = mysqli_fetch_assoc($carouselList)) {
        $carouselItems[] = [
            'id' => $row['item_id'],
            'image' => $row['item_image'],
            'heading' => $row['item_heading'],
            'description' => $row['item_description'],
            'prod_id' => $row['prod_id']
        ];
    }
    $current = "home";
    $count = 0;
    ?>

    <section id="carousel">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach($carouselItems as $carouselItem): ?>
                    <li data-target="#myCarousel" data-slide-to="<?=$carouselItem['id']; ?>"</li>
                <?php endforeach; ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php foreach($carouselItems as $carouselItem): ?>
                    <?php $count++; ?>
                    <div class="carousel-item <?=($count == 1) ? 'active' : ''; ?>">
                        <a href="product.php?p_id=<?=$carouselItem['prod_id'];?>">
                            <img class="d-block w-100" src="images/carousel/<?=$carouselItem['image']; ?>" alt="First slide">
                            <div class="row">
                                <div class="col-md-4 pull-left">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4><?=$carouselItem['heading']; ?></h4>
                                        <p><?=$carouselItem['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <div style="font-size:2em; color:rgba(48, 48, 48, 0.8);">
                    <i class="fa fa-chevron-left"></i>
                </div>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <div style="font-size:2em; color:rgba(48, 48, 48, 0.8);">
                    <i class="fa fa-chevron-right"></i>
                </div>
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

                <?php $posts = printLatestNews("SELECT * FROM news LIMIT 3", 'small'); ?>

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