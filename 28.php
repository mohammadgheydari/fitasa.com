<?php include 'head.php'; ?>
<link href="js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>
<body>
<?php include 'header.php'; ?>

<style>
    table.striped > tbody > tr > td, table.responsive-table th {
        padding: 5px !important;
    }
</style>
<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-social-people"></i>ایجاد سازمان جدید</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">
        <div class="col l10 m12 s12 offset-l1">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-social-location-city prefix"></i>
                                <input id="firstname" type="text" class="validate">
                                <label for="firstname" class="">نام سازمان</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-action-account-box prefix"></i>
                                <input id="user-responsible" type="text" class="validate">
                                <label for="user-responsible" class="">کاربر مسئول</label>
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
                        <div class="clear"></div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-social-person prefix"></i>
                                <input id="username" type="text" class="validate">
                                <label for="username" class="">نام کاربری</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <i class="mdi-action-lock prefix"></i>
                                <input id="pass" type="text" class="validate">
                                <label for="pass" class="">کلمه عبور</label>
                            </div>
                        </div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <i class="mdi-action-lock prefix"></i>
                                <input id="rePass" type="text" class="validate">
                                <label for="rePass" class="">تکرار کلمه عبور</label>
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

                        <div class="clear"></div>

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

                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-maps-my-location prefix"></i>
                                <input id="address" type="text" class="validate">
                                <label for="address" class="">آدرس</label>
                            </div>
                        </div>
                        <div class="col s12 m3 l3 margin-upload-btn right margin-top-10">
                            <label for="input-file-max-fs">آپلود لوگوی سازمان</label>
                            <input type="file" id="input-file-max-fs" class="dropify-fa narrow" data-max-file-size="200K"/>
                        </div>
                        <div class="clear"></div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">ثبت
                        </button>

                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>

<!-- dropify -->
<script type="text/javascript" src="js/plugins/dropify/js/dropify.min.js"></script>
<script>
    // Basic
    $('.dropify').dropify();

    // Translated
    $('.dropify-fa').dropify({
        messages: {
            default: 'یک فایل بر روی صفحه بکشید یا کلیک کنید',
            replace: 'تغییر فایل',
            remove: 'حذف کردن',
            error: 'متاسفانه حجم فایل بیشتر از 200 کیلو بایت است.'
        }
    });


</script>
</body>

</html>