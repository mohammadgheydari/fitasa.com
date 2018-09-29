<?php include 'head.php'; ?>
<link rel="stylesheet" href="css/plugins/bootstrap-clockpicker.min.css">

<link href="js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">
<link rel="stylesheet" href="js/plugins/owl/owl.carousel.css">
<link rel="stylesheet" href="js/plugins/owl/owl.theme.default.css">
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

    .google-map {
        width: 100%;
        max-width: 500px;
        height: 250px;
        background: grey;
        text-align: center;
        line-height: 250px;
        margin: 0 auto;
    }
    #modal-add .mycheckbox input[type="checkbox"] + label{
        white-space: nowrap !important;
        margin-top: 25px;
    }
</style>
<!-- //////////////////////////////////// Content Section //////////////////////////////////////// -->
<div class="container">
    <div class="row margin-bottom-0">
        <!--Top title-->
        <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title "><i class="mdi-action-track-changes"></i>ایجاد باشگاه جدید</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">
        <div class="col l10 m12 s12 offset-l1">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
                        <div class="col s12 right">
                            <p class="right-align mr-15">ثبت موقعیت مکانی
                                باشگاه</p>
                            <div class="google-map" id="googleMap">
                                نقشه گوگل
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
                            <div class="input-field">
                                <i class="mdi-hardware-phone-iphone prefix"></i>
                                <span class="validationMessage" id="mobileValidation">شماره موبایل معتبر نمی باشد</span>
                                <input id="mobile" type="text" class="validate">
                                <label for="mobile" class="">تلفن همراه</label>
                            </div>
                        </div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <i class="mdi-communication-call prefix"></i>
                                <input id="phone" type="text" class="validate">
                                <label for="phone" class="">تلفن ثابت</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-maps-local-offer prefix"></i>
                                <input id="gymname" type="text" class="validate">
                                <label for="gymname" class="">نام باشگاه</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-action-account-box prefix"></i>
                                <input id="firstname" type="text" class="validate">
                                <label for="firstname" class="">نام مسئول باشگاه</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-action-account-box prefix"></i>
                                <input id="lastname" type="text" class="validate">
                                <label for="lastname" class="">نام خانوادگی مسئول باشگاه</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-social-person prefix"></i>
                                <input id="username" type="text" class="validate">
                                <label for="username" class="">نام کاربری</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-communication-email prefix"></i>
                                <span class="validationMessage"
                                      id="emailValidation">پست الکترونیکی معتبر نمی باشد</span>
                                <input id="email" type="email" class="validate">
                                <label for="email" class="">پست الکترونیک</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-social-people prefix "></i>
                                <label>جنسیت باشگاه</label>
                                <select title="جنسیت">
                                    <option value="1">مرد</option>
                                    <option value="2">زن</option>
                                    <option value="3">هردو</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-maps-my-location prefix"></i>
                                <input id="address" type="text" class="validate">
                                <label for="address" class="">آدرس</label>
                            </div>
                        </div>
                        <div class="col s12 ">
                            <p class="right-align mr-15">تصاویر باشگاه</p>
                        </div>
                        <div class="col s12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <button class="delete" onClick=deleteFromGallery($(this),event)>
                                        <i class="mdi-action-delete"></i>
                                    </button>
                                    <img src="images/1537793606_1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <button class="delete" onClick=deleteFromGallery($(this),event)>
                                        <i class="mdi-action-delete"></i>
                                    </button>
                                    <img src="images/1537793606_3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <button class="delete" onClick=deleteFromGallery($(this),event)>
                                        <i class="mdi-action-delete"></i>
                                    </button>
                                    <img src="images/1537801084_2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <button class="delete" onClick=deleteFromGallery($(this),event)>
                                        <i class="mdi-action-delete"></i>
                                    </button>
                                    <img src="images/1537801638_2339813.jpg" alt="">
                                </div>
                                <div class="item">
                                    <button class="delete" onClick=deleteFromGallery($(this),event)>
                                        <i class="mdi-action-delete"></i>
                                    </button>
                                    <img src="images/bentover.jpg" alt="">
                                </div>
                                <div class="item">
                                    <button class="delete" onClick=deleteFromGallery($(this),event)>
                                        <i class="mdi-action-delete"></i>
                                    </button>
                                    <img src="images/maxresdefault.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m3 margin-upload-btn right margin-top-10">
                            <label for="input-file-max-fs">بارگذاری عکس باشگاه</label>
                            <input type="file" id="input-file-max-fs" class="dropify-fa narrow"
                                   data-max-file-size="900K"/>
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
                        <div class="col s12 ">
                            <p class="right-align mr-15">برنامه زمانبندی
                                باشگاه</p>
                        </div>
                        <div class=" col s12 m12 l8 right">
                            <table class="highlight striped centered farzan-table week-plan">
                                <tbody>
                                <tr data-index="1">
                                    <td>شنبه</td>
                                    <td>
                                        <!-- <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a> -->
                                    </td>
                                </tr>
                                <tr data-index="2">
                                    <td>یک شنبه</td>
                                    <td>
                                        <!-- <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a> -->
                                    </td>
                                </tr>
                                <tr data-index="3">
                                    <td>دو شنبه</td>
                                    <td>
                                        <!-- <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a> -->
                                    </td>
                                </tr>
                                <tr data-index="4">
                                    <td>سه شنبه</td>
                                    <td>
                                        <!-- <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a> -->
                                    </td>
                                </tr>
                                <tr data-index="5">
                                    <td>چهار شنبه</td>
                                    <td>
                                        <!-- <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a> -->
                                    </td>
                                </tr>
                                <tr data-index="6">
                                    <td>پنج شنبه</td>
                                    <td>
                                        <!-- <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a> -->
                                    </td>
                                </tr>
                                <tr data-index="7">
                                    <td>جمعه</td>
                                    <td>
                                        <!-- <a class="btn-floating btn-flat waves-effect waves-light green accent-4 white-text tooltip-top add-class">
                                            <i class="mdi-content-add"></i>
                                        </a> -->
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class=" col s12 m12 l4 right">
                            <table class="highlight striped centered farzan-table">
                            <thead class="white-text purple">
                               <tr>
                                    <th>
                                        نوع کلاس
                                    </th>
                                </tr>
                            </thead>
                                <tbody>
                                <tr data-index="1">
                                    <td>
                                        <a class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 add-class">
                                            کاراته
                                        </a>
                                    </td>
                                </tr>
                                <tr data-index="2">
                                    <td>
                                        <a class="btn waves-effect waves-light create-btn z-depth-1 green accent-4 add-class">
                                            تکواندو
                                        </a>
                                    </td>
                                </tr>
                                <tr data-index="3">
                                    <td>
                                        <a class="btn waves-effect waves-light create-btn z-depth-1 purple accent-4 add-class">
                                            بوکس
                                        </a>
                                    </td>
                                </tr>
                                <tr data-index="4">
                                    <td>
                                        <a class="btn waves-effect waves-light create-btn z-depth-1 red accent-4 add-class">
                                            جودو
                                        </a>
                                    </td>
                                </tr>
                                <tr data-index="5">
                                    <td>
                                        <a class="btn waves-effect waves-light create-btn z-depth-1 teal accent-4 add-class">
                                            کنگ فو
                                        </a>
                                    </td>
                                </tr>
                                <tr data-index="6">
                                    <td>
                                        <a class="btn waves-effect waves-light create-btn z-depth-1 cyan accent-4 add-class">
                                            کیک بوکسینگ
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clear"></div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">ایجاد باشگاه
                        </button>

                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="modal-add" class="modal modal-fixed-footer z-depth-5">
    <input type="hidden" id="index-bg" name="bg" value="bg">
    <input type="hidden" id="index-value" name="index" value="index">
    <input type="hidden" id="add-edit-type" name="add-edit-type" value="add">
    <div class="modal-content">
        <div class="white-text card-header">
            <h5 class="form-title">
                افزودن کلاس
            </h5>
        </div>
        <div class="card-content black-text margin-10">
            <form action="#">
                <div class="row">
                    <div class="col s12 m12 l10 offset-l1">
                        <div class="col s12 m6 right">
                            <div class="input-field farzan-select  disabled">
                                <i class="mdi-action-view-agenda prefix "></i>
                                <label>نوع کلاس</label>
                                <select title="نوع" id="classType" disabled>
                                    <option value="1">کاراته</option>
                                    <option value="2">تکواندو</option>
                                    <option value="3">بوکس</option>
                                    <option value="4">جودو</option>
                                    <option value="5">کونگ فو</option>
                                    <option value="6">کیک بوکسینگ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-social-people prefix"></i>
                                <label>جنسیت کلاس</label>
                                <select title="جنسیت" id="classGender">
                                    <option value="1">مرد</option>
                                    <option value="2">زن</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <!--  <div class="col s6 m2 right">
                             <input type="radio" name="Gender-tick" id="men">
                            <label for="men" class="checkbox-text black-text" style="font-size: 12pt">
                                 <span>آقایان</span>
                             </label>
                         </div>
                         <div class="col s6 m2 right">
                             <input type="radio" name="Gender-tick" id="women">
                             <label for="women" class="checkbox-text black-text" style="font-size: 12pt">
                                 <span>بانوان</span>
                             </label>
                         </div> -->
                        <div class="clear"></div>
                        <div class="row">
                            <div class="input-field col s12 m2 right mycheckbox">
                                <input type="checkbox" id="day1">
                                <label for="day1" class="checkbox-text margin-bottom-0">شنبه</label>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourFrom1" type="text" class="validate clockpicker" disabled="disabled">
                                    <label for="hourFrom1">از</label>
                                </div>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourTo1" type="text" class="validate clockpicker"  disabled="disabled">
                                    <label for="hourTo1">به</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m2 right mycheckbox">
                                <input type="checkbox" id="day2">
                                <label for="day2" class="checkbox-text margin-bottom-0">یک شنبه</label>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourFrom2" type="text" class="validate clockpicker" disabled="disabled">
                                    <label for="hourFrom2">از</label>
                                </div>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourTo2" type="text" class="validate clockpicker"  disabled="disabled">
                                    <label for="hourTo2">به</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m2 right mycheckbox">
                                <input type="checkbox" id="day3">
                                <label for="day3" class="checkbox-text margin-bottom-0">دو شنبه</label>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourFrom3" type="text" class="validate clockpicker" disabled="disabled">
                                    <label for="hourFrom3">از</label>
                                </div>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourTo3" type="text" class="validate clockpicker"  disabled="disabled">
                                    <label for="hourTo3">به</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m2 right mycheckbox">
                                <input type="checkbox" id="day4">
                                <label for="day4" class="checkbox-text margin-bottom-0">سه شنبه</label>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourFrom4" type="text" class="validate clockpicker" disabled="disabled">
                                    <label for="hourFrom4">از</label>
                                </div>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourTo4" type="text" class="validate clockpicker"  disabled="disabled">
                                    <label for="hourTo4">به</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m2 right mycheckbox">
                                <input type="checkbox" id="day5">
                                <label for="day5" class="checkbox-text margin-bottom-0">چهارشنبه</label>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourFrom5" type="text" class="validate clockpicker" disabled="disabled">
                                    <label for="hourFrom5">از</label>
                                </div>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourTo5" type="text" class="validate clockpicker"  disabled="disabled">
                                    <label for="hourTo5">به</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m2 right mycheckbox">
                                <input type="checkbox" id="day6">
                                <label for="day6" class="checkbox-text margin-bottom-0">پنج شنبه</label>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourFrom6" type="text" class="validate clockpicker" disabled="disabled">
                                    <label for="hourFrom6">از</label>
                                </div>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourTo6" type="text" class="validate clockpicker"  disabled="disabled">
                                    <label for="hourTo6">به</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m2 right mycheckbox">
                                <input type="checkbox" id="day7">
                                <label for="day7" class="checkbox-text margin-bottom-0">جمعه</label>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourFrom7" type="text" class="validate clockpicker" disabled="disabled">
                                    <label for="hourFrom7">از</label>
                                </div>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourTo7" type="text" class="validate clockpicker"  disabled="disabled">
                                    <label for="hourTo7">به</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m2 right mycheckbox">
                                <input type="checkbox" id="day0">
                                <label for="day0" class="checkbox-text margin-bottom-0">هر روز</label>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourFrom0" type="text" class="validate clockpicker" disabled="disabled">
                                    <label for="hourFrom0">از</label>
                                </div>
                            </div>
                            <div class="col s12 m5 right">
                                <div class="input-field ">
                                    <i class="mdi-action-query-builder prefix"></i>
                                    <input id="hourTo0" type="text" class="validate clockpicker"  disabled="disabled">
                                    <label for="hourTo0">به</label>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-action-credit-card prefix"></i>
                                <input id="price-period" type="text" class="validate price">
                                <label for="price-period" class="">قیمت دوره ای</label>
                            </div>
                        </div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-action-credit-card prefix"></i>
                                <input id="price-session" type="text" class="validate price">
                                <label for="price-session" class="">قیمت جلسه ای</label>
                            </div>
                        </div>
                        <div class="col s12 m6 right">
                            <div class="input-field ">
                                <i class="mdi-social-school prefix"></i>
                                <input id="trainer" type="text" class="validate">
                                <label for="trainer" class="">نام مربی</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left add-class-btn">
                            ثبت
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcnWyxVHj9h59zHsHq2gygW1vMEExHu5E&callback=initialize"></script>-->

