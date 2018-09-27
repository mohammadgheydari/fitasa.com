<?php include 'head.php'; ?>
<link rel="stylesheet" href="css/plugins/bootstrap-clockpicker.min.css">
</head>
<body>
<?php include 'header-gym.php'; ?>
<style>
    table.striped > tbody > tr > td, table.responsive-table th {
        padding: 5px !important;
    }

    .input-field.mycheckbox {
        margin-top: 2px !important;
    }

    .google-map {
        width: 100%;
        max-width: 500px;
        height: 250px;
        background: grey;
        text-align: center;
        line-height: 250px;
        margin: 0 auto;
    }
</style>
<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-action-track-changes"></i>ویرایش اطلاعات باشگاه</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">
        <div class="col l10 m12 s12 offset-l1">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
                        <div class="col s12 m6 l9 right">
                            <p class="right-align mr-15">ثبت موقعیت مکانی
                                باشگاه</p>
                            <div class="google-map" id="googleMap">
                                نقشه گوگل
                            </div>
                        </div>
                        <div class="col s12 m6 l3  right">
                            <div class="card z-depth-1 card-profile grey lighten-3 center-align margin-top-25">
                                <div class="card-profile-header light-blue accent-3"></div>
                                <div class="image-mask">
                                    <img src="images/man.png" class="circle responsive-img img-title-card">
                                </div>
                                <div class="card-profile-content ">
                                    <h5 class="profile-card padding-bottom-100 z-depth-1-title">نام باشگاه</h5>
                                    <h6>تعداد کاربران: 1,250</h6>
                                    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3">حساب کاربری</button>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 ">
                            <p class="right-align mr-15">اطلاعات کلی باشگاه</p>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-communication-location-on prefix "></i>
                                <label> استان</label>
                                <select title="استان">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-communication-location-on prefix "></i>
                                <label>شهر</label>
                                <select title="شهر">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <i class="mdi-hardware-phone-iphone prefix"></i>
                                <span class="validationMessage" id="mobileValidation">شماره موبایل معتبر نمی باشد</span>
                                <input id="mobile" type="text" class="validate">
                                <label for="mobile" class="">تلفن همراه</label>
                            </div>
                        </div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <i class="mdi-communication-call prefix"></i>
                                <input id="phone" type="text" class="validate">
                                <label for="phone" class="">تلفن ثابت</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-maps-local-offer prefix"></i>
                                <input id="gymname" type="text" class="validate">
                                <label for="gymname" class="">نام باشگاه</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-action-account-box prefix"></i>
                                <input id="firstname" type="text" class="validate">
                                <label for="firstname" class="">نام مسئول باشگاه</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-action-account-box prefix"></i>
                                <input id="lastname" type="text" class="validate">
                                <label for="lastname" class="">نام خانوادگی مسئول باشگاه</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-social-person prefix"></i>
                                <input id="username" type="text" class="validate">
                                <label for="username" class="">نام کاربری</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-communication-email prefix"></i>
                                <span class="validationMessage" id="emailValidation">پست الکترونیکی معتبر نمی باشد</span>
                                <input id="email" type="email" class="validate">
                                <label for="email" class="">پست الکترونیک</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-social-people prefix "></i>
                                <label>جنسیت باشگاه</label>
                                <select title="جنسیت">
                                    <option value="1">مرد</option>
                                    <option value="2">زن</option>
                                    <option value="3">هردو</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-maps-my-location prefix"></i>
                                <input id="address" type="text" class="validate">
                                <label for="address" class="">آدرس</label>
                            </div>
                        </div>
                        <div class="col s12 ">
                            <p class="right-align mr-15">امکانات باشگاه</p>
                        </div>
                        <div class="input-field col s12 m4 l3 right mycheckbox">
                            <input type="checkbox" id="Cafe">
                            <label for="Cafe" class="checkbox-text margin-bottom-0"> کافی شاپ</label>
                        </div>
                        <div class="input-field col s12 m4 l3 right mycheckbox">
                            <input type="checkbox" id="barber">
                            <label for="barber" class="checkbox-text margin-bottom-0"> آرایشگاه</label>
                        </div>
                        <div class="input-field col s12 m4 l3 right mycheckbox">
                            <input type="checkbox" id="park">
                            <label for="park" class="checkbox-text margin-bottom-0">پارکینک</label>
                        </div>
                        <div class="clear"></div>
                        <div class="input-field col s12 m4 l3 right mycheckbox">
                            <input type="checkbox" id="diet">
                            <label for="diet" class="checkbox-text margin-bottom-0"> مشاوره تغذیه</label>
                        </div>
                        <div class="input-field col s12 m4 l3 right mycheckbox">
                            <input type="checkbox" id="bath">
                            <label for="bath" class="checkbox-text margin-bottom-0"> دوش</label>
                        </div>
                        <div class="input-field col s12 m4 l3 right mycheckbox">
                            <input type="checkbox" id="dietadd">
                            <label for="dietadd" class="checkbox-text margin-bottom-0"> مکمل تغذیه</label>
                        </div>
                        <div class="clear margin-top-25"></div>
                        <div class="col s12 ">
                            <p class="right-align mr-15">برنامه زمانبندی کلاس های
                                باشگاه</p>
                        </div>
                        <div class=" col s12 m12 l6 offset-l3 left">
                            <table class="highlight striped centered farzan-table">
                                <tbody>
                                <tr>
                                    <td>شنبه</td>
                                    <td>
                                        <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>یک شنبه</td>
                                    <td>
                                        <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>دو شنبه</td>
                                    <td>
                                        <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>سه شنبه</td>
                                    <td>
                                        <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>چهار شنبه</td>
                                    <td>
                                        <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>پنج شنبه</td>
                                    <td>
                                        <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>جمعه</td>
                                    <td>
                                        <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="clear"></div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">ایجاد باشگاه
                        </button>

                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="modal-add" class="modal modal-fixed-footer z-depth-5">
    <div class="modal-content">
        <div class="white-text card-header">
            <h5 class="form-title">
                افزودن کلاس
            </h5>
        </div>
        <div class="card-content black-text margin-10">
            <form action="#">
                <div class="row">
                    <div class="col s12 m12 l10 offset-l1">
                        <div class="col s12  right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-view-agenda prefix "></i>
                                <label>نوع کلاس</label>
                                <select title="جنسیت">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="right ">
                            <input type="radio" name="tick" id="men">
                            <label for="men" class="checkbox-text black-text my-radio-label" style="font-size: 12pt">آقایان</label>
                        </div>
                        <div class="right mycheckbox">
                            <input type="radio" name="tick" id="women">
                            <label for="women" class="checkbox-text black-text" style="font-size: 12pt">بانوان</label>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-action-query-builder prefix"></i>
                                <input id="hourFrom" type="text" class="validate clockpicker">
                                <label for="hourFrom" class="">از</label>
                            </div>
                        </div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-action-query-builder prefix"></i>
                                <input id="hourTo" type="text" class="validate clockpicker">
                                <label for="hourTo" class="">به</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="month" type="text" class="validate">
                                <label for="month" class="">قیمت دوره ای</label>
                            </div>
                        </div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="session" type="text" class="validate">
                                <label for="session" class="">قیمت جلسه ای</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left add-class-btn">
                            ثبت
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcnWyxVHj9h59zHsHq2gygW1vMEExHu5E&callback=initialize"></script>-->

