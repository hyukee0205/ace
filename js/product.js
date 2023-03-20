
    const productNav = document.querySelectorAll(".product_nav_sub")
    const viewScroll = document.querySelectorAll(".product_nav_location")
    const firstTop = viewScroll[0].offsetTop
    const secondTop = viewScroll[1].offsetTop
    const thirdTop = viewScroll[2].offsetTop
    const fourTop = viewScroll[3].offsetTop

    productNav[0].onclick = function () {
      window.scroll({ top: firstTop, behavior: 'smooth' })
    }
    productNav[1].onclick = function () {
      window.scroll({ top: secondTop, behavior: 'smooth' })
    }
    productNav[2].onclick = function () {
      window.scroll({ top: thirdTop, behavior: 'smooth' })
    }
    productNav[3].onclick = function () {
      window.scroll({ top: fourTop, behavior: 'smooth' })
    }


    function c_img_1(){
    document.getElementById('main_img').style.backgroundImage= "url('../images/p_img_1.jpg')";
    };
    function c_img_2(){
    document.getElementById('main_img').style.backgroundImage= "url('../images/p_img_2.jpg')";
    };
    function c_img_3(){
    document.getElementById('main_img').style.backgroundImage= "url('../images/p_img_3.jpg')";
    };