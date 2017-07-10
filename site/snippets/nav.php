<nav>
  <ul>
  <?php foreach($site->children()->visible() as $sitepages):?>
    <a href="<?php echo $sitepages->url() ?>">
      <li><?php echo $sitepages->title() ?></li>
    </a>
  <?php endforeach ?>  
  </ul>
</nav>