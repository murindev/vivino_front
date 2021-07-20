
@if(isset($avatar) && !empty($avatar))
    <img src="{{ $const->baseSite.str_replace('public','storage',$avatar) }}" alt="user avatar"/>
@else
    <img src="{{ asset('assets/img/user-item.jpg') }}" alt="avatar"/>
@endif
