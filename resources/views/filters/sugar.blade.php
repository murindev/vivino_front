<fieldset>
    <legend>Сахар</legend>
    <div class="spaceBetween">
        @foreach($list as $item)
            <div class="checkbox fixed">
                <input name="{{$name}}" value="{{$item->id}}" rel="{{$item->name_ru ? $item->name_ru : $item->name_en}}" type="checkbox" id="{{$name}}_{{$item->id}}" />
                <label for="{{$name}}_{{$item->id}}">
                    <span>{{$item->name_ru ? $item->name_ru : $item->name_en}}</span>
                </label>
            </div>
        @endforeach
    </div>

</fieldset>
