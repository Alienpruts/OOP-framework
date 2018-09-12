<?php
require_once APP_ROOT . '/views/inc/header.php';
?>

<h1><?php echo $data['title']; ?></h1>
<ul>
    <?php foreach ($data['posts'] as $post) : ?>
    <li><?php echo $post->title; ?></li>
    <?php endforeach; ?>
</ul>

<?php
require_once APP_ROOT . '/views/inc/footer.php';
?>