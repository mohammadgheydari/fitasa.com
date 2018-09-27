<?php include 'head.php'; ?>
<link href="js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body>
<?php include 'header.php'; ?>
<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-action-track-changes"></i>ارسال انبوه لینک ثبت نام باشگاه ها</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>

<div class="row">
    <div class="col s12">
<p>
    در صورتیکه می خواهید از طریق فایل اکسل، لینک صفحه ثبت نام را برای باشگاه ها بنویسید می توانید ساختار اکسل
    <a href="#">فایل نمونه اکسل</a>
    را به عنوان قالب استفاده گنید و پس از انتخاب فایل، دکمه ثبت را بزنید.
</p>
    </div>
</div>
    <div class="row">
        <div class="col l6 m12 s12 offset-l3">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
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