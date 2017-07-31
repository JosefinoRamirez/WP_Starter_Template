$(function() {
    // console.log( "ready!" );

    $('#fullpage').fullpage({
        sectionsColor: ['green', '#4BBFC3', '#7BAABE', '#ffffff', '#ccddff', 'red', 'gray'],
        anchors: ['home', 'portafolio', 'estudio', 'equipo', 'servicios', 'manifiesto', 'contacto'],
        menu: '#menu',
        scrollingSpeed: 1000,
        fadingEffect: false,
        scrollOverflow: true,
        onLeave: function(index, nextIndex, direction){
          var leavingSection = $(this);
          if(index == 2 && direction == 'up'){
            // console.log('sigue');
            player.playVideo();
          }
          if(index == 5 && direction =='down'){
            // console.log('sigue');
            player2.playVideo();
          } else if (index == 7 && direction == 'up'){
            // console.log('sigue');
            player2.playVideo();
          }
        }
    });

    $('.cases-slider').owlCarousel({
      nav: true,
      navText: ["<div class='arrow prev-arrow'></div>","<div class='arrow next-arrow'></div>"],
      dots: false,
      loop: true,
      responsive:{
        0:{
            items:1
        },
        768:{
          items:2,
        }
      }
    })

    $('.team-slider').owlCarousel({
      dots: false,
      navText: ["<div class='arrow prev-arrow'></div>","<div class='arrow next-arrow'></div>"],
      responsive:{
        0:{
          items:1
        },
        768:{
            nav: true,
            items:4
        }
      }
    })

    $('.service-slider').owlCarousel({
      nav: false,
      responsive:{
        0:{
          items:1,
          autoplay: true,
        },
        768:{
          items:4,
          autoplay: false,
        }
      }
    })

});

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
var player2;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    videoId: 'GGSKpJGpyuo',
    playerVars: {
         'autoplay': 0,
         'controls': 0,
         'rel' : 0,
         'showinfo' : 0,
         'loop': 0,
         'autohide': 1,
         'modestbranding': 1,
         'vq': 'hd1080'
    },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
  player2 = new YT.Player('player2', {
    videoId: '2_Fu5krfmec',
    playerVars: {
         'autoplay': 0,
         'controls': 0,
         'rel' : 0,
         'showinfo' : 0,
         'loop': 0,
         'autohide': 1,
         'modestbranding': 1,
         'vq': 'hd1080'
    },
    events: {
      'onReady': onPlayerReady2,
      'onStateChange': onPlayerStateChange
    }
  });
}

function onPlayerReady(event) {
  event.target.mute();
  event.target.playVideo();
}

function onPlayerReady2(event) {
  event.target.mute();
}

function onPlayerStateChange(event) {
  if (event.data === YT.PlayerState.ENDED) {
    player.playVideo();
  }
}
function stopVideo() {
  player.stopVideo();
}
