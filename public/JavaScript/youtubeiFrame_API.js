// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
//if you want to display the video more than one, you can use array.
//var videos = ['FQJ0e1C8Tkg', 'yZX07X4raqU', 'jDgyecXlF4Y'];
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    playerVars: {
      //playlist: videos.join(","),
      disablekb: 0,
      loop: 1,
    },
    height: '390',
    width: '640',
    videoId: 'FQJ0e1C8Tkg',  //display a single video.
    events: {
      'onReady': onPlayerReady,
      //'onStateChange': onPlayerStateChange
    }
  });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.stopVideo();
  //event.target.disablekb(1);
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for seekTo 10 sec after.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    event.target.seekTo(10, true);
    done = true;
  }
  if (event.data == YT.PlayerState.ENDED) {
    window.location = "callback:anything"; //here's the key
  }
}

function stopVideo() {
  player.stopVideo();
}
