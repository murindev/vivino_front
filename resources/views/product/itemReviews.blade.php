@isset($previews)


       <div>
        <div class="itemReviews-row">
            <h2>Отзывы сообщества</h2>
            <div class="itemReviews-items">

                @foreach($previews as $preview)
                    <div class="itemReviews-item">
                        <div class="itemReviews-item_header">
                            <div class="itemReviews-item_headerUser">
                                @include('components.avatar',['avatar' => $preview->userData->avatar])
                            </div>


                            <div class="itemReviews-item_headerRating">
                                @isset( $preview->rating)
                                    @include('components.rating',['average' => $preview->rating, 'size' => 18, 'color' => 'red'])
                                @endisset
                                @isset( $preview->userData)
                                    <p>{{$preview->userData->alias}} </p>
{{--                                    <span>22 Mar 2017</span>--}}
                                @endisset

                            </div>
                        </div>
                        <div class="itemReviews-item_footer">
                            <p>{{$preview->note}}</p>
                        </div>
{{--                        <div class="itemReviews-item_like">--}}
{{--                            <a href="javascript:"></a>--}}
{{--                            <span>98</span>--}}
{{--                        </div>--}}

                    </div>
                @endforeach


                <a class="more-reviews" href="javascript:">Показать все отзывы</a>
            </div>
            <div class="itemReviews-more">
                <div class="itemReviews-more-rating rating-block">

                    <div class="rate">
                        <span>{{$ratings_average}}</span>
                    </div>
                    <div class="stars">
                        @include('components.rating',['average' => $ratings_average, 'size' => 12, 'color' => 'red'])
                        <em>{{$cntSum_real}} отзывов</em>
                    </div>
                </div>
                <div class="itemReviews-more-sliders">
                    @foreach($cnt_real as $k => $i)
                        <div class="itemReviews-more-slidersRow">
                            <div class="itemReviews-more-slidersCol"><span>{{$k}} {{$spelling[$k]}}</span></div>
                            <div class="itemReviews-more-slidersCol">
                                <div><i style="width: {{$i*$percent_real}}%;"></i></div>
                            </div>
                            <div class="itemReviews-more-slidersCol"><span>{{$i}}</span></div>
                        </div>
                    @endforeach

                </div>
                <div class="itemReviews-more-self">
                    <p>
                        Добавьте свой собственный рейтинг и помогите другим пользователям Winebaza выбрать <br/>правильное вино!
                    </p>
                    <div class="itemReviews-more-selfRating">
                        <div class="itemReviews-more-selfUser"></div>
                        <b>
                            <i class="star red_0 sz-24"></i>
                            <i class="star red_0 sz-24"></i>
                            <i class="star red_0 sz-24"></i>
                            <i class="star red_0 sz-24"></i>
                            <i class="star red_0 sz-24"></i>
                        </b>

                    </div>
                </div>
                <div class="itemReviews-more-indicators">
                    <div class="itemReviews-more-indicator">
                        <div class="itemReviews-more-indicatorText">
                            Топ-1% вин
                            в мире
                        </div>

                        <svg class="circle-diagram" width="128" height="128" data-percent="1" data-stroke-color="#a61a30" data-stroke-width="18">
                            <path fill="none" d="M 64, 64 m -55, 0 a 55,55 0 1,0 110,0 a 55,55 0 1,0 -110,0" stroke="#f6f0f0" stroke-width="18"></path>
                            <circle class="circle-diagram__circle" cx="50%" cy="50%" r="50%" stroke="#D1D1D1" stroke-width="0" fill="none" />
                            <path class="circle-diagram__arc" fill="none" />
                            <text class="circle-diagram__text" x="50%" y="33" style="text-anchor: middle; font-size: 13px;"></text>
                        </svg>

                    </div>
                    <div class="itemReviews-more-indicator">
                        <div class="itemReviews-more-indicatorText">
                            Топ 2% вин
                            из Рокпайл
                        </div>

                        <svg class="circle-diagram" width="128" height="128" data-percent="2" data-stroke-color="#f1cf00" data-stroke-width="18">
                            <path fill="none" d="M 64, 64 m -55, 0 a 55,55 0 1,0 110,0 a 55,55 0 1,0 -110,0" stroke="#f6f0f0" stroke-width="18"></path>
                            <circle class="circle-diagram__circle" cx="50%" cy="50%" r="50%" stroke="#D1D1D1" stroke-width="0" fill="none" />
                            <path class="circle-diagram__arc" fill="none" />
                            <text class="circle-diagram__text" x="50%" y="33" style="text-anchor: middle; font-size: 13px;"></text>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endisset
