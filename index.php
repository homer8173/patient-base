<?php
include 'includes/application/application_top.php';
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <title>Application Praticien</title>
        <base href="<?= $start_url ?>" />
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <header class="row">
                <?php include 'includes/content/navbar.php'; ?>
            </header>
            <div class="row info">
                <?php if (isset($success)) { ?><div class="alert alert-success" role="alert"><?php
                    foreach ($success as $value) {
                        echo "<div>$value</div>";
                    }
                    ?></div><?php } ?>
                <?php if (isset($info)) { ?><div class="alert alert-info" role="alert"><?php
                    foreach ($info as $value) {
                        echo "<div>$value</div>";
                    }
                    ?></div><?php } ?>
                <?php if (isset($warning)) { ?><div class="alert alert-warning" role="alert"><?php
                    foreach ($warning as $value) {
                        echo "<div>$value</div>";
                    }
                    ?></div><?php } ?>
                <?php if (isset($error)) { ?><div class="alert alert-danger" role="alert"><?php
                        foreach ($error as $value) {
                            echo "<div>$value</div>";
                        }
                        ?></div><?php } ?>
            </div>
            <?php
            if (!in_array($page, $knownpage))
                $page = "default";
            include "includes/page/$page.php";
            ?>
            <footer>
                <?php
                include "includes/content/footer.php";
                ?>
            </footer>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/fullscreen.js"></script>
        <script>$(document).bind("fullscreenerror", function () {
                alert("Browser rejected fullscreen change");
            });</script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <?php
        if (file_exists("js/page/$page.js")) {
            echo '<script>';
            require "js/page/$page.js";
            echo '</script>';
        }
        ?>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>