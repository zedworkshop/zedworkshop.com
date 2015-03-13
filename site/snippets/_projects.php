<?php $n=0; foreach(page('projects')->children()->visible()->limit(4) as $project): $n++ ?>

<div class="[ col-xs-12 ] mb2">

    <div class="row middle-xs">
        <div class="[ col-xs-12 col-sm-5 <?php echo ($n%2) ? ' col-md-offset-1 ' : '' ?>]">

            <?php if($featured = $project->images()->filterBy('filename', '*=', 'featured-')->first()): ?>
            <figure class="mb05">
                <a href="<?php echo $project->url() ?>">
                    <img src="<?php echo $featured->url() ?>" alt="<?php echo $project->title()->html() ?>" />
                </a>
            </figure>
            <?php endif ?>

        </div>

        <div class="[ col-xs-12 col-sm-6 ]<?php echo ($n%2) ? '' : ' [ first-sm omega-sm ]' ?>">

            <div class="content">
                <h4 class="font-bold mb0"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h4>
                <p class="small text-mid">
                    <?php echo $project->tags() ?></p>

                <p class="mb1">
                    <?php echo $project->summary()->html() ?></p>

                <p class="small mb0"><a href="<?php echo $project->url() ?>">View this project &raquo;</a>
                </p>
            </div>

        </div>
    </div>

</div>

<?php endforeach ?>