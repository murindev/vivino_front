@if(isset($product->srcVivino))
    <img src="{{$const->vMiddle.$product->srcVivino->name}}" alt="{{$product->name}}">
@elseif(isset($product->srcWinestyle))
    <img src="{{$const->pMiddle.$product->srcWinestyle->name}}" alt="{{$product->name}}">
@else
    <img src="{{ asset('assets/img/empty.png') }}" alt="{{$product->name}}">
@endif
