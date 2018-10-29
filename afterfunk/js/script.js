document.addEventListener('DOMContentLoaded', onLoaded, false);

function onLoaded() {
    console.log('DOM Content Loaded');
    
    if (document.querySelector('#closeModal')) {
        document.querySelector('#closeModal').addEventListener('click', hideModal, false);
    }
}

function hideModal() {
    el = document.querySelector("#landingModal");   
    console.log(el.style.display);
    el.style.display = 'none';
}