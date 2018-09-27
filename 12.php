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
            <h5 class="breadcrumbs-title "><i class="mdi-action-track-changes"></i>ثبت انبوه اعتبار</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>

<div class="row">
    <div class="col s12">

        <p>در صورتی که می خواهید برای کاربران سازمان خود از طریق فایل اکسل "اعتبار" تعریف را اضافه کنید، می توانید ساختار اکسل <a href="#">فایل اکسل نمونه</a> را با عنوان قالب استفاده کنید</p>
    </div>
</div>
    <div class="row">
        <div class="col l6 m12 s12 offset-l3">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">

                        <div class="col s12 m6 l6 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-communication-location-on prefix "></i>
                                <label> انتخاب سازمان</label>
                                <select title="سازمان">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m6 margin-upload-btn right margin-top-10">
                            <label for="input-file-max-fs">بارگذاری فایل اکسل</label>
                            <input type="file" id="input-file-max-fs" class="dropify-fa narrow" data-max-file-size="200K"/>
                        </div>
                        <div class="clear"></div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">بارگذاری</button>

                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcnWyxVHj9h59zHsHq2gygW1vMEExHu5E&callback=initialize"></script>-->
<script type="text/javascript" src="js/plugins/dropify/js/dropify.min.js"></script>
<script src="js/plugins/bootstrap-clockpicker.min.js"></script>
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