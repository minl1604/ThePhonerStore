<?php ?>  
<!doctype html>  
<html class="no-js" lang="en">  
<head>  
    <meta charset="utf-8">  
    <meta http-equiv="x-ua-compatible" content="ie=edge">  
    <title>Shop Di Động || Home</title>  
    <meta name="description" content="">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Favicon -->  
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png">  
    <!-- font Roboto -->  
    <link rel="preconnect" href="https://fonts.googleapis.com">  
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <!-- All CSS Files -->  
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">  
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />  
    <link rel="stylesheet" href="assets/lib/css/nivo-slider.css">  
    <link rel="stylesheet" href="assets/css/core.css">  
    <link rel="stylesheet" href="assets/css/shortcode/shortcodes.css">  
    <link rel="stylesheet" href="assets/css/style.css">  
    <link rel="stylesheet" href="assets/css/responsive.css">  
    <link rel="stylesheet" href="assets/css/custom.css">  
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>  
    <style type="text/css">  
    </style>  
</head>  
<body>  
    <!--[if lt IE 8]>  
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>  
    <![endif]-->  

    <!-- Body main wrapper start -->  
    <div id="main" class="wrapper">  
        <!-- START HEADER AREA -->  
        <header id="header" class="header-area header-wrapper">  
            <!-- Toast -->  
            <div class="toast-container position-fixed end-0 p-3 mt-5 ">  
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">  
                    <div id="toast-content" class="toast-header text-bg-warning">  
                        <strong id="toast-content-header" class="me-auto">Thông báo</strong>  
                        <small>1 seconds ago</small>  
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>  
                    </div>  
                    <div class="toast-body">  
                        Hello, world! This is a toast message.  
                    </div>  
                </div>  
            </div>  
            <!-- header-top-bar -->  
            <div class="header-top-bar plr-185">  
                <div class="container-fluid">  
                    <div class="row">  
                        <div class="col-lg-6 col-md-6 d-none d-md-block">  
                        </div>  
                        <div class="col-lg-6 col-md-6">  
                            <div class="top-link clearfix">  
                                <ul class="link f-right top-header-menu">  
                                    <?php if (isset($_SESSION['iduser'])) {  
                                        echo '  
                                            <li class="top-header-menu__item">  
                                                <a href="index.php?act=settingaccount">  
                                                    <i class="zmdi zmdi-account"></i>  
                                                    ' . $_SESSION['ho_ten'] . '  
                                                </a>  
                                                <ul class="top-header-menu__dropdown">  
                                                    <li><a href="./index.php?act=settingaccount">Quản lý tài khoản</a> </li>  
                                                    <li><a href="./index.php?act=settingaccount&view=history">Lịch sử đơn hàng</a> </li>  
                                                    <li><a href="./index.php?act=settingaccount&view=changepass">Thay đổi mật khẩu</a> </li>  
                                                    <li><a href="./index.php?act=settingaccount&view=shippingaddress">Địa chỉ gửi hàng</a> </li>  
                                                    <li><a href="./index.php?act=settingaccount&view=paymentmethod">Phương thức thanh toán</a> </li>  
                                                    <li><a href="./index.php?act=logout">Đăng xuất</a></li>  
                                                </ul>  
                                            </li>  
                                        ';  
                                    } ?>  
                                    <li id="topWishlist" class="top-header-menu__item">  
                                        <a href="index.php?act=wishlist">  
                                            <i class="zmdi zmdi-favorite"></i>  
                                            <?php $amount_wishlists = array_reduce($_SESSION['wishlist'], function ($prev_value, $curr_val) {  
                                                return $curr_val['sl'] + $prev_value;  
                                            }, 0); ?>  
                                            Yêu thích (<?php echo $amount_wishlists ?> sp)  
                                        </a>  
                                    </li>  
                                    <?php  if (!isset($_SESSION['iduser'])) {  
                                        echo '  
                                            <li class="top-header-menu__item">  
                                                <a href="./auth/login.php">  
                                                    <i class="zmdi zmdi-lock"></i>  
                                                    Đăng nhập  
                                                </a>  
                                            </li>  
                                        ';  
                                    }  ?>  
                                </ul>  
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
            <!-- header-middle-area -->  
            <div id="sticky-header" class="header-middle-area plr-185">  
                <div class="container-fluid">  
                    <div class="full-width-mega-dropdown">  
                        <div class="row">  
                            <!-- logo removed here -->  
                            <div class="col-lg-8 d-none d-lg-block">  
                                <nav id="primary-menu">  
                                    <ul class="main-menu text-center">  
                                        <li><a href="index.php">Trang chủ</a></li>  
                                        <li class="mega-parent"><a href="index.php?act=shop">Cửa hàng</a></li>  
                                        <li><a href="index.php?act=blog">Bài viết</a>  
                                            <ul class="dropdwn">  
                                                <li><a href="index.php?act=blog">Thủ thuật</a></li>  
                                                <li><a href="index.php?act=blog">Tin tức điện thoại</a></li>  
                                                <li><a href="index.php?act=blog">Hướng dẫn</a></li>  
                                            </ul>  
                                        </li>  
                                        <li><a href="index.php?act=about-us">Về chúng tôi</a></li>  
                                        <li><a href="index.php?act=contact">Liên hệ</a></li>  
                                    </ul>  
                                </nav>  
                            </div>  
                            <div class="col-lg-2 col-md-8">  
                                <div class="search-top-cart f-right">  
                                    <div class="header-search f-left">  
                                        <div class="header-search-inner">  
                                            <button class="search-toggle">  
                                                <i class="zmdi zmdi-search"></i>  
                                            </button>  
                                            <form action="./index.php?act=shop" method="GET">  
                                                <div class="top-search-box">  
                                                    <input type="hidden" name="act" value="shop">  
                                                    <input type="text" name="query" placeholder="Tìm kiếm sản phẩm...">  
                                                    <button name="" type="submit">  
                                                        <i class="zmdi zmdi-search"></i>  
                                                    </button>  
                                                </div>  
                                            </form>  
                                        </div>  
                                    </div>  
                                    <div id="topHeaderCart" class="total-cart f-left">  
                                        <div class="total-cart-in">  
                                            <div class="cart-toggler">  
                                                <a href="./index.php?act=viewcart">  
                                                    <?php $amount_carts = array_reduce($_SESSION['giohang'], function ($prev_value, $curr_val) {  
                                                        return $curr_val['sl'] + $prev_value;  
                                                    }, 0); ?>  
                                                    <span class="cart-quantity"><?php echo $amount_carts ?></span><br>  
                                                    <span class="cart-icon">  
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>  
                                                    </span>  
                                                </a>  
                                            </div>  
                                            <ul id="topCartInnerWrapper" class="top-cart-inner-wrapper">  
                                                <li>  
                                                    <div class="top-cart-inner your-cart">  
                                                        <h5 class="text-capitalize">Giỏ hàng của bạn</h5>  
                                                    </div>  
                                                </li>  
                                                <li>  
                                                    <div class="total-cart-pro">  
                                                        <?php $cart_list = $_SESSION['giohang'];  
                                                        $total_cart = 0;  
                                                        foreach ($cart_list as $cart_item) {  
                                                            $total_cart += $cart_item['sl'] * $cart_item['don_gia'];  
                                                            $price_item = number_format($cart_item['don_gia']);  
                                                            $idcart = $cart_item['id'];  
                                                            $delcartfunc = "handleDeleteCart($idcart)";  
                                                            echo '  
                                                                <div class="single-cart clearfix">  
                                                                    <div class="cart-img f-left">  
                                                                        <a href="./index.php?act=detailproduct&id=' . $cart_item['id'] . '" class="" style="max-width: 200px;">  
                                                                            <img style="width: 80px; height: 80px;" src="../uploads/' . $cart_item['hinh_anh'] . '" alt="Cart Product" />  
                                                                        </a>  
                                                                        <div class="del-icon">  
                                                                            <a onclick="' . $delcartfunc . '" href="./index.php?act=deletecart&idcart=">  
                                                                                <i class="zmdi zmdi-close"></i>  
                                                                            </a>  
                                                                        </div>  
                                                                    </div>  
                                                                    <div class="cart-info f-left">  
                                                                        <h6 class="text-capitalize text-truncate" style="max-width: 200px;">  
                                                                            <a href="#">' . $cart_item['tensp'] . '</a>  
                                                                        </h6>  
                                                                        <p>  
                                                                            <span>Sl <strong>:</strong></span>' . $cart_item['sl'] . '  
                                                                        </p>  
                                                                        <p>  
                                                                            <span>Giá <strong>:</strong></span> ' . $price_item . ' VND  
                                                                        </p>  
                                                                    </div>  
                                                                </div>  
                                                            ';  
                                                        } ?>  
                                                    </div>  
                                                </li>  
                                                <li>  
                                                    <div class="top-cart-inner subtotal">  
                                                        <h4 class="text-uppercase g-font-2">  
                                                            Tổng tiền =  
                                                            <span><?php echo number_format($total_cart); ?>VND</span>  
                                                        </h4>  
                                                    </div>  
                                                </li>  
                                                <li>  
                                                    <div class="top-cart-inner view-cart">  
                                                        <h4 class="text-uppercase">  
                                                            <a href="./index.php?act=viewcart">Xem giỏ hàng</a>  
                                                        </h4>  
                                                    </div>  
                                                </li>  
                                                <li>  
                                                    <div class="top-cart-inner check-out">  
                                                        <h4 class="text-uppercase">  
                                                            <a href="./index.php?act=checkout">Thanh toán</a>  
                                                        </h4>  
                                                    </div>  
                                                </li>  
                                            </ul>  
                                        </div>  
                                    </div>  
                                </div>  
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </header>  
        <!-- END HEADER AREA -->  
    </div>  
</body>  
</html>
