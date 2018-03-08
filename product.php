<!-- Header -->

<?php include "includes/header.php" ?>

<!-- Body -->

<?php
if (isset($_GET['p_id'])) {
    $prod_id = $_GET['p_id'];
}

$results = allProductsLogic("SELECT * FROM products WHERE prod_id = $prod_id");
?>

<div id="main-content" class="container">

    <?php foreach ($results as $result): ?>
        <div class="row">
            <div class="col-md-7">
                <h3><?= $result['title']; ?></h3>
                <p><?= $result['content']; ?></p>
            </div>
            <div class="col-md-5">
                <div class="main-img">
                    <?php if ($result['images'][0]['content']): ?>
                        <img src="images/products/<?= $result['images'][0]['content']; ?>" id="current">
                    <?php else: ?>
                        <?= "Image not found"; ?>
                    <?php endif; ?>
                </div>
                <div class="imgs">
                    <?php foreach ($result['images'] as $image): ?>
                        <img src="images/products/<?= $image['content']; ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <h3>Variations</h3>
        <div class="row">
            <?php foreach ($result['variants'] as $variant): ?>
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary"
                            data-toggle="modal" data-target="#<?= str_replace(' ', '', $variant['title']); ?>">
                        <?= $variant['title']; ?>
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="<?= str_replace(' ', '', $variant['title']); ?>" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><?= $variant['title']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><?= $variant['content']; ?></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>


<!-- Footer -->

<?php include "includes/footer.php" ?>