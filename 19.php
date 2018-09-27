<?php include 'head.php'; ?>
<link rel="stylesheet" href="./css/plugins/sweetalert2.min.css">
<link href="js/plugins/persian-calendar/jspc-royal_blue.css" type="text/css" rel="stylesheet"
      media="screen,projection">
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

    </div>


    <div class="row">
        <div class="col s12 right">
            <div class=" card z-depth-1 card-content white">
                <h5 class="breadcrumbs-title "><i class="mdi-action-track-changes"></i>مدیریت باشگاه ها</h5>

                <form action="#">
                    <div class="col s12 m6 l3 right">
                        <div class="input-field ">
                            <i class="mdi-maps-local-offer prefix"></i>
                            <input id="gymname" type="text" class="validate">
                            <label for="gymname" class="">نام باشگاه</label>
                        </div>
                    </div>
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
                    <div class="col s12 m6 l3 right">
                        <div class="input-field farzan-select">
                            <i class="mdi-action-view-agenda prefix "></i>
                            <label>نوع کلاس</label>
                            <select title="کلاس">
                                <option value="1">گزینه 1</option>
                                <option value="2">گزینه 2</option>
                                <option value="3">گزینه 3</option>
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
                            <label class="date-picker-lbl" for="date-to"> تاریخ عضویت تا </label>
                            <i class="mdi-editor-insert-invitation prefix "></i>
                            <input type="text" id="date-to" class="validate pdate"/>
                        </div>
                    </div>
                    <div class="col s12 ">
                        <p class="right-align mr-15">امکانات باشگاه</p>
                    </div>
                    <div class="input-field col s12 m4 l3 right mycheckbox">
                        <input type="checkbox" id="Cafe">
                        <label for="Cafe" class="checkbox-text margin-bottom-0"> کافی شاپ</label>
                    </div>
                    <div class="input-field col s12 m4 l3 right mycheckbox">
                        <input type="checkbox" id="barber">
                        <label for="barber" class="checkbox-text margin-bottom-0"> آرایشگاه</label>
                    </div>
                    <div class="input-field col s12 m4 l3 right mycheckbox">
                        <input type="checkbox" id="park">
                        <label for="park" class="checkbox-text margin-bottom-0">پارکینک</label>
                    </div>
                    <div class="clear"></div>
                    <div class="input-field col s12 m4 l3 right mycheckbox">
                        <input type="checkbox" id="diet">
                        <label for="diet" class="checkbox-text margin-bottom-0"> مشاوره تغذیه</label>
                    </div>
                    <div class="input-field col s12 m4 l3 right mycheckbox">
                        <input type="checkbox" id="bath">
                        <label for="bath" class="checkbox-text margin-bottom-0"> دوش</label>
                    </div>
                    <div class="input-field col s12 m4 l3 right mycheckbox">
                        <input type="checkbox" id="dietadd">
                        <label for="dietadd" class="checkbox-text margin-bottom-0"> مکمل تغذیه</label>
                    </div>
                    <div class="clear margin-top-25"></div>
                    <div class="clear"></div>
                    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left"
                            type="submit">جستجو
                    </button>

                </form>
                <div class="clear margin-bottom-10"></div>
            </div>
        </div>
    </div>
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
                       title="ویرایش امکانات">
                        <i class="mdi-action-done-all"></i>
                    </a>
                </li>
                <li>
                    <a class="btn-floating btn-flat waves-effect waves-light  teal darken-3 white-text disabled tooltip-top"
                       title="ویرایش کلاس">
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
                <th>استان</th>
                <th>شهر</th>
                <th>تاریخ عضویت در سامانه</th>
                <th>تعداد عضو</th>
                <th>میزان درآمد</th>
                <th>تعداد پرداخت</th>
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
                <td>باشگاه</td>
                <td>تهران</td>
                <td>تهران</td>
                <td>1395/11/30</td>
                <td>21,000</td>
                <td>21,000</td>
                <td>فعال</td>
            </tr>
            <tr>
                <td>2</td>
                <td><p>
                        <input name="group1" type="radio" class="with-gap" id="rbtn3">
                        <label for="rbtn3"></label>
                    </p></td>
                <td>باشگاه</td>
                <td>تهران</td>
                <td>تهران</td>
                <td>1395/11/30</td>
                <td>21,000</td>
                <td>21,000</td>
                <td>غیرفعال</td>
            </tr>
            <tr>
                <td>3</td>
                <td><p>
                        <input name="group1" type="radio" class="with-gap" id="rbtn4">
                        <label for="rbtn4"></label>
                    </p></td>
                <td>باشگاه</td>
                <td>تهران</td>
                <td>تهران</td>
                <td>1395/11/30</td>
                <td>21,000</td>
                <td>21,000</td>
                <td>فعال</td>
            </tr>
            <tr>
                <td>4</td>
                <td><p>
                        <input class="with-gap" name="group1" type="radio" id="rbtn8">
                        <label for="rbtn8"></label>
                    </p></td>
                <td>باشگاه</td>
                <td>تهران</td>
                <td>تهران</td>
                <td>1395/11/30</td>
                <td>21,000</td>
                <td>21,000</td>
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


