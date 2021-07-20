@if(count($catalog))
    <div class="header-search_items">
        @foreach($catalog as $item)
            <a href="/products/{{$item->product_slug}}" class="header-search_item">
                <div>
                    @if(@fopen($const->vThumb.$item->product_id.'_0.png', "r") )
                        <img src="{{$const->vThumb.$item->product_id}}_0.png" alt="item img"/>
                    @elseif(@@fopen($const->vThumb.$item->product_id.'_0.jpg', "r"))
                        <img src="{{$const->vThumb.$item->product_id}}_0.jpg" alt="item img"/>
                    @elseif(@fopen($const->pThumb.$item->product_id.'_0.jpg', "r"))
                        <img src="{{$const->pThumb.$item->product_id}}_0.jpg" alt="item img"/>
                    @elseif(@fopen($const->pThumb.$item->product_id.'_0.png', "r"))
                        <img src="{{$const->pThumb.$item->product_id}}_0.png" alt="item img"/>
                    @endif
                </div>
                <span>{{$item->product_name}}</span>
            </a>
        @endforeach
    </div>
@endif

