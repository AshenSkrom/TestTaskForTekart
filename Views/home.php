<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический Вестник</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/reset.css">
</head>

<body>
    <?php include 'header/header.php'; ?>
    <main>
        <div class="last-news-container">
            <?php if ($lastNews) : ?>
                <div class="last-news" style='background-image:url("/images/<?php echo $lastNews['image']; ?>");'>
                    <h2 class="last-news-title"><?php echo $lastNews['title']; ?></h2>
                    <div class="last-news-announce"><?php echo $lastNews['announce']; ?></div>
                </div>
            <?php endif; ?>
        </div>

        <div class="middle-position">
            <div class="news-container">
                <div>
                    <h3 class="title-news">Новости</h3>
                </div>
                <div class="news-block">
                    <?php if ($news->num_rows > 0) : ?>
                        <?php while ($row = $news->fetch_assoc()) : ?>
                            <div class="news-item" onclick="location.href='/view_news?id=<?php echo $row['id']; ?>'">
                                <div class="news-date"><?php echo date("d.m.Y", strtotime($row['date'])); ?></div>
                                <h2 class="news-title"><?php echo $row['title']; ?></h2>
                                <p class="news-announce"><?php echo $row['announce']; ?></p>
                                <button class="custom-button" onclick="location.href='/view_news?id=<?php echo $row['id']; ?>'">Подробнее
                                    <img class="img-button img-display" src="MainIMG/ArrowR.png" alt="Подробнее">
                                    <img class="img-button img-hide" src="MainIMG/ArrowRew.png" alt="Подробнее">
                                </button>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>Нет новостей для отображения</p>
                    <?php endif; ?>
                </div>

                <div class="pagination">
                    <?php if ($page != 1) : ?>
                        <a class="arrow-button" href="?page=<?php echo $page - 1; ?>"><img src="MainIMG/ArrowL.png" alt="Next"></a>
                    <?php endif; ?>

                    <?php for ($i = $page_amount; $i > 0; $i--) : ?>
                        <?php if ($page - $i > 0) : ?>
                            <a class="pag-button" href="?page=<?php echo $page - $i; ?>"><?php echo $page - $i; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <span class="pag-button-active"><?php echo $page; ?></span>

                    <?php for ($i = 1; $i <= $page_amount; $i++) : ?>
                        <?php if ($page + $i <= $total_pages) : ?>
                            <a class="pag-button" href="?page=<?php echo $page + $i; ?>"><?php echo $page + $i; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($page != $total_pages) : ?>
                        <a class="arrow-button" href="?page=<?php echo $page + 1; ?>"><img src="MainIMG/ArrowR.png" alt="Next"></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>


    </main>
    <?php include 'footer/footer.php'; ?>
</body>

</html>