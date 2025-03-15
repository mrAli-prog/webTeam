let tabsBox = document.querySelector(".tabs-box");
arrowIcons = document.querySelectorAll(".icon i");

let amazingCardConrtol = document.querySelector(".amazing-card-conrtol");
fiel = document.querySelectorAll(".field i");

let favoriteCardControler = document.querySelector(".favorite-card-controler");
fieldFavorit = document.querySelectorAll(".field-favorite i");

let starCardControl = document.querySelector(".sale-card-contrl");
starIco = document.querySelectorAll(".starField i");

let searchcontrol = document.querySelector(".swiper-wrapper");
let arrowSearch = document.querySelectorAll(".swipBoot i");

let handleIcons = () => {
    let scrolvall = tabsBox.scrollLeft;
    let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;

    let scrollcard = amazingCardConrtol.scrollLeft;
    let maxScroll = amazingCardConrtol.scrollWidth - amazingCardConrtol.clientWidth;

    let scrollFavorit = favoriteCardControler.scrollLeft;
    let maxfavorite = favoriteCardControler.scrollWidth - favoriteCardControler.clientWidth;

    let scrollStar = starCardControl.scrollLeft;
    let maxStar = starCardControl.scrollWidth - starCardControl.clientWidth;

    let searchcont = searchcontrol.scrollLeft;
    let maxSearch = searchcontrol.scrollWidth - searchcontrol.clientWidth;

    
    arrowIcons[0].parentElement.style.display = scrolvall > 0 ? "flex" : "none";
    arrowIcons[1].parentElement.style.display = maxScrollableWidth > scrolvall ? "flex" : "none";

    fiel[0].parentElement.style.display = -scrollcard > 0 ? "flex" : "none";
    fiel[1].parentElement.style.display = maxScroll > -scrollcard ? "flex" : "none";

    fieldFavorit[0].parentElement.style.display = scrollFavorit > 0 ? "flex" : "none";
    fieldFavorit[1].parentElement.style.display = maxfavorite > scrollFavorit ? "flex" : "none";

    starIco[0].parentElement.style.display = scrollStar > 0 ? "flex" : "none";
    starIco[1].parentElement.style.display = maxStar > scrollStar ? "flex" : "none";

    let xSerach = -466.3999938964844;
    arrowSearch[0].parentElement.style.display = searchcont < 0 ? "flex" : "none";
    arrowSearch[1].parentElement.style.display = maxSearch == 0 ? "flex" : "none";
    arrowSearch[1].parentElement.style.display = searchcont == xSerach ? "none" : "flex";
}

    arrowIcons.forEach(icon => {
      icon.addEventListener("click" , () => {
        tabsBox.scrollLeft += icon.id === "left" ? -580 : 580;
        setTimeout(() => handleIcons() , 50);
    }); 
});

    fiel.forEach(field => {
     field.addEventListener("click" , () => {
        amazingCardConrtol.scrollLeft += field.id === "left" ? 160 : -160;
        setTimeout(() => handleIcons() , 50);
    }); 
});

    fieldFavorit.forEach(fieldFavorite => {
        fieldFavorite.addEventListener("click" , () => {
            favoriteCardControler.scrollLeft += fieldFavorite.id === "left" ? 100 : -100; 
            setTimeout(() => handleIcons() , 50);
    });
});

    starIco.forEach(starField => {
        starField.addEventListener("click" , () => {
            starCardControl.scrollLeft += starField.id === "left" ? 340 : -340; 
            setTimeout(() => handleIcons() , 50);
    });
});

    arrowSearch.forEach(swipBoot => {
        swipBoot.addEventListener("click" , () => {
            searchcontrol.scrollLeft += swipBoot.id === "left" ? -139 : 139; 
            setTimeout(() => handleIcons() , 50);
    });
});



    


