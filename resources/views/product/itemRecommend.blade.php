<section class="itemRecommend">
    <div>
        <div class="itemRecommend-row">
            <div class="itemRecommend-text">

                <h2>рекомендуем @isset($product->sugar->name_ru) {{$product->sugar->name_ru_pl}}   @endisset вина
                    <span>
                        @isset($product->region) регион {{$product->region->name_ru}} - @endisset
                        @isset($product->country) {{$product->country->name_ru}} @endisset
                    </span>
                </h2>
                <p>
                    Мы знаем 285 вин из этого региона - и мы
                    выбрали три из них только для вас!
                </p>
                <a href="javascript:">Показать все</a>
            </div>
            <div class="itemRecommend-wines">
                <div class="itemRecommend-wine">
                    <p>Лучшее соотношение
                        цены и качества</p>
                    <a href="javascript:" class="itemRecommend-wine-link i-price">
                        <img src="{{ asset('assets/img/recommend_bottle.png') }}" alt="wine "/>
                    </a>
                    <span class="itemRecommend-wine-year">2015</span>
                    <span class="itemRecommend-wine-rate">3.8</span>
                    <div class="itemRecommend-wine-rating">
                        <b class="itemDesc-rating_rating">

                            <i class="star red sz-12"></i>
                            <i class="star red sz-12"></i>
                            <i class="star red sz-12"></i>
                            <i class="star red_8 sz-12"></i>
                            <i class="star red_0 sz-12"></i>

                        </b>
                    </div>

                    <span class="itemRecommend-wine-ratingCnt">167 отзывов</span>
                    <a class="itemRecommend-wine-storeBtn" href="javascript:">
                        <span>Показать магазин</span>
                    </a>
                </div>
                <div class="itemRecommend-wine">
                    <p>Топ-рейтинг</p>
                    <a href="javascript:" class="itemRecommend-wine-link i-rating">
                        <img src="{{ asset('assets/img/bottle.png') }}" alt="wine "/>
                    </a>
                    <span class="itemRecommend-wine-year">2015</span>
                    <span class="itemRecommend-wine-rate">3.8</span>
                    <div class="itemRecommend-wine-rating">
                        <b class="itemDesc-rating_rating">

                            <i class="star red sz-12"></i>
                            <i class="star red sz-12"></i>
                            <i class="star red sz-12"></i>
                            <i class="star red_8 sz-12"></i>
                            <i class="star red_0 sz-12"></i>

                        </b>
                    </div>
                    <span class="itemRecommend-wine-ratingCnt">167 отзывов</span>
                    <a class="itemRecommend-wine-storeBtn" href="javascript:">
                        <span>Показать магазин</span>
                    </a>
                </div>
                <div class="itemRecommend-wine">
                    <p>Самое
                        популярное</p>
                    <a href="javascript:" class="itemRecommend-wine-link i-popular">
                        <img src="{{ asset('assets/img/bottle.png') }}" alt="wine "/>
                    </a>
                    <span class="itemRecommend-wine-year">2015</span>
                    <span class="itemRecommend-wine-rate">3.8</span>
                    <div class="itemRecommend-wine-rating">
                        <b class="itemDesc-rating_rating">

                            <i class="star red sz-12"></i>
                            <i class="star red sz-12"></i>
                            <i class="star red sz-12"></i>
                            <i class="star red_8 sz-12"></i>
                            <i class="star red_0 sz-12"></i>

                        </b>
                    </div>
                    <span class="itemRecommend-wine-ratingCnt">167 отзывов</span>
                    <a class="itemRecommend-wine-storeBtn" href="javascript:">
                        <span>Показать магазин</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
