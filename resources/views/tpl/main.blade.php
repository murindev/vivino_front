<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/less/style.css') }}"/>

    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
<!--class="tpl"-->
<!--kec&vSp~KL-U-->
{{--<input type="checkbox" checked id="tt"/>--}}
{{--<label for="tt"></label>--}}


<header>
    <div>
        <!--		<a href="javascript:" class="mobile-logo">-->
        <!--			<img src="assets/assets/img/logo.svg" alt="img" title="logotype"/>-->
        <!--		</a>-->
        <!--		<input type="checkbox" id="mobile-menu"/>-->
        <!--		<label for="mobile-menu"></label>-->
        <div class="header">

            <a href="/" class="header-logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="img" title="logotype"/>
            </a>

            <form class="header-search" action="/search" method="get">
                <input type="text" maxlength="200" id="search_wine" name="q" placeholder="Поиск" autocomplete="off"  value="">

                <div class="header-search_box">

                </div>

            </form>

            <div class="header-user">

            </div>

        </div>

        <div class="menu">
            @foreach($const->menu as $top)
            <div class="menu-link">
                <a href="{{$top->link}}">
                    <span><img src="{{$const->storage.$top->icon}}" alt="ico"/></span>
                    <span>{{$top->name}}</span>
                </a>
                @isset($top->submenu)
                    <div class="menu-link_helper">
                        <div class="menu-link_submenu">
                            <div class="menu-link_header">
                                    @foreach($top->submenu as $submenu)
                                    @if(count($submenu->menuort) && !$submenu->icon)
                                        <div class="menu-link_headerItem">
                                            <a href="{{$submenu->link}}">{{$submenu->name}}</a>

                                            <ul>
                                                @foreach($submenu->menuort as $ort)
                                                    @if(!$ort->icon)
                                                        <li><a href="{{$ort->link}}">{{$ort->name}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>

                                        </div>
                                    @endif
                                    @endforeach
                                <div class="menu-link_headerItem">
                                    @foreach($top->submenu as $submenu)
                                        @if(!count($submenu->menuort) && !$submenu->icon)
                                            <a href="{{$submenu->link}}">{{$submenu->name}}</a>
                                        @endif
                                    @endforeach
                                </div>

                            </div>



                            <div class="menu-link_withIcon">
                                @foreach($top->submenu as $submenuIcon)
                                    @if($submenuIcon->icon)
                                        <a href="{{$submenuIcon->link}}">
                                            <span><img src="{{$const->storage.$submenuIcon->icon}}" alt="img"/></span>
                                            <p>{{$submenuIcon->name}}</p>
                                        </a>
                                    @endif
                                @endforeach
                            </div>

                            <div class="menu-link_footer">
                                <a href="/wines">Все вина</a>
                            </div>

                        </div>
                    </div>
                @endisset

            </div>
            @endforeach
{{--

            <div class="menu-link">
                <a href="javascript:">
				<span>
					<img src="{{ asset('assets/img/i-pairings.svg') }}" alt="ico"/>
				</span>
                    <span>Pairings</span>
                </a>
                <!--				<div class="menu-link_submenu"></div>-->
            </div>
            <div class="menu-link">
                <a href="javascript:">
				<span>
					<img src="{{ asset('assets/img/i-grapes.svg') }}" alt="ico"/>
				</span>
                    <span>Grapes</span>
                </a>
                <!--				<div class="menu-link_submenu"></div>-->
            </div>
--}}

        </div>
    </div>

</header>
@if(Route::currentRouteName() !== 'home')
<section class="breadcrumbs" >
    <div>
        <div class="breadcrumbs-row"> <!--row-->

            <div class="breadcrumbs-box">
                <a href="javascript:">Главная</a><i></i>
                <a href="javascript:">Каталог</a><i></i>
                <a href="javascript:">Вина</a><i></i>
                <a href="javascript:">Красные сухие вина</a><i></i>
                <span>Lieu dit Malakoff Shiraz 2014</span>
            </div>

        </div>
    </div>
</section>
@endif
<div class="modal">

    <div class="modal-box">
        <a class="modal-close" href="javascript:"></a>

        <div class="modal-content">
            <div class="lightBox">
                <h2>Online Shops</h2>
                <p>Online shops selling this wine</p>

                <div class="lightBox-seller" >
                    <div class="lightBox-seller_desc">
                        <div class="lightBox-seller_descLogo">
                            <img src="{{ asset('assets/img/seller-logo.png') }}" alt="seller logo"/>
                        </div>
                        <div class="lightBox-seller_descText">
                            <div class="lightBox-seller_descName">Vitrina Vin</div>
                            <div class="lightBox-seller_descFeatures">Mobile friendly checkout. No minimum order.</div>
                            <div class="lightBox-seller_descBased">
                                <i><img src="{{ asset('assets/img/ru.svg') }}" alt="flag icon"/></i>
                                Based in Russia
                            </div>
                        </div>

                    </div>
                    <div class="lightBox-seller_price">

                        <a href="javascript:" class="btn snow">961₽</a>

                    </div>
                </div>

                <div class="lightBox-seller" >
                    <div class="lightBox-seller_desc">
                        <div class="lightBox-seller_descLogo">
                            <img src="{{ asset('assets/img/seller-logo.png') }}" alt="seller logo"/>
                        </div>
                        <div class="lightBox-seller_descText">
                            <div class="lightBox-seller_descName">Vitrina Vin</div>
                            <div class="lightBox-seller_descFeatures">Mobile friendly checkout. No minimum order.</div>
                            <div class="lightBox-seller_descBased">
                                <i><img src="{{ asset('assets/img/ru.svg') }}" alt="flag icon"/></i>
                                Based in Russia
                            </div>
                        </div>

                    </div>
                    <div class="lightBox-seller_price">

                        <a href="javascript:" class="btn snow">961₽</a>

                    </div>
                </div>

                <div class="lightBox-seller" >
                    <div class="lightBox-seller_desc">
                        <div class="lightBox-seller_descLogo">
                            <img src="{{ asset('assets/img/seller-logo.png') }}" alt="seller logo"/>
                        </div>
                        <div class="lightBox-seller_descText">
                            <div class="lightBox-seller_descName">Vitrina Vin</div>
                            <div class="lightBox-seller_descFeatures">Mobile friendly checkout. No minimum order.</div>
                            <div class="lightBox-seller_descBased">
                                <i><img src="{{ asset('assets/img/ru.svg') }}" alt="flag icon"/></i>
                                Based in Russia
                            </div>
                        </div>

                    </div>
                    <div class="lightBox-seller_price">

                        <a href="javascript:" class="btn snow">961₽</a>

                    </div>
                </div>


            </div>








        </div>

    </div>
</div>


@yield('main')

<footer>
    <div>
        <div class="footer">
            <div class="footer-menu">
                <ul>
                    <li><a href="javascript:">Вина</a></li>
                    <li><a href="javascript:">Крепкий алкоголь</a></li>
                    <li><a href="javascript:">Пиво</a></li>
                </ul>
                <ul>
                    <li><a href="javascript:">Закуски</a></li>
                    <li><a href="javascript:">Виноград</a></li>
                    <li><a href="javascript:">Страны</a></li>
                </ul>
                <ul>
                    <li><a href="javascript:">Контакты</a></li>
                    <li><a href="javascript:">О нас</a></li>
                    <li><a href="javascript:">Юридическая информация</a></li>
                </ul>
            </div>
            <div class="footer-soc">
                <ul>
                    <li><a href="javascript:"><img src="{{ asset('assets/img/soc-instagram.png') }}" alt="instagram icon"/></a></li>
                    <li><a href="javascript:"><img src="{{ asset('assets/img/soc-facebook.png') }}" alt="facebook icon"/></a></li>
                    <li><a href="javascript:"><img src="{{ asset('assets/img/soc-twitter.png') }}" alt="twitter icon"/></a></li>
                </ul>
            </div>

            <div class="footer-apps">
                <div class="footer-apps-row">
                    <span>Приложение WineBaza</span>
                    <ul>
                        <li><a href="javascript:"><img src="{{ asset('assets/img/macOS.png') }}" alt="macOS"></a>
                        <li><a href="javascript:"><img src="{{ asset('assets/img/android.png') }}" alt="android"></a>
                    </ul>
                    <span>Карта сайта   ©2020 WineBaza</span>
                </div>

            </div>

        </div>
    </div>








</footer>


{{--<div class="din"></div>--}}

<script src="/assets/js/index.js"></script><!--<script src="js/bundle.js"></script>-->
<script src="/assets/js/multirange.js"></script>
</body></html>


