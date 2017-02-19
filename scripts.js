/*!
    * Author: Mason Ziedonis
    * URL: www.masonziedonis.com
    * Email: mziedonis@berkeley.edu
    * Program Name: Mason Ziedonis's Personal Website
    * Date Started: Jan. 4, 2017
    * Date Last Updated: Feb. 19, 2017
    * Github: https://github.com/masonziedonis/websites/tree/masonziedonis
    *
    * Description: This is the file for the general JavaScript functions on my personal website.
    *
    * Copyright (C) 2017 Mason Ziedonis
*/

/* 
 *
 All the variables/constants found in multiple functions
 *
*/
const autoScrollDownDuration = 3000; // Scroll for 3 seconds
const autoScrollDownDistance = 0.25; // Scroll down 25% of the vertical screen
let regularScrollTop = 0; // The scroll top amount

/* 
 *
 Calculates the default scroll down size for each page.
 The home is only different than 0 since it auto scrolls down on page load.
 *
*/
function calcScrollTop() {
    if( $( "body" ).is( "#page-home" ) ) {
        regularScrollTop = ( $( "#home" ).height() * autoScrollDownDistance ); // autoScrollDownDistance is a percentage. So this determines what percentage of the screen to scroll down automatically.
    } else {
        regularScrollTop = 0; // Default at 0
    }
}

/* 
 *
 Auto scrolls down the page on page load.
 *
*/
function autoScrollDown( regularScrollTop ) {
    // Scrolls down on page load automatically so that it is intuitive that the about section is below
    $( "html, body" ).animate( { scrollTop: regularScrollTop }, autoScrollDownDuration ); 
    $( "#webpage-title" ).css( { "margin-top" : regularScrollTop } );
}

/* 
 *
 Keeps the webpage title at the top of the screen on the home page for the first 25% height of the screen.
 *
*/
function keepWebpageTitleOnTop( regularScrollTop ) {
    // The timeout is so the page does fidget when it is auto scrolling down on page load
    setTimeout( function() {
        $( window ).on( { "scroll" : function () {
            let currentScrollTop = $( "body" ).scrollTop();
            let newScrollTop = regularScrollTop;
            if ( currentScrollTop < regularScrollTop ) {
                newScrollTop = currentScrollTop;
            } 
            $( "#webpage-title" ).css( { "margin-top" : newScrollTop } );    
        }});
    }, autoScrollDownDuration );
}

/* 
 *
 Adds a button to automatically scroll to the top if the page is scrolled down at all. 
 Hides the button if the page is scrolled all the way up.
 *
*/
function scrollToTopButton( regularScrollTop ) {
    $( ".scrollToTop" ).css( { "top" : ($( window ).height() / 2) } );
    // Check to see if the window is top if not then display button
	$( window ).scroll( function(){
		if ( $( this ).scrollTop() > regularScrollTop ) {
			$( ".scrollToTop" ).fadeIn();
		} else {
			$( ".scrollToTop" ).fadeOut();
		}
	});
	// Click event to scroll to top
	$( ".scrollToTop" ).click( function() {
		$( "html, body" ).stop().animate( { scrollTop : regularScrollTop }, 1500 );
		return false;
	});
}

/* 
 *
 Adjusts the headers size for two conditions:
 1.) Makes the header smaller/larger in height depending on if the page is at the top and there is no more to scroll up.
 2.) Adjusts the header for smaller screen/window sizes.
 *
*/
function adjustHeaderSize( regularScrollTop ) {
    let currentScrollTop, width;
    let topSize = "75px";
    let scrollSize = "50px";
    let selectTopSize = "150px";
    let selectScrollSize = "100px";
    $( window ).on( { "scroll" : function () {
        doAdjustHeaderSize();
        if( $( "body" ).is( "#page-education" ) ) {
            let borderRadius, borderBottomWidth;
            if ( currentScrollTop <= $( "#course-filter" ).offset().top) {
                borderRadius = "5px 5px 15% 15%";
                borderBottomWidth = "3px";
            } else {
                borderRadius = "5px 5px 30% 30%";
                borderBottomWidth = "10px";
            }
            $( ".filter" ).stop().animate( { "border-radius" : borderRadius, "-mox-border-radius" : borderRadius, "-webkit-border-radius" : borderRadius, "border-bottom-width" : borderBottomWidth }, 1000 );

        }
        if($( "body" ).is( " #page-cv" )) {
            let scrollDown = $( ".scroll-down" );
            if ( $( "#umass" ).hasClass( "active" ) ) {
                scrollDown.css( { " display " : "none" } );
            } else {
                scrollDown.css( { " display " : "block" } );
            }
        }
    }});
    $(window).on( { "resize" : function() {
        if ( $( "body" ).width() > 1024 ) {
            $( "#primary-nav select" ).stop().css( { "display" : "none" } );
        } else {
            $( "#primary-nav select" ).stop().css( { "display" : "inline-block" } );
        }
        doAdjustHeaderSize();
    }});
    function doAdjustHeaderSize() {
        currentScrollTop = $( "body" ).scrollTop();
        width = $( "body" ).width();
        if ( width < 1024 ) {
            topSize = "200px";
            scrollSize = "150px";
        } else {
            topSize = "75px";
            scrollSize = "50px";
        }
        if (currentScrollTop <= regularScrollTop) {
            $( "header" ).stop().animate( { "height" : topSize, "line-height" : topSize } , 1000 );
            $( "header .icon" ).stop().css( { "line-height" : topSize});
            $( "header nav select" ).stop().animate( { "height" : selectTopSize, "width" : selectTopSize } , 1000 );
        } else {
            $( "header" ).stop().animate( { "height" : scrollSize, "line-height" : scrollSize } , 1000 );
            $( "header .icon" ).stop().css( { "line-height" : scrollSize } );
            $( "#primary-nav select" ).stop().animate( { "height" : selectScrollSize, "width" : selectScrollSize } , 1000 );
        }
        if ($( "body" ).width() > 1024) {
            $( "#primary-nav select" ).css( { "display" : "none" } );
        }
    }
}

