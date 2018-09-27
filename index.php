<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>

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
        <div class="col s12 m6 l3 right">
            <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                <div class="card-profile-header light-blue accent-3"></div>
                <div class="image-mask">
                    <img src="images/treadmill.png" class="circle responsive-img img-title-card">
                </div>
                <div class="card-profile-content ">
                    <h6>تعداد کل باشگاه ها: 1,250</h6>
                    <h6>تعداد باشگاه های جدید در ماه گذشته: 1,000</h6>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3 right">
            <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                <div class="card-profile-header light-blue accent-3"></div>
                <div class="image-mask">
                    <img src="images/user.png" class="circle responsive-img img-title-card">
                </div>
                <div class="card-profile-content ">
                    <h6>تعداد کل کاربران: 1,250</h6>
                    <h6>تعداد کاربران جدید در ماه گذشته: 250</h6>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3 right">
            <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                <div class="card-profile-header light-blue accent-3"></div>
                <div class="image-mask">
                    <img src="images/wallet.png" class="circle responsive-img img-title-card">
                </div>
                <div class="card-profile-content ">
                    <h6>درآمد کل: 1,250</h6>
                    <h6>درآمد ماه گذشته: 1,250</h6>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3 right">
            <div class="card z-depth-1 card-profile grey lighten-3 center-align">
                <div class="card-profile-header light-blue accent-3"></div>
                <div class="image-mask">
                    <img src="images/man.png" class="circle responsive-img img-title-card">
                </div>
                <div class="card-profile-content ">
                    <h5 class="profile-card padding-bottom-100 z-depth-1-title">مدیر کل سامانه</h5>
                    <h6>تعداد کاربران: 1,250</h6>
                    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3">حساب کاربری
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-editor-insert-chart"></i>نمودارها</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>
    <div class="row">
        <!--charts-->
        <div class="col l3 m12 s12 ltr right">
            <div id="income" style="min-width: 300px; min-height: 350px; margin: 0 auto; padding: 2px"></div>
        </div>
        <div class="col l3 m12 s12 ltr right">
            <div id="newUsers" style="min-width: 300px; height: 350px; margin: 0 auto; padding: 2px"></div>
        </div>
        <div class="col l3 m12 s12 ltr right">
            <div id="allUsers" style="min-width: 300px; height: 350px; margin: 0 auto; padding: 2px"></div>
        </div>
        <div class="col l3 m12 s12 ltr right">
            <div id="gymUsers" style="min-width: 300px; height: 350px; margin: 0 auto; padding: 2px"></div>
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
            }
        },
        legend: {
            verticalAlign: 'top',
            align: 'right',
            rtl: true
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
        chart: {
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
            }
        },
        legend: {
            verticalAlign: 'top',
            align: 'right',
            rtl: true
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
        chart: {
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
            }
        },
        legend: {
            verticalAlign: 'top',
            align: 'right',
            rtl: true
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
        chart: {
            backgroundColor: 'transparent'
        },
        credits: {
            enabled: false,
            rtl:true
        },
        title: {
            text: '',
            rtl:true,

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
            rtl: true
        },
        series: [{
            name: 'تعداد کل باشگاه',
            data: [13000, 25020, 35000, 40000, 45000],
            animation: {
                duration: 1500,
                easing: 'easeOutBounce'
            },
            rtl:true
        }]
    });

    Highcharts.setOptions({
            backgroundColor:'rgba(255, 255, 255, 0.0)',
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