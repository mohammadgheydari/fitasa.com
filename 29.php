<?php include 'head.php'; ?>
<link rel="stylesheet" href="css/plugins/bootstrap-clockpicker.min.css">
<link href="js/plugins/persian-calendar/jspc-royal_blue.css" type="text/css" rel="stylesheet"
      media="screen,projection">
<link rel="stylesheet" href="./css/plugins/sweetalert2.min.css">

</head>
<body>
<?php include 'header.php'; ?>
<style>
    table.striped > tbody > tr > td, table.responsive-table th {
        padding: 5px !important;
    }

    .input-field.mycheckbox {
        margin-top: 2px !important;
    }


</style>
<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-action-track-changes"></i>مدیریت سازمان ها</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>

    <div class="row">
        <div class="col l12 m12 s12">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-maps-local-offer prefix"></i>
                                <input id="gymname" type="text" class="validate">
                                <label for="gymname" class="">نام سازمان</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-social-person prefix"></i>
                                <input id="username" type="text" class="validate">
                                <label for="username" class="">کاربر مسئول</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="date-from"> تاریخ عضویت از </label>
                                <i class="mdi-editor-insert-invitation prefix "></i>
                                <input type="text" id="date-from" class="validate pdate"/>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="date-to">تاریخ عضویت تا</label>
                                <i class="mdi-editor-insert-invitation prefix"></i>
                                <input type="text" id="date-to" class="validate pdate"/>
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

                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">جستجو
                        </button>

                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="row margin-0">
        <div class="table-option-holder">
            <p>نتیجه جستجو</p>
            <ul class="table-options">
                <li>
                    <a class="btn-floating btn-flat waves-effect waves-light  enable-btn red darken-3 white-text  disabled tooltip-top"
                       title="فعال/غیرفعال">
                        <i class="mdi-content-block"></i>
                    </a>
                </li>
                <li>
                    <a class="btn-floating btn-flat waves-effect waves-light  teal darken-3 white-text disabled tooltip-top"
                       title="ویرایش">
                        <i class="mdi-editor-mode-edit"></i>
                    </a>
                </li>
                <li>
                    <a class="btn-floating btn-flat waves-effect waves-light  cyan darken-1 white-text disabled tooltip-top change-pass"
                       title="تغییر کلمه عبور">
                        <i class="mdi-action-lock"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
        <table class="responsive-table striped centered farzan-table second-col-shrink first-col-shrink">
            <thead class="white-text purple">
            <tr class="my-table">
                <th>ردیف</th>
                <th>انتخاب</th>
                <th>نماد</th>
                <th>نام سازمان</th>
                <th>کاربر مسئول</th>
                <th>تلفن همراه</th>
                <th>تاریخ عضویت در سامانه</th>
                <th>اعتبار کل</th>
                <th>اعتبار باقیمانده</th>
                <th>تعداد کاربران</th>
                <th>وضعیت</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td><p>
                        <input name="group1" type="radio" class="with-gap" id="rbtn2">
                        <label for="rbtn2"></label>
                    </p>
                </td>
                <td>
                    <img src="images/apple.png">
                </td>
                <td>سازمان</td>
                <td>کاربر</td>
                <td>09123456789</td>
                <td>1395/11/30</td>
                <td>21,000</td>
                <td>21,000</td>
                <td>125</td>
                <td>فعال</td>
            </tr>
            <tr>
                <td>2</td>
                <td><p>
                        <input name="group1" type="radio" class="with-gap" id="rbtn3">
                        <label for="rbtn3"></label>
                    </p></td>
                <td>
                    <img src="images/apple.png">
                </td>
                <td>سازمان</td>
                <td>کاربر</td>
                <td>09123456789</td>
                <td>1395/11/30</td>
                <td>21,000</td>
                <td>21,000</td>
                <td>125</td>
                <td>فعال</td>
            </tr>
            <tr>
                <td>3</td>
                <td><p>
                        <input name="group1" type="radio" class="with-gap" id="rbtn4">
                        <label for="rbtn4"></label>
                    </p></td>
                <td>
                    <img src="images/apple.png">
                </td>
                <td>سازمان</td>
                <td>کاربر</td>
                <td>09123456789</td>
                <td>1395/11/30</td>
                <td>21,000</td>
                <td>21,000</td>
                <td>125</td>
                <td>غیرفعال</td>
            </tr>
            <tr>
                <td>4</td>
                <td><p>
                        <input class="with-gap" name="group1" type="radio" id="rbtn8">
                        <label for="rbtn8"></label>
                    </p></td>
                <td>
                    <img src="images/apple.png">
                </td>
                <td>سازمان</td>
                <td>کاربر</td>
                <td>09123456789</td>
                <td>1395/11/30</td>
                <td>21,000</td>
                <td>21,000</td>
                <td>125</td>
                <td>فعال</td>
            </tr>
            </tbody>
        </table>
        <div class="clear"></div>
        <ul class="pagination center">
            <li class="disabled waves-effect padding-0"><a href="#" dideo-checked="true">ابتدا</a></li>
            <li class="disabled waves-effect padding-0"><a href="#" dideo-checked="true"><i
                            class="mdi-navigation-chevron-right"></i></a>
            </li>
            <li class="active"><a href="#" dideo-checked="true">1</a></li>
            <li class="waves-effect"><a href="#" dideo-checked="true">2</a></li>
            <li class="waves-effect"><a href="#" dideo-checked="true">3</a></li>
            <li class="waves-effect"><a href="#" dideo-checked="true">4</a></li>
            <li class="waves-effect"><a href="#" dideo-checked="true">5</a></li>
            <li class="waves-effect padding-0"><a href="#" dideo-checked="true"><i
                            class="mdi-navigation-chevron-left"></i></a></li>
            <li class="waves-effect padding-0"><a href="#" dideo-checked="true">انتها</a></li>
            <li class="left">صفحه <span class="page-count">1</span> از <span class="total-page">5</span></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<?php include 'footer.php'; ?>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcnWyxVHj9h59zHsHq2gygW1vMEExHu5E&callback=initialize"></script>-->
<script type="text/javascript" src="js/plugins/persian-calendar/js-persian-cal.min.js"></script>
<script src="js/plugins/bootstrap-clockpicker.min.js"></script>
<script src="js/plugins/sweetalert2.min.js"></script>

<script>

    var objCal1 = new AMIB.persianCalendar('date-from');
    var objCal2 = new AMIB.persianCalendar('date-to');

    $('.enable-btn').click(function () {
        swal({
            title: 'آیا شما از این کار مطمئن هستید؟',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#00b0ff',
            cancelButtonColor: '#d33',
            confirmButtonText: 'تایید',
            cancelButtonText:'لغو'
        }).then((result) => {
            if (result.value) {
                swal(
                    'انجام شد!',
                    '',
                    'success',
                )
            }
        });
    });


</script>
</body>

</html>