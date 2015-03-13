<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/plain" rel="author" href="humans.txt" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <title><?php echo $site->title()->html() ?> &middot; <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <?php echo css( 'assets/styles/main.css') ?>
    <?php echo js( 'assets/scripts/init.js') ?>

    <script src="//use.typekit.net/ocf6slo.js"></script>
    <script>
    try {
        Typekit.load();
    } catch (e) {}
    </script>
</head>

<body>