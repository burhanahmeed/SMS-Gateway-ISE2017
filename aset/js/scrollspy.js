$(document).ready(function () {
// Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()-10,
    // All list items
    menuItems = topMenu.find("a"),
    menuA = $("#top-menu ul").find('a'),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

$('.border-nav').find('a').click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuA
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
        } 
    });
});

//Parallax 
function simpleParallax() {
    //This variable is storing the distance scrolled
    var scrolled = $(window).scrollTop() + 1;
    // alert(scrolled);
    //Every element with the class "scroll" will have parallax background 
    //Change the "0.3" for adjusting scroll speed.
    $('.conA1-1').css('background-position', '0' + -(scrolled * 0.3) + 'px');
}
//Everytime we scroll, it will fire the function
$(window).scroll(function (e) {
    simpleParallax();
});