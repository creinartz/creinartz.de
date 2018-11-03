<div class="teaser-list">
  <ul>
    <?php foreach(page('talks')->children()->visible()->limit(25) as $project): ?>
    <li class="mb-15e">  
      <time class="block" datetime="<?php echo $project->date('c') ?>"><?php echo $project->date('jS F, Y') ?></time>
      <h3 class="mb-0">
        <a href="<?php echo $project->url() ?>">
          <?php echo $project->title()->html() ?>
        </a>
      </h3>
      <small class="block"><?php echo $project->location() ?></small>
    </li>  
    <?php endforeach ?>
  </ul>
</div>