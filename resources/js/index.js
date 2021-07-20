
import $ from "jquery";
import axios from 'axios'

import filterCatalog from "./modules/filterCatalog";
import lazyCatalog from "./modules/lazyCatalog";
import uSelect from "./modules/select"

const catalogPage = document.querySelector('#filterCatalog');

if (catalogPage) {
    filterCatalog()
    lazyCatalog()
    uSelect()

    // filter queries
    let country = document.querySelector('#country_id_q')
    if (country) {
        const findCountry = function (event) {
            axios.post('/wines/post', {
                func: 'filterCountry',
                q: event.target.value
            }).then((response) => {
                document.querySelector('#country_filter').innerHTML = response.data.length ? response.data : `<p>Нчего не найдено</p>`
            })
        }
        country.addEventListener('keyup', (event) => {
            findCountry(event)
        })
        country.addEventListener('click', (event) => {
            setTimeout(function () {
                findCountry(event)
            }, 200)
        })
    }
}

import itemReviews from './modules/itemReviews'

const itemReviewsBlock = document.querySelector('.itemReviews')
if (itemReviewsBlock) {
    itemReviews()
}
const searchWine = document.querySelector('#search_wine')
if (searchWine) {
    searchWine.addEventListener('keyup', function (el) {
        if (el.target.value.length >= 3) {
            axios.get('/search?type=short&q=' + el.target.value)
                .then(response => {
                        document.querySelector('.header-search_box').innerHTML = response.data
                })
        }
    })
}


function isAnyPartOfElementInViewport(el) {

    const rect = el.getBoundingClientRect();
    // DOMRect { x: 8, y: 8, width: 100, height: 100, top: 8, right: 108, bottom: 108, left: 8 }
    const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
    const windowWidth = (window.innerWidth || document.documentElement.clientWidth);

    // http://stackoverflow.com/questions/325933/determine-whether-two-date-ranges-overlap
    const vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
    const horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

    return (vertInView && horInView);
}


// var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//
// alert( "Текущая прокрутка: " + scrollTop );


// window.addEventListener('scroll', () => {
//     let catalog = document.querySelector('.catalog-items').clientHeight
//     if(window.pageYOffset > 2500){
//         console.log('fsdfsd');
//     }
//
//     console.log('catalog',catalog);
//     console.log(window.pageYOffset);
// })


// let rect = document.querySelector('.catalog-items'); //.getBoundingClientRect()
// rect.addEventListener('scroll',(ev) => {
//
//     console.log(ev.getBoundingClientRect());
//     // console.log({
//     //         top: rect.top + document.body.scrollTop,
//     //         left: rect.left + document.body.scrollLeft
//     //     }
//     // );
// })


/*
let page = 1; //track user scroll as page number, right now page number is 1
// load_more(page); //initial content load
$(window).scroll(function() { //detect page scroll
    if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled from top to bottom of the page
        page++; //page number increment
        load_more(page); //load content
    }
});
*/


// function buildUrl(){
//     console.log('buildUrl');
//     const url = query
//         .for('wines')
//         .where('country_id', 'brand_id')
//         // .include('posts', 'comments')
//         // .orderBy('-created_at')
//         .get();
//     // let y = $('#filterCatalog').serialize()
//
//     console.log('dsdsd', url);
// }

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


$(document).on('click', '.header-menu-item a', function () {
    $('#mobile-menu').prop('checked', false)


});

$(document).on('click', '[rel="seller"]', function () {
    $('body').css('overflow', 'hidden');
    $('.modal').css('display', 'flex');

});
$(document).on('click', '.modal-close', function () {
    $('.modal').css('display', 'none');
    $('body').css('overflow', 'auto');

});

function carousel(ul, li, toggle) {
    var carousel, next, prev, seats;

    carousel = $(ul);

    seats = $(li);

    next = function (el) {
        if (el.next().length > 0) {
            return el.next();
        } else {
            return seats.first();
        }
    };

    prev = function (el) {
        if (el.prev().length > 0) {
            return el.prev();
        } else {
            return seats.last();
        }
    };

    $(toggle).on('click', function (e) {
        var el, i, j, new_seat, ref;
        el = $(li + '.is-ref').removeClass('is-ref');
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
        return setTimeout((function () {
            return carousel.addClass('is-set');
        }), 250);
    });
}

carousel('.flavours-list', '.flavours-item', '.flavours-toggle');

import Inputmask from "inputmask";

Inputmask({"mask": "+7 999 999 99 99"}).mask("[type='tel']");

import fb from 'fancybox';














