<!-- views/layout/default.php -->
<!DOCTYPE html>
<html>
    <head>
        <title><?= APP_NAME; ?></title>
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?c=home&a=index">Estufa Garden</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?c=home&a=index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?c=greenhouse&a=index">GreenHouse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?c=sensor&a=index">Sensores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?c=reading&a=index">Leituras</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <?php require_once($viewPath); ?>

        <script type="text/javascript" src="public/js/bootstrap.js"></script>
    </body>
</html>