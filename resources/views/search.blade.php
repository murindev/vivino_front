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

                </div>
                <div class="searchResult-count">
                    @include('components.catalogTotal',['total' => $total])
                </div>

            </div>
        </div>
    </section>
    <section class="catalog">
        <div>
            <div class="catalog-row">

                <div class="catalog-filter">
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
