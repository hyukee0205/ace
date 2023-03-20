let next = document.getElementsByClassName('swiper-button-next')[0];
let prev = document.getElementsByClassName('swiper-button-prev')[0];
let as = document.getElementById('as');

let slider = document.getElementsByClassName('swiper')[0];
slider.addEventListener('mouseover', function(){
   next.classList.remove('view_off'),
   prev.classList.remove('view_off'),
   next.classList.add('view_on'),
   prev.classList.add('view_on')
})

slider.addEventListener('mouseout', function(){
  next.classList.add('view_off'),
  prev.classList.add('view_off'),
  next.classList.remove('view_on'),
  prev.classList.remove('view_on')
})

// var time = 600;
// var min = "";
// var sec = "";

// var x = setInterval(function() {
//     min = parseInt(time/60);
//     sec = time%60;

//     document.getElementById("demo").innerHTML = min + ":" + min + ":" + sec;
//     time--;

//     if(time < 0) {
//         clearInterval(x);
//         document.getElementByIdI("demo").innerHTML = "시간초과";
//     }
// }, 1000);

setInterval(function time() {
    //시간 초기화
    var d = new Date();
    var hours = 24 - d.getHours();
    var min = 60 - d.getMinutes();
    var sec = 60 - d.getSeconds();
    //분이 있으면 시 반올림
    if (min == '00') {
        hours = 24 - d.getHours();
    } else {
        hours = 23 - d.getHours();
    }
    //초가 있으면 분 반올림        
    if (sec == '00') {
        min = 60 - d.getMinutes();
    } else {
        min = 59 - d.getMinutes();
    }
    //1자리수라면 0을 붙혀라
    if ((hours + '').length == 1) {
        hours = '0' + hours;
    }
    if ((min + '').length == 1) {
        min = '0' + min;
    }
    if ((sec + '').length == 1) {
        sec = '0' + sec;
    }
    //날짜를 표기하고 딜레이는 1초(1000)마다 바뀌겠금
    jQuery('#the-final-countdown p').html
        ('<span class="t_hour">' + hours + '</span>' +
            '<span class="t_colon">:</span>' +
            '<span class="t_min">' + min + '</span>' +
            '<span class="t_colon">:</span>' +
            '<span class="t_sec">' + sec + '</span>')
}, 1000);

// top-btn
function clickme() {
    window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });
}
