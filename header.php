<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="./assets/Nunito_Sans/NunitoSans-Black.ttf" />
    <link rel="stylesheet" href="/wp-content/themes/stage application/assets/css/styl.css" type="text/css" media="all" />
    <link rel="styleSheet" href="/wp-content/themes/stage application/assets/css/main.css" type="text/css" media="all" />
    <link rel="styleSheet" href="/wp-content/themes/stage application/assets/css/styles.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/themes/stage application/style.css" type="text/css" media="all">
</head>
<?php
wp_head();
?>
<style>
    <?php include 'assets/css/main.css'; ?><?php include 'assets/css/styl.css'; ?><?php include 'assets/css/styles.css'; ?><?php include 'assets/css/style.css'; ?>
</style>

<body class="justify-items-center text-blue-900">
    <!---- header content --->
    <div class="ContainerHeder">
        <section class="nav-sec1 justify-center align-middle pt-8">
            <!-- section element -->
            <div class="timeWordStyle justify-center">
                <span class="justify-center flex flex-wrap content-start py-5">
                    <div class="flex justify-center space-x-2 pl-12" style="display: inline-block">
                        <a class="
                  bg-blue-900
                  hover:bg-orange-default
                  hover:text-white
                  rounded-full
                  h-6
                  w-6
                  inline-block
                  items-center
                  justify-center
                " href="#">
                            <i class="fab fa-facebook text-blue-50 ml-1 mr-1 pr-1"></i></a>
                        <a class="
                  bg-blue-900
                  hover:bg-orange-default
                  hover:text-white
                  rounded-full
                  h-6
                  w-6
                  inline-block
                  items-center
                  justify-center
                " href="#">
                            <i href="#" class="
                    fab
                    fa-twitter
                    text-blue-50
                    inline-block
                    items-center
                    justify-center
                    ml-1
                    mr-1
                    pr-1
                  "></i></a>
                        <a class="
                  bg-blue-900
                  hover:bg-orange-default
                  hover:text-white
                  rounded-full
                  h-6
                  w-6
                  inline-block
                  items-center
                  justify-center
                " href="#">
                            <i class="
                    fab
                    fa-instagram
                    text-blue-50
                    ml-1
                    mr-1
                    pr-1
                    items-center
                  "></i></a>
                    </div>
                    <span class="ml-5">
                        ساعات العمل :من الاثنين الى الجمعة 08 - 17 مساء
                        <div style="padding-left: 10px; padding-right: 10px; display: inline">
                            <i class="far fa-clock" style="margin-left: 2px; margin-right: 2px"></i>
                        </div>
                    </span>
                </span>
            </div>
            <div class="elementHeader flex justify-items-center">
                <div class="element px-8 flex justify-items-center">
                    <a class="
                btn-elents
                px-8
                flex
                justify-items-center
                hover:text-orange-default
              " href="#">مجلس</a>
                    <a class="
                btn-elents
                px-8
                flex
                justify-items-center
                hover:text-orange-default
              " href="#">الشواغر</a>
                    <a class="
                btn-elents
                px-8
                flex
                justify-items-center
                hover:text-orange-default
              " href="#">شكاوي</a>
                </div>
            </div>
        </section>


    </div>
    <div class="element-nav-style bg-gray-50" id="navbar">
    <?php

wp_nav_menu(
    array(
        'menu' => 'primary',
        'menu_class' => 'ListElementdropdown',
        'container' => '',
        'li_class' => 'dropdown dropbtn',
        'item_wrap' => '
          <ul id="" class="ListElementdropdown">
            <div class="element-page">%3$s</div>
          </ul>'
    )
);

?>

       <?php 
        if(function_exists('the_custom_logo')){
            the_custom_logo();
        }
       
       ?> 
        <div class="LogoStyleBloc" style="float: right">
            <img src="http://demo.ovathemes.com/egovt/wp-content/uploads/2020/07/Logo_white_text-1.svg" alt="City Government &amp; Municipal WordPress Theme" class="logo-fixed" style="width: 132px; height: auto" />
        </div>
    </div>