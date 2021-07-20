@if(isset($product->srcVivino))
    <img src="{{$const->vOriginal.$product->srcVivino->name}}" alt="{{$product->name}}">
@elseif(isset($product->srcWinestyle))
    <img src="{{$const->pOriginal.$product->srcWinestyle->name}}" alt="{{$product->name}}">
@else
    <img src="{{ asset('assets/img/empty.png') }}" alt="{{$product->name}}">
@endif