<script src="js/plugins/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript" src="js/plugins/dropify/js/dropify.min.js"></script>
<script src="js/plugins/owl/owl.carousel.min.js"></script>
<script>
    // Basic
    $('.dropify').dropify();
    $("#input-file-max-fs").on('change', function () {
        setTimeout(function () {
            var imageURL = $(".dropify-render img").attr("src");
            if (imageURL != undefined){
                $(".dropify-clear").click();
                var content = '<div class="item">' +
                    '<button class="delete" onClick=deleteFromGallery($(this),event)>' +
                    '<i class="mdi-action-delete"></i>' +
                    '</button>' +
                    '<img src="' + imageURL + '">' +
                    '</div>';
                var owl = $(".owl-carousel");
                owl.append(content);
                $(".owl-carousel").owlCarousel('destroy');
                Slider();
            }
        }, 100);
    });
    // Translated
    $('.dropify-fa').dropify({
        messages: {
            default: 'یک فایل بر روی صفحه بکشید یا کلیک کنید',
            replace: 'تغییر فایل',
            remove: 'حذف کردن',
            error: 'متاسفانه حجم فایل بیشتر از 200 کیلو بایت است.'
        }
    });
    $('.clockpicker').clockpicker({
        autoclose: true
    });
    function Slider() {
        $(".owl-carousel").owlCarousel({
            rtl: true,
            loop: false,
            autoHeight: true,
            margin: 10,
            nav: false,
            // rtl:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }
    Slider();


    $('.submit-form').click(function () {
        var formIsValid = true;
        $(".validationMessage").fadeOut();
        if (!validateEmail($("#email").val())) {
            formIsValid = false;
            $("#emailValidation").fadeIn();
        }
        if (!validateMobile($("#mobile").val())) {
            formIsValid = false;
            $("#mobileValidation").fadeIn();
        }
        if (formIsValid) {
            $(this).parents("form").submit();
        }
    });






</script>
</body>

</html>