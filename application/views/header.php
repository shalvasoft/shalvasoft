<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo IMG_ADDR;?>favicon.ico" type="image/x-icon" />
    <title><?=(isset($this->title)) ? $this->title : 'Shalvasoft'; ?></title>
    <link type="text/css" rel="stylesheet" media="screen" href="<?php echo CSS_ADDR; ?>default.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="<?php echo CSS_ADDR; ?>media.css" />
    <script type="text/javascript" src="<?php echo JS_ADDR; ?>jquery.js"></script>
    <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="'.$config['SITE_ADDR'].VIEW.$js.'"></script>';
            }
        }
    ?>
</head>
<body>
    <div id="container">
        <header>
            <div class="panel">
                <div class="logo">
                    <img class="logoimg" src="<?php echo IMG_ADDR;?>logo.png">
                </div>
            </div>
        </header>
        <main>
            <div>

