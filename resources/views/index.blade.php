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
    {{--    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">--}}
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}


</head>
<body>


@include('header_index');


<div class="container ">

    <div class="row sliderDiv justify-content-center align-items-center d-flex">

        <div class="col-1 mt-4 " style="box-sizing: border-box">
            <a href="#">
                <img class="rounded-3" src="{{url("image/home/off.png")}}" class="d-block "/>
            </a>
        </div>

        <div class="col-8 mt-4 " style="box-sizing: border-box">

            <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">

                <div class="carousel-inner rounded-3">
                    <div class="carousel-item active">
                        <img src="{{url("image/slider/slider1.jpg")}}" class="d-block " alt="Wild Landscape"/>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url("image/slider/slider2.jpg")}}" class="d-block " alt="Camera"/>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url("image/slider/slider3.jpg")}}" class="d-block " alt="Exotic Fruits"/>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url("image/slider/slider4.jpg")}}" class="d-block " alt="Exotic Fruits"/>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url("image/slider/slider5.jpg")}}" class="d-block " alt="Exotic Fruits"/>
                    </div>

                </div>


                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade"
                        data-mdb-slide="prev">
                    <h2> > </h2>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade"
                        data-mdb-slide="next">
                    <h2> < </h2>
                </button>
            </div>


        </div>

        <div class="col-3 mt-4 " style="box-sizing: border-box">
            <a href="#">
                <img class="rounded-3" src="{{url("image/home/besideSlider.jpg")}}" class="d-block "/>
            </a>
        </div>



    </div>

    <div class="row justify-content-center align-items-center">

        <div class="col-3 mt-3 " style="box-sizing: border-box">

            <a href="#">
                <img class="rounded-3" src="{{url("image/home/underSlider1.jpg")}}" class="d-block "/>
            </a>

        </div>

        <div class="col-3 mt-3 " style="box-sizing: border-box">

            <a href="#">
                <img class="rounded-3" src="{{url("image/home/underSlider2.jpg")}}" class="d-block "/>

            </a>

        </div>

        <div class="col-3 mt-3 " style="box-sizing: border-box">

            <a href="#">
                <img class="rounded-3" src="{{url("image/home/underSlider3.jpg")}}" class="d-block "/>

            </a>

        </div>

        <div class="col-3 mt-3 " style="box-sizing: border-box">

            <a href="#">
                <img class="rounded-3" src="{{url("image/home/underSlider4.jpg")}}" class="d-block "/>

            </a>

        </div>


    </div>


<br>


    <div class="justify-content-center align-items-center text-center mt-5">
        <h2 class="myFont ">دسته بندی های اسپیدشاپ</h2>
    </div>

  <div class="row mt-4 justify-content-center align-items-center text-center">

      <div class="col-2">
          <a href="#" class="myA">
          <div class=" myHiddenCard  text-center" style="width: 100%;">
                  <img class="rounded-3 circleHome " src="{{url("image/home/cicle1.png")}}" class="d-block " />
              <div class="card-body">
                  <p class="card-text ">اسباب بازی،کودک و نوزاد</p>
              </div>
          </div>
          </a>
      </div>


      <div class="col-2">
          <a href="#" class="myA">
              <div class=" myHiddenCard  text-center" style="width: 100%;">
                  <img class="rounded-3 circleHome " src="{{url("image/home/cicle2.png")}}" class="d-block " />
                  <div class="card-body">
                      <p class="card-text ">کالاهای سوپرمارکتی</p>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-2">
          <a href="#" class="myA">
              <div class=" myHiddenCard  text-center" style="width: 100%;">
                  <img class="rounded-3 circleHome " src="{{url("image/home/cicle3.png")}}" class="d-block " />
                  <div class="card-body">
                      <p class="card-text ">مد و پوشاک</p>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-2">
          <a href="#" class="myA">
              <div class=" myHiddenCard  text-center" style="width: 100%;">
                  <img class="rounded-3 circleHome " src="{{url("image/home/cicle4.png")}}" class="d-block " />
                  <div class="card-body">
                      <p class="card-text ">خودرو،ابزار و تجهیزات صنعتی</p>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-2">
          <a href="#" class="myA">
              <div class=" myHiddenCard  text-center" style="width: 100%;">
                  <img class="rounded-3 circleHome " src="{{url("image/home/cicle5.png")}}" class="d-block " />
                  <div class="card-body">
                      <p class="card-text ">موبایل</p>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-2">
          <a href="#" class="myA">
              <div class=" myHiddenCard  text-center" style="width: 100%;">
                  <img class="rounded-3 circleHome " src="{{url("image/home/cicle6.png")}}" class="d-block " />
                  <div class="card-body">
                      <p class="card-text ">کالای دیجیتال</p>
                  </div>
              </div>
          </a>
      </div>



  </div>

    <div class="row mt-2 justify-content-center align-items-center text-center">

        <div class="col-2">
            <a href="#" class="myA">
                <div class=" myHiddenCard  text-center" style="width: 100%;">
                    <img class="rounded-3 circleHome " src="{{url("image/home/cicle7.png")}}" class="d-block " />
                    <div class="card-body">
                        <p class="card-text ">ورزش و سفر</p>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-2">
            <a href="#" class="myA">
                <div class=" myHiddenCard  text-center" style="width: 100%;">
                    <img class="rounded-3 circleHome " src="{{url("image/home/cicle8.png")}}" class="d-block " />
                    <div class="card-body">
                        <p class="card-text ">کتاب، لوازم تحریر</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-2">
            <a href="#" class="myA">
                <div class=" myHiddenCard  text-center" style="width: 100%;">
                    <img class="rounded-3 circleHome " src="{{url("image/home/cicle9.png")}}" class="d-block " />
                    <div class="card-body">
                        <p class="card-text ">خانه و آشپزخانه</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-2">
            <a href="#" class="myA">
                <div class=" myHiddenCard  text-center" style="width: 100%;">
                    <img class="rounded-3 circleHome " src="{{url("image/home/cicle10.png")}}" class="d-block " />
                    <div class="card-body">
                        <p class="card-text ">زیبایی و سلامت</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-2">
            <a href="#" class="myA">
                <div class=" myHiddenCard  text-center" style="width: 100%;">
                    <img class="rounded-3 circleHome " src="{{url("image/home/cicle11.png")}}" class="d-block " />
                    <div class="card-body">
                        <p class="card-text ">محصولات بومی و محلی</p>
                    </div>
                </div>
            </a>
        </div>




    </div>



