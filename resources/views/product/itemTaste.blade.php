@isset($v_tastes)

<section class="itemTaste">
    <div>
        <div class="itemTaste-row">
            {{--            "intensity" => 2.8782609  Легкое Насыщенное  --}}
            {{--            "tannin" => null Ровное Танинное--}}
            {{--            "sweetness" => 1.9717392   Сухое Сладкое--}}
{{--            "acidity" => 3.9847827   Мягкое Кислотное--}}
{{--            "fizziness" => null  Нежное Шипучее  --}}


            <h2>Каково это вино на вкус?</h2>
            <div class="itemTaste-taste">
                <div class="taste-table">
                    @if(isset($v_tastes->intensity))
                        <div class="taste-table_row">
                            <div class="taste-table_col">
                                <span>Легкое</span>
                            </div>
                            <div class="taste-table_col">
                                <div class="taste-table_slider">
                                    <div class="taste-table_thumb"
                                         style='width: 15%; left: {{$v_tastes->intensity*20 - 15}}%'></div>
                                </div>
                            </div>
                            <div class="taste-table_col">
                                <span>Насыщенное</span>
                            </div>
                        </div>
                    @endif
                    @if(isset($v_tastes->tannin))
                        <div class="taste-table_row">
                            <div class="taste-table_col">
                                <span>Ровное</span>
                            </div>
                            <div class="taste-table_col">
                                <div class="taste-table_slider">
                                    <div class="taste-table_thumb"
                                         style='width: 15%; left: {{$v_tastes->tannin*20 - 15}}%'></div>
                                </div>
                            </div>
                            <div class="taste-table_col">
                                <span>Танинное</span>
                            </div>
                        </div>
                    @endif
                    @isset($v_tastes->sweetness)
                        <div class="taste-table_row">
                            <div class="taste-table_col">
                                <span>Сухое</span>
                            </div>
                            <div class="taste-table_col">
                                <div class="taste-table_slider">
                                    <div class="taste-table_thumb"
                                         style='width: 15%; left: {{$v_tastes->sweetness*20 - 15}}%'></div>
                                </div>
                            </div>
                            <div class="taste-table_col">
                                <span>Сладкое</span>
                            </div>
                        </div>
                        @endisset
                    @isset($v_tastes->acidity)
                        <div class="taste-table_row">
                            <div class="taste-table_col">
                                <span>Мягкое</span>
                            </div>
                            <div class="taste-table_col">
                                <div class="taste-table_slider">
                                    <div class="taste-table_thumb"
                                         style='width: 15%; left: {{$v_tastes->acidity*20 - 15}}%'></div>
                                </div>
                            </div>
                            <div class="taste-table_col">
                                <span>Кислотное</span>
                            </div>
                        </div>
                    @endisset
                    @isset($v_tastes->fizziness)
                        <div class="taste-table_row">
                            <div class="taste-table_col">
                                <span>Нежное</span>
                            </div>
                            <div class="taste-table_col">
                                <div class="taste-table_slider">
                                    <div class="taste-table_thumb"
                                         style='width: 15%; left: {{$v_tastes->fizziness*20 - 15}}%'></div>
                                </div>
                            </div>
                            <div class="taste-table_col">
                                <span>Шипучее</span>
                            </div>
                        </div>
                    @endisset
                </div>

            </div>
            <div class="itemTaste-summary">
                <h3>Вкусовые качества вина</h3>
                <p>Вкусовой профиль вина {{$product->name}}
                    @isset($v_statistics->reviews_count)
                        основано на <b>{{$v_statistics->reviews_count}}</b> отзывах пользователей
                    @endisset
                </p>
            </div>
        </div>
    </div>
</section>

@endisset
