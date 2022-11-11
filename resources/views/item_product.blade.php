<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpeedShop</title>


    <link rel="stylesheet" type="text/css" href="{{url('css/mdb.rtl.min.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">--}}
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}


</head>
<body>


@include('header_index');


<div class="container ">

    <div class="card">
        <div class="card-body justify-content-center address_item align-items-center text-start" dir="rtl">
            <a href="#" class="myA">
                اسپید شاپ
            </a>
            /
            <a href="#" class="myA">
                محصولات
            </a>
            /
            <a href="#" class="myA">
                لپ تاپ
            </a>
            /
            <a href="#" class="myA">
                lenovo,ideapad330
            </a>

        </div>
    </div>


    <div class="card_color card mt-4">

        <div class="row mt-2" dir="rtl">

            <div class="col-3">

            </div>

            <div class="col-9 text-center justify-content-center align-items-center">
                <h4 class="">
                    Lenovo,ideapad330-i7 Ram:20G Hard:1T SSD:256G
                    <b>
                        <hr class="mt-2" style="width: 80%;margin: auto;">
                    </b>
                </h4>

            </div>


        </div>

        <div class="row  " dir="rtl">

            <div class="col-3 ">

                <img id="ItemImage" style="width:100%" src="{{url("image/item/lenovo1.jpg")}}">

            </div>

            <div class="col-6 col_padding desc_item mt-1">

                <h4 class="mt-4">
                    ویژگی ها:
                </h4>

                <ul>
                    <li class="d-flex">
                        <h5 class="margin_item_desc">
                            <b>
                                سری پردازنده:
                            </b>
                        </h5>
                        <h5>
                            Core i7
                        </h5>
                    </li>

                    <li class="d-flex">
                        <h5 class="margin_item_desc">
                            <b>
                                ظرفیت حافظه رم:
                            </b>
                        </h5>
                        <h5>
                            20G
                        </h5>
                    </li>

                    <li class="d-flex">
                        <h5 class="margin_item_desc">
                            <b>
                                نوع حافظه رم:
                            </b>
                        </h5>
                        <h5>
                            DDR4
                        </h5>
                    </li>

                    <li class="d-flex">
                        <h5 class="margin_item_desc">
                            <b>
                                پردازنده گرافیکی:
                            </b>
                        </h5>
                        <h5>
                            Intel, MX150
                        </h5>
                    </li>

                    <li class="d-flex">
                        <h5 class="margin_item_desc">
                            <b>
                                اندازه صفحه نمایش:
                            </b>
                        </h5>
                        <h5>
                            15.3 اینچ
                        </h5>
                    </li>

                </ul>
                <br>


                <h3 class="red_brand">
                    قیمت: 28,700,000 تومان
                </h3>


            </div>

            <div class="col-3 col_padding mt-2" style="padding-left: 15px;padding-right: 15px">

                <div class="d-flex mt-3">
                    <h5 class="margin_item_desc">
                        امتیاز محصول:

                    </h5>
                    <div dir="ltr">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>

                <h5>
                    <span class="fa fa-check-circle " style="color: rgba(37,80,150,0.75);margin-left: 3px"></span>

                    موجود در انبار
                </h5>

                <hr style="width: 70%">

                <h5>
                    <span class="fa fa-motorcycle " style="color: rgba(37,80,150,0.75);margin-left: 3px"></span>

                    ارسال سریع
                </h5>

                <hr style="width: 70%">

                <h5>
                    <span class="fa fa-credit-card-alt " style="color: rgba(37,80,150,0.75);margin-left: 3px"></span>

                    پرداخت در محل
                </h5>

                <hr style="width: 70%">

                <h5>
                    <span class="fa fa-map " style="color: rgba(37,80,150,0.75);margin-left: 3px"></span>

                    ارسال به تمام نقاط کشور
                </h5>

                <div class="d-grid gap-2 mt-4 ">
                    <button type="button"
                            class="btn btn-danger d-flex btn-lg text-center justify-content-center align-items-center"
                            style="color:white;width: 70%">
                        افزودن به سبد خرید
                        <i class="material-icons mt-1" style="font-size:15px;margin-right: 3px">shopping_cart</i>
                    </button>
                </div>


            </div>


        </div>

        <div class="row" dir="rtl">

            <div class="col-3 ">
                <div class="row">

                    <div class="col-3 " style="margin: 0px 15px 7px 0px;">
                        <a href="#">
                            <img class="border-under-image" style="width:100%" src="{{url("image/item/lenovo2.jpg")}} "
                                 onclick="itemImageChange(this)">
                        </a>

                    </div>

                    <div class="col-3 " style="margin: 0px -15px 7px 15px;">
                        <a href="#">
                            <img class="border-under-image" style="width:100%" src="{{url("image/item/lenovo3.jpg")}}"
                                 onclick="itemImageChange(this)">
                        </a>
                    </div>

                    <div class="col-3" style="margin: 15px">

                    </div>


                </div>

            </div>

            <div class="col-9">
            </div>

        </div>

    </div>

    <div dir="rtl" class="mt-4 mb-0">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs mb-3 d-flex" id="ex-with-icons" role="tablist" style="margin-bottom: 7px!Important">
            <li class="nav-item" role="presentation">
                <a class="nav-link active d-flex" id="ex-with-icons-tab-1" data-mdb-toggle="tab" href="#ex-with-icons-tabs-1"
                   role="tab"
                   aria-controls="ex-with-icons-tabs-1" aria-selected="true">
                    <h6><i class="fas fa-chart-pie fa-fw me-2"></i>مشخصات محصول</h6>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link d-flex" id="ex-with-icons-tab-2" data-mdb-toggle="tab" href="#ex-with-icons-tabs-2"
                   role="tab"
                   aria-controls="ex-with-icons-tabs-2" aria-selected="false">
                    <h6><i class="fas fa-comment fa-fw me-2"></i>نظرات</h6></a>
            </li>

        </ul>
        <!-- Tabs navs -->


    </div>

    <div class="card  card_color p-3" dir="rtl">
        <div>
            <h3>
                <i class="fas fa-info-circle fa-fw me-2" style="margin-left: -5px!Important"></i>
                مشخصات فیزیکی
            </h3>
        </div>

        <div class="row mt-2">

            <div class="col-4 physics-desc card">
                ابعاد
            </div>

            <div class="col-7 physics-desc card">
                24.3×251.9×260.6
            </div>

        </div>


        <div class="row mt-2 ">

            <div class="col-4 physics-desc card mt-2">
                وزن
            </div>

            <div class="col-7 physics-desc card mt-2">
                2.5 kg
            </div>

        </div>


    </div>

    <div class="card mt-4 mb-4 d-flex" dir="rtl" style="background-color: rgba(255,255,255,0.53)!Important">

        <ul class="nav nav-tabs mb-3 ul-color-margin" id="ex-with-icons" role="tablist" >
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex-with-icons-tab-1" data-mdb-toggle="tab" href="#ex-with-icons-tabs-1"
                   role="tab"
                   aria-controls="ex-with-icons-tabs-1" aria-selected="true">
                    <h5>محصولات مشابه </h5>
                </a>
            </li>

        </ul>

        <div class="row justify-content-center align-items-center">
            <div class="col-3 card card_color mt-3 m-2 mb-4" style="width: 23%">

                <div class="row mt-2 justify-content-center align-items-center text-center">
                    <div class="col-5">
                        <button class="btn btn-danger p-1 myFont w-100">پیشنهاد ویژه</button>
                    </div>

                    <div class="col-7">
                        <div dir="ltr" style="width: 100%">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="align-items-center justify-content-center text-center">
                    <img src="{{url("image/item/l1.jpg")}}" style="width: 100%">
                </div>
                <div class="text-center">
                    <h5>
                        Asus Pro 512
                    </h5>
                </div>

                <div class="row mt-2 mb-2 justify-content-center align-items-center text-center">
                    <div class="col-5">
                        <button class="btn btn-info p-1 myFont w-100 " style="text-align: center">
                            <h6 style="margin: auto">
                                <i class="fa fa-shopping-cart "></i>
                                خرید

                            </h6>
                        </button>
                    </div>

                    <div class="col-7">
                        <h5>
                            32,570,000 تومان
                        </h5>
                    </div>
                </div>


            </div>
            <div class="col-3 card card_color mt-3 m-2 mb-4" style="width: 23%">

                <div class="row mt-2 justify-content-center align-items-center text-center">
                    <div class="col-5">
                        <button class="btn btn-danger p-1 myFont w-100">پیشنهاد ویژه</button>
                    </div>

                    <div class="col-7">
                        <div dir="ltr" style="width: 100%">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="align-items-center justify-content-center text-center">
                    <img src="{{url("image/item/l2.png")}}" style="width: 100%">
                </div>
                <div class="text-center">
                    <h5>
                     Mac Book 224
                    </h5>
                </div>

                <div class="row mt-2 mb-2 justify-content-center align-items-center text-center">
                    <div class="col-5">
                        <button class="btn btn-info p-1 myFont w-100 " style="text-align: center">
                            <h6 style="margin: auto">
                                <i class="fa fa-shopping-cart "></i>
                                خرید

                            </h6>
                        </button>
                    </div>

                    <div class="col-7">
                        <h5>
                            62,425,500 تومان
                        </h5>
                    </div>
                </div>


            </div>
            <div class="col-3 card card_color mt-3 m-2 mb-4" style="width: 23%">

                <div class="row mt-2 justify-content-center align-items-center text-center">
                    <div class="col-5">
                        <button class="btn btn-danger p-1 myFont w-100">پیشنهاد ویژه</button>
                    </div>

                    <div class="col-7">
                        <div dir="ltr" style="width: 100%">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    </div>
                </div>
                <div class="align-items-center justify-content-center text-center">
                    <img src="{{url("image/item/l3.png")}}" style="width: 100%">
                </div>
                <div class="text-center">
                    <h5>
                        Hp ProBook 320
                    </h5>
                </div>

                <div class="row mt-2 mb-2 justify-content-center align-items-center text-center">
                    <div class="col-5">
                        <button class="btn btn-info p-1 myFont w-100 " style="text-align: center">
                            <h6 style="margin: auto">
                                <i class="fa fa-shopping-cart "></i>
                                خرید

                            </h6>
                        </button>
                    </div>

                    <div class="col-7">
                        <h5>
                            25,780,000 تومان
                        </h5>
                    </div>
                </div>


            </div>
            <div class="col-3 card card_color mt-3 m-2 mb-4" style="width: 23%">

                <div class="row mt-2 justify-content-center align-items-center text-center">
                    <div class="col-5">
                        <button class="btn btn-danger p-1 myFont w-100">پیشنهاد ویژه</button>
                    </div>

                    <div class="col-7">
                        <div dir="ltr" style="width: 100%">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="align-items-center justify-content-center text-center">
                    <img src="{{url("image/item/l4.jpg")}}" style="width: 100%">
                </div>
                <div class="text-center">
                    <h5>
                     Dell 522
                    </h5>
                </div>

                <div class="row mt-2 mb-2 justify-content-center align-items-center text-center">
                    <div class="col-5">
                        <button class="btn btn-info p-1 myFont w-100 " style="text-align: center">
                            <h6 style="margin: auto">
                                <i class="fa fa-shopping-cart "></i>
                                خرید

                            </h6>
                        </button>
                    </div>

                    <div class="col-7">
                        <h5>
                            28,300,000 تومان
                        </h5>
                    </div>
                </div>


            </div>

        </div>

    </div>

</div>


</div>

@include('footer_index');


<script src="{{url('js/mdb.min.js')}}"></script>
<script src="{{url('js/script.js')}}"></script>
</body>
</html>
