import axios from 'axios'
export default function itemReviews() {
    console.log('DOMContentLoaded');

    axios.get(window.itemReviewsLink)
        .then(response => {
            console.log(response.data);
            document.querySelector('.itemReviews').innerHTML = response.data
        })


}
