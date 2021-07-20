@foreach($catalog as $item)
<div class="item">
    <div class="item-img">
        <a href="/products/{{$item->slug}}" style="background-color: rgb(188, 188, 176);">
            <span class="item-img_box">
                @if(isset($item->srcVivino))
                    <img src="{{$const->vThumb}}{{$item->srcVivino->name}}" alt="item img"/>
                @else
                    <img src="{{$const->vThumb}}{{$item->srcWinestyle->name}}" alt="item img"/>
                @endif
            </span>
        </a>
    </div>
    <div class="item-desc">
        <div class="item-desc-header">

            <div class="item-desc-header_desc">
                <div class="item-desc-winery">
                    @isset($item->winery)
                        <a href="{{$item->winery->url}}">{{$item->winery->name}}</a>
                    @endisset
                </div>
                <div class="item-desc-vintage">
                    @isset($item->name)
                        <a href="/products/{{$item->slug}}"
                           style="max-width: 300px; display: block;">{{$item->name}}</a>
                    @endisset

                </div>
                <div class="item-desc-sugar">
                    @isset($item->color)
                        <a href="{{$item->color->url}}">{{$item->color->name_ru}}</a>
                    @endisset

                </div>


                <div class="item-desc-country">
                    <i class="round">
                        <img src="{{$const->flagSrc}}{{$item->country_id}}.webp" alt="flag"/>
                    </i>
                    @isset($item->country)
                        <a href="{{$item->country->url}}" class="item-desc-countryName">{{$item->country->name_ru}}</a>
                    @endisset
                    @isset($item->region)
                        <span class="item-desc-countryDot">·</span>
                        <a href="{{$item->region->url}}" class="item-desc-countryRegion">{{$item->region->name_ru}}</a>
                    @endisset
                    @isset($item->subRegion)
                        <span class="item-desc-countryDot">·</span>
                        <a href="{{$item->subRegion->url}}"
                           class="item-desc-countryRegion">{{$item->subRegion->name_ru}}</a>
                    @endisset


                </div>

                {{--                                        {{$item->code}}--}}

            </div>

            <div class="item-review">
                <p>“Gentle, lily on the nose, maybe strawberry, ripe pears and white cherry finish. Very nice!”</p>
                <div class="item-review_user">
                    <div class="item-review_userAvatar">
                        <img src="assets/img/user.jpg" alt="user"/>
                    </div>
                    <div class="item-review_userRate">
                        <b class="rating-row_rating">
                            <i class="star red sz-16"></i>
                            <i class="star red sz-16"></i>
                            <i class="star red sz-16"></i>
                            <i class="star red sz-16"></i>
                            <i class="star red_5 sz-16"></i>
                        </b>
                        <div class="item-review_userName">Oleg K</div>
                    </div>
                </div>


            </div>

        </div>

        <div class="item-desc-footer">

            @isset($item->ratingVivino)
                <div class="item-desc-rating rating-block">


                    <div class="rate">
                        <span>{{$item->ratingVivino->rating}}</span>
                    </div>

                    <div class="stars">
                        @include('components.rating',['average' => $item->ratingVivino->rating, 'color' => 'red', 'size' => '12'])
                        <em>168 отзывов</em>
                    </div>
                </div>
            @endisset


            <a href="javascript:" rel="seller" class="item-desc-sellersBtn">
                <span>Показать магазины</span>
            </a>
            <div class="item-desc-price">
                <p>879 Р</p>
                <span>Средняя цена</span>
            </div>
            <div class="item-desc-sellersList">
                <ul>
                    <li><a href="javascript:">
                            <img src="assets/img/seller_1.png" alt="seller logo"/>
                        </a></li>
                    <li><a href="javascript:">
                            <img src="assets/img/seller_2.png" alt="seller logo"/>
                        </a></li>
                    <li><a href="javascript:">
                            <img src="assets/img/seller_3.png" alt="seller logo"/>
                        </a></li>
                </ul>
                <a href="javascript:">и еще в + 3</a>
            </div>

        </div>
    </div>

</div>
@endforeach
