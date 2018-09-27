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
            <h5 class="breadcrumbs-title "><i class="mdi-action-account-balance-wallet"></i>گزارش مالی</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">
            <div class="col s12 right">
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
                                <i class="mdi-action-lock prefix"></i>
                                <input id="code" type="text" class="validate">
                                <label for="code" class="">کد</label>
                            </div>
                        </div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="payment-from" type="text" class="validate">
                                <label for="payment-from" class="">مبلغ کل پرداخت از</label>
                            </div>
                        </div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="payment-to" type="text" class="validate">
                                <label for="payment-to" class="">مبلغ کل پرداخت تا</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="date-to">تاریخ پرداخت کاربر تا</label>
                                <i class="mdi-editor-insert-invitation prefix"></i>
                                <input type="text" id="date-to" class="validate pdate"/>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="date-from"> تاریخ پرداخت کاربر از </label>
                                <i class="mdi-editor-insert-invitation prefix "></i>
                                <input type="text" id="date-from" class="validate pdate"/>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-format-list-numbered prefix"></i>
                                <input id="paycount" type="text" class="validate">
                                <label for="paycount" class="">تعداد پرداخت</label>
                            </div>
                        </div>


                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-view-agenda prefix"></i>
                                <label>نوع فعالیت بدنی</label>
                                <select title="فعالیت">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="pay-from"> تاریخ تسویه از </label>
                                <i class="mdi-editor-insert-invitation prefix "></i>
                                <input type="text" id="pay-from" class="validate pdate"/>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="pay-to">تاریخ تسویه تا</label>
                                <i class="mdi-editor-insert-invitation prefix"></i>
                                <input type="text" id="pay-to" class="validate pdate"/>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-view-agenda prefix"></i>
                                <label>نوع</label>
                                <select title="فعالیت">
                                    <option value="1">بسته</option>
                                    <option value="2">تک جلسه ای</option>
                                </select>
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
    </div>

    <div class="row margin-0">
            <div class="table-option-holder">
                <p>نتیجه جستجو</p>
            </div>
            <div class="clear"></div>
            <table class="responsive-table striped centered farzan-table  first-col-shrink">
                <thead class="white-text purple">
                <tr class="my-table">
                    <th>ردیف</th>
                    <th>کد</th>
                    <th>نام کاربر</th>
                    <th>نوع فعالیت بدنی</th>
                    <th>مبلغ</th>
                    <th>تاریخ پرداخت کاربر</th>
                    <th>بسته/تک جلسه</th>
                    <th>تاریخ تسویه</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>12</td>
                    <td>نام کاربر</td>
                    <td>سلامت</td>
                    <td>21,000</td>
                    <td>1395/11/30</td>
                    <td>بسته</td>
                    <td>1395/11/30</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>12</td>
                    <td>نام کاربر</td>
                    <td>سلامت</td>
                    <td>21,000</td>
                    <td>1395/11/30</td>
                    <td>تک جلسه</td>
                    <td>1395/11/30</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>12</td>
                    <td>نام کاربر</td>
                    <td>سلامت</td>
                    <td>21,000</td>
                    <td>1395/11/30</td>
                    <td>بسته</td>
                    <td>1395/11/30</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>12</td>
                    <td>نام کاربر</td>
                    <td>سلامت</td>
                    <td>21,000</td>
                    <td>1395/11/30</td>
                    <td>بسته</td>
                    <td>1395/11/30</td>
                </tr>
                </tbody>
            </table>
            <div class="clear"></div>
            <ul class="pagination center">
                <li class="disabled waves-effect padding-0"><a href="#">ابتدا</a></li>
                <li class="disabled waves-effect padding-0"><a href="#"><i class="mdi-navigation-chevron-right"></i></a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li class="waves-effect"><a href="#">2</a></li>
                <li class="waves-effect"><a href="#">3</a></li>
                <li class="waves-effect"><a href="#">4</a></li>
                <li class="waves-effect"><a href="#">5</a></li>
                <li class="waves-effect padding-0"><a href="#"><i class="mdi-navigation-chevron-left"></i></a></li>
                <li class="waves-effect padding-0"><a href="#">انتها</a></li>
                <li class="left">صفحه <span class="page-count">1</span> از <span class="total-page">5</span></li>
            </ul>
            <div class="clear"></div>
    </div>

</div>
<!--end container-->
<div id="modal-pay" class="modal modal-fixed-footer z-depth-5">
    <div class="modal-content">
        <div class="white-text card-header">
            <h5 class="form-title">
                پرداخت به باشگاه
            </h5>
        </div>
        <div class="card-content black-text margin-10">
            <form action="#">
                <div class="row">
                    <div class="col s12 m12 l10 offset-l1">
                        <table
                                class="responsive-table farzan-table striped centered">
                            <thead class="white-text purple lighten-1">
                            <tr class="my-table">
                                <th>نام باشگاه</th>
                                <th>نام کاربر</th>
                                <th>نوع فعالیت بدنی</th>
                                <th>سهم باشگاه (ریال)</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>نام باشگاه</td>
                                <td>نام کاربر</td>
                                <td>فوتبال</td>
                                <td>12,000</td>
                                <td>
                                    <a class="btn-floating btn-flat waves-effect waves-light red accent-3 white-text tooltip-top remove-row"  >
                                        <i class="mdi-navigation-close"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>نام باشگاه</td>
                                <td>نام کاربر</td>
                                <td>فوتبال</td>
                                <td>12,000</td>
                                <td>
                                    <a class="btn-floating btn-flat waves-effect waves-light red accent-3 white-text tooltip-top remove-row" >
                                        <i class="mdi-navigation-close"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>نام باشگاه</td>
                                <td>نام کاربر</td>
                                <td>فوتبال</td>
                                <td>12,000</td>
                                <td>
                                    <a class="btn-floating btn-flat waves-effect waves-light red accent-3 white-text tooltip-top remove-row" >
                                        <i class="mdi-navigation-close"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <div class="clear" style="margin-top: 25px;"></div>
       <div class="row">
           <div class="col s12">
               <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left add-class-btn modal-success" style="margin-left: 0">پرداخت</button>
               <button class="btn waves-effect waves-light create-btn z-depth-1 green accent-3 right add-class-btn modal-close">خروجی اکسل</button>
           </div>
       </div>
    </div>


<!--    <div class="modal-footer">-->
<!--        <a class="left btn-floating waves-effect waves-light margin-left-10 z-depth-2 light-green  modal-action modal-close  tooltip-top"-->
<!--           title=""-->
<!--           id="close-btn"><i-->
<!--                    class="mdi-action-credit-card"></i></a>-->
<!--        <a class="right btn-floating waves-effect waves-light margin-right-10  z-depth-2 pink darken-2 modal-action modal-close margin-left-10"-->
<!--           id="close-btn"><i-->
<!--                    class="mdi-navigation-close"></i></a>-->
<!--    </div>-->
</div>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/persian-calendar/js-persian-cal.min.js"></script>

<script>
    var objCal1 = new AMIB.persianCalendar('date-from');
    var objCal2 = new AMIB.persianCalendar('date-to');
    var objCal3 = new AMIB.persianCalendar('pay-from');
    var objCal4 = new AMIB.persianCalendar('pay-to');


    $(".remove-row").click(function () {
        var parent = $(this).parents("tr");
        parent.remove();
    })
</script>
</body>

</html>