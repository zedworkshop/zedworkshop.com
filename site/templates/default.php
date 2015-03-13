<?php snippet( 'head') ?>
<?php snippet( 'header') ?>

<main class="container" role="main">
    <div class="row">

        <div class="[ col-xs-12 col-md-8 ]">
            <h1><?php echo $page->title()->html() ?></h1>
            <?php echo $page->text()->kirbytext() ?>

            <hr />
        </div>

    </div>
</main>

<?php snippet( 'footer') ?>