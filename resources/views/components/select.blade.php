<div class="select vertical">

    <input type="checkbox" class="select-dropdown" data-trigger="{{$name}}" id="select-{{$name}}"/>
    <label for="select-{{$name}}">
        <em>{{$heading}}</em>
        <span data-title="{{$name}}">{{$list[0]->name_ru}}</span>
        <img src="{{ asset('assets/img/i-chevron.svg') }}" alt="icon"/>
    </label>
    <div class="options">
        <div class="options-wrapper">
            @foreach($list as $key => $item)
            <a href="javascript:" data-name="{{$name}}" class="option @if($key === 0) active @endif" data-value="{{$item->id}}">
                <span>{{$item[$title]}}</span>
            </a>
            @endforeach
        </div>
    </div>
    <input type="hidden" name="{{$name}}" value="{{$filters->color[0]->id}}"/>
</div>

{{--

<div class="select vertical">

    <input type="checkbox" class="select-dropdown" data-trigger="color" id="select-color"/>
    <label for="select-color">
        <em>Тип вина</em>
        <span data-title="color">{{$filters->color[0]->name_ru}}</span>
        <img src="{{ asset('assets/img/i-chevron.svg') }}" alt="icon"/>
    </label>
    <div class="options">
        <div class="options-wrapper">
            @foreach($filters->color as $key => $color)
            <a href="javascript:" data-name="color" class="option @if($key === 0) active @endif" data-value="{{$color->id}}">
                <span>{{$color->name_ru}}</span>
            </a>
            @endforeach
        </div>
    </div>
    <input type="hidden" name="color" value="{{$filters->color[0]->id}}"/>
</div>


--}}
