//scroll to top on refresh//
window.onbeforeunload = function() {
    window.scrollTo(0, 0);
  }
  
  jQuery(document).ready(function($) {
  
    $(window).load(function() {
      $('.loading').delay(2000).fadeOut('slow', function() {
        $(this).remove();
      });
      setTimeout(function() {
        $('.landing').addClass('loaded');
      }, 2000);
      setTimeout(function() {
        $('body').addClass('loaded');
      }, 2000);
  
    });
  
    window.addEventListener('load', function() {
  
      var one = document.querySelector('.one');
      var two = document.querySelector('.two');
      var three = document.querySelector('.three');
      delay = 1000;
  
      setTimeout(function() {
        $('.content-1').addClass('loaded');
      }, 500);
  
      var animation = function() {
        setTimeout(function() {
          one.style.top = '50%';
        }, delay);
        setTimeout(function() {
          one.style.top = '100%';
        }, delay * 5);
  
        setTimeout(function() {
          two.style.top = '50%';
        }, delay * 6);
        setTimeout(function() {
          two.style.top = '100%';
        }, delay * 11);
  
        setTimeout(function() {
          three.style.top = '50%';
        }, delay * 12);
        setTimeout(function() {
          three.style.top = '100%';
        }, delay * 17);
      };
      animation();
      setInterval(animation, delay * 18);
    });
  
    window.onscroll = function() {
      if ($(this).scrollTop() > 1) {
        $('header').addClass("resize");
      } else {
        $('header').removeClass("resize");
      }
    };
  
    $(window).scroll(function() {
      $('.hideme').each(function(i) {
        
          $(this).animate({
            'opacity': '1'
          }, 250);
    
      });
    });
  
    $(".mouseScroll").click(function() {
      $('html, body').animate({
        scrollTop: $(".about").offset().top - 150
      }, 800);
    });
  
    window.onload = function() {
      $('.button_container').click(function() {
        $('.button_container').toggleClass('active');
        $('.overlay').toggleClass('open');
        $('body').toggleClass('active');
      });
    }
  
  });