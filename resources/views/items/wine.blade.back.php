@extends('tpl.main')
@section('main')


    <section class="itemCard">
        <div>

            <div class="itemCard-main">
                <div class="itemCard-main_item">

                    <div class="itemImage">
                        <img src="{{$pMiddleSrc}}{{$product->srcWinestyle->name}}" alt="{{$product->translit}}"/>
                    </div>

                    <div class="itemDesc">
                        <h3 class="itemDesc-vinery">
                            @isset($product->brand->name) <a href="{{$product->brand->url}}">«{{$product->brand->name}}»</a> @endisset
                            @isset($product->winery->name) <a href="{{$product->winery->url}}">{{$product->winery->name}}</a> @endisset
                        </h3>
                        <h1 class="itemDesc-name"> {{$product->translit}}
                            Alexandre Carmenère Bolgheri 2014</h1>
                        <h2 class="itemDesc-prop">
                        <span class="itemDesc-prop_flag">
                            <img src="{{$flagSrc}}{{$product->country->id}}.webp" alt="flag"/>
                        </span>
                            <span class="itemDesc-prop_type">
                                @isset($product->type->name) {{$product->type->name}} @endisset
                                @isset($product->color->name_ru) {{$product->color->name_ru}} @endisset
                            </span>
                            <span class="itemDesc-prop_from">из</span>
                            @isset($product->region->name_ru) <a href="{{$product->region->url}}" class="itemDesc-prop_region">{{$product->region->name_ru}}</a> @endisset
{{--                            <a href="javascript:" class="itemDesc-prop_dot">·</a>--}}
                            @isset($product->country->name_ru)  <a href="{{$product->country->url}}" class="itemDesc-prop_country">{{$product->country->name_ru}}</a> @endisset
                        </h2>

                        <div class="itemDesc-rating">
                            <span class="itemDesc-rating_rate">{{$statistics->ratings_average}}</span>
                            @include('components.rating',['average' => $statistics->ratings_average, 'color' => 'red', 'size' => '18'])
                            <span class="itemDesc-rating_ratings">{{$statistics->ratings_count}}</span>
                        </div>

                        <div class="itemDesc-wish">
                            <a href="javascript:">Добавить в избранное</a>
                        </div>

                        <div class="itemDesc-highlights">
                            <img src="../../assets/img/highlights-1.png" alt="highlights"/>
                            Этот сорт ценится лучше, чем любой другой для этого вина
                        </div>
                        <div class="itemDesc-highlights">
                            <img src="../../assets/img/highlights-2.png" alt="highlights"/>
                            Популярное количество пользователей Winebaza. более 800 оценок
                        </div>

                        <div class="itemDesc-props">
                            <div class="itemDesc-props-prop">
                                <span>Виноград</span>
                                <a href="javascript:">Зинфалдель</a>,
                                <a href="javascript:">Гарначо</a>,
                                <a href="javascript:"> Канайоло</a>,
                                <a href="javascript:">Колорино</a>,
                                <a href="javascript:">Санджовезе</a>
                            </div>
                            <div class="itemDesc-props-prop">
                                <span>Процент алкоголя</span>
                                14%
                            </div>

                        </div>






                    </div>

                </div>
                <div class="itemCard-main_sell">
                    <div class="itemCard-main_sellHead">
                        <img src="../../assets/img/trophy.png" alt="awards"/>
                        Входит в 1% лучших вин мира
                    </div>
                    <div class="itemCard-main_sellBody">
                        <div class="itemCard-main_sellPrice">
                            879 Р
                            <span>Средняя цена</span>
                        </div>
                        <div class="itemCard-main_sellSeePrice">
                            <a href="javascript:">Смотреть цены в Москве</a>
                        </div>
                        <div class="itemCard-main_sellAdvantage">
                            <img src="../../assets/img/favourite.png" alt="adv"/>
                            Рейтинг составлен на основе более
                            25 миллионов отзывов по всему миру
                        </div>
                        <div class="itemCard-main_sellAdvantage">
                            <img src="../../assets/img/Слой_657.png" alt="adv"/>
                            Сравните цены и попробуйте лучшие вина
                        </div>

                        <div class="itemCard-main_sellAdvantage">
                            <img src="../../assets/img/shop_(1).png" alt="adv"/>
                            Сотрудничаем только с сертифицированными
                            магазинами Москвы
                        </div>
                        <div class="itemCard-main_sellAdvantage">
                            <img src="../../assets/img/email.png" alt="adv"/>
                            Подписаться на вино и получить
                            выгодные предложения
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <section class="itemSell">
        <div>

            <div class="itemSell-items"> <!--row-->
                <h2>Вино можно купить в магазинах</h2>
                <div class="itemSell-item">3</div> <!--col 12-->
                <div class="itemSell-item">4</div> <!--col 12-->
            </div>
        </div>
    </section>
{{--
    <section class="itemTaste">
        <div>
            <div class="itemTaste-row">
                <div class="itemTaste-head">
                    <h2>What does this wine taste like?</h2>
                </div>


                <div class="itemTaste-taste">
                    <div class="taste-table">
                        <% var taste = [
                        { min: 'Light', max: 'Bold', width: 15, left: 24 },
                        { min: 'Smooth', max: 'Tannic', width: 15, left: 59 },
                        { min: 'Dry', max: 'Sweet', width: 15, left: 41 },
                        { min: 'Soft', max: 'Acidic', width: 15, left: 70 },
                        ] %>

                        <% taste.forEach(function(item) { %>
                        <div class="taste-table_row">
                            <div class="taste-table_col">
                                <span><%=item.min%></span>
                            </div>
                            <div class="taste-table_col">
                                <div class="taste-table_slider">
                                    <div class="taste-table_thumb"
                                         style='width: <%=item.width%>%; left:<%=item.left%>%;'></div>
                                </div>
                            </div>
                            <div class="taste-table_col">
                                <span><%=item.max%></span>
                            </div>
                        </div>
                        <% }); %>
                    </div>

                </div>
                <div class="itemTaste-summary">
                    <span> WINE LOVERS TASTE SUMMARY</span>
                    <p>The taste profile of Rutini Trumpeter Malbec N.V. is based on 1986 user reviews</p>
                </div>
            </div>
        </div>
    </section>




    <section class="flavours">
        <div>
            <div class="flavours-row">
                <div class="flavours-head">
                    <h2>FLAVORS PEOPLE MENTION IN REVIEWS</h2>
                </div>
                <div class="flavours-wrapper">
                    <div class="flavours-list">
                        <ul class="flavours-items is-set">

                            <li class="flavours-item  is-ref ">
                                <a href="javascript:">
                                    <div class="flavours-item_header" style="background: rgb(195, 131, 73);">
                                        <img src="../../img/i-flavor.svg" alt="icon"/>
                                    </div>

                                    <div class="flavours-item_footer">
                                        <span>raisin, fig, prune</span>
                                        <p>153 <em style="color: rgb(195, 131, 73);">dried fruit</em> notes</p>
                                    </div>
                                </a>

                            </li>
                            <% var taste = [ 'rgb(185, 101, 93)','rgb(158, 110, 64)','rgb(140, 84, 51)','rgb(185, 101,
                            93)','rgb(158, 110, 64)','rgb(140, 84, 51)','rgb(185, 101, 93)','rgb(158, 110,
                            64)','rgb(140, 84, 51)' ] %>

                            <% taste.forEach(function(item) { %>

                            <li class="flavours-item">
                                <a href="javascript:">
                                    <div class="flavours-item_header" style="background: <%=item%>;">
                                        <img src="../../img/i-flavor.svg" alt="icon"/>
                                    </div>

                                    <div class="flavours-item_footer">
                                        <span>raisin, fig, prune</span>
                                        <p>153 <em style="color: <%=item%>;">dried fruit</em> notes</p>
                                    </div>
                                </a>

                            </li>

                            <% }); %>

                        </ul>

                    </div>

                    <button class="flavours-toggle"></button>
                    <button class="flavours-toggle" data-toggle="next"></button>
                </div>


            </div>
        </div>
    </section>

    <section class="itemReviews">
        <div>
            <div class="itemReviews-row">
                <div class="itemReviews-head">
                    <h2>Community reviews</h2>
                </div>
                <div class="itemReviews-items">
                    <% for (var i=1; i<=3; i++) { %>
                    <div class="itemReviews-item">
                        <div class="itemReviews-item_header">
                            <div class="itemReviews-item_headerUser">
                                <img src="../../img/user-item.jpg" alt="avatar"/>

                            </div>
                            <div class="itemReviews-item_headerRating">
                                <b>
                                    <i class="star red sz-18"></i>
                                    <i class="star red sz-18"></i>
                                    <i class="star red sz-18"></i>
                                    <i class="star red sz-18"></i>
                                    <i class="star red_5 sz-18"></i>
                                </b>
                                <p>Joy Noel</p>
                                <span>22 Mar 2017</span>
                            </div>
                        </div>
                        <div class="itemReviews-item_footer">
                            <p>Very friendly .. good with a dollar sándwich. Fruity .. berries</p>
                        </div>

                    </div>
                    <% } %>


                </div>
                <div class="itemReviews-more">
                    <a href="javascript:">Show more reviews</a>
                </div>
            </div>
        </div>
    </section>


    <section class="itemStyle">
        <div>
            <div>
                <div class="itemStyle-info">
                    <div class="itemStyle-info_title">
                        Wine style
                    </div>
                    <div class="itemStyle-info_name">Argentinian Malbec</div>
                    <div class="itemStyle-info_country">
                    <span>
                        <img src="../../img/flag_ar.svg" alt="flag"/>
                    </span>
                        Argentina
                    </div>
                    <p>
                        Extremely popular, Argentinian Malbec is an inky, medium-bodied, dry red wine with strong
                        impressions of dark fruits on the nose and palate. This wine tends to have mellower tannins than
                        its French counterpart. Heavily dependent on where they are grown for variations in flavor,
                        Argentinian Malbec has quickly become a world favorite due to the characteristics that the high
                        altitude climate and soi...
                    </p>
                    <div class="itemStyle-info_more">
                        <a href="javascript:">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="summary">
        <div>
            <div>
                <div class="summary-head">Summary</div>
                <div class="summary-col">
                    <div class="summary-item">
                        <span>Winery</span>
                        <a href="javascript:">Rutini</a>
                    </div>
                    <div class="summary-item">
                        <span>Grapes</span>
                        <a href="javascript:">Malbec</a>
                    </div>
                    <div class="summary-item">
                        <span>Region</span>
                        <a href="javascript:">Mendoza</a>
                    </div>

                </div>
                <div class="summary-col">
                    <div class="summary-item">
                        <span>Wine style</span>
                        <a href="javascript:">Argentinian Malbec</a>
                    </div>
                    <div class="summary-item">
                        <span>Food pairing</span>
                        <a href="javascript:">Beef, Lamb, Poultry</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--<style>
      footer {
        display: none;
      }
    </style>-->
    <%= _.template(require('./../includes/snippets/top-list.html'))() %>

--}}
@endsection
