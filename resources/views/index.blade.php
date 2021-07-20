@extends('tpl.main')
@section('main')
    <section class="banner">
        <div>
            <div class="banner-row">
                <div class="banner-slogan">
                    <cite>
                        Экономьте,  <br/>
                        выбирая лучшее!
                    </cite>
                    <p>
                        <span>Выбирайте среди миллионов рейтингов</span>
                        <a href="{{url('wines')}}">Вино</a>,
                        <a href="javascript:">Крепкий</a>,
                        <a href="javascript:">алкоголь</a>,
                        <a href="javascript:">Пиво</a>

                        <span>по отличным ценам в магазинах Москвы!</span>
                    </p>
                </div>
                <div class="banner-stores">
                    @foreach($stores as $store)
                        <a href="javascript:" class="stores-item">
                            <div class="stores-item-header">
                                <img src="assets/img/{{$store->img}}" alt="store"/>
                            </div>
                            <div class="stores-item-footer">
                                <span><b>{{$store->d}}</b>{{$store->offer}}</span>
                                <div>
                                    <em>{{$store->discount}}</em>
                                </div>

                            </div>

                        </a>
                    @endforeach
                    <a href="javascript:" class="stores-more">
                    <span>
                        Еще 36 магазинов
                    </span>
                    </a>


                </div>
            </div>
        </div>
    </section>
    <form action="javascript:" id="filterCatalog" data-method="post">
    <section class="filter">
        <div>
            <div class="filter-vine">

                    <div class="filter-vine_type">
                        @include('components.select',[
                            'name' => 'color',
                            'heading' => 'Тип вина',
                            'list' => $filters->color,
                            'title' => 'name_ru'
                        ])

                    </div>
                    <div class="filter-vine_price">
                        @include('components.rangeSlider', ['data' => $filters->price, 'name' => 'price', 'heading' => 'Цена','icon' => '₽'])
                    </div>
                    <div class="filter-vine_rating">
                        @include('components.rangeSlider', ['data' => $filters->rating, 'name' => 'rating', 'heading' => 'Рейтинг', 'icon' => ''])
                    </div>
                    <div class="filter-vine_show">
                        <button onclick="window.location = window.uLink">Показать</button>
                    </div>
            </div>
        </div>
    </section>
    </form>
    @include('includes.top_list')

{{--TOP LIST--}}


@endsection
