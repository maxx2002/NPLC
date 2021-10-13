const slide1 = document.querySelector("#slide1");
const slide2 = document.querySelector("#slide2");
const slide3 = document.querySelector("#slide3");
const slide4 = document.querySelector("#slide4");

var indexValue = 1;
    show(indexValue);
    function side_slide(e){show(indexValue += e);}
    function show(e) {
      var i;
      const img = document.querySelectorAll('.swiper-slide');
      
      if (e > img.length) {
        indexValue = img.length;
      }

      if (e < 1) {
        indexValue = 1;
      }

      for (i = 0; i < img.length; i++) {
        img[i].style.display = "none";
      }

      img[indexValue-1].style.display = "block";
}