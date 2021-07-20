<section class="itemWineryWines">
    <div>
        <div class="itemWineryWines-row">
            <div class="itemWineryWines-heading">
                <h2>вино с высоким рейтингом из винодельни мухрани</h2>
                <a href="javascript:">Показать все вина винодельни</a>
            </div>
            <div class="itemWineryWines-list">
                @for ($item = 1; $item <= 4; $item ++)
                <div class="itemWineryWines-item">
                    <div class="itemWineryWines-itemImg">
                        <a href="javascript:">
                            <img src="{{ asset('assets/img/bottle.png') }}" alt="wine"/>
                        </a>
                    </div>
                    <div class="itemWineryWines-itemDesc">
                        <a class="itemWineryWines-itemDesc_winery" href="javascript:">San Marzano</a>
                        <a class="itemWineryWines-itemDesc_vintage" href="javascript:">F Negroamaro 2017</a>
                        <a class="itemWineryWines-itemDesc_sugar" href="javascript:">Полусладкое</a>
                        <div class="itemWineryWines-itemDesc_rating">
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

                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>
