<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="/static/css/<? echo $data_css; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title><? echo $page_title; ?></title>
</head>
<body class="grid_reg">
<header class="header_reg"></header>
<div class="left-spam"></div>
<? include_once $content; ?>
<div class="right-spam"></div>
<footer class="footer_reg"></footer>
</body>
</html>

