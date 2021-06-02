<?php include_once"config.php";?>
<html>
    <body>
    <?php
    $news_query = "SELECT * FROM news";
    $news_data = mysqli_query($conn, $news_query);
    $news_array = mysqli_fetch_array($news_data);
    $news_title = $news_array["title"];
    $news_description = $news_array["description"];
    $news_link = $news_array["link"];
    mysqli_close($conn);
    ?>
    </body>
</html>