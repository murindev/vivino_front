import serialize from "form-serialize";
import axios from "axios";
import qs from 'qs';
import $ from "jquery";


export default function filterCatalog() {

    const fetch = async function(url){
        try {
            let response = await axios.get(url);
            if(response.data){
                document.querySelector('#catalog-container').innerHTML = await response.data
            } else {
                document.querySelector('#catalog-container').innerHTML = ''
                document.querySelector('.searchResult-count b').innerHTML = '0'
                document.querySelector('.ajax-loading').style.display = 'none';
            }
        } catch (e) {
            console.log(e);
        }
    }

    const watchFilter = async function (url) {


        let tplFilterParams = '';
        let p = qs.parse(url);
        let slidersInformer = [];
        let wordsInformer = [];
        for(let i in p) if(p.hasOwnProperty(i)) {

            for(let n in p[i]) if(p[i].hasOwnProperty(n)) {

                let ids = p[i][n].split(',');
console.log('n',n);
                if(['price','rating'].indexOf(n) === -1){
                   await ids.forEach(el => {
                        let chb = document.querySelector('#'+n+'_'+el);
                        chb.checked = true
                        tplFilterParams += `<button class="filter-option" rel="${n}" value="${el}" >${chb.getAttribute('rel')}</button>`
                    })
                }



                if(n === 'price') {
                    let prices = []
                    await document.getElementsByName('price[]').forEach((price, k) => {
                        prices.push(price.value)
                    })
                    slidersInformer.push(`цена ${prices[0]}р - ${prices[1]} р`)
                }
                if(n === 'rating'){
                    let ratings = []
                    await document.getElementsByName('rating[]').forEach((rating,k) => {
                        ratings.push(rating.value)
                    })
                    slidersInformer.push(`с рейтингом от ${ratings[0]} до ${ratings[1]} звезд`)
                }

            }
        }
        document.getElementById('filter_params').innerHTML = tplFilterParams
        document.querySelectorAll('.filter-option').forEach(el => {
            el.addEventListener('click', function (event) {
                document.getElementById(el.getAttribute('rel')+'_'+el.value).click()
            });
        });
        console.log('slidersInformer',slidersInformer);
        document.querySelector('.price-informer').innerHTML =  slidersInformer.join(', ')

    }

    document.addEventListener('DOMContentLoaded',() => {
        watchFilter(window.location.search.substring(1))
    })

    let filterForm = document.querySelector('#filterCatalog')
    let filterParams = document.querySelector('#filter_params')
    if(filterForm) {
        let method = filterForm.getAttribute('data-method');
        if(filterParams){

        }


        filterForm.addEventListener('change', (t) => {

            let queryObj = serialize(filterForm, {hash: true});

            let url = '/wines'
            let fetchUrl = '';
            let str = '';
            for (let key in queryObj) if (queryObj.hasOwnProperty(key)) {
                str += `&filter[${key}]=${Array.isArray(queryObj[key]) ? queryObj[key].join(',') : queryObj[key]}`
            }

            if(Object.keys(queryObj).length){
                url +=   str.replace('&', '?')
                if(method === 'get'){
                    window.history.pushState('', "", url);
                }else {
                    window.uLink = url
                }

                fetchUrl =  url + '&type=ajax&page=1'
            } else {
                if(method === 'get'){
                    window.history.pushState('', "", url);
                } else {
                    window.uLink = url
                }

                fetchUrl =  url + '?type=ajax&page=1'
            }

// console.log(window.uLink);



            // window.history.pushState('', "", url.replace(location.search ? '&type=ajax&page=1' : '?type=ajax&page=1',''));

            if(filterParams){
                fetch(fetchUrl).
                then(function () {
                    document.querySelector('.searchResult-count b').innerHTML = document.querySelectorAll('.item')[0].getAttribute('rel')

                }).then(function () {
                    watchFilter(window.location.search.substring(1))
                })
            }
        })
    }


    function getSliderValue(elem,l,h){

        $(elem).parents('.price-slider').find('.price-slider_digitLeft').find('em').text(l);
        $(elem).parents('.price-slider').find('.price-slider_digitLeft').find('input').val(l);
        $(elem).parents('.price-slider').find('.price-slider_digitRight').find('em').text(h);
        $(elem).parents('.price-slider').find('.price-slider_digitRight').find('input').val(h);
        let element = document.querySelector('#filterCatalog');
        if ("createEvent" in document) {
            let evt = document.createEvent("HTMLEvents");
            evt.initEvent("change", false, true);
            element.dispatchEvent(evt);
            console.log('triggered top');
        }
        else {
            element.fireEvent("onchange");
        }

    }

    $(document).on('change','[type="range"]',function(){
        if($(this).hasClass('ghost')) {
            let original = $(this).prev('.original');
            getSliderValue (this,$(original).prop('valueLow'),$(original).prop('valueHigh'));
        } else {
            getSliderValue(this,this.valueLow,this.valueHigh);
        }


    });


}
