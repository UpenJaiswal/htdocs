$(document).ready(function() { 
  /*  sidebar sticky JS  */
 var stickySidebar = $('.sticky');

if (stickySidebar.length > 0) {	
  var stickyHeight = stickySidebar.height(),
      sidebarTop = stickySidebar.offset().top;
}

// on scroll move the sidebar
$(window).scroll(function () {
  if (stickySidebar.length > 0) {	
    var scrollTop = $(window).scrollTop();
            
    if (sidebarTop < scrollTop) {
      stickySidebar.css('top', scrollTop - sidebarTop);

      // stop the sticky sidebar at the footer to avoid overlapping
      var sidebarBottom = stickySidebar.offset().top + stickyHeight,
          stickyStop = $('.main-content').offset().top + $('.main-content').height();
      if (stickyStop < sidebarBottom) {
        var stopPosition = $('.main-content').height() - stickyHeight;
        stickySidebar.css('top', stopPosition);
      }
    }
    else {
      stickySidebar.css('top', '0');
    } 
  }
});

$(window).resize(function () {
  if (stickySidebar.length > 0) {	
    stickyHeight = stickySidebar.height();
  }
});

 });

$( document ).ready(function() {
  $('.datepick').each(function(){
    $(this).datepicker();
});
 });

 $(document).ready(function() {
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  }); // click() scroll top EMD

  /*************************************
    LEFT MENU SMOOTH SCROLL ANIMATION
   *************************************/
  // declare variable
  var h1 = $("#h1").position();
  var h2 = $("#h2").position();
  var h3 = $("#h3").position();

  $('.link1').click(function() {
    $('html, body').animate({
      scrollTop: h1.top
    }, 500);
    return false;

  }); // left menu link2 click() scroll END

  $('.link2').click(function() {
    $('html, body').animate({
      scrollTop: h2.top
    }, 500);
    return false;

  }); // left menu link2 click() scroll END

  $('.link3').click(function() {
    $('html, body').animate({
      scrollTop: h3.top
    }, 500);
    return false;

  }); // left menu link3 click() scroll END

}); // ready() END

function toosumm_Show(id)
{     
document.getElementById(id).style.display='block';
document.getElementById('fade').style.display='block';
}
function toosumm_Close(id)
{  
document.getElementById(id).style.display='none';
document.getElementById('fade').style.display='none'
}

$( document ).ready(function() {
$("#filter-tooglebtn").click(function() {
$("#myDIV").toggle();
});
});

 
  var btncolor = $("input[name='select-check']:checkbox");
btncolor.on("change", function() {
  $(".box-header1").toggleClass("current_active", btncolor.is(":checked"));
  $(this).closest('#example1').find('.selectall').css('background-color',(this.checked)?'#c2dbff':'');
});

$('.delete_checkbox1').click(function(){
       
        $(this).closest('#example1').find('.odd').css('background-color',(this.checked)?'#c2dbff':'')
})  


// $('#itfactionevents').click(function(event) {
// if (this.checked) {
// $('.itfrowdatas').each(function() {
// this.checked = true;
// });
// } else {
// $('.itfrowdatas').each(function() {
// this.checked = false;
// });
// }
// });




$(document).ready(function(){
$("#all_checkbox").click(function () {
$(".delete_checkbox").prop('checked',$(this).prop('checked'));
});
});
/*$(document).ready(function(){
  $("#all_checkbox").click(function(){
    $(".selectall").toggleClass("removeRow");
  });
});*/

function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
