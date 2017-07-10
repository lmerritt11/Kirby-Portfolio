<?php snippet('header') ?>

<h2><?php echo $page->title()->html() ?></h2>


<?php foreach($page->images() as $image): ?>
  <?php  echo $image->resize(800);?>
<?php endforeach ?>

<p><?php echo $page->description() ?></p>

<span><?php echo date('Y-m-d', $page->date())?></span>





<?php snippet('footer') ?>