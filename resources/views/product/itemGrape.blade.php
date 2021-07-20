@isset($style)
<section class="itemGrape">
    <div>
        <div class="itemGrape-row">
            <div class="itemGrape-bg">
                @if($style->background)
                    <img src="{{ $const->baseSite.str_replace('public','storage',$style->background) }}" alt="grape valley"/>
                @else
                    <img src="{{ asset('assets/img/style_bg.webp') }}" alt="grape valley"/>
                @endif

                <div class="itemGrape-info">
                    <h2 class="itemGrape-info_title">
                        Сорт вина
                    </h2>
                    <div class="itemGrape-info_name">
                        @if(isset($style->blurb_ru))
                            <p>{{$style->blurb_ru}}</p>
                        @else
                            <p>{{$style->blurb}}</p>
                        @endif
                    </div>
                    <div class="itemGrape-info_country">
                    <span>
                        <img src="{{$const->flagSrc.$product->country->id}}.webp" alt="flag"/>
                    </span>
                        {{$product->country->name_ru}}
                    </div>
                    @if(isset($style->description_ru))
                        <p>{{Str::limit($style->description_ru, 200)}}</p>
                    @else
                        <p>{{Str::limit($style->description, 200)}}</p>
                    @endif
                    <div class="itemGrape-info_more">
                        <a href="/wine/{{$style->seo_name}}">Читать дальше</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endisset
