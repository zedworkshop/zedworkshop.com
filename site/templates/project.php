<?php snippet( 'head') ?>
<?php snippet( 'header') ?>

<main class="main" role="main">

    <!-- Header content -->

    <div class="container">

        <div class="[ row top-md ] page-header">
            <div class="[ col-xs-12 col-md-6 ]">
                <h1 class="mb05"><?php echo $page->title()->html() ?></h1>
            </div>
            <div class="[ col-xs-12 col-md-6 ] omega-md">
                <p class="small font-bold text-mid mb05"><?php echo $page->tags() ?> / <?php echo $page->date('Y', 'year') ?></p>
                <p class="small font-bold mb0"><a href="<?php echo $page->website()->html() ?>">View site</a></p>
            </div>
        </div>

        <div class="row mb2">
            <div class="[ col-xs-12 col-md-6 ]">

                <h5>Project Details</h5>
                <p class="large"><?php echo $page->text() ?></p>

            </div>

            <div class="[ col-xs-12 col-md-6 ]">

            </div>
        </div>

    </div>

    <!--// Header content -->

    <!-- Website image -->
    <?php if($site_image = $page->images()->filterBy('filename', '*=', 'desktop-')->first()): ?>
    <div class="bg-grad u-oh">
        <div class="container [ u-padB0 ]">

            <div class="row">
                <div class="[ col-xs-12 ] align-center">

                    <figure class="browser">
                        <div class="browser-header">
                            <span class="browser-button browser-button--green"></span>
                            <span class="browser-button browser-button--yellow"></span>
                            <span class="browser-button browser-button--red"></span>
                        </div>
                        <img class="u-block" alt="<?php echo $page->title()->html() ?>" src="<?php echo $site_image->url() ?>" />
                    </figure>

                </div>
            </div>

        </div>
    </div>
    <?php endif ?>
    <!--// Website image -->

    <div class="container u-cushionTop">

        <!-- Ordered images -->
        <div class="row mb2">
            <div class="[ col-xs-12 ]">
                <?php if($image = $page->images()->filterBy('filename', '*=', '1-')->first()): ?>
                <figure>
                    <img src="<?php echo $image->url() ?>">
                </figure>
                <?php endif ?>
            </div>
        </div>

        <div class="row">
            <div class="[ col-xs-12 col-md-6 ]">
                <?php if($image = $page->images()->filterBy('filename', '*=', '2-')->first()): ?>
                <figure>
                    <img src="<?php echo $image->url() ?>">
                </figure>
                <?php endif ?>
            </div>

            <div class="[ col-xs-12 col-md-6 ]">
                <?php if($image = $page->images()->filterBy('filename', '*=', '3-')->first()): ?>
                <figure>
                    <img src="<?php echo $image->url() ?>">
                </figure>
                <?php endif ?>
            </div>
        </div>
        <!--// Ordered images -->

        <div class="row [ u-cushionTop u-cushionBottom ]">
            <div class="[ col-xs-12 col-md-8 col-md-offset-2 ] align-center">

                <blockquote>
                    <p class="[ huge font-bold mb05 ] text-customer-<?php echo $page->projectCode()->html()->lower() ?>"><?php echo $page->quote()->html() ?></p>
                    <p class="[ mb0 small font-bold ] text-customer-<?php echo $page->projectCode()->html()->lower() ?>"><?php echo $page->quoteAuthor()->html() ?></p>
                </blockquote>

            </div>
        </div>

        <div class="row">
            <div class="[ col-xs-12 col-md-4 col-md-offset-4 ]">

                <nav class="row" role="navigation">
                    <div class="col-xs-6">
                        <?php if($prev=$page->prevVisible()): ?>
                        <a class="font-bold text-mid" href="<?php echo $prev->url() ?>">&larr; previous</a>
                        <?php endif ?>
                    </div>
                    <div class="col-xs-6 omega-xs">
                        <?php if($next=$page->nextVisible()): ?>
                        <a class="font-bold text-mid" href="<?php echo $next->url() ?>">next &rarr;</a>
                        <?php endif ?>
                    </div>
                </nav>

                <div class="row u-cushionTop-lg">
                    <div class="col-xs-12 align-center">

                        <div class="u-inner-extra bg-tint">
                            <h4>Ready to start a project?</h4>
                            <p class="mb0"><a href="<?php echo $site->page('contact')->url() ?>" class="btn">Let's talk</a></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</main>

<?php snippet( 'footer') ?>