<div id="modal-add" class="modal modal-fixed-footer z-depth-5">
    <div class="modal-content">
        <div class="white-text card-header">
            <h5 class="form-title">
                افزودن کلاس
            </h5>
        </div>
        <div class="card-content black-text margin-10">
            <form action="#">
                <div class="row">
                        <div class="col s12  right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-view-agenda prefix "></i>
                                <label>نوع کلاس</label>
                                <select title="جنسیت">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 right">
                            <div class="input-field ">
                                <i class="mdi-action-query-builder prefix"></i>
                                <input id="hourFrom" type="text" class="validate">
                                <label for="hourFrom" class="">از</label>
                            </div>
                        </div>
                        <div class="col s12  right">
                            <div class="input-field ">
                                <i class="mdi-action-query-builder prefix"></i>
                                <input id="hourTo" type="text" class="validate">
                                <label for="hourTo" class="">به</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="month" type="text" class="validate">
                                <label for="month" class="">قیمت دوره ای</label>
                            </div>
                        </div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="session" type="text" class="validate">
                                <label for="session" class="">قیمت جلسه ای</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left add-class-btn">
                            ثبت
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modal-change-pass" class="modal minimal modal-fixed-footer z-depth-5">
    <div class="modal-content">
        <div class="white-text card-header">
            <h5 class="form-title">
                تغییر رمز عبور باشگاه
            </h5>
        </div>
        <div class="card-content black-text margin-10">
            <p>نام باشگاه</p>
            <form action="#">
                <div class="row">
                        <div class="col s12 right">
                            <div class="input-field ">
                                <i class="mdi-action-lock prefix"></i>
                                <input id="Pass" type="text" class="validate">
                                <label for="Pass" class="">رمز عبور جدید</label>
                            </div>
                        </div>
                        <div class="col s12 right">
                            <div class="input-field ">
                                <i class="mdi-action-lock prefix"></i>
                                <span class="validationMessage" id="passValidation">رمز عبور و تکرار آن یکسان نیست</span>
                                <input id="rePass" type="text" class="validate">
                                <label for="rePass" class="">تکرار رمز عبور جدید</label>
                            </div>
                        </div>

                    <div class="clear" style="margin-top: 25px;"></div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left add-class-btn modal-success" style="margin-left: 0">تایید</button>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 red accent-3 right add-class-btn modal-close">انصراف</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/persian-calendar/js-persian-cal.min.js"></script>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcnWyxVHj9h59zHsHq2gygW1vMEExHu5E&callback=initialize"></script>-->
<script src="js/plugins/sweetalert2.min.js"></script>
<script>
    $('.change-pass').click(function () {
        $('#modal-change-pass').openModal()
    });
    $('.modal-success').click(function () {
        var formIsValid = true;
        $(".validationMessage").fadeOut();
        if ($('#Pass').val() != $('#rePass').val()) {
            formIsValid = false;
            $("#passValidation").fadeIn();
        }

        if (formIsValid) {
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
            // $(this).parents("form").submit();
        }
    });

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


    $(".add-class-btn, .modal-close").click(function (e) {
        e.preventDefault();
        $('#modal-add').closeModal()
    });
    var objCal1 = new AMIB.persianCalendar('date-from');
    var objCal2 = new AMIB.persianCalendar('date-to');
</script>
</body>

</html>