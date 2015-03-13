<?php snippet( 'head') ?>
<?php snippet( 'header') ?>

<main class="main" role="main">

    <div class="container u-padB0">

        <div class="[ row top-md ] page-header">
            <div class="[ col-xs-12 col-md-6 ]">
                <h1 class="mb05"><?php echo $page->title()->html() ?></h1>
            </div>
            <div class="[ col-xs-12 col-md-6 ] omega-md">
                <p class="small font-bold text-mid mb05"><?php echo $page->tags() ?> / 2010 &mdash; 2015</p>
                <p class="small font-bold mb0"><a href="<?php echo $page->website()->html() ?>">View site</a></p>
            </div>
        </div>

        <div class="row">
            <div class="[ col-xs-12 ]">
                <p class="large"><?php echo $page->text() ?></p>
            </div>
        </div>

        <div class="row u-cushionTop-sm">
            <div class="[ col-xs-12 ] align-center">

                <?php if($image=$page->images()->sortBy('sort', 'asc')->first()): ?>
                <img class="u-block" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" />
                <?php endif ?>

            </div>
        </div>
    </div>

    <div class="container-full">

        <div class="row mb2 bg-customer-<?php echo $page->projectCode()->html()->lower() ?>">
            <div class="[ col-xs-12 col-md-6 col-md-offset-3 ] [ u-inner-extra u-cushionTop-sm u-cushionBottom-sm ] align-center">

                <blockquote>
                    <p class="huge mb05 text-white font-bold"><?php echo $page->quote()->html() ?></p>
                    <p class="mb0 small font-bold text-white"><?php echo $page->quoteAuthor()->html() ?></p>
                </blockquote>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row mb2">
            <div class="[ col-xs-12 ]">
                <img src="http://placehold.it/800x600">
            </div>
        </div>

        <div class="row">
            <div class="[ col-xs-12 col-md-6 ]">
                <img src="http://placehold.it/800x600">
            </div>

            <div class="[ col-xs-12 col-md-6 ]">
                <img src="http://placehold.it/800x600">
            </div>
        </div>

        <div class="row">
            <div class="[ col-xs-12 col-md-4 col-md-offset-4 ] u-cushionTop-sm">

                <hr />

                <nav class="row" role="navigation">
                    <div class="col-xs-6">
                        <?php if($prev=$page->prevVisible()): ?>
                        <a class="large" href="<?php echo $prev->url() ?>">&larr; previous</a>
                        <?php endif ?>
                    </div>
                    <div class="col-xs-6 omega-xs">
                        <?php if($next=$page->nextVisible()): ?>
                        <a class="large" href="<?php echo $next->url() ?>">next &rarr;</a>
                        <?php endif ?>
                    </div>
                </nav>

                <hr />

                <div class="row">
                    <div class="col-xs-12 u-cushionTop align-center">

                        <h4>Ready to start a project?</h4>
                        <p><a href="<?php echo $site->page('contact')->url() ?>" class="btn">Let's talk</a></p>

                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- <div class="page-header">
        <h1><?php echo $page->title()->html() ?></h1>

        <ul class="meta cf">
            <li><b>Year:</b>
                <time datetime="<?php echo $page->date('c') ?>">
                    <?php echo $page->date('Y', 'year') ?></time>
            </li>
            <li><b>Tags:</b>
                <?php echo $page->tags() ?></li>
        </ul>
    </div>

    <div class="row">
        <div class="[ col-xs-12 ]">
            <?php echo $page->text()->kirbytext() ?>

            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <figure>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
            </figure>
            <?php endforeach ?>

            <nav class="nextprev cf" role="navigation">
                <?php if($prev=$page->prevVisible()): ?>
                <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
                <?php endif ?>
                <?php if($next=$page->nextVisible()): ?>
                <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
                <?php endif ?>
            </nav>

        </div>

    </div> -->

</main>

<?php snippet( 'footer') ?>
