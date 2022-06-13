<?php namespace View;
    $template = new Template();
    class Template{
        public function __construct()
        {
            ?>
            <!doctype html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>U-Play Test</title>
                <meta name="author" content="Guillermo Serraclara">

                <link rel="stylesheet" href="<?php echo URL; ?>/View/css/bootstrap.min.css">

            </head>

            <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo URL; ?>">Uplay Test</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL; ?>/Employees/add">Add Employee</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php
        }
        public function __destruct()
        {
            ?>
            </body>
            </html>
            <?php
        }
    }
?>