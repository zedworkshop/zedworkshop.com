<?php snippet( 'head') ?>
<?php snippet( 'header') ?>

<main class="container" role="main">

    <div class="page-header">
        <h1><?php echo $page->title()->html() ?></h1>
    </div>

    <div class="row">
        <div class="[ col-xs-12 col-md-8 ]">

            <?php echo $page->text()->kirbytext() ?>

        </div>
    </div>

    <div class="[ row top-xs ] u-cushionTop">

        <?php snippet( 'projects') ?>

    </div>
</main>

<?php snippet( 'footer') ?>
