<html>
     <head>     
	    <title>Unity WebGL Player | Survaider Begins</title>

{{HTML::style('style.css')}}
           {{HTML::script('UnityProgress.js')}}
     </head>
    
    <body class="template">
        <p class="header"><span>Unity WebGL Player | </span>Survaider Begins</p>
        <div class="template-wrap clear">
            <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
            <div class="logo"></div>
            <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
            <div class="title">Survaider Begins</div>
            
        </div>
        <p class="footer">&laquo; created with <a href="http://unity3d.com/" title="Go to unity3d.com">Unity</a> &raquo;</p>
            
           
            {{HTML::script('arg-1.2.js')}}
            <script type="text/javascript" language="javascript">
        <!--
        //initializing the WebPlayer
        var u = new UnityObject2();
        u.initPlugin(jQuery("#unityPlayer")[0], "Example.unity3d");

        function MyFunction2(arg)
        {
            SaySomethingToUnity();
        }

        function SaySomethingToUnity()
        {
            SendMessage("Logo", "MyFunction", Arg.all().json);
        }
            </script>

            <script type='text/javascript'>
  // connect to canvas
  var Module = {
    TOTAL_MEMORY: 157286400,
    filePackagePrefixURL: "Release/",
    memoryInitializerPrefixURL: "Release/",
    preRun: [],
    postRun: [],
    print: (function() {
      return function(text) {
        console.log (text);
      };
    })(),
    printErr: function(text) {
      console.error (text);
    },
    canvas: document.getElementById('canvas'),
    progress: null,
    setStatus: function(text) {
      if (this.progress == null) 
      {
        if (typeof UnityProgress != 'function')
          return;
        this.progress = new UnityProgress (canvas);
      }
      if (!Module.setStatus.last) Module.setStatus.last = { time: Date.now(), text: '' };
      if (text === Module.setStatus.text) return;
      this.progress.SetMessage (text);
      var m = text.match(/([^(]+)\((\d+(\.\d+)?)\/(\d+)\)/);
      if (m)
        this.progress.SetProgress (parseInt(m[2])/parseInt(m[4]));
      if (text === "") 
        this.progress.Clear()
    },
    totalDependencies: 0,
    monitorRunDependencies: function(left) {
      this.totalDependencies = Math.max(this.totalDependencies, left);
      Module.setStatus(left ? 'Preparing... (' + (this.totalDependencies-left) + '/' + this.totalDependencies + ')' : 'All downloads complete.');
    }
  };
  Module.setStatus('Downloading (0.0/1)');
</script>

  {{HTML::script('Release/UnityConfig.js')}}

  {{HTML::script('Release/fileloader.js')}}
<script>if (!(!Math.fround)) {
  var script = document.createElement('script');
  script.src = "Release/For Demo.js";
  script.src=  {{HTML::script('')}}
  document.body.appendChild(script);
} else {
  var codeXHR = new XMLHttpRequest();
  codeXHR.open('GET', 'Release/For Demo.js', true);
  codeXHR.onload = function() {
    var code = codeXHR.responseText;
    if (!Math.fround) { 
try {
  console.log('optimizing out Math.fround calls');
  var m = /var ([^=]+)=global\.Math\.fround;/.exec(code);
  var minified = m[1];
  if (!minified) throw 'fail';
  var startAsm = code.indexOf('// EMSCRIPTEN_START_FUNCS');
  var endAsm = code.indexOf('// EMSCRIPTEN_END_FUNCS');
  var asm = code.substring(startAsm, endAsm);
  do {
    var moar = false; // we need to re-do, as x(x( will not be fixed
    asm = asm.replace(new RegExp('[^a-zA-Z0-9\\$\\_]' + minified + '\\(', 'g'), function(s) { moar = true; return s[0] + '(' });
  } while (moar);
  code = code.substring(0, startAsm) + asm + code.substring(endAsm);
  code = code.replace("'use asm'", "'almost asm'");
} catch(e) { console.log('failed to optimize out Math.fround calls ' + e) }
 }

    var blob = new Blob([code], { type: 'text/javascript' });
    codeXHR = null;
    var src = URL.createObjectURL(blob);
    var script = document.createElement('script');
    script.src = URL.createObjectURL(blob);
    script.onload = function() {
      URL.revokeObjectURL(script.src);
    };
    document.body.appendChild(script);
  };
  codeXHR.send(null);
}
</script>
</body>

   
 </html>