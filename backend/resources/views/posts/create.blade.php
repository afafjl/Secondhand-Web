<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ URL::asset('css/reset.css');}}">
    <link rel="stylesheet" href=" {{ URL::asset('css/base.css');}}">
   
<link rel="stylesheet" href=" {{ URL::asset('css/Post_page.css');}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<title>Đăng Bán</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
</style>
</head>

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column-1">
                </div>
                <div class="grid__column-10">
                    <div class="infor_product">
                        <form action="" method="POST" id="form_post_product">
                            <div class="grid__row">

                                <div class="grid__column-3of10">
                                    <div class="infor_product-uploadImg">
                                        <!---------------TEST-->
                                        <div class="reviews">
                                            <div class="BTN-UPLOAD">
                                                <label class="BTN-UPLOAD-title"><span>Thêm ảnh mô tả</span></label>
                                            </div>
                                            <div class="list_IMG">
                                                <ul class="List_attach_view">
                                                    <!--<img src="./assets/img/category/do-gia-dung.png" alt="">
                                                <img src="./assets/img/category/free_0d.png" alt="">
                                                <li id="li_files_' + _time + '" class="li_file_hide">
                                                    <div class="img-wrap">
                                                        <span class="close" onclick="DelImg(this)">×</span>
                                                        <div class="img-wrap-box">
                                                    </div>
                                                    </div>
                                                        <div class="' + _time + '">
                                                        <input type="file" class="hidden"  onchange="uploadImg(this)" id="files_' + _time + '"   />
                                                        </div>
                                                </li>-->
                                                </ul>
                                                <!--<span class="insert_attach_UP"><i class="dandev-plus">+</i></span>-->
                                            </div>
                                        </div>
                                        <!--------------------------------------------------FL CODE------------------->

                                    </div>
                                </div>
                                <div class="grid__column-7of10">

                                    <div class="infor_product-category">

                                        <div class="infor_product-category-title"><span>Thông Tin Sản Phẩm</span>
                                        </div>
                                        <div class="infor_product-category-ali">
                                            <div class="tilte-selects">Danh mục sản phẩm:<span class="Obligatory">*</span></div>
                                            <select name="category" id="select__category" class="infor_product-category-ali-select">
                                                <option selected="Default"value="">Danh mục sản phẩm
                                                    (bắt buộc)</option>
                                                <option value="Thời trang">Thời trang</option>
                                                <option value="Điện thoại">Điện thoại</option>
                                                <option value="Đồ gia dụng">Đồ gia dụng</option>
                                                <option value="Nội thất">Nội thất</option>
                                                <option value="Nhà đất">Nhà đất</option>
                                                <option value="Xe">Xe</option>
                                                <option value="Nông ghiệp">Nông ghiệp</option>
                                                <option value="Đồ công nghiệp">Đồ công nghiệp</option>
                                                <option value="Sở thích">Sở thích</option>
                                                <option value="Thể thao">Thể thao</option>
                                                <option value="Thú cưng">Thú cưng</option>
                                                <option value="Hàng 0 đồng">Hàng 0 đồng</option>
                                            </select>
                                            <span class="valid_err_text"></span>
                                        </div>
                                        <div class="infor_product-category-ali">
                                            <div class="tilte-selects">Tiêu đề cho sản phẩm:<span class="Obligatory">*</span></div>
                                            <input type="text" name="name_product" id="Name_product" class="infor_product-category-ali-select " placeholder="Tiêu đề cho sản phẩm (bắt buộc)">
                                            <span class="valid_err_text"></span>
                                        </div>
                                        <div class="infor_product-category-ali infor_product-category-ali-combo">
                                            <div class="Price-selects">Giá(VND):<span class="Obligatory">*</span>
                                            </div>

                                            <input type="text" name="price_product" id="Price_product" class="infor_product-category-ali-select " placeholder="Giá sản phẩm (bắt buộc)">
                                            <label for="Price_product" class="Label_unit">VND</label>

                                            <span class="valid_err_text"></span>
                                        </div>
                                        <!-- <div class="infor_product-category-ali">
                                            <div class="tilte-selects">Tình trạng sản phẩm:<span class="Obligatory">*</span></div>
                                            <input type="text" name="status_product" id="Status_product" class="infor_product-category-ali-select" placeholder="Tình trạng sản phẩm (bắt buộc) vd:sản phẩm còn mới, dùng được 2 năm,... ">
                                            <span class="valid_err_text"></span>
                                        </div>-->
                                        <div class="infor_product-category-ali">
                                            <div class="tilte-selects">Mô tả chi tiết:<span class="Obligatory">*</span></div>
                                            <textarea class="infor_product-category-ali-select" inputmode="text" id="Decrip_product" name="decrip" placeholder="Viết tiếng Việt có dấu
                                                - Xuất sứ
                                                - Nhãn hiệu
                                                - Chất liệu, kích thước
                                                - Giấy tờ kèm theo(nếu có)
                                                - Hạn bảo hành(nếu có)
                                                Hãy mô tả thật rõ ràng để sản phẩm của bạn được bán nhanh nhất"></textarea>
                                            <span class="valid_err_text"></span>
                                        </div>
                                    </div>
                                    <div class="infor_product-export">
                                        <input type="submit" class="infor_product-export-btn-text" value="Đăng Bài">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
                <div class="grid__column-1">
                </div>
            </div>
        </div>

    </div>

