<?php snippet('header') ?>

    <main class="main" role="main">
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
        <div class="teaser-list">
            <ul>
                <?php foreach(page()->children()->sortBy('date', 'desc') as $blog): ?>
                    <li>
                        <h3><a href="<?php echo $blog->url() ?>"><?php echo $blog->title()->html() ?></a></h3>
                        <p><?php echo $blog->text()->kirbytext()->short(350) ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>

<?php snippet('footer') ?>