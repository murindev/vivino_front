<section class="itemSell">
    <div>

        <div class="itemSell-items">
            <h2>Вино можно купить в магазинах</h2>
            @foreach($stores as $store)
                <div class="itemSell-item">
                    <a href="javascript:" class=" i-percent">
                        <img src="{{ asset('assets/img/'.$store->img) }}" alt="seller logo"/>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
