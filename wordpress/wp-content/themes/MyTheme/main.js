$(document).ready(function() {
    $('.menubutton').click(function() {
        $('.menubutton div').toggleClass('open');
        $('.menu').toggleClass('open');
        
        $(' .menu').css({transition: 'transform 0.5s'});
            setTimeout(function() {
                $(' .menu').css({transition: 'none'});
            }, 500)
    })

    $('.menu-item').click(function() {
        $('.menubutton div').toggleClass('open');
        $('.menu').toggleClass('open');
        $(' .menu').css({transition: 'transform 0.5s'});
            setTimeout(function() {
                $(' .menu').css({transition: 'none'});
            }, 500)
    })



    
                
    $('.dots span:first-child').addClass('active');
      


    
})

function slideFunction(e) {
                
    var dotContainerDesktop = document.getElementsByClassName('dots');
              var dot = document.getElementsByClassName('dot');
              var desktopSlide = document.getElementsByClassName('slider');
              var nodes = Array.prototype.slice.call( dotContainerDesktop[0].children )
              var theIdCurrentDesktop = nodes.indexOf( e )
              var i;
              desktopSlide[0].style.setProperty('--current', theIdCurrentDesktop);
              
              
              [].forEach.call(dot, function(el) {
                el.classList.remove("active");
            
            });
              e.classList.add('active');
}

function prevArrow(e){
  
    var slider = document.getElementsByClassName('slider');
    let current = getComputedStyle(slider[0]).getPropertyValue('--current');
    const parsed = parseInt(current, 10);
    slider[0].style.setProperty('--current', (parsed - 1));
    let numberSlides = document.getElementsByClassName('slide').length;
    var dot = document.getElementsByClassName('dot');
   
         
         if (current == 0) {
             slider[0].style.setProperty('--current', (numberSlides - 1));
         }
         
         
         [].forEach.call(dot, function(el) {
         el.classList.remove("active");
     
     });
     
     if (dot[(parsed - 1)]) {
         dot[(parsed - 1)].classList.add('active');
     } 
    
    if (!dot[(parsed - 1)]) {
        dot[(numberSlides - 1)].classList.add('active');
    }
  
}

function nextArrow(e) {
    var slider = document.getElementsByClassName('slider');
    var dot = document.getElementsByClassName('dot');
    let current = getComputedStyle(slider[0]).getPropertyValue('--current');
    const parsed = parseInt(current, 10);
    slider[0].style.setProperty('--current', (parsed + 1));
    let numberSlides = document.getElementsByClassName('slide').length;
   
    
    if (current == (numberSlides - 1)) {
         slider[0].style.setProperty('--current', 0);
     }
     
    

     [].forEach.call(dot, function(el) {
         el.classList.remove("active");
     
     });
     
     if (dot[(parsed + 1)]) {
         dot[(parsed + 1)].classList.add('active');
     } 
    
    if (!dot[(parsed + 1)]) {
        dot[0].classList.add('active');
    }
}