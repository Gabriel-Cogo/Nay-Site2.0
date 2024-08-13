<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Coisas de IT Girl</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- Estilo do Template -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/fav-icon.png') }}" />
</head>

<body>
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('images/preloader.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- top to return -->
    <a href="javascript:;" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
    <!-- header start -->

    @include('components.header')

    <!-- header end -->
    <!-- banner section start -->
    <div class="banner-section-wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="sb-banner-section ">
                        <h4>Estamos Aqui Para Você</h4>
                        <h2 class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".5ms">Cuidados de Saúde<br>
                            Profissionais e <span>Amigáveis</span><br>
                            Para Você
                        </h2>
                        <p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo legível de uma página
                            ao analisar sua diagramação. O objetivo de usar Lorem Ipsum.
                        </p>
                        <a href="appoinment.html" class="button-btn mt-4">Agende Agora
                            <span><i class="fas fa-angle-double-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end-->
    <!-- About section start-->
    <div class="about-main-wrapper float_left">
        <div class="container">
            <div class="row plr-50">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="sb-about-section ">
                        <div class="icon">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #cd4460;
                                            width: 45px;
                                        }
                                    </style>
                                </defs>
                                <title>stethoscope-outline</title>
                                <path class="cls-1"
                                    d="M512,256a89.59,89.59,0,1,0-102.39,88.69V358.4a128.14,128.14,0,0,1-128,128c-67.06,0-122.22-51.83-127.56-117.54a38.41,38.41,0,0,0,25.17-36.06v-7.28c30-12.37,45.84-37.64,50.63-53l45.61-148.24a77.27,77.27,0,0,0-10-66.38A75.4,75.4,0,0,0,256,46.51c0-.57,0-1.13,0-1.71a44.83,44.83,0,1,0-10.72,29.07A51.77,51.77,0,0,1,251,116.79L205.4,265a65.26,65.26,0,0,1-31.78,35,38.4,38.4,0,0,0-66.2,1,64.87,64.87,0,0,1-33.9-36L27.92,116.79A51.81,51.81,0,0,1,34.62,72.3l.22-.3a44.8,44.8,0,1,0-9.19-28,75.07,75.07,0,0,0-12.22,14,77.27,77.27,0,0,0-10,66.38l45.62,148.3c4.92,15.73,21.55,42,53.35,54v6.22a38.41,38.41,0,0,0,26,36.34C133.93,448.84,200.53,512,281.61,512c84.69,0,153.59-68.91,153.59-153.6V344.69A89.61,89.61,0,0,0,512,256ZM211.22,64a19.2,19.2,0,1,1,19.2-19.2A19.22,19.22,0,0,1,211.22,64ZM70.43,25.6a19.2,19.2,0,1,1-19.2,19.2A19.22,19.22,0,0,1,70.43,25.6ZM128,320a12.8,12.8,0,1,1,25.6,0v12.8a12.8,12.8,0,1,1-25.6,0Zm294.38,0a64,64,0,1,1,64-64A64.07,64.07,0,0,1,422.41,320Zm0-102.4A38.4,38.4,0,1,0,460.8,256,38.4,38.4,0,0,0,422.41,217.6Zm0,51.2A12.8,12.8,0,1,1,435.2,256,12.81,12.81,0,0,1,422.41,268.8Z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h5>Conselhos Médicos</h5>
                            <p>É um fato conhecido de todos que</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="sb-about-section">
                        <div class="icon">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #cd4460;
                                        }
                                    </style>
                                </defs>
                                <title>doctor-2-outline</title>
                                <path class="cls-1"
                                    d="M320,310.18V277.27A128,128,0,0,0,384,166.4V128a127.43,127.43,0,0,0-26.26-77.67h0q-.87-1.14-1.77-2.26h0a128.76,128.76,0,0,0-20.13-20.1l-.32-.26q-.91-.72-1.83-1.42l-.53-.41-1.74-1.29-.66-.48-1.68-1.19-.77-.53-1.64-1.1-.85-.56-1.62-1-.91-.57-1.6-1-1-.57-1.6-.93-1-.56-1.6-.88-1-.55-1.6-.83-1.07-.53-1.61-.79L310.1,12l-1.64-.76-1.06-.46q-2.9-1.28-5.88-2.41l-1.35-.51-1.43-.51-1.44-.51-1.42-.47-1.49-.48L293,5.43,291.46,5,290,4.59l-1.55-.42-1.42-.36-1.57-.38-1.42-.33-1.6-.35-1.42-.29-1.63-.31L278,1.89l-1.66-.27-1.42-.22-1.7-.24L271.83,1,270.1.78,268.71.63l-1.8-.16L265.56.35l-1.9-.12L262.39.16,260.27.08l-1.06,0q-1.6,0-3.21,0t-3.21,0l-1.06,0-2.12.08-1.27.08-1.9.12-1.35.11-1.8.16L241.9.78l-1.73.2-1.41.19-1.69.24-1.42.22L234,1.89l-1.43.26-1.63.31-1.42.29-1.6.35-1.42.33-1.57.38-1.42.36L222,4.59,220.54,5,219,5.43l-1.41.43-1.49.48-1.42.47-1.44.51-1.43.51-1.34.51q-3,1.14-5.91,2.42l-1,.45-1.65.76-1.07.5-1.62.79-1.07.53-1.61.83-1,.55-1.6.88-1,.56-1.6.93-1,.57-1.6,1-.91.57-1.62,1-.85.56-1.64,1.1-.77.53-1.68,1.19-.67.49-1.74,1.29-.53.41q-.92.7-1.83,1.42l-.32.26A128.76,128.76,0,0,0,156.05,48h0q-.9,1.12-1.77,2.26h0A127.43,127.43,0,0,0,128,128v38.4a128,128,0,0,0,64,110.87v32.91A172.84,172.84,0,0,0,51.2,480a32,32,0,0,0,32,32H428.8a32,32,0,0,0,32-32A172.84,172.84,0,0,0,320,310.18ZM358.4,486.4H307.2V435.2a25.6,25.6,0,0,1,51.2,0ZM242.56,26.48l.56-.07,1.95-.22,2-.19,1.5-.12q1.46-.1,2.94-.17l1,0c1.16,0,2.33-.07,3.5-.07s2.34,0,3.5.07l1,0q1.47.06,2.94.17L265,26l2,.19,1.95.22.56.07A102.69,102.69,0,0,1,350.92,89.6H161.08A102.69,102.69,0,0,1,242.56,26.48Zm-89,139.92V128a103,103,0,0,1,.8-12.8H357.6a103,103,0,0,1,.8,12.8v38.4a102.4,102.4,0,1,1-204.8,0ZM256,294.4a127.94,127.94,0,0,0,38.4-5.86v29.77l-38.4,23-38.4-23V288.54A127.94,127.94,0,0,0,256,294.4Zm-64,128a12.8,12.8,0,1,1-12.8-12.8A12.81,12.81,0,0,1,192,422.4ZM76.8,480a147.41,147.41,0,0,1,89.6-135.45v41.64a38.4,38.4,0,1,0,25.6,0V336.31c1.45-.32,2.9-.62,4.36-.9L256,371.2l59.64-35.78c1.46.28,2.92.57,4.36.9v49.31a51.29,51.29,0,0,0-38.4,49.58v51.2H83.2A6.41,6.41,0,0,1,76.8,480Zm352,6.4H384V435.2a51.29,51.29,0,0,0-38.4-49.58V344.55A147.41,147.41,0,0,1,435.2,480,6.41,6.41,0,0,1,428.8,486.4Z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h5>Médicos Qualificados</h5>
                            <p>É um fato conhecido de todos que</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="sb-about-section">
                        <div class="icon">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #cd4460;
                                        }
                                    </style>
                                </defs>
                                <title>truck-outline</title>
                                <path class="cls-1"
                                    d="M434.76,218.33A51.23,51.23,0,0,0,390,192H364.8a19.22,19.22,0,0,0-19.2,19.2v64a19.22,19.22,0,0,0,19.2,19.2h79.59a19.2,19.2,0,0,0,16.78-28.52ZM371.2,268.8V217.6H390a25.63,25.63,0,0,1,22.38,13.17l21.13,38Z" />
                                <path class="cls-1"
                                    d="M502.33,260.88,464.68,193.1a76.83,76.83,0,0,0-67.13-39.5H332.8V140.8A76.88,76.88,0,0,0,256,64H76.8A76.88,76.88,0,0,0,0,140.8V320a76.92,76.92,0,0,0,65.13,75.91,64,64,0,0,0,125.58.89H346.89a64,64,0,0,0,126.65-10.29A76.81,76.81,0,0,0,512,320V298.18A77,77,0,0,0,502.33,260.88ZM128,422.4A38.4,38.4,0,1,1,166.4,384,38.44,38.44,0,0,1,128,422.4Zm179.2-51.2H190.71a64,64,0,0,0-125.14-1.26A51.28,51.28,0,0,1,25.6,320V140.8A51.26,51.26,0,0,1,76.8,89.6H256a51.26,51.26,0,0,1,51.2,51.2V371.2Zm102.4,51.2A38.4,38.4,0,1,1,448,384,38.44,38.44,0,0,1,409.6,422.4ZM486.4,320a51.09,51.09,0,0,1-17.94,38.88A64,64,0,0,0,346.89,371.2H332.8v-192h64.74a51.23,51.23,0,0,1,44.76,26.34l37.65,67.78a51.37,51.37,0,0,1,6.45,24.87Z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h5>Serviços de Emergência</h5>
                            <p>É um fato conhecido de todos que</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About section end -->
    <!-- image about section start-->
    <div class="image-about-wrapper float_left">
        <div class="container ">
            <div class="row plr-50">
                <div class="col-lg-6 col-md-12">
                    <div class="image-section ps-rel ">
                        <img src="{{ asset('images/about-img.jpg') }}" alt="img">
                        <div class="image-content ">
                            <h5>Horário de Funcionamento</h5>
                            <ul class="content-box">
                                <li>
                                    <ul>
                                        <li>Segunda-feira :</li>
                                        <li>Terça-feira :</li>
                                        <li>Quarta-feira :</li>
                                        <li>Quinta-feira :</li>
                                        <li>Sexta-feira :</li>
                                        <li>Sábado :</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>08:00 - 10:00</li>
                                        <li>08:00 - 10:00</li>
                                        <li>08:00 - 10:00</li>
                                        <li>08:00 - 10:00</li>
                                        <li>08:00 - 10:00</li>
                                        <li>08:00 - 10:00</li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="logo-icon">
                                <img src="{{ asset('images/fav-icon.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-content ">
                        <h6 class="home1-section-heading1 text-start">Sobre Nós</h6>
                        <h4>Cuidados Profissionais de Saúde e Médicos em Plena Medida</h4>
                        <p class="py-3">
                            É um fato conhecido de todos que um leitor se distrairá com o conteúdo legível de uma página
                            ao analisar sua diagramação. O objetivo de usar Lorem Ipsum é que ele tem uma distribuição
                            mais ou menos normal de letras, ao contrário de usar 'Conteúdo aqui, conteúdo aqui',
                            tornando-o
                            semelhante ao inglês legível.
                        </p>
                        <p>
                            É um fato conhecido de todos que um leitor se distrairá com o conteúdo legível de uma página
                            ao analisar sua diagramação.
                        </p>
                        <a href="about-us.html" class="button-btn mt-4">Leia Mais
                            <span><i class="fas fa-angle-double-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- image about section end-->
    <!-- services section start  -->
    <div class="services-main-wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="sb-service-section">
                        <h6 class="home1-section-heading1">Nossos Serviços</h6>
                        <h5 class="home1-section-heading2">Serviços Especiais de Alta Qualidade</h5>
                        <p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo legível de uma página
                            ao analisar sua diagramação.
                        </p>
                        <div class="slider-service-section">
                            <div class="owl-carousel owl-theme">
                                <div class="item wow fadeInUp" data-wow-delay=".15s">
                                    <div class="slider-box ">
                                        <span class="icon"><i class="far fa-heart"></i></span>
                                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #cd4460;
                                                        width: 45px;
                                                    }
                                                </style>
                                            </defs>
                                            <title>stethoscope-outline</title>
                                            <path class="cls-1"
                                                d="M512,256a89.59,89.59,0,1,0-102.39,88.69V358.4a128.14,128.14,0,0,1-128,128c-67.06,0-122.22-51.83-127.56-117.54a38.41,38.41,0,0,0,25.17-36.06v-7.28c30-12.37,45.84-37.64,50.63-53l45.61-148.24a77.27,77.27,0,0,0-10-66.38A75.4,75.4,0,0,0,256,46.51c0-.57,0-1.13,0-1.71a44.83,44.83,0,1,0-10.72,29.07A51.77,51.77,0,0,1,251,116.79L205.4,265a65.26,65.26,0,0,1-31.78,35,38.4,38.4,0,0,0-66.2,1,64.87,64.87,0,0,1-33.9-36L27.92,116.79A51.81,51.81,0,0,1,34.62,72.3l.22-.3a44.8,44.8,0,1,0-9.19-28,75.07,75.07,0,0,0-12.22,14,77.27,77.27,0,0,0-10,66.38l45.62,148.3c4.92,15.73,21.55,42,53.35,54v6.22a38.41,38.41,0,0,0,26,36.34C133.93,448.84,200.53,512,281.61,512c84.69,0,153.59-68.91,153.59-153.6V344.69A89.61,89.61,0,0,0,512,256ZM211.22,64a19.2,19.2,0,1,1,19.2-19.2A19.22,19.22,0,0,1,211.22,64ZM70.43,25.6a19.2,19.2,0,1,1-19.2,19.2A19.22,19.22,0,0,1,70.43,25.6ZM128,320a12.8,12.8,0,1,1,25.6,0v12.8a12.8,12.8,0,1,1-25.6,0Zm294.38,0a64,64,0,1,1,64-64A64.07,64.07,0,0,1,422.41,320Zm0-102.4A38.4,38.4,0,1,0,460.8,256,38.4,38.4,0,0,0,422.41,217.6Zm0,51.2A12.8,12.8,0,1,1,435.2,256,12.81,12.81,0,0,1,422.41,268.8Z" />
                                        </svg>
                                        <h5>Covid-19</h5>
                                        <p>É um fato conhecido de todos que um leitor
                                            se distrairá com o conteúdo legível de
                                            uma página ao analisar sua diagramação.
                                        </p>
                                        <a href="appoinment.html" class="button-btn mt-4">Agende Agora
                                            <span><i class="fas fa-angle-double-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-box wow fadeInUp" data-wow-delay=".25s">
                                        <span class="icon"><i class="far fa-heart"></i></span>
                                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #cd4460;
                                                        width: 45px;
                                                    }
                                                </style>
                                            </defs>
                                            <title>stethoscope-outline</title>
                                            <path class="cls-1"
                                                d="M512,256a89.59,89.59,0,1,0-102.39,88.69V358.4a128.14,128.14,0,0,1-128,128c-67.06,0-122.22-51.83-127.56-117.54a38.41,38.41,0,0,0,25.17-36.06v-7.28c30-12.37,45.84-37.64,50.63-53l45.61-148.24a77.27,77.27,0,0,0-10-66.38A75.4,75.4,0,0,0,256,46.51c0-.57,0-1.13,0-1.71a44.83,44.83,0,1,0-10.72,29.07A51.77,51.77,0,0,1,251,116.79L205.4,265a65.26,65.26,0,0,1-31.78,35,38.4,38.4,0,0,0-66.2,1,64.87,64.87,0,0,1-33.9-36L27.92,116.79A51.81,51.81,0,0,1,34.62,72.3l.22-.3a44.8,44.8,0,1,0-9.19-28,75.07,75.07,0,0,0-12.22,14,77.27,77.27,0,0,0-10,66.38l45.62,148.3c4.92,15.73,21.55,42,53.35,54v6.22a38.41,38.41,0,0,0,26,36.34C133.93,448.84,200.53,512,281.61,512c84.69,0,153.59-68.91,153.59-153.6V344.69A89.61,89.61,0,0,0,512,256ZM211.22,64a19.2,19.2,0,1,1,19.2-19.2A19.22,19.22,0,0,1,211.22,64ZM70.43,25.6a19.2,19.2,0,1,1-19.2,19.2A19.22,19.22,0,0,1,70.43,25.6ZM128,320a12.8,12.8,0,1,1,25.6,0v12.8a12.8,12.8,0,1,1-25.6,0Zm294.38,0a64,64,0,1,1,64-64A64.07,64.07,0,0,1,422.41,320Zm0-102.4A38.4,38.4,0,1,0,460.8,256,38.4,38.4,0,0,0,422.41,217.6Zm0,51.2A12.8,12.8,0,1,1,435.2,256,12.81,12.81,0,0,1,422.41,268.8Z" />
                                        </svg>
                                        <h5>Estetoscópio Completo</h5>
                                        <p>É um fato conhecido de todos que um leitor
                                            se distrairá com o conteúdo legível de
                                            uma página ao analisar sua diagramação.
                                        </p>
                                        <a href="appoinment.html" class="button-btn mt-4">Agende Agora
                                            <span><i class="fas fa-angle-double-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-box wow fadeInUp" data-wow-delay=".35s">
                                        <span class="icon"><i class="far fa-heart"></i></span>
                                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #cd4460;
                                                        width: 45px;
                                                    }
                                                </style>
                                            </defs>
                                            <title>stethoscope-outline</title>
                                            <path class="cls-1"
                                                d="M512,256a89.59,89.59,0,1,0-102.39,88.69V358.4a128.14,128.14,0,0,1-128,128c-67.06,0-122.22-51.83-127.56-117.54a38.41,38.41,0,0,0,25.17-36.06v-7.28c30-12.37,45.84-37.64,50.63-53l45.61-148.24a77.27,77.27,0,0,0-10-66.38A75.4,75.4,0,0,0,256,46.51c0-.57,0-1.13,0-1.71a44.83,44.83,0,1,0-10.72,29.07A51.77,51.77,0,0,1,251,116.79L205.4,265a65.26,65.26,0,0,1-31.78,35,38.4,38.4,0,0,0-66.2,1,64.87,64.87,0,0,1-33.9-36L27.92,116.79A51.81,51.81,0,0,1,34.62,72.3l.22-.3a44.8,44.8,0,1,0-9.19-28,75.07,75.07,0,0,0-12.22,14,77.27,77.27,0,0,0-10,66.38l45.62,148.3c4.92,15.73,21.55,42,53.35,54v6.22a38.41,38.41,0,0,0,26,36.34C133.93,448.84,200.53,512,281.61,512c84.69,0,153.59-68.91,153.59-153.6V344.69A89.61,89.61,0,0,0,512,256ZM211.22,64a19.2,19.2,0,1,1,19.2-19.2A19.22,19.22,0,0,1,211.22,64ZM70.43,25.6a19.2,19.2,0,1,1-19.2,19.2A19.22,19.22,0,0,1,70.43,25.6ZM128,320a12.8,12.8,0,1,1,25.6,0v12.8a12.8,12.8,0,1,1-25.6,0Zm294.38,0a64,64,0,1,1,64-64A64.07,64.07,0,0,1,422.41,320Zm0-102.4A38.4,38.4,0,1,0,460.8,256,38.4,38.4,0,0,0,422.41,217.6Zm0,51.2A12.8,12.8,0,1,1,435.2,256,12.81,12.81,0,0,1,422.41,268.8Z" />
                                        </svg>
                                        <h5>Especialista em Coração</h5>
                                        <p>É um fato conhecido de todos que um leitor
                                            se distrairá com o conteúdo legível de
                                            uma página ao analisar sua diagramação.
                                        </p>
                                        <a href="appoinment.html" class="button-btn mt-4">Agende Agora
                                            <span><i class="fas fa-angle-double-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- emergency section start -->
    <div class="emergency-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="sb-emergency-main-wrapper ">
                        <div class="content">
                            <span><i class="fas fa-headphones-alt"></i></span>
                            <h4>Assistência Médica de Emergência 24/7</h4>
                        </div>
                        <h5>Com acesso a assistência de emergência 24 horas, é muito
                            importante que você possa continuar ajudando os outros.
                        </h5>
                        <p>É um fato conhecido de todos que um leitor se distrairá
                            com o conteúdo legível de uma página ao analisar sua
                            diagramação. O objetivo de usar Lorem Ipsum é que ele tem uma
                            distribuição mais ou menos normal.
                        </p>
                        <p>É um fato conhecido de todos que um leitor se distrairá
                            com o conteúdo legível de uma página.
                        </p>
                        <div class="content">
                            <span class="rotate"><i class="fas fa-phone-volume"></i></span>
                            <h4>+88 28624 79555</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- emergency section end -->
    <!-- our team section start -->
    <div class="team-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="sb-team-section">
                        <h6 class="home1-section-heading1">Nossa Equipe</h6>
                        <h5 class="home1-section-heading2">Nossos Médicos Dedicados</h5>
                        <p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo legível
                            de uma página ao analisar sua diagramação.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-section">
                        <div class="image">
                            <img src="{{ asset('images/team-3.png') }}" alt="img">
                            <div class='contact-action '>
                                <div class='item plus-sign ' onclick="actionToggleOne();"> + </div>
                                <span class='item icon-bg'> <i class="fab fa-facebook-f"></i></span>
                                <span class='item icon-bg'> <i class="fab fa-twitter"></i> </span>
                            </div>
                        </div>
                        <h5><a href="dr-single.html">Dra. Aimee Devlin</a></h5>
                        <p><a href="dr-single.html">Psiquiatra</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-section">
                        <div class="image">
                            <img src="{{ asset('images/team-2.png') }}" alt="img">
                            <div class='contact-action action-1'>
                                <div class='item plus-sign' onclick="actionToggleTwo();"> + </div>
                                <span class='item icon-bg'> <i class="fab fa-facebook-f"></i></span>
                                <span class='item icon-bg'> <i class="fab fa-twitter"></i> </span>
                            </div>
                        </div>
                        <h5><a href="dr-single.html">Dr. Khalid Abbed</a></h5>
                        <p><a href="dr-single.html">Oncologista</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-section">
                        <div class="image">
                            <img src="{{ asset('images/team-3.png') }}" alt="img">
                            <div class='contact-action action-2'>
                                <div class='item plus-sign' onclick="actionToggleThree();"> + </div>
                                <span class='item icon-bg'> <i class="fab fa-facebook-f"></i></span>
                                <span class='item icon-bg'> <i class="fab fa-twitter"></i> </span>
                            </div>
                        </div>
                        <h5><a href="dr-single.html">Dr. Arthur Reese</a></h5>
                        <p><a href="dr-single.html">Hepatologista</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-section">
                        <div class="image">
                            <img src="{{ asset('images/team-4.png') }}" alt="img">
                            <div class='contact-action action-3'>
                                <div class='item plus-sign' onclick="actionToggleFour();"> + </div>
                                <span class='item icon-bg'> <i class="fab fa-facebook-f"></i></span>
                                <span class='item icon-bg'>
                                    < i class="fab fa-twitter"></i>
                                </span>
                            </div>
                        </div>
                        <h5><a href="dr-single.html">Dra. Nisha Ohri</a></h5>
                        <p><a href="dr-single.html">Dra. Nisha Ohri</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- images section -->
    <div class="image-wrapper float_left">
        <img src="{{ asset('images/doctors-image.jpg') }}" alt="img">
    </div>
    <!-- our team section end -->

    <!-- blog section start -->
    <div class="blog-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="sb-blog-main-section">
                        <h6 class="home1-section-heading1"> Nosso Blog</h6>
                        <h5 class="home1-section-heading2">Nossas Últimas Notícias</h5>
                        <p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo legível
                            de uma página ao analisar sua diagramação.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="img-icon">
                            <img src="{{ asset('images/blog-img1.jpg') }}" alt="img">
                            <div class="img-overlay"></div>
                            <p class="text-center">08<br>julho</p>
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog-single.html">Gastar Mais e Receber Menos em Cuidados de Saúde</a></h3>
                            <ul>
                                <li><a href="javascript:;"><i class="far fa-user"></i> por John Doe</a></li>
                                <li><a href="javascript:;"><i class="far fa-comments"></i>Comentários 02</a></li>
                            </ul>
                            <p>É um fato conhecido de todos que um leitor se distrairá
                                com o conteúdo legível de uma página ao analisar sua diagramação.
                            </p>
                            <a href="blog-single.html" class="r-btn">Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="img-icon">
                            <img src="{{ asset('images/blog-img2.jpg') }}" alt="img">
                            <div class="img-overlay"></div>
                            <p class="text-center">20<br>julho</p>
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog-single.html">Aliq não é hendr erit a augue insu imagem pellen</a></h3>
                            <ul>
                                <li><a href="javascript:;"><i class="far fa-user"></i> por John Doe</a></li>
                                <li><a href="javascript:;"><i class="far fa-comments"></i>Comentários 02</a></li>
                            </ul>
                            <p>É um fato conhecido de todos que um leitor se distrairá
                                com o conteúdo legível de uma página ao analisar sua diagramação.
                            </p>
                            <a href="blog-single.html" class="r-btn">Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box">
                        <div class="img-icon">
                            <img src="{{ asset('images/blog-img3.jpg') }}" alt="img">
                            <div class="img-overlay"></div>
                            <p class="text-center">28<br>julho</p>
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog-single.html">Resoluções Saudáveis de Ano Novo e Como Mantê-las</a></h3>
                            <ul>
                                <li><a href="javascript:;"><i class="far fa-user"></i> por John Doe</a></li>
                                <li><a href="javascript:;"><i class="far fa-comments"></i>Comentários 02</a></li>
                            </ul>
                            <p>É um fato conhecido de todos que um leitor se distrairá
                                com o conteúdo legível de uma página ao analisar sua diagramação.
                            </p>
                            <a href="blog-single.html" class="r-btn">Leia Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end -->

    <!-- footer section start -->
    @include('components.footer')
    <!-- footer section end -->
</body>

</html>
