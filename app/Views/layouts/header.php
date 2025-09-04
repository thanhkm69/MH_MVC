<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="d-flex flex-column" style="min-height: 100vh;">
    <div class="d-flex flex-grow-1">
        <div class="sidebar bg-light border-end pt-3 px-2" style="width: 300px; min-height: 100vh;">
            <div class="text-center mb-4">
                <a href="../../index.php">
                    <img src="../../uploads/fpt.png" alt="Logo" style="width: 170px; height: auto;">
                </a>
            </div>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo ($currentPage == 'dashboard.php') ? 'active' : ''; ?>" href="../dashboard/dashboard.php">
                        <i class="bi bi-speedometer2 me-2 text-dark"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo ($currentPage == 'nguoidung.php') ? 'active' : ''; ?>" href="../nguoidung/nguoidung.php">
                        <i class="bi bi-people-fill me-2"></i> Người dùng
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo ($currentPage == 'danhmuc.php') ? 'active' : ''; ?>" href="../danhmuc/danhmuc.php">
                        <i class="bi bi-folder-fill me-2"></i> Danh mục
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo ($currentPage == 'sanpham.php') ? 'active' : ''; ?>" href="../sanpham/sanpham.php">
                        <i class="bi bi-box-seam me-2 text-dark"></i> Sản phẩm
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo ($currentPage == 'voucher.php') ? 'active' : ''; ?>" href="../voucher/voucher.php">
                        <i class="bi bi-ticket-detailed-fill me-2"></i> Mã voucher
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo ($currentPage == 'hoadon.php') ? 'active' : ''; ?>" href="../hoadon/hoadon.php">
                        <i class="bi bi-cart-fill me-2"></i> Đơn hàng
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo ($currentPage == 'binhluan.php') ? 'active' : ''; ?>" href="../binhluan/binhluan.php">
                        <i class="bi bi-chat-left-dots-fill me-2"></i> Đánh giá
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark <?= ($currentPage == 'lienhe.php') ? 'active' : ''; ?>" href="../lienhe/lienhe.php">
                        <i class="bi bi-envelope-at-fill me-2"></i> Liên hệ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo ($currentPage == 'thongke.php') ? 'active' : ''; ?>" href="../thongke/thongke.php">
                        <i class="bi bi-bar-chart-line-fill me-2"></i> Thống kê
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">
                        <i class="bi bi-house-door-fill me-2"></i> Trang chủ
                    </a>
                </li>
                <li class="nav-item">
                    <a id="logout-link" class="nav-link" href="../../dangxuat.php">
                        <i class="bi bi-box-arrow-right me-2 text-dark"></i> Đăng xuất
                    </a>
                </li>

            </ul>
        </div>
        <div class="flex-grow-1 d-flex flex-column">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-3">
                <div class="container-fluid justify-content-between">

                    <!-- Left: Icon + Admin Title -->
                    <div class="d-flex align-items-center gap-2">
                        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                            <i class="bi bi-gear-fill fs-3" style="color: #dc3545;"></i>
                            <span class="fw-bold" style="color: #dc3545;">Panel</span>
                        </a>
                    </div>


                    <!-- Right: Notification + User Info -->
                    <div class="d-flex align-items-center">

                        <!-- Notification -->
                        <div class="notification-section me-3 position-relative">
                            <a href="#" class="text-dark position-relative d-inline-block" style="line-height: 1;">
                                <i class="bi bi-bell-fill fs-5"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    1
                                </span>
                            </a>
                        </div>


                        <!-- User Info -->
                        <button class="d-flex align-items-center border-0 bg-transparent p-0">
                            <img src="" alt="Avatar" width="40" height="40" class="rounded-circle border border-dark me-2">
                            <span class="fw-medium text-dark"></span>
                        </button>

                    </div>
                </div>
            </nav>
            <main class="p-4 flex-grow-1">