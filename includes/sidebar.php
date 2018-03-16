<?php $sidePosts = printLatestNews("SELECT * FROM news LIMIT 10", 'medium'); ?>

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