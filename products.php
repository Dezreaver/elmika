<!-- Header -->

<?php include "includes/header.php" ?>

<?php $results = allProductsLogic('SELECT * FROM products'); ?>

<!-- Body -->

<div id="main-content" class="container">

    <div class="row">
        <?php foreach ($results as $result): ?>
            <div class="col-md-4">
                <a href="product.php?p_id=<?=$result['id'];?>">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="images/products/<?=$result['images'][0]['content'];?>" alt="Card image cap">
                        <div class="card-body">
                            <p><?= $result['title']; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- Footer -->

<?php include "includes/footer.php" ?>