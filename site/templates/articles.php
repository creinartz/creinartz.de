<?php snippet('header') ?>

    <main class="main" role="main">

        <div class="text">
            <h1><?php echo $page->title()->html() ?></h1>
            <?php echo $page->text()->kirbytext() ?>
        </div>

        <div class="teaser-list">
            <ul>
                <?php foreach(page()->children()->sortBy('date', 'desc') as $article): ?>
                    <li>
                        <h3><?php echo $article->title()->html() ?></h3>
                        <p><?php echo $article->text()->kirbytext() ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>

<?php snippet('footer') ?>