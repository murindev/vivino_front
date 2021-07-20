@if(isset($product->srcVivino))
    <img src="{{$const->vThumb.$product->srcVivino->name}}" alt="{{$product->name}}">
@elseif(isset($product->srcWinestyle))
    <img src="{{$const->pThumb.$product->srcWinestyle->name}}" alt="{{$product->name}}">
@else
    <img src="{{ asset('assets/img/empty.png') }}" alt="{{$product->name}}">
@endif
