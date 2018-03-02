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
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->

<?php include "includes/footer.php" ?>
