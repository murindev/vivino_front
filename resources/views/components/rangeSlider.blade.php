<div class="price-slider">

    <div class="price-slider_title">
        <span>{{$heading}}</span>
    </div>
    <div class="price-slider_digits">
        <div class="price-slider_digitLeft">

            @if(isset($_GET['filter']) && isset($_GET['filter'][$name]))
                    <span><em>{{explode(',',$_GET['filter'][$name])[0]}}</em> {{$icon}}</span>
                    <input type="hidden" name="{{$name}}[]" value="{{explode(',',$_GET['filter'][$name])[0]}}"/>
                @else
                    <span><em>{{$data->from}}</em> {{$icon}}</span>
                    <input type="hidden" name="{{$name}}[]" value="{{$data->from}}"/>
                @endif
        </div>
        @if(isset($_GET['filter']) && isset($_GET['filter'][$name]))
            <div class="price-slider_digitRight">
                <span><em>{{explode(',',$_GET['filter'][$name])[1]}}</em> {{$icon}}</span>
                <input type="hidden" name="{{$name}}[]" value="{{explode(',',$_GET['filter'][$name])[1]}}"/>
            </div>
        @else
            <div class="price-slider_digitRight">
                <span><em>{{$data->to}}</em> {{$icon}}</span>
                <input type="hidden" name="{{$name}}[]" value="{{$data->to}}"/>
            </div>
        @endif

    </div>

    <label class="rangeSlider">
        @if(isset($_GET['filter']) && isset($_GET['filter'][$name]))
            <input type="range"
                   data-slider="{{$name}}"
                   class="priceslider"
                   step="{{$data->step}}"
                   multiple
                   value="{{$_GET['filter'][$name]}}" min="{{$data->min}}" max="{{$data->max}}"
            />
        @else
            <input type="range"
                   data-slider="{{$name}}"
                   class="priceslider"
                   step="{{$data->step}}"
                   multiple
                   value="{{$data->from.','.$data->to}}" min="{{$data->min}}" max="{{$data->max}}"
            />
        @endif

    </label>

</div>
