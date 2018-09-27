<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header-gym.php'; ?>

<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i>صفحه اصلی</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">

        <div class="col s12 m6 l5 pull-l3 right">
            <div id="allUsers" style="min-width: 400px;width: 100%; height: 350px; margin: 0 auto; padding: 2px"></div>
        </div>
        <div class="col s12 m6 l3 pull-l3  right">
            <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                <div class="card-profile-header light-blue accent-3"></div>
                <div class="image-mask">
                    <img src="images/man.png" class="circle responsive-img img-title-card">
                </div>
                <div class="card-profile-content ">
                    <h5 class="profile-card padding-bottom-100 z-depth-1-title">نام باشگاه</h5>
                    <h6>تعداد کاربران: 1,250</h6>
                    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3">حساب کاربری
                    </button>
                </div>
            </div>

            <div class="card z-depth-1 center-align ">
                <p>کد qr باشگاه</p>
                <img src="./images/qr-code.png" width="120px" alt="">
                <p>کد sms جهت ارسال توسط کاربر: 85212</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 l5 pull-l3 right">
            <div id="income" style="min-width: 300px; min-height: 350px; margin: 0 auto; padding: 2px"></div>
        </div>
    </div>
</div>
<!--end container-->

<?php include 'footer.php'; ?>
<!-- highcharts js-->
<script type="text/javascript" src="js/plugins/highcharts/highcharts.js"></script>
<script type="text/javascript" src="js/jquery.sky.carousel-1.0.2.min.js"></script>
<script>
    (function (H) {
        function deferRender(proceed) {
            var series = this,
                $renderTo = $(this.chart.container.parentNode);

            if ($(document).scrollTop() + window.innerHeight - 50 >= $renderTo.offset().top + $renderTo.height()) {
                proceed.call(series);
            } else {
                $(document).scroll(function () {
                    if ($(document).scrollTop() + window.innerHeight - 50 >= $renderTo.offset().top + $renderTo.height() || !series.options.animation) {
                        proceed.call(series);
                    }
                });
            }
        }

        H.wrap(H.Series.prototype, 'render', deferRender);

    }(Highcharts));

    $('#income').highcharts({
        chart: {
            type: 'column',
            backgroundColor: 'transparent'
        },
        isRTL: true,
        credits: {
            enabled: false
        },
        title: {
            text: ''

        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5'],
            title: {
                text: 'ماه'
            }
        },
        yAxis: {
            title: {
                text: 'درآمد'
            }
        },
        tooltip: {
            valueSuffix: 'تومان',
            useHTML: true,
            style: {
                fontSize: '14px',
                fontFamily: 'IRANSans',
                direction: 'rtl',
            },
        },
        legend: {
            verticalAlign: 'top',
            align: 'right',
            rtl: false,
            // marginRight:'200px'
        },
        series: [{
            name: 'درآمد ماه های گذشته',
            data: [2000, 3500, 6500, 8000, 15000],
            animation: {
                duration: 1500,
                easing: 'easeOutBounce'
            }
        }]
    });

    $('#allUsers').highcharts({
        chart: {
            type: 'column',
            backgroundColor: 'transparent'
        },
        credits: {
            enabled: false
        },
        title: {
            text: ''

        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5'],
            title: {
                text: 'ماه'
            }
        },
        yAxis: {
            title: {
                text: 'تعداد'
            }
        },
        tooltip: {
            valueSuffix: 'نفر',
            useHTML: true,
            style: {
                fontSize: '14px',
                fontFamily: 'IRANSans',
                direction: 'rtl',
            },
        },
        legend: {
            verticalAlign: 'top',
            align: 'right',
            rtl: false
        },
        series: [{
            name: 'تعداد کل کاربران',
            data: [10000, 25000, 35000, 40000, 70000],
            animation: {
                duration: 1500,
                easing: 'easeOutBounce'
            }
        }]
    });
    Highcharts.setOptions({
        lang: {
            thousandsSep: ',',
            rtl: true
        }
    });
    $(window).load(function () {
        $('.index-title').delay(1200).animate({
            opacity: '1'
        }, 1800);
    });
</script>

</body>

</html>