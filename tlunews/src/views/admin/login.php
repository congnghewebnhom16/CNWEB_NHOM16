<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - TLU</title>

    <!-- Liên kết CSS -->
    <link href="./src/style.css" rel="stylesheet">
    <link href="./src/tailwind.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background: linear-gradient(to right, #00c9ff, #92fe9d);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo {
            width: 100px; /* Thu nhỏ logo */
        }
        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }
        .btn-dark:hover {
            background-color: #292b2c;
            border-color: #292b2c;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">

    <!-- Card Container -->
    <div class="card" style="width: 500px;"> <!-- Thu nhỏ lại chiều rộng của card -->
        <!-- Left Section -->
        <div class="card-header text-white">
            <img src="src/assets/logo-truongthumb.png" alt="Logo" class="logo">
        </div>
        <!-- Right Section -->
        <div class="card-body">
            <h2 class="text-center text-gray-700 mb-4">Tên Đăng Nhập</h2>
            <form action="index.php?page=admin&action=postLogin" method="POST">
                <div class="form-group">
                    <label for="username">Tài khoản đăng nhập</label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        placeholder="Tài khoản đăng nhập"
                        class="form-control"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="password">Mật Khẩu</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="*******"
                        class="form-control"
                        required
                    >
                </div>
                <button type="submit" class="btn btn-dark btn-block my-4">Đăng Nhập</button>
            </form>
        </div>
    </div>

    <!-- Liên kết JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
