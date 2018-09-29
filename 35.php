<?php include 'head.php'; ?>
<style>
    .card-content{
        padding-top: 5px !important;
    }
    .number{
        background: #00b8d4;
        color: #fff;
        width: 25px;
        display: inline-block;
        height: 25px;
        text-align: center;
        line-height: 27px;
        border-radius: 50%;
    }
    .card.white section{
        text-align: center;
        margin-bottom: 4rem;
    }
</style>
</head>
<body>
<?php include 'header-user-app.php'; ?>

<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i>صفحه اصلی</h5>
        </div>
    </div>


    <div class="row">
        <div class="col s12 m12 l9 right">
            <div class=" card z-depth-1 card-content white">
                <div class="clear margin-bottom-10"></div>

                <section>
                    <h3 class="card-title right-align">مراحل کار:</h3>
                    <p><span class="number">1</span> فیت آسا را فعال کنید:</p>
                    <a href="#" class="waves-effect waves-light btn cyan accent-4 ">تلگرام</a>
                    <a href="#" class="waves-effect waves-light btn cyan accent-4 ">بله</a>
                    <p><small>عدد 1 را به 3025 ارسال کنید</small></p>
                </section>
               
               <section>
                    <p><span class="number">2</span> اپلیکیشن موبال را نصب کنید</p>
                    <a href="#" class="waves-effect waves-light btn cyan accent-4 ">لینک دانلود اندروید</a>
                    <a href="#" class="waves-effect waves-light btn cyan accent-4">لینک دانلود ios</a>
                </section>
              
                <section>
                    <p><span class="number">3</span> باشگاه خود را انتخاب کنید</p>
                    <img src="images/ways.png" alt="">
                </section>


               <section>
                    <p><span class="number">4</span> از سلامت و تناسب خود لذت ببرید</p>
                    <img src="images/heartbeat.png" alt="">
               </section>


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
                    <h5 class="profile-card padding-bottom-100 z-depth-1-title">کاربر عزیز فلانی</h5>
                    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3">حساب
                        کاربری
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
<!--end container-->
<?php include 'footer.php'; ?>

</body>

</html>