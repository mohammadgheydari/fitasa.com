<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>

<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-social-person"></i>ویرایش پروفایل ادمین کل</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">
        <div class="col l8 m12 s12 offset-l2">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
                        <div class="col s12 m6 l4 right">
                            <div class="input-field ">
                                <i class="mdi-action-account-box prefix"></i>
                                <input id="name" type="text" class="validate">
                                <label for="name" class="">نام مرکز</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l4 right">
                            <div class="input-field">
                                <i class="mdi-communication-call prefix"></i>
                                <input id="phone" type="text" class="validate">
                                <label for="phone" class="">تلفن ثابت</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l4 right">
                            <div class="input-field ">
                                <i class="mdi-communication-email prefix"></i>
                                <span class="validationMessage" id="emailValidation">پست الکترونیکی معتبر نمی باشد</span>
                                <input id="email" type="email" class="validate">
                                <label for="email" class="">پست الکترونیک</label>
                            </div>
                        </div>

                        <div class="clear"></div>
                        <div class="col s12 m8 right">
                            <div class="input-field ">
                                <i class="mdi-maps-my-location prefix"></i>
                                <input id="address" type="text" class="validate">
                                <label for="address" class="">آدرس</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">ویرایش
                        </button>

                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>

</body>

</html>