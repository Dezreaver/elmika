<!-- Header -->

<?php include "includes/header.php" ?>

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

$paginationArr = newsPagination($page);
$pageStart = $paginationArr[0];
$newsCount = $paginationArr[1];
?>

<!-- Body -->
<div class="container">
    <h2>What's New</h2>
    <div class="row">
        <div class="col-sm-8">
            <?php $posts = printLatestNews("SELECT * FROM news LIMIT $pageStart, 5", 'medium'); ?>
            <?php foreach ($posts as $post): ?>
                <h3><?= $post['heading']; ?></h3>
                <p><?= $post['content']; ?></p>
                <a class="btn btn-primary" href="post.php?p_id=<?=$post['id'];?>" role="button">Read More</a>
            <?php endforeach; ?>
        </div>
        <div class="col-sm-3 offset-sm-1">
            <div class="sidebar-module">
                <h4>Latest Posts</h4>
                <ol class="list-unstyled">
                    <?php $sidePosts = printLatestNews("SELECT * FROM news LIMIT 10", 'medium'); ?>
                    <?php foreach ($sidePosts as $sidePost): ?>
                        <li><a href="post.php?p_id=<?=$sidePost['id'];?>"><?= $sidePost['heading']; ?></a></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php for ($i = 1; $i <= $newsCount; $i++): ?>
                <li class="page-item">
                    <a class="<?= ($i == $page) ? 'page-link active-link' : 'page-link'; ?>"
                       href="news.php?page=<?= $i; ?>"><?= $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

<!-- Footer -->

<?php include "includes/footer.php" ?>
