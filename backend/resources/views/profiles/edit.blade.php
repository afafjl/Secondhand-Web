
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/header-footer.css">
    <link rel="stylesheet" href="./assets/css/user_set.css">
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
                    <div class="user_setting">
                        <div class="user_setting-title">
                            <h3>Chỉnh sửa thông tin cá nhân</h3>
                        </div>
                        <form action="POST" id="form_set_user">
                            <div class="user_input">
                                <div class="user_input-img">
                                    <div class="user_input-selected" id="selected-img">
                                        <div class="bug"></div>
                                        <span class="Plus-img">+</span>
                                        <input type="file" id="upload-img" class="input-img_ac" name="image-ac" accept="image/png, image/jpeg" onchange="ImagesFileAsURL()">
                                        <div id="displayIMG" class="displayIMG"></div>
                                        <!--<div class="user_upload-img"><i class="ti-camera user_upload-img-icon"></i></div>-->

                                    </div>

                                </div>
                                <div class="user_input-many">
                                    <div class="user_input-selected user_input-selected-in">
                                        <div class="tile_selected">Tên:</div>
                                        <input type="text" name="user_name" id="user_name" class="user_name" placeholder="Nguyễn Văn A">
                                        <span class="valid_err_text"></span>
                                    </div>
                                    <div class="user_input-selected user_input-selected-in">
                                        <div class="tile_selected">Số điện thoại:</div>
                                        <input type="text" name="user_name" id="phonenum" class="user_name" placeholder="Số điện thoại của bạn">
                                        <span class="valid_err_text"></span>
                                    </div>
                                    <div class="user_input-selected user_input-selected-in">
                                        <div class="tile_selected">Email:</div>
                                        <input type="text" name="user_name" id="mail" class="user_name" placeholder="local-part@domain, e.g.,">
                                        <span class="valid_err_text"></span>
                                    </div>
                                    <div class="user_input-export">
                                        <input type="submit" class="user_input-export-btn-text" value="Lưu">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="grid__column-1">
            </div>
        </div>
    </div>

</div>

</div>
<script type="text/javascript">
    $('#selected-img').click(function() {
        htmls = `<a class="user_upload-img" onclick="click_input()"><i class="ti-camera user_upload-img-icon"></i></a>`;
        jQuery('#selected-img').append(htmls);


    });

    function click_input() {
        jQuery('#selected-img').find('input[type="file"]').click();
    }


    /*
            });*/
</script>
<script type="text/javascript">
    function ImagesFileAsURL() {
        var fileSelected = document.getElementById('upload-img').files;
        if (fileSelected.length > 0) {
            var fileToLoad = fileSelected[0];
            var fileReader = new FileReader();
            fileReader.onload = function(fileLoaderEvent) {
                var srcData = fileLoaderEvent.target.result;
                var newImage = document.createElement('img');
                newImage.src = srcData;
                document.getElementById('displayIMG').innerHTML = newImage.outerHTML;
            }
            fileReader.readAsDataURL(fileToLoad);
        }
    }
</script>
<script src="./assets/java/img_upload.js"></script>
<script>
    Validator({
        form: '#form_set_user',
        errSelector: '.valid_err_text',
        rules: [
            Validator.isValue('#user_name'),
            Validator.isValue('#phonenum'),
            Validator.isValue('#mail'),
            Validator.isMail('#mail'),
            Validator.isMoney('#phonenum'),
        ],
        Onsubmit: function(data) {
            console.log(data);
        }
    });
</script>
</body>

</html>
@endsection
