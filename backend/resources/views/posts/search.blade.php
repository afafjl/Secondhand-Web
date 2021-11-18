<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./assets/css/reset.css">
<link rel="stylesheet" href="./assets/css/base.css">
<link rel="stylesheet" href="./assets/css/Post_page.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<title>Đăng Bán</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
</style>
</head>

@extends('layouts.app')

@section('content')


        <div class="main">
            <center>
                <div class="search-box">
                    <div class="chossen-box">
                        <div class="sort-box">
                            <div class="sort-1">Sắp xếp theo</div>
                            <div class="sort-2">
                                <a href="#" style="text-decoration: none;color: white;">Tin đăng gần nhất</a>
                            </div>
                            <form action="" method="POST" id="form-search">
                                <div class="chose-form">
                                    <!-- <label for="price" class="label">Giá cả</label> -->
                                    <select name="Mức giá" class="choice">
                                        <option value="Giá" class="chossen-info">Giá</option>
                                        <option value="500 - 1.000.000" class="chossen-info">500 - 1.000.000"</option>
                                        <option value="1.000.000 - 2.000.000" class="chossen-info">1.000.000 - 2.000.000
                                        </option>
                                        <option value="2.000.000 - 3.000.000" class="chossen-info">2.000.000 - 3.000.000
                                        </option>
                                        <option value=">3.000.000" class="chossen-info">>3.000.000
                                        </option>
                                    </select>
                                    
                            </form>
                            <div class="sort"><a href="" style="text-decoration: none;color: white;">LỌC</a></div>
                        </div>
                    </div>

                    
                    <div class="productshow">
                        <h3 class="productshow__header"><i class="ti-announcement"></i> Sản Phẩm Mới Đăng </h3>
                        <div class="grid__row">
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href=""><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href=""><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href=""><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href=""><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href=""><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href=""><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href=""><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href="#"><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href="#"><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href="#"><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href="#"><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href="#"><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__column-2-4">
                                <div class="productshow__item">
                                    <a href="#">
                                        <div class="productshow__item-img"
                                            style="background-image: url(./assets/img/img-tt/hondacrv.jpg);"></div>
                                        <h4 class="productshow__item-name">Honda CRV xe chạy nhanh nhất thế giới sản xuất ở nước ngoài
                                            chạy như trâu điên</h4>
                                        <div class="productshow__item-price">2 tỷ 7000000đ</div>
                                        <div class="productshow__item-action">
                                            <a class="action__LIKE" href="#"><i class="ti-heart"></i></a>
                                            <a href="" class="action__BUY">Mua</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                
                        </div>
                    </div>
                    <!--------------------------MORE------------------------------>
                    <div class="productshow_more">
                        <a class="productshow_more-link" href="">Xem thêm
                            <i class="productshow_more-icon ti-arrow-circle-down"></i></a>
                    </div>
                    </div>
                    </div>

                </div>
        </div>
        </center>
    </div>


@endsection