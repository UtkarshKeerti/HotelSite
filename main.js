// MODAL

var modalbtn= document.querySelector('#modal_btn');
var modalbg=  document.querySelector('.login-bg');
var modalclose=  document.querySelector('#modal-close');
var cacc= document.querySelector('#create-account');
// var lacc= document.querySelector('#login-account');
// var modalcontent1= document.querySelector('.login-part');
var modalcontent2= document.querySelector('.register-part');
var loginopen= document.querySelector('.login');
var booknowbtn= document.querySelector('#book-now-btn');

loginopen.style.display="none";

// cacc.addEventListener('click',function(){
//    modalcontent2.style.display= "flex";
//    modalcontent1.style.display= "none";
// });

// lacc.addEventListener('click',function(){
//    modalcontent1.style.display= "block";
//    modalcontent2.style.display= "none";
// });

modalbtn.addEventListener('click', function () {
    modalbg.classList.add('login-bg-active');
    modalcontent2.style.display= "block";
    loginopen.style.display="flex";
});

 modalclose.addEventListener('click',function () {
    modalbg.classList.remove('login-bg-active'); 
    loginopen.style.display="none";
 });

booknowbtn.addEventListener('click', function () {
    modalbg.classList.add('login-bg-active');
    modalcontent2.style.display= "block";
    loginopen.style.display="flex";
});

// LOADER
var myVar;

function loading() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.querySelector('.mother-container').style.display = "block";
}




