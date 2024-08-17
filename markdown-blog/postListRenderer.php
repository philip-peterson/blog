<?php
    require_once 'postRenderer.php';

    $posts = getPostsList();
    $posts = array_reverse($posts, true);
    foreach ($posts as $key => $post) {
        $titleAndSummary = getFirstLines($post['markdown'], 3);
        $titleAndSummary = addTitleHref($titleAndSummary, $post['slug']);
?>
    <div class="blog-post">
        <?php echo renderMarkdown($titleAndSummary); ?>
        <a href="/post/<?php echo $post['slug'] ?>">Read post</a>
    </div>
<?php }?>