</div>



<script type="text/javascript">
    $('.BTN-UPLOAD').click(function() {
        if ($('.insert_attach_UP').hasClass('show-btn') === false) {
            $('.insert_attach_UP').addClass('show-btn');

        }
        var _lastimg = jQuery('.List_attach_view li').last().find('input[type="file"]').val();

        if (_lastimg != '') {
            var d = new Date();
            var _time = d.getTime();
            var _html = '<li id="li_files_' + _time + '" class="li_file_hide">';
            _html += '<div class="img-wrap">';
            _html += '<span class="close" onclick="DelImg(this)">×</span>';
            _html += ' <div class="img-wrap-box"></div>';
            _html += '</div>';
            _html += '<div class="' + _time + '">';
            _html += '<input type="file" class="hidden" name="image' + _time + '" accept="image/png, image/jpeg" onchange="uploadImg(this)" id="files_' + _time + '"   />';
            _html += '</div>';
            _html += '</li>';
            jQuery('.List_attach_view').append(_html);
            jQuery('.List_attach_view li').last().find('input[type="file"]').click();
        } else {
            if (_lastimg == '') {
                jQuery('.List_attach_view li').last().find('input[type="file"]').click();
            } else {
                if ($('.insert_attach_UP').hasClass('show-btn') === true) {
                    $('.insert_attach_UP').removeClass('show-btn');
                }
            }
        }
    });

    function uploadImg(el) {
        var file_data = $(el).prop('files')[0];
        var type = file_data.type;
        var fileToLoad = file_data;

        var fileReader = new FileReader();

        fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result;

            var newImage = document.createElement('img');
            newImage.src = srcData;
            var _li = $(el).closest('li');
            if (_li.hasClass('li_file_hide')) {
                _li.removeClass('li_file_hide');
            }
            _li.find('.img-wrap-box').append(newImage.outerHTML);


        }
        fileReader.readAsDataURL(fileToLoad);

    }

    function DelImg(el) {
        jQuery(el).closest('li').remove();

    }
</script>
<script src="./assets/java/img_upload.js"></script>
<script>
    Validator({
        form: '#form_post_product',
        errSelector: '.valid_err_text',
        rules: [
            Validator.isValue('#select__category'),
            Validator.isValue('#Name_product'),
            Validator.isValue('#Price_product'),
            Validator.isMoney('#Price_product'),
            /*Validator.isValue('#Status_product'),*/
            Validator.isValue('#Decrip_product'),
        ],
        Onsubmit: function(data) {
            console.log(data);
        }
    });
</script>
@endsection