<div class="row mt-5" >

    <div class="col-6" style="box-sizing: border-box">
        <a href="#">
            <img class="rounded-3" style="width: 100%" src="{{url("image/home/underCircle1.jpg")}}"  />
        </a>
    </div>


    <div class="col-6" style="box-sizing: border-box">
        <a href="#">
            <img class="rounded-3" style="width: 100%" src="{{url("image/home/underCircle2.jpg")}}"/>
        </a>
    </div>


</div>



    <div class="justify-content-center align-items-center text-center mt-5">
        <h2 class="myFont ">پیشنهاد های اسپیدشاپ</h2>
    </div>
    <table class="table table-bordered mt-4">

        <tr>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " style="width: 170px" src="{{url("image/home/t1.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t ">کفش</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome "  src="{{url("image/home/t2.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t ">کنسول بازی</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " src="{{url("image/home/t3.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">مانیتور</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " src="{{url("image/home/t4.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">ادکلن</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " src="{{url("image/home/t5.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">اسباب بازی</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " src="{{url("image/home/t6.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">ساعت</p>
                        </div>
                    </div>
                </a>
            </td>



        </tr>


        <tr>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " style="width: 170px" src="{{url("image/home/t7.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">کیف</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " src="{{url("image/home/t8.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">پرینتر</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " src="{{url("image/home/t9.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">جوراب</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " src="{{url("image/home/t10.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">هدفون</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " src="{{url("image/home/t11.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">کیف پول</p>
                        </div>
                    </div>
                </a>
            </td>

            <td>
                <a href="#" class="myA">
                    <div class=" myHiddenCard  text-center" style="width: 100%;">
                        <img class="rounded-3 circleHome " src="{{url("image/home/t12.png")}}" class="d-block " />
                        <div class="card-body">
                            <p class="card-text card_t">توستر</p>
                        </div>
                    </div>
                </a>
            </td>



        </tr>


    </table>


    <div class=" row mt-5">
        <div class="col-12">
            <a href="#">
                <img class="rounded-3" src="{{url("image/home/nearFooter.jpg")}}" class="d-block " style="width: 100%"/>
            </a>
        </div>

    </div>




    <div class=" text-start  mt-5">
        <h3 class="myFont ">خواندنی ها</h3>
    </div>
<div class="row mt-4">

    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="{{url("image/home/read1.jpg")}}" class="card-img-top" alt="Sunset Over the Sea"/>
            <div class="card-body">
                <p class="card-text card_text_margin" dir="rtl">کامپیوترهای عصر جدید انقلابی در طراحی ایجاد کرده اند</p>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="{{url("image/home/read2.jpg")}}" class="card-img-top" alt="Sunset Over the Sea"/>
            <div class="card-body">
                <p class="card-text card_text_margin" dir="rtl">خورشید گرفتگی در ماه آبان عکاسان زیادی را به صحنه برد</p>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="{{url("image/home/read3.jpg")}}" class="card-img-top" alt="Sunset Over the Sea"/>
            <div class="card-body">
                <p class="card-text card_text_margin" dir="rtl">ماهواره استارلینک برای ایران به آسمان رفت...</p>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="{{url("image/home/read4.jpg")}}" class="card-img-top" alt="Sunset Over the Sea"/>
            <div class="card-body">
                <p class="card-text card_text_margin" dir="rtl">سامسونگ نسل جدید گوشی های خود را با اکسینوس چدید تولید میکند.</p>
            </div>
        </div>
    </div>


</div>




    <br>


</div>

@include('footer_index');


<script src="{{url('js/mdb.min.js')}}"></script>
<script src="{{url('js/script.js')}}"></script>
</body>
</html>
