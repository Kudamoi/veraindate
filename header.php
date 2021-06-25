<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veraindate</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/min.css">
    <link rel="stylesheet" href="/css/style.css">

    <?php
    $url = $_SERVER['SCRIPT_FILENAME'];
    $items = explode('/', $url);
    if ($items[sizeof($items) - 2] == 'detailBlog') { ?>
        <link rel="stylesheet" href="/css/detailBlog.css">
    <?php } ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <header id="header">
        <div class="container d-flex justify-content-between font-play">
            <div class="col-2 d-flex d-lg-none align-items-center justify-content-start">
                <input type="checkbox" name="menu-opener" class="d-none" id="menu-opener">
                <label for="menu-opener" class="menu-opener">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <div class="slide-menu">
                    <div class="container d-flex flex-column h-100">
                        <div class="col-12 d-flex justify-content-end block-language">
                            <div class="col-6 d-flex justify-content-end">
                                <a href="#" class="custom-btn button-language text-center">RU</a>
                            </div>
                        </div>
                        <div class="col-12 d-flex block-auth">
                            <div class="col-6">
                                <a href="#" class="custom-btn button-sign-in text-center">SIGN IN</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="custom-btn button-sign-up text-center">SIGN UP</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="col-12 header-menu-container-mobile align-items-center justify-content-center text-center font-play">
                                <li class="item-menu active">
                                    <a href="/" class="link-menu">HOME</a>
                                </li>
                                <li class="item-menu">
                                    <a href="#" class="link-menu">ABOUT US</a>
                                </li>
                                <li class="item-menu">
                                    <a href="/blog/" class="link-menu">BLOG</a>
                                </li>
                                <li class="item-menu">
                                    <a href="/contacts/" class="link-menu">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 contact-mobile">
                            <a href="tel:+1 (503) 341-5522" class="phone">+1 (503) 341-5522</a>
                            <a href="mail:noreply@veraindate.net" class="email">noreply@veraindate.net</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-2 block-logo d-flex align-items-center justify-content-center">
                <a href="/" class="link-logo">
                    <img src="/images/logo.png" alt="" class="image-logo">
                </a>
            </div>
            <div class="col-lg-4 block-menu d-none d-lg-flex align-items-center">
                <ul class="col-12 header-menu-container d-flex justify-content-between align-items-center">
                    <li class="item-menu active">
                        <a href="/" class="link-menu">HOME</a>
                    </li>
                    <li class="item-menu">
                        <a href="#" class="link-menu">ABOUT US</a>
                    </li>
                    <li class="item-menu">
                        <a href="/blog/" class="link-menu">BLOG</a>
                    </li>
                    <li class="item-menu">
                        <a href="/contacts/" class="link-menu">CONTACT</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 block-auth d-none d-lg-flex justify-content-center align-items-center">
                <div class="col-lg-3">
                    <a href="#" class="custom-btn button-sign-in text-center">SIGN IN</a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="custom-btn button-sign-up text-center">SIGN UP</a>
                </div>
            </div>
            <div class="col-lg-1 block-language d-none d-lg-flex justify-content-around align-items-center">
                <div class="col-lg-12 d-flex">
                    <a href="#" class="custom-btn button-language text-center">RU</a>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-end align-items-center">
                <a href="#" class="link-personal">
                    <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.37465 10.9795C6.50284 10.9795 4.16641 8.64327 4.16641 5.77147C4.16641 2.89966 6.50284 0.563232 9.37465 0.563232C12.2465 0.563232 14.5829 2.89966 14.5829 5.77147C14.5829 8.64327 12.2465 10.9795 9.37465 10.9795ZM9.37465 2.12568C7.36436 2.12568 5.72886 3.76099 5.72886 5.77147C5.72886 7.78175 7.36436 9.41706 9.37465 9.41706C11.3849 9.41706 13.0204 7.78175 13.0204 5.77147C13.0204 3.76099 11.3849 2.12568 9.37465 2.12568Z" fill="#4457C2" />
                        <path d="M17.9682 22.4376H0.781226C0.349988 22.4376 0 22.0876 0 21.6563V18.0105C0 15.2825 2.2197 13.0628 4.9477 13.0628H13.8017C16.5297 13.0628 18.7494 15.2825 18.7494 18.0105V21.6563C18.7494 22.0876 18.3994 22.4376 17.9682 22.4376ZM1.56245 20.8751H17.187V18.0105C17.187 16.1441 15.6682 14.6253 13.8017 14.6253H4.9477C3.08123 14.6253 1.56245 16.1441 1.56245 18.0105V20.8751Z" fill="#4457C2" />
                        <path d="M24.218 11.2401H15.3642C14.9329 11.2401 14.5829 10.8901 14.5829 10.4588C14.5829 10.0276 14.9329 9.6776 15.3642 9.6776H24.218C24.6492 9.6776 24.9992 10.0276 24.9992 10.4588C24.9992 10.8901 24.6492 11.2401 24.218 11.2401Z" fill="#4457C2" />
                        <path d="M20.0516 15.4065C19.8515 15.4065 19.6516 15.3304 19.4994 15.1775C19.1942 14.8721 19.1942 14.3773 19.4994 14.0722L23.1139 10.4577L19.4994 6.84316C19.1942 6.538 19.1942 6.04324 19.4994 5.73808C19.8046 5.43291 20.2993 5.43291 20.6047 5.73808L24.7712 9.90456C25.0763 10.2097 25.0763 10.7047 24.7712 11.0098L20.6047 15.1763C20.4515 15.3304 20.2515 15.4065 20.0516 15.4065Z" fill="#4457C2" />
                    </svg>
                </a>
            </div>
        </div>
    </header>