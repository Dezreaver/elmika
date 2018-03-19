<!-- Header -->
<?php
    $current = "representatives";
    include "includes/header.php";
?>

<!-- Body -->

<div id="main-content" class="container">

    <?php $countries = listRepresentatives(); ?>


    <div id="rep-button-block">
        <h2>Our Representatives</h2>
        <?php foreach ($countries as $country): ?>
            <p>
                <button class="btn btn-primary btn-block" type="button" data-toggle="collapse"
                        data-target="#<?= $country['name']; ?>"
                        aria-expanded="false" aria-controls="collapseExample">
                    <?= $country['name']; ?>
                </button>
            </p>
            <div class="collapse" id="<?= $country['name']; ?>">
                <div class="row">
                    <?php foreach ($country['reps'] as $rep): ?>
                        <div class="col-lg-4">
                            <div class="card card-body">
                                <?= $rep['info']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Footer -->
</div>
<?php include "includes/footer.php" ?>