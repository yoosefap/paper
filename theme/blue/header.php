<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="<?php echo $_app ?>dist/pinoox.js"></script>
    <link rel="stylesheet" href="<?php echo $_url ?>dist/main.css">
    <title><?php echo $siteTitle ?> <?php if(!empty($_title)) echo '- '.$_title?></title>
    <meta property="og:title" content="<?php echo $siteTitle ?> <?php if(!empty($_title)) echo '- '.$_title?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="<?php echo $_description; ?>"/>
    <meta property="og:url" content="<?php echo url(); ?>"/>
    <meta property="og:site_name" content="<?php echo $siteTitle ?>"/>
    <meta name="description" content="<?php echo $_description; ?>"/>
    <link rel="canonical" href="<?php echo url(); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $siteTitle ?> <?php if(!empty($_title)) echo '- '.$_title?>" />
    <meta property="og:description" content="<?php echo $_description; ?>" />
    <meta property="og:url" content="<?php echo url(); ?>" />
    <meta property="og:image" content="<?php echo $_url; ?>dist/images/icon-paper.png" />
    <meta property="og:site_name" content="<?php echo $siteTitle ?> <?php if(!empty($_title)) echo '- '.$_title?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?php echo $_description; ?>" />
    <meta name="twitter:title" content="<?php echo $siteTitle ?> <?php if(!empty($_title)) echo '- '.$_title?>" />
    <meta name="robots" content="index, follow">

</head>

<body class="<?php echo @$_direction; ?>">

<div class="search-modal animated faster fadeIn">
    <div class="container">
        <form action="<?php echo $_app ?>search/" method="get">
            <i id="close-search" class="fa fa-times"></i>
            <input name="q" class="input-search" type="search"
                   placeholder="<?php lang('front.searching_for_what_write_down_here'); ?>">
        </form>
    </div>
</div>
<div class="header">
    <div class="drawer-menu"><i class="fas fa-bars"></i></div>
    <div class="logo">
        <a href="<?php echo $_app; ?>">
            <img src="<?php echo $_url ?>dist/images/icon-paper.png" alt="logo">
            <div class="title">
                <h1><?php echo $siteTitle; ?></h1>
                <h2><?php echo $siteDesc; ?></h2>
            </div>
        </a>
    </div>
    <div class="menu">
        <?php if (isset($primaryMenu) && !empty($primaryMenu)) { ?>
            <?php foreach ($primaryMenu as $menu) { ?>
                <a href="<?php echo empty($menu['link']) ? $_app : $menu['link']; ?>">
                    <?php echo !empty($menu['icon']) ? "<i class='" . $menu['icon'] . "'></i>" : ""; ?>
                    <?php echo $menu['title']; ?>
                </a>
            <?php } ?>
        <?php } ?>
    </div>
    <div class="left-side">
        <a href="<?php echo $_app ?>contact" class="action-item"><i class="fa fa-phone"></i></a>
        <span id="ic-search" class="action-item"><i class="fa fa-search"></i></span>
        <a href="<?php echo $_app ?>panel/account" id="ic-login" class="action-item"><i
                    class="fa fa-user<?php echo isLoggedIn() ? '-cog' : ''; ?>"></i></a>
    </div>
</div>
<div class="mini-menu">
    <?php if (isset($primaryMenu) && !empty($primaryMenu)) { ?>
        <?php foreach ($primaryMenu as $menu) { ?>
            <a href="<?php echo empty($menu['link']) ? $_app : $menu['link']; ?>">
                <?php echo !empty($menu['icon']) ? "<i class='" . $menu['icon'] . "'></i>" : ""; ?>
                <?php echo $menu['title']; ?>
            </a>
        <?php } ?>
    <?php } ?>
</div>
<div class="overlay"></div>