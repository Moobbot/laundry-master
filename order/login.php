<?php
include('./reuse/header.php');
?>

<main class="gray-light">
    <div class="main-area">
        <section class="login-area">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center">
                                        <div>
                                            <div class=" d-flex justify-content-center">
                                                <img src="../assets/img/logo/logo_zala-2.png" class="img-fluid" alt="">
                                            </div>
                                            <h2 class="x">Chúng tôi đem tới nền tảng kết nối giặt là đến với ngôi nhà của bạn.
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-5 br-l">
                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng nhập</p>
                                        <form id="login-form" class="mx-1 mx-md-4">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" id="username" class="form-control" name="txtUser" placeholder="Tên tài khoản" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">

                                                    <input type="password" id="pass" class="form-control" name="txtPass" placeholder="Mật khẩu" />
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start mb-3 mb-lg-4">
                                                <a href="#" class="text-decoration-none text-center">Tạo tài
                                                    khoản!!!</a>
                                            </div>
                                            <div class="d-flex justify-content-start mb-3 mb-lg-4">
                                                <a href="#" class="text-decoration-none text-center">Quên mật
                                                    khẩu?</a>
                                            </div>
                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button type="submit" class="btn btn-primary btn-lg">Đăng
                                                    nhập</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include('./reuse/footer.php'); ?>