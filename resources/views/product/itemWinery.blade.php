@isset($v_winery)
<section class="itemWinery">

    <div>
        <div class="itemWinery-row">
            <div class="itemWinery-desc">
                <h2>О винодельне {{$v_winery->name_en}}</h2>
                <div class="itemWinery-desc-item">
                    <i><img src="{{ asset('assets/img/winery_cnt.png') }}" alt="icon"/></i>
                    {{$v_winery->statistics->wines_count}} вина на Winebaza
                </div>
                <div class="itemWinery-desc-item">
                    <i><img src="{{ asset('assets/img/winery_cnt.png') }}" alt="icon"/></i>
                    средняя оценка вина составляет {{$v_winery->statistics->ratings_average}} - на основе
                    {{$v_winery->statistics->ratings_count}} оценок
                </div>
                <div class="itemWinery-desc-item">
                    @isset($product->country)
                    <i class="round"><img src="{{$const->flagSrc.$product->country->id}}.webp" alt="icon"/></i>
                    @endisset

                    расположен в
                    @isset($product->region)
                        {{$product->region->name_ru}}
                    @endisset
                    @isset($product->country)
                        {{$product->country->name_ru}}
                    @endisset
                </div>

                @isset($product->winery->text_product)
                    <p>
                        {{Str::limit(strip_tags($product->winery->text_product), 200)}}
                    </p>
                @endisset

                <a href="{{$product->winery->url}}">Читать подробнее</a>
            </div>
            <div class="itemWinery-map">
                <img src="{{ asset('assets/img/map.png') }}" alt="icon"/>
            </div>
        </div>
    </div>
</section>
@endisset
