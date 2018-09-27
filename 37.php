<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>

<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> صفحه اصلی سازمان</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">
            <div class="col s12 l10 offset-l1 left">
                <div class="col s12 m6 l4 right">
                    <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                        <div class="card-profile-header light-blue accent-3"></div>
                        <div class="image-mask">
                            <img src="images/user.png" class="circle responsive-img img-title-card">
                        </div>
                        <div class="card-profile-content ">
                            <h6>تعداد کل کاربران سازمان: 1,250</h6>
                            <h6>تعداد کاربران فعال: 1,250</h6>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 right">
                    <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                        <div class="card-profile-header light-blue accent-3"></div>
                        <div class="image-mask">
                            <img src="images/wallet.png" class="circle responsive-img img-title-card">
                        </div>
                        <div class="card-profile-content ">
                            <h6>میزان اعتبار تخصیص یافته: 1,250</h6>
                            <h6>میزان اعتبار مصرفی تا کنون: 1,250</h6>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 right">
                    <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                        <div class="card-profile-header light-blue accent-3"></div>
                        <div class="image-mask">
                            <img src="images/man.png" class="circle responsive-img img-title-card">
                        </div>
                        <div class="card-profile-content ">
                            <h5 class="profile-card padding-bottom-100 z-depth-1-title">مدیر کل سامانه</h5>
                            <h6>تعداد کاربران: 1,250</h6>
                            <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3">حساب کاربری</button>
                        </div>
                    </div>
                </div>
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
        function deferRender (proceed) {
            var series = this,
                $renderTo = $(this.chart.container.parentNode);

            if($(document).scrollTop() + window.innerHeight - 50 >= $renderTo.offset().top + $renderTo.height()){
                proceed.call(series);
            }else{
                $(document).scroll(function () {
                    if($(document).scrollTop() + window.innerHeight - 50 >= $renderTo.offset().top + $renderTo.height() || !series.options.animation){
                        proceed.call(series);
                    }
                });
            }
        }

        H.wrap(H.Series.prototype, 'render', deferRender);

    }(Highcharts));

    $('#income').highcharts({
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
            valueSuffix: 'تومان'
        },
        legend: {
            verticalAlign: 'top',
            align: 'center'
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
    $('#newUsers').highcharts({
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
            valueSuffix: 'نفر'
        },
        legend: {
            verticalAlign: 'top',
            align: 'center'
        },
        series: [{
            name: 'تعداد کاربران جدید',
            data: [1000, 2500, 3500, 4000, 7000],
            animation: {
                duration: 1500,
                easing: 'easeOutBounce'
            }
        }]
    });
    $('#allUsers').highcharts({
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
            valueSuffix: 'نفر'
        },
        legend: {
            verticalAlign: 'top',
            align: 'center'
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
    $('#gymUsers').highcharts({
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
            valueSuffix: 'نفر'
        },
        legend: {
            verticalAlign: 'top',
            align: 'center'
        },
        series: [{
            name: 'تعداد کل باشگاه',
            data: [13000, 25020, 35000, 40000, 45000],
            animation: {
                duration: 1500,
                easing: 'easeOutBounce'
            }
        }]
    });

   $( window ).load(function() {
       $('.index-title').delay(1200).animate({
           opacity: '1'
       },1800);
   });
</script>

</body>

</html>