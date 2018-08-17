
    <!DOCTYPE html>
    <html lang="en">
     <head>
       <title>XHR2 and binary files + Web Audio API</title>
     </head>
    <body>
    <p>Example of using XHR2 and <code>xhr.responseType = 'arraybuffer';</code> to download a binary sound file
    and start playing it on user-click using the Web Audio API.</p>
    <p>
    <h2>Load file using Ajax/XHR2 and the arrayBuffer response type</h2>
    <button onclick="downloadSoundFile('audio/arise.mp3');">
         Download and play example song.
     </button>
    <button onclick="playSound()" disabled>Start</button>
    <button onclick="stopSound()" disabled>Stop</button>
    <script>
      // WebAudio context
      var context = new window.AudioContext();
      var source = null;
      var audioBuffer = null;
     
      function stopSound() {
        if (source) {
           source.stop();
        }
      }
     
      function playSound() {
        // Build a source node for the audio graph
        source = context.createBufferSource();
        source.buffer = audioBuffer;
        source.loop = false;
        // connect to the speakers
        source.connect(context.destination);
        source.start(0); // Play immediately.
      }
     
      function initSound(audioFile) {
        // The audio file may be an mp3 - we must decode it before playing it from memory
        context.decodeAudioData(audioFile, function(buffer) {
          console.log("Song decoded!");
          // audioBuffer the decoded audio file we're going to work with
          audioBuffer = buffer;
          // Enable all buttons once the audio file is
          // decoded
          var buttons = document.querySelectorAll('button');
          buttons[1].disabled = false; // play
          buttons[2].disabled = false; // stop
          alert("Binary file has been loaded and decoded, use play / stop buttons!")
        }, function(e) {
           console.log('Error decoding file', e);
        });
      }
     
      // Load a binary file from a URL as an ArrayBuffer.
      function downloadSoundFile(url) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
     
        xhr.responseType = 'arraybuffer'; // THIS IS NEW WITH HTML5!
        xhr.onload = function(e) {
           console.log("Song downloaded, decoding...");
           initSound(this.response); // this.response is an ArrayBuffer.
        };
        xhr.onerror = function(e) {
          console.log("error downloading file");
        }
     
        xhr.send();
           console.log("Ajax request sent... wait until it downloads completely");
      }
    </script>
    </body>
    </html>
