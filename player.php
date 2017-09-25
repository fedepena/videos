<?php require __DIR__ . '/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="<?= $video['lang']; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $video['desc']; ?>">
        <title>
            <?= $video['title']; ?>
        </title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:600|Quattrocento+Sans:400">
        <!-- Bootstrap core CSS -->
        <link href="../help/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link href="player.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../js/km.js"></script>
        <script type="text/javascript" src="../help/js/drift-<?= $video['lang']; ?>.js"></script>
    </head>
    <body>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <h1><?= $video['title']; ?></h1>
                </div>
                <?php if ($next = $video->next()) : ?>
                    <div class="col-md-3 text-right col-sm-3">
                        <h3><a href="<?= $next->slug; ?>"><?= $next->translate(); ?></a></h3>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $video['id']; ?>?autoplay=1&rel=0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h2><?= $video['desc']; ?></h2>
                </div>
            </div>
        </div>
        <script src="../help/assets/js/jquery.min.js"></script>
        <script src="../help/bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../help/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
