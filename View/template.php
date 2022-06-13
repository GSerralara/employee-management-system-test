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