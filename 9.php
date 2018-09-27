<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header-gym.php'; ?>
<link href="js/plugins/persian-calendar/jspc-royal_blue.css" type="text/css" rel="stylesheet"
      media="screen,projection">
<style>
    table.striped > tbody > tr > td, table.responsive-table th{
        padding:5px !important;
    }
</style>
<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-social-people  "></i>گزارش کاربران</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">
            <div class="col s12 m8 l9 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-social-person prefix"></i>
                                <input id="aim-title" type="text" class="validate">
                                <label for="aim-title" class="">نام کاربر</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="payment-all-from" type="text" class="validate">
                                <label for="payment-all-from" class="">میزان کل پرداخت از</label>
                            </div>
                        </div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="payment-all-to" type="text" class="validate">
                                <label for="payment-all-to" class="">میزان کل پرداخت تا</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="payment-from" type="text" class="validate">
                                <label for="payment-from" class="">میزان پرداخت از</label>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="payment-to" type="text" class="validate">
                                <label for="payment-to" class="">میزان پرداخت تا</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-format-list-numbered prefix"></i>
                                <input id="paycount-from" type="text" class="validate">
                                <label for="paycount-from" class="">تعداد پرداخت از</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-format-list-numbered prefix"></i>
                                <input id="paycount-to" type="text" class="validate">
                                <label for="paycount-to" class="">تعداد پرداخت تا</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-social-people prefix "></i>
                                <label>جنسیت</label>
                                <select title="جنسیت">
                                    <option value="1">مرد</option>
                                    <option value="2">زن</option>
                                    <option value="3">هردو</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>
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


                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="pay-from"> تاریخ تولد از </label>
                                <i class="mdi-editor-insert-invitation prefix "></i>
                                <input type="text" id="pay-from" class="validate pdate"/>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="pay-to">تاریخ تولد تا</label>
                                <i class="mdi-editor-insert-invitation prefix"></i>
                                <input type="text" id="pay-to" class="validate pdate"/>
                            </div>
                        </div>

                        <button class="left btn-floating btn-margin purple waves-effect waves-light search-btn z-depth-1 tooltip-top"
                                title="جستجو">
                            <i class="mdi-action-search fa-flip-horizontal"></i>
                        </button>
                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
        <div class="col s12 m4 l3  right">
            <div class="card z-depth-1 card-profile grey lighten-3 center-align margin-top-25">
                <div class="card-profile-header light-blue accent-3"></div>
                <div class="image-mask">
                    <img src="images/man.png" class="circle responsive-img img-title-card">
                </div>
                <div class="card-profile-content ">
                    <h5 class="profile-card padding-bottom-100 z-depth-1-title">نام باشگاه</h5>
                    <h6>تعداد کاربران: 1,250</h6>
                    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3">حساب کاربری</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row margin-0">
        <div class="table-option-holder">
            <p>نتیجه جستجو</p>
            <ul class="table-options">

                <li>
                    <a class="btn-floating btn-flat waves-effect waves-light  enable-btn green darken-1 white-text   tooltip-top"
                       title="خروجی اکسل">
                        <i class="mdi-action-assignment"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
        <table class="responsive-table striped centered farzan-table first-col-shrink">
            <thead class="white-text purple">
            <tr class="my-table">
                <th>ردیف</th>
                <th>نام کاربر</th>
                <th>شماره تماس</th>
                <th>جنسیت</th>
                <th>تاریخ تولد</th>
                <th>تاریخ عضویت</th>
                <th>میزان کل پرداخت</th>
                <th>تعداد پرداخت</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>نام کاربر</td>
                <td>09123456789</td>
                <td>مرد</td>
                <td>1365/11/30</td>
                <td>1397/11/30</td>
                <td>21,000</td>
                <td>21</td>
            </tr>
            <tr>
                <td>2</td>
                <td>نام کاربر</td>
                <td>09123456789</td>
                <td>مرد</td>
                <td>1365/11/30</td>
                <td>1397/11/30</td>
                <td>21,000</td>
                <td>21</td>
            </tr>
            <tr>
                <td>3</td>
                <td>نام کاربر</td>
                <td>09123456789</td>
                <td>مرد</td>
                <td>1365/11/30</td>
                <td>1397/11/30</td>
                <td>21,000</td>
                <td>21</td>
            </tr>
            <tr>
                <td>4</td>
                <td>نام کاربر</td>
                <td>09123456789</td>
                <td>مرد</td>
                <td>1365/11/30</td>
                <td>1397/11/30</td>
                <td>21,000</td>
                <td>21</td>
            </tr>
            </tbody>
        </table>
        <div class="clear"></div>
        <ul class="pagination center">
            <li class="disabled waves-effect padding-0"><a href="#" dideo-checked="true">ابتدا</a></li>
            <li class="disabled waves-effect padding-0"><a href="#" dideo-checked="true"><i class="mdi-navigation-chevron-right"></i></a>
            </li>
            <li class="active"><a href="#" dideo-checked="true">1</a></li>
            <li class="waves-effect"><a href="#" dideo-checked="true">2</a></li>
            <li class="waves-effect"><a href="#" dideo-checked="true">3</a></li>
            <li class="waves-effect"><a href="#" dideo-checked="true">4</a></li>
            <li class="waves-effect"><a href="#" dideo-checked="true">5</a></li>
            <li class="waves-effect padding-0"><a href="#" dideo-checked="true"><i class="mdi-navigation-chevron-left"></i></a></li>
            <li class="waves-effect padding-0"><a href="#" dideo-checked="true">انتها</a></li>
            <li class="left">صفحه <span class="page-count">1</span> از <span class="total-page">5</span></li>
        </ul>
        <div class="clear"></div>
    </div>

</div>
<!--end container-->

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/persian-calendar/js-persian-cal.min.js"></script>

<script>
    var objCal1 = new AMIB.persianCalendar('date-from');
    var objCal2 = new AMIB.persianCalendar('date-to');
    var objCal3 = new AMIB.persianCalendar('pay-from');
    var objCal4 = new AMIB.persianCalendar('pay-to');
</script>
</body>

</html>