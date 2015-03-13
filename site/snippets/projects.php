<?php
$n=0;
$limit = $page->isHomePage() ? 3 : 100;
foreach(page('projects')->children()->visible()->limit($limit) as $project): $n++ ?>

<div class="[ col-xs-12 col-sm-6 col-lg-4 ]">

    <?php if($featured=$project->images()->filterBy('filename', '*=', 'featured-')->first()): ?>
    <figure class="mb05">
        <a href="<?php echo $project->url() ?>">

            <?php if($page->isHomePage()): ?>
            <img src="<?php echo $featured->url() ?>" alt="<?php echo $project->title()->html() ?>" />
            <?php else: ?>
            <img src="<?php echo thumb($featured, ['width' => 305])->url() ?>" alt="<?php echo $project->title()->html() ?>" />
        <?php endif ?>
        </a>
    </figure>
    <?php endif ?>

    <div class="content">
        <h5 class="mb0"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h5>
        <p class="small text-mid"><?php echo $project->tags() ?></p>
    </div>

</div>

<?php endforeach ?>