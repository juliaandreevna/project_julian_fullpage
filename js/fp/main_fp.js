$(document).ready(function(){

  $('.modalSelector').on({

    'show.uk.modal': function(){
      console.log("Modal is visible.");
    },

    'hide.uk.modal': function(){
      console.log("Element is not visible.");
    }
  });
  
  // variables
  var $header_top = $('.header-top');
  var $nav = $('nav');



  // toggle menu
  $header_top.find('a').on('click', function() {
    $(this).parent().toggleClass('open-menu');
  });



  // fullpage customization
  $('#fullpage').fullpage({
    // sectionsColor: ['#B8AE9C', '#348899', '#F2AE72', '#5C832F', '#B8B89F'],
    sectionSelector: '.vertical-scrolling',
    slideSelector: '.horizontal-scrolling',
    navigation: true,
    slidesNavigation: true,

    // scrollHorizontally: true,
    // scrollHorizontallyKey: 'YWx2YXJvdHJpZ28uY29tX01mU2MyTnliMnhzU0c5eWFYcHZiblJoYkd4NVNRcg==',

    css3: true,
    controlArrows: false,
    // anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection'],
    anchors: ['Home', 'News', 'Julian', 'Forum', 'Contacts'],
    menu: '#menu',

    afterLoad: function(anchorLink, index) {
      $header_top.css('background', 'rgba(0, 47, 77, .3)');
      $nav.css('background', 'rgba(0, 47, 77, .25)');
      if (index == 5) {
          $('#fp-nav').hide();
        }
    },

    onLeave: function(index, nextIndex, direction) {
      // console.log (index+' '+nextIndex+' '+direction);
      // исключение для горизонтального скрола
      //console.dir($.fn.fullpage);
      if (index==3 && (nextIndex == 4 || nextIndex == 2)){
        //console.log ('скролим горизонтально');
        //console.dir($.fn.fullpage);
        //e.stopImmediatePropagation();
        if (direction == "down" && window.location.hash.substring(1) != "Julian/3" && window.location.hash.substring(1) != "Forum"){
          $.fn.fullpage.moveSlideRight();
          return false;
        }
        else if (direction == "up" && (window.location.hash.substring(1) != "Julian" && window.location.hash.substring(1) != "News")){
          $.fn.fullpage.moveSlideLeft();
          return false;
        }
      }
    },

    afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex) {
      // if(anchorLink == 'Contacts' && slideIndex == 1) {
      //   $.fn.fullpage.setAllowScrolling(false, 'up');
      //   $header_top.css('background', 'transparent');
      //   $nav.css('background', 'transparent');
      //   $(this).css('background', '#374140');
      //   $(this).find('h2').css('color', 'white');
      //   $(this).find('h3').css('color', 'white');
      //   $(this).find('p').css(
      //     {
      //       'color': '#DC3522',
      //       'opacity': 1,
      //       'transform': 'translateY(0)'
      //     }
      //   );
      // }
    },

    onSlideLeave: function( anchorLink, index, slideIndex, direction) {

      /*
      if(anchorLink == 'Contacts' && slideIndex == 1) {
        $.fn.fullpage.setAllowScrolling(true, 'up');
        $header_top.css('background', 'rgba(0, 47, 77, .3)');
        $nav.css('background', 'rgba(0, 47, 77, .25)');
      }
      */
    }
  });


  // // fullpage customization
  // $('#fullpage').fullpage({
  //   // sectionsColor: ['#4A6FB1', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
  //   // anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection'],
  //   anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
  //   menu: '#menu',
  //   slidesNavigation: true,
  //
  //   scrollHorizontally: true,
  //   scrollHorizontallyKey: 'YWx2YXJvdHJpZ28uY29tX01mU2MyTnliMnhzU0c5eWFYcHZiblJoYkd4NVNRcg==',
  //   afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
  //     console.log("slideLoad--" + "anchorLink: " + anchorLink + " index: " + index + " slideAnchor: " + slideAnchor + " slideIndex: " + slideIndex);
  //
  //   },
  //   onSlideLeave: function(anchorLink, index, slideIndex, direction){
  //     console.log("----------------");
  //     console.log("onSlideLeave--" + "anchorLink: " + anchorLink + " index: " + index + " slideIndex: " + slideIndex + " direction: " + direction);
  //   }
  //
  //
  //
  // });





});