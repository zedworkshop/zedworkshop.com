<?php snippet('head') ?>

<header class="container-full [ u-padR0 u-padB0 u-pr mb1 ] hero-container" role="banner">

    <div class="sitebrand">
        <a href="<?php echo url() ?>"><img alt="<?php echo $site->title()->html() ?>" src="<?php echo url('assets/images/logo-text-w.png') ?>" /></a>
    </div>

    <?php snippet( 'menu') ?>

    <div class="row [ mb0 mr0 ]">
        <div class="[ col-xs-12 col-lg-11 col-lg-offset-1 ] hero u-pr">
            <div class=" hero-title">
                <p class="[ h4 text-white font-bold ]">
                    <?php echo $site->description()->html() ?></p>
            </div>

            <p class="[ small ] hero-credit">Credit: <a href="https://unsplash.com/jfelise">Josh Felise</a>
            </p>
        </div>
    </div>

</header>

<main class="container">

    <div class="[ row bottom-xs ] u-cushionBottom-sm home-intro">

        <div class="[ col-xs-12 col-sm-8 col-md-9 ] home-intro__a">
            <h1>We believe great design produces great experiences, which in turn encourages interaction, satisfaction, and reaction.</h1>
        </div>

        <aside class="[ col-xs-12 col-sm-4 col-md-3 ] home-intro__b">
            <h6 class="mb05">Ready to start a project?</h6>
            <p class="mb05"><a href="<?php echo $site->page('contact')->url() ?>" class="btn btn-sm">Contact us</a>
            </p>
            <p class="small mb0"><a class="font-bold muted" href="<?php echo $site->page('projects')->url() ?>">View our work &rarr;</a>
            </p>
        </aside>

    </div>

    <div class="row">
        <div class="[ col-xs-12 col-md-6 ]">

            <h4 class="text-alt">Web design &amp; development</h4>
            <p class="large">We design and build responsive and attractive websites and web applications that help you acheieve your business goals. From initial dreaming and strategy, to design and development, and finally to launch.... </p>

        </div>

        <div class="[ col-xs-12 col-md-6 ]">

            <h4 class="text-alt">Brand Strategy</h4>
            <p class="large">Every great design project is informed by a brand strategy. Some of our clients have them; others don’t. We work with you, if you need it, to determine the state of your industry & market, as well as your client psychographics, in order to position your brand for success.</p>

        </div>
    </div>


    <hr class="mb2" />

</main>

<div class="container-full">

    <div class="[ row ] home-work">
        <div class="col-xs-12">

            <h2 class="align-center mb2">Our Work</h2>

            <div class="row">

                <?php snippet( 'projects') ?>

            </div>

            <p class="align-center mt1 mb0">
                <a href="<?php echo $site->page('projects')->url() ?>" class="btn btn-dark">View more projects</a>
            </p>

        </div>

    </div>

</div>

<div class="container">

    <hr />

    <div class="[ row ] home-team">

        <div class="[ col-xs-12 ] align-center">

            <div class="align-center">
                <h3 class="h2">Who We Are</h3>
            </div>

            <p class="large">Zed Workshop is a small, hard-working studio based in Huntsville, Alabama, but serving clients all over the world.</p>

            <p class="mb0"><a href="<?php echo $site->page('contact')->url() ?>" class="btn btn-sm">Say hello</a>
            </p>

            <hr class="mini" />

            <blockquote>
                <p class="huge mb05 text-alt"><?php echo $page->quote()->html() ?></p>
                <p class="mb0 small font-bold text-mid"><?php echo $page->quoteAuthor()->html() ?></p>
            </blockquote>

            <hr class="mini" />

            <div class="[ row align-center middle-xs ] home-clients">
                <div class="[ col-xs-6 col-md-2 ]">
                    logo
                </div>

                <div class="[ col-xs-6 col-md-2 ]">
                    logo
                </div>

                <div class="[ col-xs-6 col-md-2 ]">
                    logo
                </div>

                <div class="[ col-xs-6 col-md-2 ]">
                    logo
                </div>

                <div class="[ col-xs-6 col-md-2 ]">
                    logo
                </div>

                <div class="[ col-xs-6 col-md-2 ]">
                    logo
                </div>

            </div>

        </div>
    </div>

</div>

<?php snippet('footer') ?>
