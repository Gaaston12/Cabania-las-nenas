//Responsive menu with jQuery
jQuery('document').ready(function ($) {
    var menuBTN = $('.menu-icon'),
        menu = $('.navegation ul');

    menuBTN.click(function () {

        if (menu.hasClass('show')) {
            menu.removeClass('show');
        } else {
            menu.addClass('show');
        }
    });

});

//galeri
const images = document.querySelectorAll('.img');
const containerImage = document.querySelector('.container-img');
const imageContainer = document.querySelector('.img-show');
const copy = document.querySelector('.copy');
const closeModal = document.querySelector('.icon-cross');

images.forEach(image =>{
    image.addEventListener('click', ()=>{
        addImage(image.getAttribute('src'));
    })
})

const addImage = (srcImage)=>{
    containerImage.classList.toggle('move');
    imageContainer.classList.toggle('show');
    imageContainer.src = srcImage;
}

closeModal.addEventListener('click',()=>{
    containerImage.classList.toggle('move');
    imageContainer.classList.toggle('show');
    
})