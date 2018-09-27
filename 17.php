<?php include 'head.php'; ?>
<link rel="stylesheet" href="css/plugins/bootstrap-clockpicker.min.css">

<link rel="stylesheet" href="./css/plugins/sweetalert2.min.css">

</head>
<body>
<?php include 'header.php'; ?>
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
            <h5 class="breadcrumbs-title "><i class="mdi-action-track-changes"></i>ویرایش کلاس</h5>
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
                                <label for="gymname" class="">نام باشگاه</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-track-changes prefix "></i>
                                <label>عنوان کلاس</label>
                                <select title="کلاس">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
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
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-editor-insert-invitation prefix"></i>
                                <label>روز</label>
                                <select title="روز">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-editor-attach-money prefix"></i>
                                <input id="price" type="text" class="validate price">
                                <label for="price" class="">قیمت</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-action-query-builder prefix"></i>
                                <input id="hourFrom" type="text" class="validate clockpicker">
                                <label for="hourFrom" class="">زمان آغاز</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-action-query-builder prefix"></i>
                                <input id="hourTo" type="text" class="validate clockpicker">
                                <label for="hourTo" class="">زمان پایان</label>
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
                       title="حذف">
                        <i class="mdi-navigation-close"></i>
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
                <th>نام باشگاه</th>
                <th>عنوان کلاس</th>
                <th>روز</th>
                <th>زمان آغاز</th>
                <th>زمان پایان</th>
                <th>جنسیت</th>
                <th>قیمت تک جلسه ای (ریال)</th>
                <th>قیمت یک ماهه (ریال)</th>
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
                <td>کلاس فلان</td>
                <td>شنبه</td>
                <td>02:50</td>
                <td>04:00</td>
                <td>مرد</td>
                <td>21,000</td>
                <td>21,0000</td>
            </tr>
            <tr>
                <td>2</td>
                <td><p>
                        <input name="group1" type="radio" class="with-gap" id="rbtn3">
                        <label for="rbtn3"></label>
                    </p></td>
                <td>باشگاه</td>
                <td>کلاس فلان</td>
                <td>شنبه</td>
                <td>02:50</td>
                <td>04:00</td>
                <td>مرد</td>
                <td>21,000</td>
                <td>21,0000</td>
            </tr>
            <tr>
                <td>3</td>
                <td><p>
                        <input name="group1" type="radio" class="with-gap" id="rbtn4">
                        <label for="rbtn4"></label>
                    </p></td>
                <td>باشگاه</td>
                <td>کلاس فلان</td>
                <td>شنبه</td>
                <td>02:50</td>
                <td>04:00</td>
                <td>مرد</td>
                <td>21,000</td>
                <td>21,0000</td>
            </tr>
            <tr>
                <td>4</td>
                <td><p>
                        <input class="with-gap" name="group1" type="radio" id="rbtn8">
                        <label for="rbtn8"></label>
                    </p></td>
                <td>باشگاه</td>
                <td>کلاس فلان</td>
                <td>شنبه</td>
                <td>02:50</td>
                <td>04:00</td>
                <td>مرد</td>
                <td>21,000</td>
                <td>21,0000</td>
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
<script src="js/plugins/bootstrap-clockpicker.min.js"></script>
<script src="js/plugins/sweetalert2.min.js"></script>

<script>

    $('.clockpicker').clockpicker({
        autoclose: true
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


</script>
</body>

</html>