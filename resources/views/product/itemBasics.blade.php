<section class="itemBasics">
    <div>
        <div class="itemBasics-row">
            <h2>Основные моменты</h2>
            <div class="itemBasics-info">
                @isset($v_highlights)
                    @foreach($v_highlights as $item)
                        <div class="itemBasics-info-item">
                            <i><img src="{{$const->baseSite.str_replace('public','storage',$item->icon)}}" alt="{{$item->type}}"></i>
                            <p>
                                {{$item->name_ru}}
                            </p>
                        </div>
                    @endforeach
                @endisset

            </div>
        </div>
    </div>
</section>