/* 
 *
 Toggles between showing the navigation menu item text or icon depending on if the cursor is hovering over it or not.
 *
*/
function preformNavigationMenuItemHover( menuItem, isHovered ) {
    let navLink = $( menuItem ).find( "a" );
    let navText = navLink.children( "p:first" );
    let navIcon = navLink.children( "p:last" );
    if ( isHovered ) {
        $( navIcon ).stop().css( { "display" : "block" } );
        $( navText ).stop().css( { "display" : "none" } );
    } else {
        $( navIcon ).stop().css( { "display" : "none" } );
        $( navText ).stop().css( { "display" : "block" } );
    }
    
}

/* 
 *
 Sets the current width size of the navigation menu item when the mouse is hovered over.
 This is so that the size of the menu does not change when the content goes from words to icons.
 Without this fix, the menu would act very figity and not smooth.
 *
*/
function navigationMenuItemHover() {
    $( "header nav li" ).mouseenter( function () {
        let actualWidth = $( this ).width();
        $( this ).css( { "width" : actualWidth} );
        preformNavigationMenuItemHover( this, true ); 
    });
    $( "header nav li" ).mouseleave( function () {
        preformNavigationMenuItemHover( this, false ); 
    });        
}

/* 
 *
 Fades the courses in on page load.
 *
*/
function fadeInElementsOnPageLoad() {
    let courses = $( "#courses" ).children( ".course" );
    for ( let i = 0; i < courses.length; i += 1 ) {
        courses.eq( i ).fadeIn( 800 + ( 200 * i ) ).css( { "display" : "inline-block" } );
    }
}

/* 
 *
 Toggles the extra information for the topics, languages, projects, and description sections of each of my courses.
 *
*/
function openDiv() {
    $( ".course-topics div, .course-languages div, .course-projects div, .course-description div" ).click( function () {
        let icon = $( this ).find( "span" );
        icon.toggleClass( "icon-right-arrow" ).toggleClass( "icon-down-arrow" );
        if( icon.hasClass( "icon-down-arrow" ) ) {
            $( this ).siblings( ".text-description, ul" ).fadeIn( 600 );
        } else {
            $( this ).siblings( ".text-description, ul" ).fadeOut( 600 );
        }
        console.log($(this).siblings());
    });
}

/* 
 *
 Deals with fading in/out the courses of specific subjects on the "Education" page when checked/unchecked.
 *
*/
function filterCourses() {
    $( "input[type=checkbox]" ).on( "change" , function () {
        let self = $( this );
        let subject = self.val();
        let tagline = ".course-" + subject;
        if ( self.is( ":checked" ) ) {
            $( tagline ).fadeIn( 300 );
        } else {
            $( tagline ).fadeOut( 300 );
        }
    });
}

/* 
 *
 Adds the "_blank" attribute to all links inside section tags.
 *
*/
function targetBlank() {
    $( "body section a" ).attr( "target" , "_blank" );
}

/* 
 *
 Runs all scripts relavent to the pages on startup.
 *
*/
$( document ).ready( function() {
    calcScrollTop();
    scrollToTopButton(regularScrollTop);
    adjustHeaderSize(regularScrollTop);
    navigationMenuItemHover();
    targetBlank();
    
    if( $( "body" ).is( "#page-home" ) ){
        autoScrollDown(regularScrollTop);
        keepWebpageTitleOnTop(regularScrollTop);
    }
    if( $( "body" ).is( "#page-education" ) ) {
        filterCourses();
        openDiv();
        fadeInElementsOnPageLoad();
    }
});


/*
 *
Old Functions. Saving for potential future re-implementation.
 *
*/

//let moveTaglineHover = true; // Default as true
//let moveTaglineTop = true; // Default as true
//
//function makeTwoRandomNumbers( maxNum ){ 
//    let r1 = Math.floor( ( Math.random() * maxNum ) + 1 );
//    let r2 = Math.floor( ( Math.random() * maxNum ) + 1 );
//    
//    return [ r1, r2 ];    
//}
//
//function moveIndividualTagline( curTagline ) {
//    let newMargins = makeTwoRandomNumbers( 10 );
//    
//    setTimeout( function () {
//        if ( moveTaglineHover && moveTaglineTop ) {
//            console.log( moveTaglineHover && moveTaglineTop );
//            $( curTagline ).stop().animate( { "margin-left" : newMargins[0], "margin-right" : newMargins[1] }, 1000, function() {
//                moveIndividualTagline( curTagline );  
//            });
//        }
//    }, 1000 );
//}
//
//function moveTaglines(){
//    $( ".tagline" ).each( function() {
//        moveIndividualTagline( this );
//    });   
//}
//
//function moveTaglineCheck() {
//    $( ".tagline" ).hover( function () { moveTagline = false; }, 
//                        function () { moveTagline = true; moveTaglines(); } );
//    $( window ).scroll( function() {
//        if ( ( $(window).scrollTop() ) > ( $(window).height() * 0.75) ) {
//            moveTaglineTop = false;
//        } else {
//            moveTaglineTop = true;
//            moveTaglines();
//        }
//    });
//        
//}
