<b class="itemDesc-rating_rating">

    @for ($i = 1; $i <= (int)substr($average, 0, 1) ; $i++)
        <i class="star {{$color}} sz-{{$size}}"></i>
    @endfor
        <i class="star {{$color}}_{{substr($average, 2, 1)}} sz-{{$size}}"></i>

    @for ($j = 1; $j <= 4 - (int)substr($average, 0, 1) ; $j++)
        <i class="star {{$color}}_0 sz-{{$size}}"></i>
    @endfor

</b>
