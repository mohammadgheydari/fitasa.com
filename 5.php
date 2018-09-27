<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header-user.php'; ?>
<link href="js/plugins/persian-calendar/jspc-royal_blue.css" type="text/css" rel="stylesheet"
      media="screen,projection">
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
            <h5 class="breadcrumbs-title "><i class="mdi-action-account-balance-wallet"></i>افزایش اعتبار کاربر</h5>
        </div>
    </div>


    <div class="row">
        <div class="col s12 m12 l6 right">
            <div class=" card z-depth-1 card-content white ">
                <form action="#" class="center">
                    <h6 style="padding-top: 20px">لطفا مبلغ مورد نظر را به ریال وارد کنید</h6>
                    <div class="col s12 m6 l6 offset-l3 offset-m3 left">
                        <div class="input-field">
                            <label class="date-picker-lbl" for="amount-to">مبلغ     (ریال)</label>
                            <i class="mdi-editor-attach-money prefix"></i>
                            <input type="text" id="amount-to" class="validate pdate">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3">
                        افزایش اعتبار
                    </button>
                </form>
                <div class="clear margin-bottom-10"></div>
            </div>
        </div>
        <div class="col s12 m6 l3 left">
            <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                <div class="card-profile-header light-blue accent-3"></div>
                <div class="image-mask">
                    <img src="images/man.png" class="circle responsive-img img-title-card">
                </div>
                <div class="card-profile-content ">
                    <h5 class="profile-card padding-bottom-100 z-depth-1-title">مدیر کل سامانه</h5>
                    <h6>تعداد کاربران: 1,250</h6>
                    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3">حساب
                        کاربری
                    </button>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3 left">
            <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                <div class="card-profile-header light-blue accent-3"></div>
                <div class="image-mask">
                    <img src="images/mobile-logo.png" class="circle responsive-img img-title-card">
                </div>
                <div class="card-profile-content ">
                    <h5 class="profile-card padding-bottom-100 z-depth-1-title">موجودی اعتبار</h5>
                    <h6>885,000 ریال</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end container-->
<?php include 'footer.php'; ?>

</body>

</html>