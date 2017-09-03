// jQuery.getScript("./WOW/dist/wow.min.js")
// 	.done(function() {
// 		console.log('WOW loaded');
// 	})
// 	.fail(function() {
// 		console.log('WOW dont load');
// });
// jQuery.getScript("./jquery.meanmenu/jquery.meanmenu.min.js")
// 	.done(function() {
// 		console.log('meanmenu loaded');
// 	})
// 	.fail(function() {
// 		console.log('meanmenu dont load');
// });


$(document).ready(function () {
	new WOW().init();

    $('.menu1 .main-menu').meanmenu({
        meanScreenWidth: "992",
        meanMenuContainer: ".mobile-menu",
    });

    $('.menu1 .main-menu > ul > li').hover(function(){
        $(this).find('.sub-menu > li:first-child > .sub-menu').css('visibility', 'visible');
    },function(e) {
        $(this).find('.sub-menu > li:first-child > .sub-menu').css('visibility', 'hidden');
    });
        
});