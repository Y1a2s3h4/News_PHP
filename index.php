<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News App using Api</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand text-white" href="#">News App</a>
  </div>
</nav>

    <?php
        $url='http://newsapi.org/v2/top-headlines?country=in&apiKey=4f0ed34c2436488fbea43a2b2255489e';
        $response = file_get_contents($url);
        $data_items = json_decode($response);
    ?>
<div class="container mt-5">
    <?php
        foreach($data_items->articles as $data_item) {
    ?>
        <div class="row data_grid">
            <div class="col-md-3">
                <img src="<?php echo $data_item->urlToImage?>" alt="news thumbnail">
            </div>
            <div class="col-md-9">
                <h2>Title: <?php echo $data_item-> title?></h2>
                <h5>Description: <?php echo $data_item-> description?></h5>
                <p>Content: <?php echo $data_item-> content?></p>
                <h6>Author: <?php echo $data_item-> author?></h6>
                <h6>Published: <?php echo $data_item-> publishedAt?></h6>
            </div>
        </div>
    <?php
            }
    ?>
</div>

</body>
</html>
