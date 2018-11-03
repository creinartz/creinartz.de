<?php snippet('header') ?>

    <main class="main" role="main">

        <div class="text">
            <h1><?php echo $page->title()->html() ?></h1>
            <?php echo $page->text()->kirbytext() ?>
        </div>

        <div class="teaser-list">
            <ul>
                <?php foreach(page()->children()->sortBy('date', 'desc') as $article): ?>
                    <li class="mb-2e">
                        <time class="block" datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('jS F, Y') ?></time>
                        <h2><a href="<?php echo $article->link() ?>"><?php echo $article->title()->html() ?></a></h2>
                        <span><?php echo $article->text()->kirbytext() ?></span>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>

<?php snippet('footer') ?>