<script src="js/plugins/bootstrap-clockpicker.min.js"></script>
<script>
    // function initialize(35.729124, 51.429037) {
    //     if ($("#googleMap").length > 0) {
    //
    //         var myCenter = new google.maps.LatLng(35.726170, 51.421193);
    //         var mapCanvas = document.getElementById("googleMap");
    //         var mapOptions = { center: myCenter, zoom: 16 };
    //         var map = new google.maps.Map(mapCanvas, mapOptions);
    //         //var marker = new google.maps.Marker({ position: myCenter });
    //
    //         var marker = new google.maps.Marker({
    //             position: myCenter,
    //             //icon: "/images/hotel/hotel-orange.png",
    //             animation: google.maps.Animation.BOUNCE
    //
    //         });
    //         marker.setMap(map);
    //         var infowindow = new google.maps.InfoWindow({
    //             content: "Hello World!"
    //         });
    //
    //         google.maps.event.addListenerOnce(map, 'idle', function () {
    //             google.maps.event.trigger(map, 'resize');
    //             map.setCenter(myCenter);
    //         });
    //
    //     }
    // }

    $(".add-class").click(function () {
        $('#modal-add').openModal()
    });
    $(".add-class-btn").click(function (e) {
        e.preventDefault();
        $('#modal-add').closeModal()
    });
    $('.clockpicker').clockpicker({
        autoclose: true
    });

    $('.submit-form').click(function (){
        var formIsValid = true;
        $(".validationMessage").fadeOut();
        if (!validateEmail($("#email").val())) {
            formIsValid = false;
            $("#emailValidation").fadeIn();
        }
        if (!validateMobile($("#mobile").val())) {
            formIsValid = false;
            $("#mobileValidation").fadeIn();
        }
        if (formIsValid) {
            $(this).parents("form").submit();
        }
    })

</script>
</body>

</html>