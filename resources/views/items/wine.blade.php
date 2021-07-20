@extends('tpl.main')
@section('main')
{{--    @dump($product)--}}
{{--    @dump($json)--}}
{{--    @dump($v_statistics)--}}

    @include('product.itemCard' )

    @include('product.itemSell')

    @if($v_expert_reviews) @include('product.itemExperts') @endisset

    @if($v_tastes) @include('product.itemTaste') @endisset

    @if($v_foods) @include('product.itemFood') @endisset


    @include('product.itemRecommend')
    @include('product.itemCritics')

<section class="itemReviews">
    @include('product.itemReviews')
</section>

    @include('product.itemGrape')

    @include('product.itemWinery')

    @include('product.itemWineryWines')

    @include('product.itemBasics')

    @include('product.itemSummary')

    @include('product.itemSimilar')


@endsection
