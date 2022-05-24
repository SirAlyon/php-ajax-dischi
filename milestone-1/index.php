<?php
require __DIR__ . '/db.php';
//var_dump($discs)
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PHP-AJAX-DISCHI</title>
</head>

<body>
    <header class="px-4">
        <img id="logo" src="https://brandlogos.net/wp-content/uploads/2021/12/spotify-brandlogo.net_.png" alt="">
    </header>
    <main>
        <div class="container mt-5">
            <div class="row g-4">
                <?php foreach ($discs as $disc) : ?>
                    <div class="col-c">
                        <div class="disc">
                            <div class="disc-img">
                                <img src="<?php echo $disc['poster'] ?>" alt="">
                            </div>
                            <div class="disc-body">
                                <h4 class="disc-title"><?php echo $disc['title'] ?></h4>
                                <div><?php echo $disc['author'] ?></div>
                                <div><?php echo $disc['year'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>