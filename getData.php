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

    $about_query = "SELECT * FROM about";
    $about_data = mysqli_query($conn, $about_query);
    $about_array = mysqli_fetch_array($about_data);
    $about_title = $about_array["title"];
    $about_description = $about_array["description"];
    
    $first_prevention_query = "SELECT * FROM preventions WHERE id = 1";
    $first_prevention_data = mysqli_query($conn, $first_prevention_query);
    $first_prevention_array = mysqli_fetch_array($first_prevention_data);
    $first_prevention_title = $first_prevention_array["nome"];

    $second_prevention_query = "SELECT * FROM preventions WHERE id = 2";
    $second_prevention_data = mysqli_query($conn, $second_prevention_query);
    $second_prevention_array = mysqli_fetch_array($second_prevention_data);
    $second_prevention_title = $second_prevention_array["nome"];

    $third_prevention_query = "SELECT * FROM preventions WHERE id = 3";
    $third_prevention_data = mysqli_query($conn, $third_prevention_query);
    $third_prevention_array = mysqli_fetch_array($third_prevention_data);
    $third_prevention_title = $third_prevention_array["nome"];
    
    mysqli_close($conn);
    ?>
    </body>
</html>