<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- add icons width bootstrap icons in bootstrap site -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <!-- add fonts width css file // in assets/css/Vazirmatn-FD-font-face.css -->
    <link rel="stylesheet" href="assets/css/Vazirmatn-FD-font-face.css">
    <!-- add main style file // in assets/css/style.css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- title show in browser on tab -->
    <title>digicala</title>
</head> 
<body  id="body" onscroll="scrollBody() , defultBody() , SuperScroll()">

<div class="container">
<header class="header">
    <!-- class in right header section -->
        <section class="header_fixed_right">
             <!-- class logo for create logo in header on right header -->
                 <div class="logo">
                    <img src="assets/img/digicala.png">
                 </div>
             <!-- class serach for search item in header on left logo item -->
                 <div class="search_bar">
                    <section class="search">
                        <input type="text" class="search" placeholder="جستجو" id="sear"   onclick="showVisible()">
                        <span class="search_icon"> <i class="bi bi-search"></i> </span>
                    </section>
                    <div class="searchPanel" id="added">
                        <div style="display: flex;justify-content: center;">
                        <i class="bi bi-x-lg" onclick="Message();" id="close" style="margin-top: 10px;border: 1px solid cadetblue;border-radius: 80px;display: flex;justify-content: center;width: 30px;
                        height: 30px;align-items: center;background-color: red;color: azure;cursor: pointer;"></i>
                        </div>
                        <input style="background-color: white;border: none;margin-top: 10px;display: flex;justify-content: space-between;" type="text" placeholder="جستجو" id="panelSe">
                        <hr style="width: 630px;margin: 0 auto;margin-top: 10px;border: 0.5px solid blue;">
                        <div style="width: 290px;height: 265px;margin: 20px auto;">
                           <img src="assets/img/phone.webp" alt="Notload" style="width: 100%;height: 100%;">
                        </div>
                        <h5 style="margin-right: 15px;font-size: 15px;display: flex;flex-direction: row;align-items: center;margin-left: 5px;">  
                            <i class="bi bi-fire" style="display: flex;align-items: center;margin-left: 8px;font-size: 20px;"></i>
                            جستجو های پرطرفدار
                        </h5>
                        <div style="width: 100%;display: flex;"  id="swiperNavar">
                            <div style="width: 100%;gap: 8px;justify-content: center;">
                                <div class="swiper-container" style="direction: rtl;margin-left: auto;margin-right: auto;position: relative;overflow: hidden;list-style: none;padding: 0;z-index: 1;">
                                    <div class="swiper-wrapper" style="min-height: 15vh;max-width: 1300px;border-radius: 13px;overflow-x: hidden;position: relative;display: flex;flex-direction: row;scroll-behavior: smooth;">
                                        <div class="swiper-slide" style="flex-shrink: 0;width: auto;height: auto;margin-left: 8px;position: relative;">
                                            <a style="margin-right: 20px;flex-shrink: 0;display: inline-block;text-decoration: none;">
                                                <div style="display: flex;align-items: center;font-weight: 700;line-height: 2.15;padding-top: 8px;padding-bottom: 8px;padding-left: 12px;padding-right: 12px;border-radius: 10rem;
                                                height: 2rem;border: 1px solid darkgray;color: #736146;">
                                                <span> ساعت مچی بچه گانه </span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide" style="flex-shrink: 0;width: auto;height: auto;margin-left: 8px;position: relative;">
                                            <a style="margin-right: 20px;flex-shrink: 0;display: inline-block;text-decoration: none;">
                                            <div style="display: flex;align-items: center;font-weight: 700;line-height: 2.15;padding-top: 8px;padding-bottom: 8px;padding-left: 12px;padding-right: 12px;border-radius: 10rem;
                                                height: 2rem;border: 1px solid darkgray;color: #736146;">
                                                <span> مشنی ساعت مچیه </span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide" style="flex-shrink: 0;width: auto;height: auto;margin-left: 8px;position: relative;">
                                            <a style="margin-right: 20px;flex-shrink: 0;display: inline-block;text-decoration: none;">
                                            <div style="display: flex;align-items: center;font-weight: 700;line-height: 2.15;padding-top: 8px;padding-bottom: 8px;padding-left: 12px;padding-right: 12px;border-radius: 10rem;
                                                height: 2rem;border: 1px solid darkgray;color: #736146;">
                                                <span>  عاب مبچه گانه </span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide" style="flex-shrink: 0;width: auto;height: auto;margin-left: 8px;position: relative;">
                                            <a style="margin-right: 20px;flex-shrink: 0;display: inline-block;text-decoration: none;">
                                            <div style="display: flex;align-items: center;font-weight: 700;line-height: 2.15;padding-top: 8px;padding-bottom: 8px;padding-left: 12px;padding-right: 12px;border-radius: 10rem;
                                                height: 2rem;border: 1px solid darkgray;color: #736146;">
                                                <span>  موچین تراز. گانه </span>
                                                </div>
                                            </a>  
                                        </div>

                                        <div class="swiper-slide" style="flex-shrink: 0;width: auto;height: auto;margin-left: 8px;position: relative;">
                                            <a style="margin-right: 20px;flex-shrink: 0;display: inline-block;text-decoration: none;">
                                            <div style="display: flex;align-items: center;font-weight: 700;line-height: 2.15;padding-top: 8px;padding-bottom: 8px;padding-left: 12px;padding-right: 12px;border-radius: 10rem;
                                                height: 2rem;border: 1px solid darkgray;color: #736146;">
                                                <span> ماشین موچی بچه </span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide" style="flex-shrink: 0;width: auto;height: auto;margin-left: 8px;position: relative;">
                                            <a style="margin-right: 20px;flex-shrink: 0;display: inline-block;text-decoration: none;">
                                            <div style="display: flex;align-items: center;font-weight: 700;line-height: 2.15;padding-top: 8px;padding-bottom: 8px;padding-left: 12px;padding-right: 12px;border-radius: 10rem;
                                                height: 2rem;border: 1px solid darkgray;color: #736146;">
                                                <span> ماشین موچی بچه </span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide" style="flex-shrink: 0;width: auto;height: auto;margin-left: 8px;position: relative;">
                                            <a style="margin-right: 20px;flex-shrink: 0;display: inline-block;text-decoration: none;">
                                            <div style="display: flex;align-items: center;font-weight: 700;line-height: 2.15;padding-top: 8px;padding-bottom: 8px;padding-left: 12px;padding-right: 12px;border-radius: 10rem;
                                                height: 2rem;border: 1px solid darkgray;color: #736146;">
                                                <span> ماشین موچی بچه </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div  class="swipBoot swipBoot-right">
                                    <i id="right" class="bi bi-caret-right"></i>
                                    </div>
                                    <div  class="swipBoot swipBoot-left">
                                    <i id="left" class="bi bi-caret-left"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
             </section>
             <!-- class in left header section -->
             <section class="header_fixed_left">
                 <div class="log_in_register">
                    <!-- class for login and logout in left header -->
                        <section>
                            <i class="bi bi-box-arrow-in-right"></i>
                            <a href="#" class="rigister"> ثبت نام </a>
                            <!-- draw line in login box -->
                            <hr class="hr_login">
                            <a href="#" class="log_in"> ورود </a>
                        </section>
                    <!-- class hr draw line betwin social box and basket in left header -->
                    <hr class="hr_social">
                    <!-- class icon for left header in left login -->
                    <i class="bi bi-basket"></i>
                </div>
            </section>
        </header>
        <!-- header hide width scroll bar -->
        <header class="header_scroll" id="headerScrol">
                <div class="menu_right">
                    <ul>
                        <li class="navItem"> 
                             <p class="first_li bi bi-list"> دسته بندی ها </p>
                        </li>
                        <hr class="first_li_hr">  
                        <li class="navItem"> 
                             <p class="bi bi-calendar-heart"> 
                                شگفت انگیزها 
                            </p> 
                        </li>

                        <li class="navItem"> 
                            <a>  
                                <p class="bi bi-shop">سوپرمارکت </p> 
                            </a> 
                        </li>

                        <li class="navItem"> 
                            <a> 
                                 <p class="bi bi-gift">کارت هدیه </p> 
                            </a> 
                        </li>

                        <li class="navItem">
                            <a> 
                                 <p class="bi bi-fire">پرفروش ترین ها</p>
                            </a> 
                        </li>

                        <li class="navItem">
                            <a> 
                                 <p class="bi bi-cash-stack">تخفیف ها و پیشمهادها </p>
                            </a>
                        </li>
                        <hr class="first_li_hr">  
                        <li class="navItem">
                            <a> 
                                 <p>سوالی دارید؟</p> 
                            </a> 
                        </li>

                        <li class="navItem"> 
                            <a> 
                                 <p>در دیجی کالا بفروشید!</p>
                            </a> 
                        </li>
                    </ul>
                </div>
                <div class="places">
                    <a class="bi bi-geo-alt"> لطفا شهر خود را انتخاب کنید </a>
                    <div class="tooltip tooltip-up">
                        <p> لطفا شهر خود را انتخاب کنید </p>
                    </div>
                </div>
        </header>
         <!-- class main body in documents  -->
        <div class="main" id="mainPage">
         <!-- Swiper -->
         <section class="section-swiper" id="sectionswip">
            <div class="wraper">
                <!-- swiper control width arrow button -->
                <div class="icon"><i id="left" class="left bi bi-caret-left-fill"></i></div>
                <!-- END -->
                <ul class="tabs-box">

                    <li class="tab">
                        <span></span>
                        
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>

                    <li class="tab">
                        <span></span>
                    </li>
        
                </ul>
                <!-- swiper control width arrow button -->
                <div class="icon"><i id="right" class="right bi bi-caret-right-fill"></i></div>
                <!-- END -->
            </div>
            </section>
            <!-- slide show width picture -->
            <div class="slidbar_main" id="sliMain" onmouseover="mouse();" onmouseout="mouseOut()">
            <!-- slide navigation cheked | under picture -->
                <div class="navigation">
                    <span class="navi_slide"   onclick="currentSlide(1) , stopTim()"></span>
                    <span class="navi_slide"   onclick="currentSlide(2) , stopTim()"></span>
                    <span class="navi_slide"   onclick="currentSlide(3) , stopTim()"></span>
                    <span class="navi_slide"   onclick="currentSlide(4) , stopTim()"></span>
                </div>
            <!-- END -->
            <!-- start slide image | add image -->
                <div class="slide_img">
                    <img src="assets/img/slide1.webp"  class="fade">
                </div>

                <div class="slide_img">
                    <img src="assets/img/slide2.webp"  class="fade">
                </div>

                <div class="slide_img">
                    <img src="assets/img/slide3.webp"  class="fade">
                </div>

                <div class="slide_img">
                    <img src="assets/img/slide4.jpg"  class="fade">
                </div>
            <!-- END -->
            <!-- arrow icon in slider img -->
            <div class="arrow_slider">
                <span class="arrow_slide_back bi bi-arrow-right-short" id="arrowBack" onclick="plusSlides(-1) , stopTim()"></span>

                <span class="arrow_slide_next bi bi-arrow-left-short"  id="arrownext" onclick="plusSlides(1) , stopTim()"></span>
            </div>
            <!-- END -->
         </div>

         <div class="wrapper-full">
            <ul>
                <li>
                    <img src="assets/img/wrapper-f1.jpg">
                    <p> دیجی کالا جت </p>
                </li>

                <li>
                    <img src="assets/img/wrapper-f2.jpg">
                    <p> فروشگاه اضطراری </p>
                </li>

                <li>
                    <img src="assets/img/wrapper-f3.jpg">
                    <p> سوپرمارکت پر تخفیف </p>
                </li>

                <li>
                    <img src="assets/img/wrapper-f4.jpg">
                    <p> 70%تخفیف دیجی پلاس </p>
                </li>

                <li>
                    <img src="assets/img/wrapper-f5.jpg">
                    <p> دیجی پی </p>
                </li>

                <li>
                    <img src="assets/img/wrapper-f6.jpg">
                    <p> ضدافتاب گیر </p>
                </li>

                <li>
                    <img src="assets/img/wrapper-f7.jpg">
                    <p> لوازم خانگی اعتباری </p>
                </li>
                <div class="more-full">
                    <span class="more-wrapper bi bi-three-dots"></span>
                    <p>بیشتر</p>
                </div>
            </ul>
         </div>

         <div class="amazing">
            <div class="main-amazing">
                <div class="main-wrapper">
                    <ul class="amazing-card-conrtol">
                        <div class="field"> 
                            <i id="left" class="left-amazing bi bi-caret-left-fill"></i>
                        </div>

                        <li class="amazing-card first-child">
                            <img class="top-img" src="assets/img/AmazingSh.jpeg" alt="Not Loaded">
                            <div id="data-end">
                                <div id="days"></div>
                                <p> : </p>
                                <div id="hour"></div>
                                <p> : </p>
                                <div id="minute"></div>
                                <p> : </p>
                                <div id="second"></div>
                            </div>
                            <img class="bottom-img" src="assets/img/digicala.png" alt="Not Loaded">
                            <div class="all-card">
                                <p>
                                    مشاهده همه
                                    <i class="bi bi-arrow-left-short"></i>
                                </p>
                            </div>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 6% </p>
                            <p class="price"> 34,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone1.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 8% </p>
                            <p class="price"> 34,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/hadset.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 79% </p>
                            <p class="price"> 19,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/hadset1.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 12,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/hedphone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 50% </p>
                            <p class="price"> 2,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/labtop.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 30% </p>
                            <p class="price"> 9,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 5000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 5,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 5000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 5,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 5,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 5,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 5,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 5,000,000 </p>
                        </li>

                        <li class="amazing-card">
                            <img class="img-li" src="assets/img/phone.webp">
                            <p class="p-li">  گوشی موبایل انر مدل فلان ظرفیت </p>
                            <p class="price-after-free">   </p>
                            <p class="free"> 20% </p>
                            <p class="price"> 5,000,000 </p>
                        </li>

                        <div class="field"> 
                            <i id="right" class="right-amazing bi bi-caret-right-fill"></i>
                        </div>
                    </ul>

                </div>
            </div>
        </div>
        <div class="super-amazing">
            <div class="super-right" style="display: flex;">
                <img class="img-super" src="assets/img/fresh.webp">
                <p class="p-super"> شگفت انگیز سوپرمارکتی </p>
                <p class="free-super"> تا 68% تخفیف </p>
            </div>

                <div class="super-left" style="display: flex;">
                    <ul class="mah-ul">
                        <li>
                            <img src="assets/img/amazing-4.webp" alt="NotLoad">
                        </li>

                        <li> 
                            <img src="assets/img/amazing-2.webp" alt="NotLoad"> 
                        </li>

                        <li>
                            <img src="assets/img/amazing-1.webp" alt="NotLoad"> 
                        </li>

                        <li>
                            <img src="assets/img/amazing-9.webp" alt="NotLoad">
                        </li>

                        <li>
                            <img src="assets/img/amazing-7.webp" alt="NotLoad">
                        </li>

                        <li>
                            <img src="assets/img/amazing-8.webp" alt="NotLoad">
                        </li>

                        <li class="last-li">
                            <p>
                                مشاهده همه
                                <i class="bi bi-arrow-left-short"></i>
                            </p>
                        </li>
                    </ul>
                </div>
        </div>

        <div class="fourSqure-super">
          <ul>
            <li>
                <img src="assets/img/amazing-1.webp" alt="NotLoad" style="width: 100%;height: 100%;display: flex;">
            </li>

            <li>
                <img src="assets/img/amazing-2.webp" alt="NotLoad" style="width: 100%;height: 100%;display: flex;">
            </li>

            <li>
                <img src="assets/img/amazing-4.webp" alt="NotLoad" style="width: 100%;height: 100%;display: flex;">
            </li>

            <li>
                <img src="assets/img/amazing-2.webp" alt="NotLoad" style="width: 100%;height: 100%;display: flex;">
            </li>
          </ul>
        </div>
        <h6 class="saleWidthpart"> خرید بر اساس دسته بندی </h6>
        <div class="sale-icon">
            <table class="top-table" style="margin: 0 auto;">
                <tr>
                    <td>
                        <img src="assets/img/part-of1.png">
                        <p> موبایل </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of2.png">
                        <p> کتاب لوازم التحریر و  </p>
                        <p> هنر  </p>

                    </td>

                    <td>
                        <img src="assets/img/part-of3.png">
                        <p> کالای دیجیتال </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of4.png">
                        <p> خانه و اشپزخانه </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of5.png">
                        <p> لوازم خانگی برقی </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of6.png">
                        <p> مد و پوشاک </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of7.png">
                        <p> ساعت و طلا و </p>
                        <p> جواهرات </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of8.png">
                        <p> ارایشی بهداشتی </p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="assets/img/part-of9.jpg">
                        <p> تجهیزات پرشکی و </p>
                        <p> سلامت </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of10.png">
                        <p> ورزش و سلامت </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of11.png">
                        <p> کارت هدیه و گیفت </p>
                        <p> کارت </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of12.png">
                        <p> کالاهای سوپرمارکتی </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of13.png">
                        <p> اسباب بازی کودک و </p>
                        <p> نوزاد </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of14.png">
                        <p> ابزارالات و تجهیزات </p>
                    </td>
                    
                    <td>
                        <img src="assets/img/part-of15.png">
                        <p> خودرو و </p>
                        <p> موتورسیکلت </p>
                    </td>

                    <td>
                        <img src="assets/img/part-of17.png">
                        <p> محصولات بومی و </p>
                        <p> محلی </p>
                    </td>
                </tr>
            </table>

            <ul class="bottom-table" style="margin: 0 auto;">
                <li>
                    <img src="assets/img/picture-full-1.webp" alt="NotLoaded" style="width: 100%;height: 100%;">
                </li>

                <li>
                    <img src="assets/img/picture-full-2.webp" alt="NotLoaded" style="width: 100%;height: 100%;">
                </li>
            </ul>
        </div>
        <div class="favorite-company">
            <h6> محبوب ترین برندها <i class="bi bi-stars"></i></h6>
            <div class="favorite-wrapper">
                <table class="favorite-card-controler">
                    <div class="field-favorite"> 
                        <i id="left" class="left-favor bi bi-caret-left-fill"></i>
                    </div>

                    <tr>
                        <td>
                            <img src="assets/img/brand-1.png">
                        </td>

                        <td>
                            <img src="assets/img/brand-2.png">
                        </td>

                        <td>
                            <img src="assets/img/brand-3.png">
                        </td>

                        <td>
                            <img src="assets/img/brand-4.png">
                        </td>

                        <td>
                            <img src="assets/img/brand-5.png">
                        </td>

                        <td>
                            <img src="assets/img/brand-6.png">
                        </td>

                        <td>
                            <img src="assets/img/brand-7.jpg">
                        </td>

                        <td>
                            <img src="assets/img/brand-8.jpg">
                        </td>

                        <td>
                            <img src="assets/img/brand-9.png">
                        </td>

                        <td>
                            <img src="assets/img/brand-10.png">
                        </td>

                        <td>
                            <img src="assets/img/brand-11.jpg">
                        </td>

                        <td>
                            <img src="assets/img/brand-6.png">
                        </td>

                        <td>
                            <img src="assets/img/brand-5.png">
                        </td>

                        <div class="field-favorite"> 
                            <i id="right" class="right-favor bi bi-caret-right-fill"></i>
                        </div>

                    </tr>
                </table>
            </div>
        </div>
        <div class="under-favorit">
            <ul>
                <li>
                    <img src="assets/img/brand-second1.gif" style="width: 100%;height: 100%;">     
                </li>

                <li style="margin-right: 30px;">
                    <img src="assets/img/brand-second2.webp" style="width: 100%;height: 100%;">
                </li>
            </ul>
        </div>
        <div class="yourSelf">

            <div class="item">
                <h4 style="margin: 16px 20px 5px 15px;"> گوشی موبایل </h4>
                <h6 style="margin: 0px 20px 0px 0px;"> براساس سلیقه شما </h6>
                <section class="grid-container" style="display: grid;grid-template-columns: repeat(2,minmax(0,1fr));padding: 10px;">
                    <a class="grid-item" href="#"> 
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-right: 1px solid gray;">  
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;">
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;border-right: 1px solid gray;">
                        <img src="assets/img/grid-p-lap.jpg"> 
                    </a>
                </section>
                <p> مشاهده<i class="bi bi-caret-left"></i> </p>
            </div>

            <div class="item">
            <h4 style="margin: 16px 20px 5px 15px;"> سایر لوازم خودرو </h4>
                <h6 style="margin: 0px 20px 0px 0px;"> براساس سلیقه شما </h6>
                <section class="grid-container" style="display: grid;grid-template-columns: repeat(2,minmax(0,1fr));padding: 10px;">
                    <a class="grid-item" href="#"> 
                        <img src="assets/img/grid-pic-other.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-right: 1px solid gray;">  
                        <img src="assets/img/grid-pic-other.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;">
                        <img src="assets/img/grid-pic-other.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;border-right: 1px solid gray;">
                        <img src="assets/img/grid-pic-other.jpg"> 
                    </a>
                </section>
                <p> مشاهده<i class="bi bi-caret-left"></i> </p>
            </div>

            <div class="item">
            <h4 style="margin: 16px 20px 5px 15px;"> لب تاب و الترابوک </h4>
                <h6 style="margin: 0px 20px 0px 0px;"> براساس سلیقه شما </h6>
                <section class="grid-container" style="display: grid;grid-template-columns: repeat(2,minmax(0,1fr));padding: 10px;">
                    <a class="grid-item" href="#"> 
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-right: 1px solid gray;">  
                        <img src="assets/img/grid-pic-p.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;">
                        <img src="assets/img/grid-pic-p.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;border-right: 1px solid gray;">
                        <img src="assets/img/grid-pic-p.jpg"> 
                    </a>
                </section>
                <p> مشاهده<i class="bi bi-caret-left"></i> </p>
            </div>

            <div class="item" style="border: none;">
            <h4 style="margin: 16px 20px 5px 15px;"> کیف و کاور گوشی </h4>
                <h6 style="margin: 0px 20px 0px 0px;"> براساس سلیقه شما </h6>
                <section class="grid-container" style="display: grid;grid-template-columns: repeat(2,minmax(0,1fr));padding: 10px;">
                    <a class="grid-item" href="#"> 
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-right: 1px solid gray;">  
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;">
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;border-right: 1px solid gray;">
                        <img src="assets/img/grid-p-lap.jpg"> 
                    </a>
                </section>
                <p> مشاهده<i class="bi bi-caret-left"></i> </p>
            </div>
        </div>
        <div class="expire">
            <p style="margin: 0 50px;font-size: 40px;color: white;font-weight: bold;"> digiclub </p>
            <ul>
                <li>
                    <p> چرخ و جت <i class="bi bi-caret-left"></i></p>
                    <img src="assets/img/other-1.webp" alt="NotLoad">
                </li>

                <li>
                    <p> ماموریت ها <i class="bi bi-caret-left"></i></p>
                    <img src="assets/img/other-2.webp" alt="NotLoad">
                </li>

                <li>
                    <p> جایزه ها <i class="bi bi-caret-left"></i></p>
                    <img src="assets/img/other-3.webp" alt="NotLoad">
                </li>
            </ul>
        </div>
        <div class="star-sale">
            <h6> پرفروش ترین کالاها <i class="bi bi-stars"></i></h6> 
                <div class="main-sale">
                    <div class="sale-card-contrl">
                        <div class="sale-card">
                          <div class="starField"> 
                            <i id="left" class="left-star bi bi-caret-left-fill"></i>
                           </div> 
                            <div class="grid-container">
                                <a href="">
                                    <img src="assets/img/sale-pic1.webp" alt="NotLoad">
                                    <span> 1 </span>
                                    <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>

                                <a href="">
                                    <img src="assets/img/sale-pic2.webp" alt="NotLoad">
                                    <span> 2 </span>
                                    <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>

                                <a href="">
                                    <img src="assets/img/sale-pic3.webp" alt="NotLoad">
                                    <span> 3 </span>
                                    <p style="border-bottom: none;"> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>
                            </div>
                         

                            <div class="grid-container">
                                <a href="">
                                    <img src="assets/img/sale-pic4.webp" alt="NotLoad">
                                    <span> 4 </span>
                                    <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p> 
                                </a>

                                <a href="">
                                    <img src="assets/img/sale-pic5.webp" alt="NotLoad">
                                    <span> 5 </span>
                                    <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>

                                <a href="">
                                    <img src="assets/img/sale-pic6.webp" alt="NotLoad">
                                    <span> 6 </span>
                                    <p style="border-bottom: none;"> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>
                            </div> 

                            <div class="grid-container">
                                <a href="">
                                    <img src="assets/img/sale-pic7.webp" alt="NotLoad">
                                    <span> 7 </span>
                                    <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>

                                <a href="">
                                    <img src="assets/img/sale-pic8.webp" alt="NotLoad">
                                    <span> 8 </span>
                                    <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>

                                <a href="">
                                    <img src="assets/img/sale-pic9.webp" alt="NotLoad">
                                    <span> 9 </span>
                                    <p style="border-bottom: none;"> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>
                            </div>    

                            <div class="grid-container">
                                <a href="">
                                    <img src="assets/img/sale-pic10.webp" alt="NotLoad">
                                    <span> 10 </span>
                                    <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>

                                <a href="">
                                    <img src="assets/img/sale-pic10.webp" alt="NotLoad">
                                    <span> 11 </span>
                                    <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>

                                <a href="">
                                    <img src="assets/img/sale-pic11.webp" alt="NotLoad">
                                    <span> 12 </span>
                                    <p style="border-bottom: none;"> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                                </a>
                     </div>

                     <div class="grid-container">
                            <a href="">
                                <img src="assets/img/sale-pic10.webp" alt="NotLoad">
                                <span> 10 </span>
                                <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                            </a>

                            <a href="">
                                <img src="assets/img/sale-pic10.webp" alt="NotLoad">
                                <span> 11 </span>
                                <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                            </a>

                            <a href="">
                                <img src="assets/img/sale-pic11.webp" alt="NotLoad">
                                <span> 12 </span>
                                <p style="border-bottom: none;"> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                            </a>
                     </div>

                     <div class="grid-container">
                            <a href="">
                                <img src="assets/img/sale-pic10.webp" alt="NotLoad">
                                <span> 10 </span>
                                <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                            </a>

                            <a href="">
                                <img src="assets/img/sale-pic10.webp" alt="NotLoad">
                                <span> 11 </span>
                                <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                            </a>

                            <a href="">
                                <img src="assets/img/sale-pic11.webp" alt="NotLoad">
                                <span> 12 </span>
                                <p style="border-bottom: none;"> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                            </a>
                     </div>

                     <div class="grid-container">
                            <a href="">
                                <img src="assets/img/sale-pic10.webp" alt="NotLoad">
                                <span> 10 </span>
                                <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                            </a>

                            <a href="">
                                <img src="assets/img/sale-pic10.webp" alt="NotLoad">
                                <span> 11 </span>
                                <p> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                            </a>

                            <a href="">
                                <img src="assets/img/sale-pic11.webp" alt="NotLoad">
                                <span> 12 </span>
                                <p style="border-bottom: none;"> کاغذ A4 کپی مکس مدل KNS بسته 500 عددی </p>
                            </a>
                     </div>

                     <div class="starField"> 
                            <i id="right" class="right-star bi bi-caret-right-fill"></i>
                     </div>

                    </div> 
                </div>    
            </div>
        </div>

        <div class="other-sale">

            <div class="item">
                <h4 style="margin: 16px 20px 5px 15px;"> گوشی موبایل </h4>
                <h6 style="margin: 0px 20px 0px 0px;"> براساس سلیقه شما </h6>
                <section class="grid-container" style="display: grid;grid-template-columns: repeat(2,minmax(0,1fr));padding: 10px;">
                    <a class="grid-item" href="#"> 
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-right: 1px solid gray;">  
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;">
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;border-right: 1px solid gray;">
                        <img src="assets/img/grid-p-lap.jpg"> 
                    </a>
                </section>
                <p> مشاهده<i class="bi bi-caret-left"></i> </p>
            </div>

            <div class="item">
            <h4 style="margin: 16px 20px 5px 15px;"> سایر لوازم خودرو </h4>
                <h6 style="margin: 0px 20px 0px 0px;"> براساس سلیقه شما </h6>
                <section class="grid-container" style="display: grid;grid-template-columns: repeat(2,minmax(0,1fr));padding: 10px;">
                    <a class="grid-item" href="#"> 
                        <img src="assets/img/grid-pic-other.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-right: 1px solid gray;">  
                        <img src="assets/img/grid-pic-other.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;">
                        <img src="assets/img/grid-pic-other.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;border-right: 1px solid gray;">
                        <img src="assets/img/grid-pic-other.jpg"> 
                    </a>
                </section>
                <p> مشاهده<i class="bi bi-caret-left"></i> </p>
            </div>

            <div class="item">
            <h4 style="margin: 16px 20px 5px 15px;"> لب تاب و الترابوک </h4>
                <h6 style="margin: 0px 20px 0px 0px;"> براساس سلیقه شما </h6>
                <section class="grid-container" style="display: grid;grid-template-columns: repeat(2,minmax(0,1fr));padding: 10px;">
                    <a class="grid-item" href="#"> 
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-right: 1px solid gray;">  
                        <img src="assets/img/grid-pic-p.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;">
                        <img src="assets/img/grid-pic-p.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;border-right: 1px solid gray;">
                        <img src="assets/img/grid-pic-p.jpg"> 
                    </a>
                </section>
                <p> مشاهده<i class="bi bi-caret-left"></i> </p>
            </div>

            <div class="item" style="border: none;">
            <h4 style="margin: 16px 20px 5px 15px;"> کیف و کاور گوشی </h4>
                <h6 style="margin: 0px 20px 0px 0px;"> براساس سلیقه شما </h6>
                <section class="grid-container" style="display: grid;grid-template-columns: repeat(2,minmax(0,1fr));padding: 10px;">
                    <a class="grid-item" href="#"> 
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-right: 1px solid gray;">  
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;">
                        <img src="assets/img/grid-p-lap.jpg">
                    </a>

                    <a class="grid-item" href="#" style="border-top: 1px solid gray;border-right: 1px solid gray;">
                        <img src="assets/img/grid-p-lap.jpg"> 
                    </a>
                </section>
                <p> مشاهده<i class="bi bi-caret-left"></i> </p>
            </div>
        </div>

        <div class="montakhab">
            <h6> منتخب محصولات تخفیف و حراج <i class="bi bi-stars"></i></h6> 
            <div class="grid-montakhab">
                <a href="" style="border-right: none;"> 
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>


                <a href="">
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href=""> 
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href=""> 
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href="">
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href="">
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href="" style="border-right: none;">
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href="">
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href="">
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href="">
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href="">
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href="">
                    <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>
                </a>

                <a href="" style="border-right: none;">
                <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>  
                </a>

                <a href="">
                <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p> 
                </a>

                <a href="">
                <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>   
                </a>

                <a href="">
                <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>  
                </a>

                <a href="" >
                <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>  
                </a>

                <a href="">
                <img src="assets/img/grid-p-lap.jpg" alt="">
                    <div class="matn">
                        <p class="monaseb"> 50% </p>
                        <p> 500,000تومان </p>
                    </div>
                    <p class="free-offer"> 200,000 </p>   
                </a>
            </div>
        </div>

        <div class="reading">
            <div class="title">
                <h4> خواندنی ها </h4>
                <h4 style="color: blue;font-size: 13px;"> <i class="bi bi-arrow-left-short"></i> مطالب بیشتر در دیجی کالا مگ </h4>
            </div>

            <ul class="cardReading">
                <li>
                    <img src="assets/img/grid-p-lap.jpg" alt="notLoad">
                    <p> لورم ایپسوم متن ساختگی </p>
                </li>

                <li>
                    <img src="assets/img/grid-p-lap.jpg" alt="notLoad">
                    <p> لورم ایپسوم متن ساختگی </p>
                </li>

                <li>
                    <img src="assets/img/grid-p-lap.jpg" alt="notLoad">
                    <p> لورم ایپسوم متن ساختگی </p>
                </li>

                <li>
                    <img src="assets/img/grid-p-lap.jpg" alt="notLoad">
                    <p> لورم ایپسوم متن ساختگی </p>
                </li>
            </ul>
        </div> 
    </div>

    <footer class="footer">
        <div class="mainFooter">
            <div class="connect">
                <img src="assets/img/digicala.png" alt="notLoad" style="width: 130px;margin: 10px;">
                <p class="backToUp"><i class="bi bi-caret-up-fill"></i> بازگشت به بالا </p>
            </div>
            <div class="connect-way">
                <p>  تلفن پشتیبانی 021-61930000 </p>
                <hr>
                <p> <?php echo $show_settings['site_tel']; ?> </p>
                <hr>
                <p> 7روز هفته ,24 ساعته پاسخگوی شما هستیم </p>
            </div>
            <div class="access">
                <ul>
                    <li>
                        <img src="assets/img/amazing-8.webp" alt="notLoad">
                        <p> امکان تحویل اکسپرس </p>
                    </li>

                    <li>
                        <img src="assets/img/amazing-8.webp" alt="notLoad">
                        <p> امکان تحویل اکسپرس </p>
                    </li>

                    <li>
                        <img src="assets/img/amazing-8.webp" alt="notLoad">
                        <p> امکان تحویل اکسپرس </p>
                    </li>
            
                    <li>
                        <img src="assets/img/amazing-8.webp" alt="notLoad">
                        <p> امکان تحویل اکسپرس </p>
                    </li>

                    <li>
                        <img src="assets/img/amazing-8.webp" alt="notLoad">
                        <p> امکان تحویل اکسپرس </p>
                    </li>
                </ul>
            </div>
            <div class="otherFooter">
                <ul>
                    <li>
                        <h3> با دیجی کالا </h3>
                        <p> اتاق خبر دیجی کالا </p>
                        <p> فروش در دیجی کالا</p>
                        <p> فرصت های شغلی</p>
                        <p> گزارش تخلف در دیجی کالا</p>
                        <p> تماس با دیجی کالا</p>
                        <p> درباره دیجی کالا</p>
                    </li>

                    <li>
                        <h3> خدمات مشتریان </h3>
                        <p> اتاق خبر دیجی کالا </p>
                        <p> فروش در دیجی کالا</p>
                        <p> فرصت های شغلی</p>
                        <p> گزارش تخلف در دیجی کالا</p>
                        <p> تماس با دیجی کالا</p>
                        <p> درباره دیجی کالا</p>   
                    </li>

                    <li>
                        <h3> راهنمای خرید از دیجی کالا </h3>
                        <p> اتاق خبر دیجی کالا </p>
                        <p> فروش در دیجی کالا</p>
                        <p> فرصت های شغلی</p>
                        <p> گزارش تخلف در دیجی کالا</p>
                        <p> تماس با دیجی کالا</p>
                        <p> درباره دیجی کالا</p>   
                    </li>

                    <li>
                        <h3> همراه ما باشید! </h3>
                        <span>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-twitter"></i>
                            <i class="bi bi-linkedin"></i>
                        </span>
                        <p style="font-size: 18px;color: black;"> با ثبت ایمیل از تخفیف ها با خبر شوید </p>
                        <form>
                            <input type="email" name="email" placeholder="ایمیل شما">
                            <button> ثبت </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="navar-footer" style="display: flex;align-items: center;justify-content: space-between;">
                <div style="display: flex;align-items: center;">
                <img src="assets/img/footerPic1.webp" alt="notLoad" style="width: 45px;margin: 12px;display: flex;">
                <p style="font-size: 25px;color: white;font-family: inherit;display: flex;"> دانلود اپلکیشن دیجی کالا </p>
                </div>
                <div class="footerNavLi">
                    <ul style="list-style: none;display: flex;flex-direction: row;">
                        <li>
                            <img src="assets/img/footerPic1.webp" alt="notLoad" style="width: 110px;margin: 2px;">
                        </li>

                        <li>
                            <img src="assets/img/footerPic1.webp" alt="notLoad" style="width: 110px;margin: 2px;">
                        </li>

                        <li>
                            <img src="assets/img/footerPic1.webp" alt="notLoad" style="width: 110px;margin: 2px;">
                        </li>

                        <li style="display: flex;justify-content: center;">
                            <i class="bi bi-three-dots" style="font-size: 45px;display: flex;"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <hr style="width: 1375px;margin: 30px auto;">
            <div class="baraseEntekhab" id="barasiId">
                <div class="aboutDigicala" style="display: flex;flex-direction: column;position: relative;">
                    <h1 style="margin-right: 32px;color: darkgray;font-size: 25px;margin-top: 20px;"> فروشگاه دیجی کالا بررسی و انتخاب و خرید </h1>
                    <p> یک <strong> خرید </strong>
                    اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع، باکیفیت و دارای قیمت مناسب را در مدت زمان کوتاه به دست مشتریان خود برساند
                    و ضمانت بازگشت کالا هم داشته باشد؛ ویژگی‌هایی که فروشگاه اینترنتی دیجی‌کالا سال‌هاست بر روی آن‌ها کار کردهو توانسته از این طریق مشتریان ثابت خود را داشته باشد.
                    <br>          
                    یکی از مهم‌ترین دغدغه‌های کاربران دیجی‌کالا یا هر فروشگاه‌ اینترنتی دیگری، این است که کالای خریداری شده چه زمانی به دستشان می‌رسد. دیجی‌کالا شیوه‌های مختلفی از ارسال را متناسب با فروشنده کالا،‌ مقصد کالا و همچنین نوع کالا در اختیار کاربران خود قرار می‌دهد. هر یک از 
                    <a href=""> روش های ارسال دیجی کالا </a>
                    شرایط و ویژگی‌های خاص خود را دارند که ممکن است گاهی برای کاربران جدید، مبهم و پیچیده به نظر برسند. برای آگاهی بیشتر مشتریان از خدمات دیجی‌کالا، این فروشگاه اینترنتی در بخشی از وب‌سایت خود راهنمای کاملی از شیوه‌‌های ارسال را به صورت ساده و به دور از پیچیدگی، قرار داده است که شامل 8 نوع ارسال کالا به روش‌های زیر است: ارسال امروز، دریافت حضوری، دریافت از گنجه، ارسال توسط فروشنده، ارسال عادی، ارسال کالاهای بزرگ، سنگین و فوق سنگین، ارسال سریع سوپرمارکتی، ارسال با پست
                    </p>
                    <h2> کدام محصولات در دیجی‌کالا قابل سفارش هستند؟ </h2>
                    <p> تقریبا می‌توان گفت محصولی وجود ندارد که دیجی‌کالا برای مشتریان خود در سراسر کشور فراهم نکرده باشد. شما می‌توانید در تمامی روزهای هفته و تمامی شبانه روز یا در روزهای خاصی مثل 
                    <a href=""> 
                    <strong>حراج نوروز</strong>
                    </a>
                    دیجی‌کالا که محصولات دارای تخفیف عالی می‌شوند، سفارش خود را به سادگی ثبت کرده و در روز و محدوده زمانی مناسب خود، درب منزل تحویل بگیرید. بعضی از گروه‌های اصلی و زیر مجموعه‌های پرطرفدار محصولات دیجی‌کالا شامل مواردی می‌شود که در ادامه به معرفی آن‌ها می‌پردازیم که امکان 
                    <a href="https://www.digikala.com/landing/sameday-delivery/"><strong>ارسال امروز</strong></a>
                    برای آن ها وجود دارد. 
                    </p>
                    <h2> کالای دیجیتال </h2>
                    <p>
                    انواع گوشی موبایل از برندهای مختلفی مثل آیفون،  
                    <a href="https://www.digikala.com/search/category-mobile-phone/samsung/" target="_blank">گوشی سامسونگ</a>
                    <a href="https://www.digikala.com/search/category-mobile-phone/nokia/" target="_blank">گوشی نوکیا</a>
                    <a href="https://www.digikala.com/search/category-mobile-phone/xiaomi/" target="_blank">گوشی شیائومی</a>
                    <a href="https://www.digikala.com/search/category-mobile-phone/huawei/" target="_blank">گوشی هواوی</a>
                    ، و...، انواع کنسول بازی ps4 و ps5، انواع تبلت&zwnj;های پرطرفدار مثل&nbsp;
                    <a href="https://www.digikala.com/search/category-tablet/samsung/" target="_blank">تبلت سامسونگ</a>
                    نوت 10، انواع هندزفری مثل 
                    <a href="https://www.digikala.com/search/category-headphone/" target="_blank">هندزفری بی سیم</a>
                    <a href="https://www.digikala.com/search/category-tv2/" target="_blank">تلوزیون</a>
                    از برندهای مختلف مثل تلویزیون سامسونگ، سونی و...، انواع مانیتور، کیس، کیبورد، مودم از برندهای مختلف مثل 
                    <a href="https://www.digikala.com/search/category-3g-4g-and-5g-modem-Router/mtn-irancell/" target="_blank">مودم ایرانسل</a>
                    <a href="https://www.digikala.com/search/category-lighting-antenna/" target="_blank">آنتن</a>
                    و ... تنها بخشی از محصولاتی هستند که زیر مجموعه کالای دیجیتال در دیجی‌کالا قرار دارند.
                    </p>
                    <h2> ابزار و تجهیزات صنعتی </h2>
                    <p>
                    انواع خودروهای ایرانی و خارجی از برندهای مطرحی مثل هوندا، کیا و...، موتور سیکلت از برندهایی مثل کویر موتور و...، لوازم جانبی خودرو مثل سیستم صوتی تصویر، ضبط و...، لوازم یدکی مثل دیسک و صفحه کلاج و... و لوازم مصرفی خودرو مثل 
                    <a href="https://www.digikala.com/search/category-car-coating/sana-3d/" target="_blank">کفپوش سانا</a>
                    &nbsp;در این گروه قرار می&zwnj;گیرند.
                    </p>
                    <h2>مد و پوشاک</h2>
                    <p>
                    محصولاتی مثل انواع لباس مثل لباس مجلسی زنانه و مردانه، لباس راحتی، لباس ورزشی، اکسسوری، کیف، کفش، عینک آفتابی، لباس زیر، شال و روسری و... جزو مواردی هستند که می‌توانید آن‌ها را از برندهای مطرح ایرانی و خارجی موجود در دیجی کالا مثل آدیداس، نایکی، دبنهامز، آلدو، درسا و... خریداری کنید.
                    </p>
                    <h2>اسباب بازی کودک و نوزاد</h2>
                    <p>
                    در این دسته از کالاهای دیجی‌کالا، انواع لوازم بهداشتی و حمام کودک و نوزاد، انواع پوشاک و کفش، 
                    <a href="https://www.digikala.com/search/category-tablet/" target="_blank">تبلت</a>
                    <a href="https://www.digikala.com/search/category-toys/" target="_blank">اسباب&zwnj;بازی</a>
                    ، لوازم اتاق خواب کودک، لوازم ایمنی، لوازم شخصی و غذا خوری و ... قرار می&zwnj;گیرد تا خرید را برای پدر و مادرها به کاری سریع و آسان تبدیل کند.
                    </p>
                    <h2>کالاهای سوپر مارکتی</h2>
                    <p>
                    هر چیزی از مواد خوراکی که به آن نیاز دارید، در&nbsp;
                    <a href="https://www.digikala.com/main/food-beverage/" target="_blank">سوپرمارکت</a>
                    &nbsp;دیجی&zwnj;کالا پیدا می&zwnj;شود، محصولات پرطرفداری مثل&nbsp;
                    <a href="https://www.digikala.com/search/category-peanut-butter/" target="_blank">کره بادام&zwnj;زمینی</a>
                    <a href="https://www.digikala.com/search/category-honey/" target="_blank">عسل</a>
                    <a href="https://www.digikala.com/search/category-sauce-dressing/" target="_blank">سس</a>
                    <a href="https://www.digikala.com/search/category-sauce-dressing/" target="_blank">سس</a>
                    <a href="https://www.digikala.com/search/category-saffron/" target="_blank">زعفران</a>
                    ، شکلات، انواع نان و ... از برندهای معتبر و معروفی مثل&nbsp;
                    <a href="https://www.digikala.com/brand/nestle/" target="_blank">نستله</a>
                    ، نوتلا، استارباکس، مزمز، چی توز و ... همگی در اختیار شما هستند و تا رسیدن به آشپزخانه شما تنها چند کلیک فاصله دارند.
                    </p>
                    <h2>زیبایی و سلامت</h2>
                    <p>
                    انواع لوازم آرایش مثل لاک، رنگ مو، لوازم آرایش لب، چشم، صورت و... همگی در دیجی&zwnj;کالا موجود هستند. همچنین محصولات بهداشتی مثل انواع شامپو، کرم،&nbsp;
                    </p>
                    <div class="moreAbout" onclick="more();">
                        <span id="spanMatn" style="margin: 10px 20px;color: blue;margin: 10px 20px;color: blue;display: flex;align-items: center;flex-direction: row-reverse;"><i class="bi bi-caret-down-fill" style="margin-right: 5px;"></i> مشاهده بیشتر </span>
                    </div>
                </div>
                <div class="mojavez">
                    <ul>
                        <li>
                            <img src="assets/img/picMojavez.webp" alt="notLoad" style="width: 130px;">
                        </li>

                        <li>
                            <img src="assets/img/picMojavez.webp" alt="notLoad" style="width: 130px;">    
                        </li>

                        <li>
                            <img src="assets/img/picMojavez.webp" alt="notLoad" style="width: 130px;">
                        </li>
                    </ul>
                </div>
            </div>
            <hr style="width: 1375px;margin: 0 auto;">
            <h5 style="text-align: center;margin-top: 30px;color: gray;"> برای استفاده از مطالب دیجی‌کالا، داشتن «هدف غیرتجاری» و ذکر «منبع» کافیست. تمام حقوق اين وب‌سايت نیز برای شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) است. </h5>
            <div class="footerBrand">
                <table>
                    <tr>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                    </tr>

                    <tr style="width: 50px;">
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                        <td> <img src="assets/img/digicala.png" alt="Not Loaded" style="width: 100px;"> </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="pishkhan">
            <i class="bi bi-person-circle" style="font-size: 30px;color: white;"></i>
        </div>
        <div class="superMarket" id="marKet">
            <p style="font-size: 15px;"> سوپرمارکت </p>
            <hr id="hrSuper" style="margin-left: 5px;margin-right: 5px;height: 18px;transition: opacity 0.5s;">
            <p id="SuperMatn" style="font-size: 15px;transition: opacity 0.5s;"> تنوع بالا و پر تخفیف </p>
            <i class="bi bi-basket" style="margin-right: 10px;"></i>
        </div>
    </footer>
</div>

<script src="assets/js/Timer.js"></script>
<!-- add javascrip code from swiper.js file in assets/js -->
<script src="assets/js/swiper.js"></script>
<!-- add javascrip code from app.js file in assets/js -->
<script src="assets/js/app.js"></script>
</body>
</html>

    

