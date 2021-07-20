@extends('tpl.main')
@section('main')

{{--    @dump($catalog[0])--}}

    <section class="stores">
        <div>
            <div class="stores-row">
                <h2>Наличие в магазинах:</h2>
                <div class="stores-list">

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
    <section class="searchResult">
        <div>
            <div class="searchResult-row">
                <div class="searchResult-text">
                    <p class="words-informer">Белое Сухое Немецкое вино из Пфальца</p>
                    <span class="price-informer"></span>
                    <div class="searchResult-count">
                        From 4 grapes, 2 regional wine styles, 3 countries and 2 regions
                    </div>
                </div>
                <div class="searchResult-count">
                    @include('components.catalogTotal',['total' => $total])
                </div>

            </div>
        </div>
    </section>
    <section class="sort">
        <div>
            <div class="sort-row">
                <div class="sort-props" id="filter_params"></div>
                <div class="sort-block">
                    <div class="select horizontal" >

                        <input type="checkbox" class="select-dropdown" id="vine_type" name="vine_type" />
                        <label for="vine_type">

                            <em>Сортировать по:</em>
                            <span>{{$sort_order[0]->name}}</span>
                            <img src="assets/img/i-chevron.svg" alt="icon"/>

                        </label>
                        <div class="options">
                            <div class="options-wrapper">
                                @foreach($sort_order as $sort)
                                    <a href="javascript:" class="option" data-value="{{$sort->id}}" ><span>{{$sort->name}}</span></a>
                                @endforeach
                            </div>
                        </div>
                        <input type="hidden" name=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog">
        <div>
            <div class="catalog-row">

                <div class="catalog-filter">
                    <em>Выбрать несколько</em>
                    <form action="javascript:" id="filterCatalog" data-method="get">
                        @include('filters.colors',['list' => $filters->color,'name' => 'color'])
                        @include('filters.sugar',['list' => $filters->sugar, 'name' => 'sugar'])
                        <fieldset>
                            <legend>Цена</legend>
                        @include('components.rangeSlider', ['data' => $filters->price, 'name' => 'price', 'heading' => '','icon' => '₽'])
                        </fieldset>

                        <fieldset>
                            <legend>Рейтинг</legend>
                            @include('components.rangeSlider', ['data' => $filters->rating, 'name' => 'rating', 'heading' => '', 'icon' => ''])
                        </fieldset>

                        <fieldset>
                            <legend>Страна</legend>
                            <input type="search" class="searchItems" id="country_id_q" placeholder="название страны"/>
                            <div class="search_pool" id="country_filter">
                                @include('filters.country',['list' => $filters->countries, 'name' => 'country'])
                            </div>
                        </fieldset>

{{--                        @include('filters.price',['init_price' => $init_price])--}}

{{--                        @include('filters.rating')--}}




{{--Grapes--}}
{{--                        <fieldset>
                            <legend>Сорт винограда</legend>

                            <input type="search"  class="searchItems" placeholder="По сортам винограда" />

                            <div class="search_pool">
                                @foreach($filters['grapes'] as $grape)
                                    <div class="checkbox">
                                        <input type="checkbox" id="{{$grape->id}}" />
                                        <label for="{{$grape->id}}">
                                            <span>{{$grape->name_ru ? $grape->name_ru : $grape->name_en}}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                        </fieldset>--}}

{{--Countries--}}


                        <fieldset>
                            <legend>Сочетание</legend>
{{--                            @foreach($filters['pairings'] as $pairings)
                                <div class="checkbox">
                                    <input type="checkbox" id="{{$pairings->id}}" />
                                    <label for="{{$pairings->id}}">
                                        <span>{{$pairings->name_ru ? $pairings->name_ru : $pairings->name_en}}</span>
                                    </label>
                                </div>
                            @endforeach--}}
                        </fieldset>
                    </form>
                </div>

                <div class="catalog-items">
                    <div id="catalog-container">
                        @include('components.catalogItems',['catalog' => $catalog])
                    </div>
                        <div class="ajax-loading"><img src="{{ asset('assets/img/loading.gif') }}" /></div>
                </div>
            </div>
        </div>

    </section>
<script>

</script>

@endsection
