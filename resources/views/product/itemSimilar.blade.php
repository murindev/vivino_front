<section class="itemSimilar">
    <div>
        <div class="itemSimilar-row">
            <div class="itemSimilar-heading">
                <h2>вино с высоким рейтингом из винодельни мухрани</h2>
                <a href="javascript:">Показать все вина</a>
            </div>
            <div class="itemSimilar-list">
                @for ($item = 1; $item <= 3; $item ++)
                <div class="itemSimilar-wine">

                    <div class="itemSimilar-wine-desc">

                        <a class="itemSimilar-wine-winery" href="javascript:">San Marzano</a>
                        <a class="itemSimilar-wine-vintage" href="javascript:">F Negroamaro 2017</a>
                        <a class="itemSimilar-wine-sugar" href="javascript:">Полусладкое</a>
                        <div class="itemSimilar-wine-location">
                            <i class="round">
                                <img src="{{ asset('assets/img/flag_ar.svg') }}" alt="flag"/>
                            </i>
                            <a class="itemSimilar-wine-country" href="javascript:">Italy</a>
                            <em>·</em>
                            <a class="itemSimilar-wine-region" href="javascript:">Salento</a>
                        </div>
                        <div class="itemSimilar-wine-rating">
                            <div class="rating-block">

                                <div class="rate">
                                    <span>4.4</span>
                                </div>
                                <div class="stars">
                                    <b>
                                        <i class="star red sz-12"></i>
                                        <i class="star red sz-12"></i>
                                        <i class="star red sz-12"></i>
                                        <i class="star red sz-12"></i>
                                        <i class="star red_4 sz-12"></i>
                                    </b>
                                    <em>168 отзывов</em>
                                </div>
                            </div>
                        </div>


                        <a class="itemSimilar-wine-stores" href="javascript:">
                            <span>Показать магазин</span>
                        </a>
                        <div class="itemSimilar-wine-prices">
                            <span>900 Р</span>
                            @if($item === 2)
                                <em>1000 Р</em>
                            @else
                                <em></em>
                            @endif
                        </div>

                    </div>
                    <div class="itemSimilar-wine-img">
                        <a href="javascript:">
                            <img src="{{ asset('assets/img/bottle.png') }}" alt="wine"/>
                        </a>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </div>
</section>
