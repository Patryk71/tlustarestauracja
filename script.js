const przycisk = document.querySelector(".menu");
const menu_mobile = document.querySelector(".menu_mobile");
przycisk.addEventListener('click',function(){
    menu_mobile.classList.toggle("invisible");
});
