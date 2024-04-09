let scroll = function(){
    window.addEventListener('scroll', function () {
        const scrollPosition = window.scrollY;
        let k = 100 / 1000;
        let brightness = Math.round(k * scrollPosition);
        if(brightness > 80){
            brightness = 80;
        }
        let band_img = this.document.getElementsByClassName("band-img")[0];
        band_img.style.filter = `brightness(${100 - brightness}%)`
        let elementStyle = getComputedStyle(band_img, "::before")
        console.log(elementStyle);
      });  
}

scroll();