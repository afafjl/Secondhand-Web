<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/base.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/header-footer.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/home_page.css');}}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    </style>
    <link rel="stylesheet" href="{{ URL::asset('fonts/themify-icons.css');}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
</head>
<body>
    <div class="main">
        <header class="header">
            <div class="grid">
                <div class="grid__header">

                    <nav class="header__navbar">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item">
                                <img class="logo" src="./assets/img/logo_web_offi.png" alt="">
                            </li>
                        </ul>

                        <ul class="header__navbar-list--margin">
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-item-link"><i
                                        class="header__navbar-icon ti-home"></i>Trang
                                    chủ</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-item-link"><i
                                        class="header__navbar-icon ti-user"></i>Quản
                                    lý tin</a>
                            </li>
                            <li class="header__navbar-item header__navbar-item--has-notify">
                                <a href="" class="header__navbar-item-link"><i
                                        class="header__navbar-icon ti-bell"></i>Thông
                                    báo</a>
                                <div class="header__notify">
                                    <header class="header__notify-header">
                                        <h3>Thông Báo Vừa Nhận</h3>
                                    </header>
                                    <ul class="header__notify-list">
                                        <li class="header__notify-item header__notify-item--viewed">
                                            <a href="" class="header__notify-link">
                                                <img src="./assets/img/img-tt/hondacrv.jpg" alt="" class="header__notify-img">
                                                <div class="header__notify-info">
                                                    <span class="header__notify-name">Xe Honda CRV</span>
                                                    <span class="header__notify-decrip">Khi giới hạn không thể ngăn lối
                                                        thành công, cùng Honda CR-V đánh thức và cảm nhận mọi giác quan
                                                        trong bạn để chạm đến đỉnh vinh quang. </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="header__notify-item">
                                            <a href="" class="header__notify-link">
                                                <img src="./assets/img/img-tt/hondacrv.jpg" alt="" class="header__notify-img">
                                                <div class="header__notify-info">
                                                    <span class="header__notify-name">Xe Honda CRV</span>
                                                    <span class="header__notify-decrip">Mô tả</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="header__notify-item ">
                                            <a href="" class="header__notify-link">
                                                <img src="./assets/img/img-tt/hondacrv.jpg" alt="" class="header__notify-img">
                                                <div class="header__notify-info">
                                                    <span class="header__notify-name">Xe Honda CRV</span>
                                                    <span class="header__notify-decrip">Mô tả</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <footer class="header__notify-footer">
                                        <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                    </footer>
                                </div>
                            </li>
                            <li class="header__navbar-item header__navbar-item--has-more">
                                <a href="" class="header__navbar-item-link"><i
                                        class="header__navbar-icon ti-more"></i>Thêm</a>
                                <div class="header__more">
                                    <ul class="header__more-list">
                                        <li class="header__more-item">
                                            <a href=""><i class="header__more-item-icon ti-help-alt"></i>Trợ giúp</a>
                                        </li>
                                        <li class="header__more-item">
                                            <a href=""><i class="header__more-item-icon ti-settings"></i> Cài đặt</a>
                                        </li>
                                        <li class="header__more-item">
                                            <a href=""><i class="header__more-item-icon ti-shift-right"></i> Đăng
                                                xuất</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>

                    <div class="header-with-search">
                        <div class="header__seacrh">
                            <div class="header__seacrh-input-wrap">
                                <input type="text" class="header__seacrh-input" placeholder="Tìm Kiếm Sản Phẩm">
                                <div class="header__search-history">
                                    <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                    <ul class="header__search-history-list">
                                        <li class="header__search-history-item">
                                            <a href="">Laptop Gaming thế hệ mới</a>
                                        </li>
                                        <li class="header__search-history-item">
                                            <a href="">Ôtô bán tải vượt thác</a>
                                        </li>
                                        <li class="header__search-history-item">
                                            <a href="">Quần áo cũ rách</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="" class="header__seacrh-btn">
                                <i class="header__seacrh-btn-icon ti-search"></i>
                            </a>
                        </div>

                        <div class="header__user">
                            <img src="./assets/img/img-tt/user.png" alt="" class="header__user-img">
                            <a href="" class="header__user-name">Nguyễn Hiếu Nghĩa</a>
                        </div>
                        <div class="header__post">
                            <a class="header__post-btn" href="">
                                <i class="header__post-btn-icon ti-share"></i> Đăng tin
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </header>


        <div class="container">
         @yield('content')
        </div>    


        <footer class="footer">

            <div class="">
                <div class="footer-icon">
                    <center>
                        <div class="footer-icon-box">
                            <a href="#" class="footer-link"><i class="footer-button ti-facebook "></i></a>
                        </div>
                        <div class="footer-icon-box">
                            <a href="#" class="footer-link"><i class="footer-button ti-instagram "></i></a>
                        </div>
                        <div class="footer-icon-box">
                            <a href="#" class="footer-link"><i class="footer-button ti-linkedin"></i></a>
                        </div>
                        <div class="footer-icon-box">
                            <a href="#" class="footer-link"><i class="footer-button ti-twitter-alt"></i></a>
                        </div>
                        <div class="footer-icon-box">
                            <a href="#" class="footer-link"><i class="footer-button ti-pinterest"></i></a>
                        </div>
                    </center>
                </div>
                <div class="footer-bottom">
                    <center>
                        <p>Địa chỉ: Khu phố 6, P.Linh Trung, Tp.Thủ Đức, Tp.Hồ Chí Minh. Tổng đài hỗ trợ: (028) 372 52002 - Email: <a href="mailto:19521852@gm.uit.edu.vn">19521852@gm.uit.edu.vn</a></p>
                        <p>© 2021 - Bản quyền thuộc về BaiRac Team</p>
                        <center>
                </div>

            </div>

        </footer>
    </div>

</body>
</html>


