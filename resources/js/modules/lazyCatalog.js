import $ from "jquery";

export default  function lazyCatalog() {

    let page = 1;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).outerHeight() >= $(document).height()) {
            console.log('ssss');
            page++;
            load_more(page); //load content
        }
    });
    function load_more(page){
        let url =  location.search ? location.pathname+location.search +'&type=ajax'+'&page='+page : location.pathname +'?type=ajax'+'&page='+page
        $.ajax(
            {
                url: url,
                type: "get",
                datatype: "html",
                beforeSend: function()
                {
                    $('.ajax-loading').show();
                }
            })
            .done(function(data)
            {
                if(data.length === 0){
                    console.log(data.length);
                    //notify user if nothing to load
                    $('.ajax-loading').html("<div class='loading-info'>Вы просмотрели весь список!</div>");
                    return;
                }
                $('.ajax-loading').hide(); //hide loading animation once data is received
                $("#catalog-container").append(data); //append data into #results element
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('No response from server');
            });
    }
}
//Других товаров по вашему критерию нет
