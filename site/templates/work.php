<?php snippet('header') ?>

<h2><?php echo $page->title()->html() ?></h2>

<?php foreach($page->children() as $project): ?>
  
  <h3><?php echo $project->title()->html() ?></h3>
    
  <a href="<?php  echo $project->url();?>">
    <?php foreach($project->images() as $image): ?>
      <?php  echo $image->crop(200, 200);?>
    <?php endforeach ?>
  </a>

<?php endforeach ?>

<?php snippet('footer') ?>