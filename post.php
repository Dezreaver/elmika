<!-- Header -->
<?php
    $current = "news";
    include "includes/header.php";
?>

<!-- Body -->
<?php
if (isset($_GET['p_id'])) {
    $news_id = $_GET['p_id'];
}

$selectedPost = printLatestNews("SELECT * FROM news WHERE news_id = $news_id", 'full');
?>

<div id="main-content" class="container">
    <?php foreach($selectedPost as $post): ?>
        <div class="row">
            <div class="col-md-8">
                <h3><?=$post['heading']; ?></h3>
                <p><?=nl2br($post['content']); ?></p>
            </div>
            <?php include "includes/sidebar.php"; ?>
        </div>
    <?php endforeach; ?>
</div>

<!-- Footer -->

<?php include "includes/footer.php" ?>