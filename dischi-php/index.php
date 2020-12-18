<?php
    include __DIR__ . '/dischi.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../dist/app.css">
    </head>
    <body>
        <div id="wrapper">
            <nav>
                
            </nav>

            <main>
                <div class="container">
                    <?php
                        foreach($dischi as $disco) { ?>
                            <div class="card">
                                <div class="img">
                                    <img src=" <?php echo $disco["poster"]; ?> " alt="">
                                </div>
                                <p> <?php echo $disco["title"] ?> </p>
                                <p> <?php echo $disco["author"] ?> </p>
                                <p> <?php echo $disco["genre"] ?> </p>
                                <p> <?php echo $disco["year"] ?> </p>
                            </div>
                        <?php
                        }
                        ?>
                </div>
            </main>
        </div>

    </body>
</html>
