<?php include 'head.php'; ?>
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
    .tab-card{
        padding: 10px   ;
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
            <h5 class="breadcrumbs-title "><i class="mdi-action-track-changes"></i>انتخاب باشگاه کلاس</h5>
            <div class="divider top-bottom-margin col s12 m12 l12 right"></div>
        </div>
    </div>


    <div class="row">
        <div class="col l10 m12 s12 offset-l1">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
                        <div class="col s12 right">
                            <p class="right-align mr-15">
                                از میان باشگاه های اطراف خود یک باشگاه را انتخاب کنید
                            </p>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-view-agenda prefix"></i>
                                <label>نوع باشگاه</label>
                                <select title="باشگاه">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-view-agenda prefix"></i>
                                <label>نوع کلاس</label>
                                <select title="باشگاه">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-editor-insert-invitation prefix"></i>
                                <label>روزهای هفته</label>
                                <select title="هفته">
                                    <option value="1">شنبه</option>
                                    <option value="2">یک شنبه</option>
                                    <option value="3">دوشنبه</option>
                                    <option value="4">سه شنبه</option>
                                    <option value="5">چهارشنبه</option>
                                    <option value="6">پنج شنبه</option>
                                    <option value="7">جمعه</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear margin-top-25"></div>

                        <div class="col s12 m4 l2 right">
                            <p class="right-align mr-15">شیفت</p>
                        </div>
                        <div class="input-field col s12 m4 l2 right mycheckbox">
                            <input type="checkbox" id="morning">
                            <label for="morning" class="checkbox-text margin-bottom-0">صبح</label>
                        </div>
                        <div class="input-field col s12 m4 l2 right mycheckbox">
                            <input type="checkbox" id="afternoon">
                            <label for="afternoon" class="checkbox-text margin-bottom-0">بعدازظهر</label>
                        </div>
                        <div class="input-field col s12 m4 l2 right mycheckbox">
                            <input type="checkbox" id="night">
                            <label for="night" class="checkbox-text margin-bottom-0">شب</label>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m4 l2 right ">
                            <p class="right-align mr-15">جنسیت</p>
                        </div>
                        <div class="input-field col s12 m4 l2 right mycheckbox">
                            <input type="checkbox" id="male">
                            <label for="male" class="checkbox-text margin-bottom-0">مرد</label>
                        </div>
                        <div class="input-field col s12 m4 l2 right mycheckbox">
                            <input type="checkbox" id="female">
                            <label for="female" class="checkbox-text margin-bottom-0">زن</label>
                        </div>

                        <div class="clear margin-top-25"></div>

                        <div class="clear"></div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">
                            نمایش به صورت نقشه
                        </button>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">
                            نمایش به صورت لیست
                        </button>
                        <div class="clear margin-top-25"></div>

                        <div class="col s12 right">
                            <div class="google-map" id="googleMap">
                                نقشه گوگل
                            </div>
                        </div>
                        <div class="clear margin-top-25"></div>
                        <div class="row margin-0">
                            <div class="table-option-holder">
                                <p>فهرست باشگاه</p>
                            </div>
                            <div class="clear"></div>
                            <table class="responsive-table striped centered farzan-table  first-col-shrink">
                                <thead class="white-text purple">
                                <tr class="my-table">
                                    <th>ردیف</th>
                                    <th>لوگو باشگاه</th>
                                    <th>نوع باشگاه</th>
                                    <th>آدرس</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr onclick="openModal()">
                                    <td>1</td>
                                    <td>
                                        <img src="./images/apple.png"/>
                                    </td>
                                    <td>نوع</td>
                                    <td>تهران خ فلان کوچه فلان</td>
                                </tr>
                                <tr onclick="openModal()">
                                    <td>2</td>
                                    <td>
                                        <img src="./images/apple.png"/>
                                    </td>
                                    <td>نوع</td>
                                    <td>تهران خ فلان کوچه فلان</td>
                                </tr>
                                <tr onclick="openModal()">
                                    <td>3</td>
                                    <td>
                                        <img src="./images/apple.png"/>
                                    </td>
                                    <td>نوع</td>
                                    <td>تهران خ فلان کوچه فلان</td>
                                </tr>
                                <tr onclick="openModal()">
                                    <td>4</td>
                                    <td>
                                        <img src="./images/apple.png"/>
                                    </td>
                                    <td>نوع</td>
                                    <td>تهران خ فلان کوچه فلان</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="clear"></div>
                        </div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">
                            ثبت نام و پرداخت
                        </button>
                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="modal-add" class="modal modal-fixed-footer z-depth-5">
    <div class="modal-content">
        <div class="card-content black-text margin-10">
            <form action="#">
                <div class="row">
                    <div class="col s12 m12">
                        <img src="./images/apple.png"  width="60px" class="center-block"/>
                        <div class="clear"></div>
                        <ul id="tabs-swipe-demo" class="tabs ltr">
                            <li class="tab col s3 right"><a  href="#swipe-2">درباره باشگاه</a></li>
                            <li class="tab col s3 right"><a class="active" href="#swipe-1">کلاس ها</a></li>
                        </ul>
                        <div id="swipe-1" class="col s12 ">
                            <div class="clear margin-bottom-10"></div>

                            <ul id="tabs-swipe-demo" class="tabs ltr">
                                <li class="tab col s3 right"><a  href="#dx">دی ایکس</a></li>
                                <li class="tab col s3 right"><a  href="#fitness">فیتنس</a></li>
                                <li class="tab col s3 right"><a  href="#trx">تی آر ایکس</a></li>
                                <li class="tab col s3 right"><a class="active" href="#pilates">پیلاتس</a></li>
                            </ul>
                            <div id="pilates" class=" right-align">
                              <div class="card tab-card">
                                  <h3>پیلاتس 1</h3>
                                  <p> روز/روزهای: شنبه، یک شنبه، دوشنبه <span style="padding-right: 20px">ساعت: 10:20 تا 11:00</span></p>
                                  <p>نام مربی: فلان فلانی</p>
                                  <p>قیمت ماهانه: 200,000 تومان</p>
                              </div>
                                <div class="card tab-card">
                                    <h3>پیلاتس 2</h3>
                                    <p> روز/روزهای: شنبه، یک شنبه، دوشنبه <span style="padding-right: 20px">ساعت: 10:20 تا 11:00</span></p>
                                    <p>نام مربی: فلان فلانی</p>
                                    <p>قیمت ماهانه: 200,000 تومان</p>
                                </div>
                            </div>
                            <div id="trx" class="col s12">Test 2</div>
                            <div id="fitness" class="col s12">Test 2</div>
                            <div id="dx" class="col s12">Test 2</div>


                        </div>
                        <div id="swipe-2" class="col s12">
                            <div class="card tab-card">
                                <p>
                                    توضیحات باشگاه:
                                    <br>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                </p>
                                <p>ساعت کار باشگاه
                                    <br>
                                    شنبه: از 2:20 تا 5:25
                                    <br>
                                    یک شنبه: از 2:20 تا 5:25
                                </p>
                                <p>آدرس: تهران خ فلان کوچه فلان</p>
                                <p>اطلاعات تماس: 021546321</p>
                                <p>آدرس ایمیل: farzan@gmail.com</p>
                            </div>
                        </div>
                        <a href="34-2.php" class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left add-class-btn">
                            ثبت نام و پرداخت
                        </a>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcnWyxVHj9h59zHsHq2gygW1vMEExHu5E&callback=initialize"></script>-->

<script>

    function openModal(){
        $('#modal-add').openModal()
    }
</script>
</body>

</html>