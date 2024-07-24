<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический Вестник</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/style_det.css">
</head>

<body>
    <?php include 'header/header.php'; ?>
    <main>
        <a class="navigation" href="/">Главная / </a> <?php echo $news['title']; ?>
        <div class="main-title"> <?php echo $news['title']; ?> </div>
        <div class="view-date"> <?php echo date("d.m.Y", strtotime($news['date'])); ?> </div>
        <div class="view-main-content">
            <figure class="figure-content">
                <img class="view-img" src="/images/<?php echo $news['image']; ?>">
                <figcaption class="fig-left">
                    <div class="view-announce"> <?php echo $news['announce']; ?> </div>
                    <div class="view-content"> <?php echo $news['content']; ?> </div>
                </figcaption>
            </figure>
        </div>
        <div class="button-back">
            <a class="view-button" href="/">
                <img class="img-button img-display" src="MainIMG/ArrowL.png">
                <img class="img-button img-hide" src="MainIMG/ArrowLRew.png">
                <div>Назад к новостям</div>
            </a>
        </div>
    </main>
    <?php include 'footer/footer.php'; ?>
</body>

</html>