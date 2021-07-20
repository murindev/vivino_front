export default function uSelect() {

    let option = document.querySelectorAll('.option');
    if(option){
        option.forEach(el => {
            el.addEventListener('click', function () {
                let name = el.getAttribute('data-name');
                document.getElementsByName(name)[0].value = el.getAttribute('data-value')
                document.querySelector(`[data-trigger=${name}]`).checked = false
                document.querySelector(`[data-title=${name}]`).textContent = el.textContent
            })
        })
    }



}
