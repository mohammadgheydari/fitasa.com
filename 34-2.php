<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<style>
    table.striped > tbody > tr > td, table.responsive-table th {
        padding: 5px !important;
    }
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {display:none;}

    .slider {
        position: absolute;
        cursor: pointer;
        height: 33px !important;
        top: 12px;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #00b0ff;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #00b0ff;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #00b0ff;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
    .tab-card{
        padding: 10px;
        margin-top: 10px;
    }
    .tab-card h3{
        font-size: 18px;
        text-align: right;
        font-weight: bold;
    }
    .tab-card p{
        text-align: right;
    }
</style>
<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-action-track-changes"></i>ثبت نام در باشگاه</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">
        <div class="col l8 m12 s12 offset-l2">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
                        <div class="col s12 right">
                            <p class="right-align mr-15">
                                اسم باشگاه
                            </p>
                        </div>

                        <div class="clear"></div>
                        <div class="card tab-card">
                            <h3>جمع خرید: 200,000 تومان</h3>
                           <p >
                               نحوه پرداخت
                           </p>

                            <span>از طریق درگاه بانک</span>
                            <label class="switch">

                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                            <span>اعتبار</span>


                        </div>
                        <div class="card tab-card">
                            <h3>نام کلاس انتخابی</h3>
                            <p> روزهای کلاس: شنبه، یک شنبه، دوشنبه <span style="padding-right: 20px">ساعت: 10:20 تا 11:00</span></p>
                            <p>قیمت ماهانه: 200,000 تومان</p>
                            <hr>
                            <h3>نام کلاس انتخابی</h3>
                            <p> روزهای هفته: شنبه، یک شنبه، دوشنبه <span style="padding-right: 20px">ساعت: 10:20 تا 11:00</span></p>
                            <p>قیمت جلسه ای: 20,000 تومان</p>
                        </div>
                        <div class="clear"></div>
                        <div class="clear margin-top-25"></div>
                        <a href="34-3.php" class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">
                            ثبت نام و پرداخت
                        </a>
                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcnWyxVHj9h59zHsHq2gygW1vMEExHu5E&callback=initialize"></script>-->

</body>

</html>