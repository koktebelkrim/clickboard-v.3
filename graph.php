<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClickBoard garsing</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <link rel="shortcut icon" href="assets/img/title-ico.png" type="image/png">
</head>

<body class="page">
  
  <!-- Авторизация -->
  <?php if($_COOKIE['user'] == ''): ?>
  <?php require "template-parts/auth.php" ?>
  <?php else: ?>

  <!-- Меню -->
  <?php require "template-parts/menu.php" ?>

    <main class="graph">
        <div class="content-wrap">
            <h2 class="title">
                График смен
            </h2>
            <iframe class="graph__frame"
                src="https://planimum.ru/schedule/display/2021/08/9409c31bdad04f099417e71228d2e751/ "></iframe>
        </div>
    </main>

    <script src="assets/js/common.js"></script>

  <?php endif; ?>
</body>

</html>