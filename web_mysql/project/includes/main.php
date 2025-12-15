<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];

    if ($page == "home") {
        include __DIR__ . "/../pages/home.php";
    } elseif ($page == "category") {
        include __DIR__ . "/../pages/category.php";
    } elseif ($page == "news") {
        include __DIR__ . "/../pages/news.php";
    } elseif ($page == "cart") {
        include __DIR__ . "/../pages/cart.php";
    } elseif ($page == "contact") {
        include __DIR__ . "/../pages/contact.php";
    } elseif ($page == "login") {
        include __DIR__ . "/../pages/login.php";
    } elseif ($page == "sign_up") {
        include __DIR__ . "/../pages/sign_up.php";
    } else {
        // Nếu page không tồn tại → load home
        include __DIR__ . "/../pages/home.php";
    }

} else {
    // Nếu không có ?page → load home
    include __DIR__ . "/../pages/home.php";
}
?>