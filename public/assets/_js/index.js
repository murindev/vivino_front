// import 'babel-polyfill';
import $ from "jquery";
// import '../less/style.less';
// import multirange from '../js/multirange'



let debugIn = `<div class="debug-in">
				<div>
					<div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>

						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>

												<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>

						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>`;
$('.din').css('position', 'relative').prepend(debugIn);

//TPL
$(document).on('click', 'label[for="tt"]', function () {
    $(document).find('body').toggleClass('tpl')
});
$('input[type="file"]').change(function () {
    var value = $("input[type='file']").val();
    $('.js-value').text(value);
});



$(document).on('click','.header-menu-item a',function(){
    $('#mobile-menu').prop('checked',false)


});

$(document).on('click','[rel="seller"]',function(){
    $('body').css('overflow','hidden');
    $('.modal').css('display','flex');

});
$(document).on('click','.modal-close',function(){
    $('.modal').css('display','none');
    $('body').css('overflow', 'auto');

});

function carousel(ul,li,toggle) {
    var carousel, next, prev, seats;

    carousel = $(ul);

    seats = $(li);

    next = function(el) {
        if (el.next().length > 0) {
            return el.next();
        } else {
            return seats.first();
        }
    };

    prev = function(el) {
        if (el.prev().length > 0) {
            return el.prev();
        } else {
            return seats.last();
        }
    };

    $(toggle).on('click', function(e) {
        var el, i, j, new_seat, ref;
        el = $(li+'.is-ref').removeClass('is-ref');
        if ($(e.currentTarget).data('toggle') === 'next') {
            new_seat = next(el);
            carousel.removeClass('is-reversing');
        } else {
            new_seat = prev(el);
            carousel.addClass('is-reversing');
        }
        new_seat.addClass('is-ref').css('order', 1);
        for (i = j = 2, ref = seats.length; (2 <= ref ? j <= ref : j >= ref); i = 2 <= ref ? ++j : --j) {
            new_seat = next(new_seat).css('order', i);
        }
        carousel.removeClass('is-set');
        return setTimeout((function() {
            return carousel.addClass('is-set');
        }), 250);
    });
}

carousel('.flavours-list','.flavours-item','.flavours-toggle');

import Inputmask from "inputmask";

Inputmask({"mask": "+7 999 999 99 99"}).mask("[type='tel']");

import fb from 'fancybox';








function getSliderValue(elem,l,h){
   $(elem).parents('.price-slider').find('.price-slider_digitLeft').find('em').text(l);
   $(elem).parents('.price-slider').find('.price-slider_digitLeft').find('input').val(l);
   $(elem).parents('.price-slider').find('.price-slider_digitRight').find('em').text(h);
   $(elem).parents('.price-slider').find('.price-slider_digitRight').find('input').val(h);
}

$(document).on('change','.vine-price.original',function(){
    getSliderValue(this,this.valueLow,this.valueHigh);
});
//
$(document).on('change','.vine-price.ghost',function(){
    var uu = $(document).find('.vine-price.original');
    getSliderValue(this,$(uu).prop('valueLow'),$(uu).prop('valueHigh'));
});





