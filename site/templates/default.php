<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>
<span><?php echo $page->text()->html() ?></span>
<p><?php echo $page->description()->html() ?></p>

<?php snippet('footer') ?>