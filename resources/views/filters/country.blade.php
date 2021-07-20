@foreach($list as $item)
    <div class="checkbox">
        <input name="{{$name}}" value="{{$item->id}}" rel="{{$item->name_ru ? $item->name_ru : $item->name_en}}"
               type="checkbox" id="{{$name}}_{{$item->id}}"/>
        <label for="{{$name}}_{{$item->id}}">
            <span class="flag">
                <img src="{{$const->flagSrc}}{{$item->id}}.webp" alt="flag"/>
            </span>
            <span>{{$item->name_ru}}</span>
        </label>
    </div>
@endforeach

