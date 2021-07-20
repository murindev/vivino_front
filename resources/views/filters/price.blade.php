<fieldset>
    <legend>Цена</legend>
    <div class="price-slider">

        <div class="price-slider_title">
            <span>{{$init_price['title']}}</span>
        </div>

        <div class="price-slider_digits">
            <div class="price-slider_digitLeft">
                <span><em>{{$init_price['min']}}</em>{{$init_price['sign']}}</span>

                <input type="hidden" value="{{$init_price['min']}}"/>
            </div>
            <div class="price-slider_digitRight">
                <span><em>{{$init_price['max']}}</em>{{$init_price['sign']}}</span>
                <input type="hidden" value="{{$init_price['max']}}"/>
            </div>
        </div>

        <label class="rangeSlider">
            <input type="range"
                   class="priceslider vine-price"
                   step="{{$init_price['step']}}"
                   multiple
                   value="{{$init_price['min']}},{{$init_price['max']}}" min="0"
                   max="{{$init_price['max']}}"
            />
        </label>

    </div>
</fieldset>
