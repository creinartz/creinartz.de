<?php foreach(page('talks')->children()->visible()->limit(25) as $project): ?>
  <a href="<?php echo $project->url() ?>" class="ar-box ar-box--extra-wide mb-24 fullsizebg block" style="background-image: <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>url('<?php echo $image->url() ?>')<?php endif ?>">
    <div class="ar-box__source teaser-box">
      <h3><?php echo $project->title()->html() ?></h3>
    </div>
  </a>
<?php endforeach ?>