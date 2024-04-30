const form = document.querySelector('#shortenFrom')
const shortenCard = document.querySelector('#shortenCard')
const inputUrl = document.querySelector('#url')
const btnShortenUrl = document.querySelector('#btnShortenUrl')

const URL_SHORTEN = /ajax\/shorten/;

form.addEventListener('submit', function(e){
e.preventDefault();

fetch(URL_SHORTEN, {
    method: 'POST',
    body: new FormData(e.target)
})

})