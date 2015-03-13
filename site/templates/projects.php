<?php snippet( 'head') ?>
<?php snippet( 'header') ?>

<main class="container" role="main">

    <div class="page-header">
        <h1><?php echo $page->title()->html() ?></h1>
    </div>

    <div class="row">
        <div class="[ col-xs-12 col-md-8 ]">

            <?php echo $page->text()->kirbytext() ?>

            <hr />
        </div>
    </div>
</main>


<div class="container-full">
    <div class="row">

        <?php snippet( 'projects') ?>

    </div>
</div>

<?php snippet( 'footer') ?>
