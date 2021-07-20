<section class="itemFood">
    <div>
        <div class="itemFood-row">
            <div class="itemFood-wine">
                @include('components.imageMiddle')
            </div>
            <div class="itemFood-dishes">
                <h2>Еда, которая хорошо сочетается с этим вином</h2>
                <p> Наши винные эксперты считают, что {{$product->name}} будет сочетаться на небесах с этими блюдами. Приятного аппетита!</p>

                <p>Ты готовишь что-то еще?  <a href="javascript:"> Поиск вин по пищевым парам</a></p>

                @foreach($v_foods as $item)
                    <a class="itemFood-dishes-link">
                        <img src="{{$const->foodSrc.$item->vivino_id}}.png" alt="dish"/>
                        @if($item->name_ru)
                            <span>{{$item->name_ru}}</span>
                        @else
                            <span>{{$item->name_en}}</span>
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
