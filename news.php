<!-- Header -->

<?php include "includes/header.php" ?>

<!-- Body -->
<div class="container">
    <h2>What's New</h2>
    <div class="row">
        <div class="col-sm-8">
            <?php $posts = printLatestNews("SELECT * FROM news", false); ?>
            <?php foreach($posts as $post): ?>
                <h3><?=$post['heading']; ?></h3>
                <p><?=$post['content']; ?></p>
            <?php endforeach; ?>
        </div>
        <div class="col-sm-3 offset-sm-1">
            <div class="sidebar-module">
                <h4>Latest Posts</h4>
                <ol class="list-unstyled">
                    <?php $sidePosts = printLatestNews("SELECT * FROM news LIMIT 10", false); ?>
                    <?php foreach($sidePosts as $sidePost): ?>
                    <li><a href="#"><?=$sidePost['heading']; ?></a></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->

<?php include "includes/footer.php" ?>
