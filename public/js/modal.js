
let hambergarBtn = document.getElementById('responsive-home-hamburger');
let hambergarMenu = document.getElementById('HambergerMune');
let responsiveHomeHeader = document.getElementById('responsive-home-header');
let hambergarMenuList = document.getElementsByClassName("hambergar-menu-list");
let hambergarMenuListArray = Array.prototype.slice.call(hambergarMenuList);

for (const list of hambergarMenuListArray) {

  list.addEventListener('click', function() { 
    hambergarMenu.style.display = "none";
    responsiveHomeHeader.style.display = "block";

  
}, false);
}
hambergarBtn.addEventListener('click', function() {
  
    hambergarMenu.style.display = "block";
    responsiveHomeHeader.style.display = "none";
  
}, false);

let deleteHambergarMenu = document.getElementById('delete-hambergerMune-icon');
deleteHambergarMenu.addEventListener('click', function () {
  
    hambergarMenu.style.display = "none";
    responsiveHomeHeader.style.display = "block";

  
}, false);
