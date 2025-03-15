var addd = document.getElementById("added");
var se = document.getElementById("sear");
var wrra = document.getElementById("swiperNavar");
var heder = document.getElementById("headerScrol");
var superMatn = document.getElementById("SuperMatn");
var superHr = document.getElementById("hrSuper");
var marketMain = document.getElementById("marKet");
var opacity = 0;
var lastScrollTop = 0;
var slideIndex = 1;
calculator();
showSlides(slideIndex);




function Message(){ 
 addd.classList.remove("visible");
}

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide_img");
  let dots = document.getElementsByClassName("navi_slide");

  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("fade_out");
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].className += " fade_out";
    slides[i].style.display = "none";  
  }
  
  
  if (n > slides.length) {slideIndex = 1};
  if (n < 1) {slideIndex = slides.length};

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  if (slideIndex > slides.length) {slideIndex = 1};

  slides[slideIndex-1].style.display = "flex";
  slides[slideIndex-1].className += " fade_in";
  dots[slideIndex-1].className += " active";

  setTimeout(showSlides,2000);
}

function shownext(){
  slideIndex++;
}

int_time = setInterval(shownext,4000);

function stopTim() {
  clearInterval(int_time);
  int_time = setInterval(shownext,4000);
}

function setOpacitySade(){
  addd.style.opacity = "100";
}

function setOpacityZero(){
  addd.style.opacity = "0";
}

function setDisplay(){
  addd.style.display = "none";
}


function showVisible(){
  addd.classList.add("visible")
}

function setDisplaySuper(){
  superMatn.style.display = "";
  superHr.style.display = "";
}

function setDisplaySuperOf(){
  superMatn.style.display = "none";
  superHr.style.display = "none";
}

function setDispalySuperMain(){
  marketMain.style.width = "250px";
}

function setDispalySuperMaincam(){
  marketMain.style.width = "160px";
}

function defultBody(){
  let scrolltop = document.documentElement.scrollTop || document.body.scrollTop;
  let scrollTop = scrolltop.pageYOffset || document.documentElement.scrollTop;
  let swip = 130;
  if (scrollTop < swip){
    heder.style.top = "90px"
  } else {
    return false;
  }
}

function scrollBody(event){
  let scrolltop = document.documentElement.scrollTop || document.body.scrollTop;
  let scrollTop = scrolltop.pageYOffset || document.documentElement.scrollTop;
  let swip = 130;

  if(scrollTop > lastScrollTop){
    heder.style.top = "90px";
  } else if (scrollTop < lastScrollTop) {
    heder.style.top = "0px";
  } else if (scrollTop > swip) {
    event.stopPropagation();
  }
  lastScrollTop = scrollTop;  
}

function SuperScroll(){
  let scrolltop = document.documentElement.scrollTop || document.body.scrollTop;
  let scrollTop = scrolltop.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop < 900){
    superMatn.style.opacity = "0px";
    superHr.style.opacity = "0px"
    setTimeout(setDisplaySuperOf , 700);
    setTimeout(setDispalySuperMaincam , 800);
  } else if(scrollTop > 900){
    superMatn.style.opacity = "100%";
    superHr.style.opacity = "100%"
    setTimeout(setDisplaySuper , 700);
    setTimeout(setDispalySuperMain , 800);
  }
}

function mouse(){
  var arrowNext = document.getElementById("arrownext");
  var arrowBack = document.getElementById("arrowBack");

  arrowNext.style.opacity = "100%";
  arrowBack.style.opacity = "100%";  
}

function mouseOut(){
  var arrowNext = document.getElementById("arrownext");
  var arrowBack = document.getElementById("arrowBack");

  arrowNext.style.opacity = "0";  
  arrowBack.style.opacity = "0";  
}

function calculator(){
  var drsadHouses = document.querySelectorAll(".free");
  var priceHouses = document.querySelectorAll(".price");
  var pry = document.querySelectorAll(".price-after-free");
 
  var distinctDrsad = [];
  var distinctPrice = [];
  var resul = [];
   
  drsadHouses.forEach(function(house){
    var value = house.innerHTML;
    var level2 = value.replace("%" , "");

    distinctDrsad.push(level2);
  });

  priceHouses.forEach(function(house){
    var value = house.innerHTML;
    var level2 = value.replaceAll("," , "");

    distinctPrice.push(level2);
  });

  pry.forEach((element) =>{
    for(let i = 0 ; i < distinctPrice.length ; i++){

    }
  });

  for(let i = 0 ; i < distinctPrice.length ; i++){
    resul.push(distinctPrice[i] * distinctDrsad[i] / 100);
  }

  for(let i = 0 ; i < distinctPrice.length ; i++){
    pry[i].innerHTML = resul[i] + " " + "تومان";
  }

}

function more(){
  var barasiEnte = document.getElementById("barasiId");
  var sp = document.getElementById("spanMatn");
  var fg = barasiEnte.clientHeight;

  if(fg == 300){
    barasiEnte.style.height = "1815px";
    sp.innerHTML = 'مشاهده کم تر<i class = "bi bi-caret-up-fill" style="margin-right: 5px;"></i> ';
  } else if(fg == 1815){
    barasiEnte.style.height = "300px";
    sp.innerHTML = 'مشاهده بیشتر<i class = "bi bi-caret-down-fill" style="margin-right: 5px;"></i> ';
  }

 console.log(fg);
}





