<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
            <!-- CSS riêng page -->

        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
          if ($page === 'home') {
            echo '<link rel="stylesheet" href="css/home.css">';
          }elseif($page === 'category') {
            echo '<link rel="stylesheet" href="css/category.css">';
          }elseif($page === 'cart') {
            echo '<link rel="stylesheet" href="css/cart.css">';
          }elseif($page === 'news') {
            echo '<link rel="stylesheet" href="css/news.css">';
          }elseif($page === 'contact') {
            echo '<link rel="stylesheet" href="css/contact.css">';
          }elseif($page === 'login') {
            echo '<link rel="stylesheet" href="css/login.css">';
          }elseif($page === 'sign_up') {
            echo '<link rel="stylesheet" href="css/sign_up.css">';
          } else {
            echo '<link rel="stylesheet" href="css/home.css">';
          }
        ?>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <title>web laptop</title>
</head>
<body>

  <?php
  include ('project/includes/menu.php');
  ?>

  <?php
  include ('project/includes/main.php');
  ?>

  <?php
  include ('project/includes/footer.php');
  ?>
  <script src="js/index.js"></script>
</body>
</html>