<?php
include('./reuse/header.php');
include('./reuse/load_and_up.php');
?>

<main>
    <div class="main-area">
        <div class="container-fluid m-0 p-0">
            <header>
                <!-- Header Start -->
                <div class="header-area" id="header">
                    <div class="main-header">
                        <div class="row m-0 p-0" style="background-color: #454545;">
                            <div class="col header-left">
                                <!-- Logo -->
                                <a href="./index.php" class="logo">
                                    <img class="img-fluid" style="height: 80px;" src="../assets/img/logo/logo_zala.png" alt="logo ZALA">
                                    <span class="hidden">ZALA</span>
                                </a>
                            </div>
                            <div class="">
                                <button></button>
                            </div>
                        </div>
                        <div class="row">
                            <nav class="navbar navbar-expand-md navbar-dark vh-100" style="background-color: #0c1011; width: 200px; display: block;">
                                <ul class="navbar-nav flex-column">
                                    <li class="nav-item my-4 ms-3 active">
                                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                                    </li>
                                    <li class="nav-item mb-4 ms-3">
                                        <a class="nav-link" aria-current="page" href="#">Zala Feed</a>
                                    </li>
                                    <li class="nav-item mb-4 ms-3">
                                        <a class="nav-link" href="#">Các gói dịch vụ</a>
                                    </li>
                                    <li class="nav-item mb-4 ms-3">
                                        <a class="nav-link" href="#">Báo lỗi</a>
                                    </li>
                                    <li class="nav-item mb-4 py-3" style="background-color: #080e0e;">
                                        <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Cài đặt</a>
                                    </li>
                                    <li class="nav-item mb-4 ms-3">
                                        <a class="nav-link" href="#">Đổi mật khẩu</a>
                                    </li>
                                    <li class="nav-item mb-4 ms-3">
                                        <a class="nav-link" href="#">Đăng xuât</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Header End -->
            </header>
        </div>
    </div>
</main>
<!-- Footer Start-->
<!-- <\?php include('./reuse/footer_body.php'); ?> -->

<!-- Footer End-->

<?php include('./reuse/footer.php'); ?>