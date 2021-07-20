@foreach($catalog as $item)
    <div class="item" rel="{{$total}}">
        <div class="item-img">
            <a href="/products/{{$item->product_slug}}" style="background-color: rgb(188, 188, 176);">
            <span class="item-img_box">
                @if(@fopen($const->vThumb.$item->product_id.'_0.png', "r") )
                    <img src="{{$const->vThumb.$item->product_id}}_0.png" alt="item img"/>
                @elseif(@@fopen($const->vThumb.$item->product_id.'_0.jpg', "r"))
                    <img src="{{$const->vThumb.$item->product_id}}_0.jpg" alt="item img"/>
                @elseif(@fopen($const->pThumb.$item->product_id.'_0.jpg', "r"))
                    <img src="{{$const->pThumb.$item->product_id}}_0.jpg" alt="item img"/>
                @elseif(@fopen($const->pThumb.$item->product_id.'_0.png', "r"))
                    <img src="{{$const->pThumb.$item->product_id}}_0.png" alt="item img"/>
                @endif
            </span>
            </a>
        </div>
        <div class="item-desc">
            <div class="item-desc-header">

                <div class="item-desc-header_desc">
                    <div class="item-desc-winery">
                        @isset($item->brand_name)
                            <a href="{{$item->brand_url}}">"{{$item->brand_name}}"</a>
                        @endisset
                        @isset($item->winery_name)
                            <a href="{{$item->winery_url}}">{{$item->winery_name}}</a>
                        @endisset
                    </div>
                    <div class="item-desc-vintage">

                            <a href="/products/{{$item->product_slug}}" style="max-width: 300px; display: block;">
                                @if($item->product_name)
                                    {{$item->product_name}}
                                @else
                                    {{$item->product_translit}}
                                @endif

                            </a>

                    </div>

                    <div class="item-desc-sugar">
                        @isset($item->color_name_ru)
                            <a href="{{$item->color_url}}">{{$item->color_name_ru}}</a>
                        @endisset

                    </div>


                    <div class="item-desc-country">
                        <i class="round">
                            <img src="{{$const->flagSrc}}{{$item->country_id}}.webp" alt="flag"/>
                        </i>
                        @isset($item->country_name_ru)
                            <a href="{{$item->country_url}}" class="item-desc-countryName">{{$item->country_name_ru}}</a>
                        @endisset
                        @isset($item->region_name_ru)
                            <span class="item-desc-countryDot">·</span>
                            <a href="{{$item->region_url}}" class="item-desc-countryRegion">{{$item->region_name_ru}}</a>
                        @endisset
                        @isset($item->sub_region_name_ru)
                            <span class="item-desc-countryDot">·</span>
                            <a href="{{$item->sub_region_url}}"
                               class="item-desc-countryRegion">{{$item->sub_region_name_ru}}</a>
                        @endisset


                    </div>

                </div>

                @isset($item->review_note)
                    <div class="item-review">
                        @if($item->review_note_ru)
                            <p>“{{Str::limit($item->review_note_ru, 150)}}”</p>
                        @else
                            <p>“{{Str::limit($item->review_note, 150)}}”</p>
                        @endif

                        <div class="item-review_user">

                            @isset($item->avatar)
                                <div class="item-review_userAvatar">
                                    <img src="{{ $const->baseSite.str_replace('public','storage',$item->avatar) }}" alt="user"/>
                                </div>
                            @endisset

                            <div class="item-review_userRate">
                                @include('components.rating', ['average' => $item->review_rating,'size' => 16,'color' => 'red'])

                                @isset($item->alias)
                                <div class="item-review_userName">{{$item->alias}}</div>
                                @endisset
                            </div>

                        </div>

                    </div>
                @endisset



            </div>

            <div class="item-desc-footer">



                    <div class="item-desc-rating rating-block">
                        @if(isset($item->ratings_average) && $item->ratings_average)

                        <div class="rate">
                            <span>{{$item->ratings_average ? number_format($item->ratings_average,1,'.','') : 0}}</span>
                        </div>

                        <div class="stars">
                            @include('components.rating',['average' => $item->ratings_average ? number_format($item->ratings_average,1,'.','') : 0, 'color' => 'red', 'size' => '12'])

                            @isset($item->ratings_count)
                                <em>{{$item->ratings_count}} отзывов</em>
                            @endisset

                        </div>
                        @endif
                    </div>



                <a href="javascript:" rel="seller" class="item-desc-sellersBtn">
                    <span>Показать магазины</span>
                </a>
                    @isset($item->price)
                        <div class="item-desc-price">
                            <p>{{number_format($item->price,0,'',' ')}} Р</p>
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
                    @endisset



            </div>

        </div>
    </div>
@endforeach


