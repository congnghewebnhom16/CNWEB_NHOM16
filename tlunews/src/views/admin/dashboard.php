<?php
require_once 'src/models/Database.php'; // Kết nối Database
require_once 'src/models/News.php'; // Model News

// Lấy dữ liệu
$database = new Database();
$db = $database->getConnection();
$news = new News($db);
$newsList = $news->getAllNews();
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Website Tin tức</title>

    <!-- Liên kết CSS -->
    <link href="./src/style.css" rel="stylesheet" />
    <link href="./src/tailwind.css" rel="stylesheet" />

    <!-- Liên kết JavaScript -->
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</head>

<body class="roboto-regular">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        header {
            background-color: #f8f9fa;
            padding: 20px;
        }

        header .logo img {
            width: 200px;
            /* Điều chỉnh kích thước ảnh logo */
            height: auto;
            /* Giữ nguyên tỷ lệ */
            display: block;
            /* Đảm bảo ảnh hiển thị đúng trong container */
            margin: 0 auto;
            /* Căn giữa ảnh */
        }

        .mode-box {
            display: flex;
            align-items: center;
        }

        .mode-box .btn {
            margin-left: 5px;
            /* Căn chỉnh nút cách nhau một khoảng nhỏ */
        }

        .news-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .news-item .content h2 {
            color: #007bff;
        }

        .news-item .content p {
            color: #333;
            font-size: 14px;
        }

        .news-item .content a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
    <header class="d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src="./src/assets/logo.png" alt="Logo">
        </div>
        <div class="mode-box">
            <?php if (!isset($_SESSION['role'])): ?>
                <a href="index.php?page=admin&action=login" class="btn btn-outline-secondary">Đăng nhập</a>

            <?php elseif ($_SESSION['role'] == 0): ?>
                <span class="mr-2">Xin chào, User</span>

                <form action="index.php?page=admin&action=logout" method="POST" class="d-inline">
                    <button type="submit" class="btn btn-outline-secondary">Đăng xuất</button>
                </form>
            <?php elseif ($_SESSION['role'] == 1): ?>
                <span class="mr-2">Xin chào, Admin</span>

                <?php if (isset($_GET['page']) && $_GET['page'] == 'admin' && isset($_GET['action']) && $_GET['action'] == 'dashboard'): ?>
                    <a href="index.php" class="btn btn-info btn-sm">Về hệ thống</a>
                    <form action="index.php?page=admin&action=logout" method="POST" class="d-inline">
                        <button type="submit" class="btn btn-outline-secondary">Đăng xuất</button>
                    </form>
                <?php else: ?>
                    <a href="index.php?page=admin&action=dashboard" class="btn btn-outline-secondary">Quản lý tin tức</a>
                    <form action="index.php?page=admin&action=logout" method="POST" class="d-inline">
                        <button type="submit" class="btn btn-outline-secondary">Đăng xuất</button>
                    </form>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </header>


    <?php
    require_once 'src\views\admin\news\index.php';
    ?>

</body>

</html>