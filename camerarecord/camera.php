<html>
    
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/camera.js" async></script>
</head>

<body>
        
    <p><span id="errorMsg"></span></p>
        
    <!-- Stream video via webcam -->
    <div class="video-wrap">
        <video id="video" playsinline muted ></video>
    </div>

    
    <!-- Trigger canvas web API -->
    <div class="controller">
            <button onclick="enableAutoplay()" type="button">Camera on</button>
    <button onclick="disableAutoplay()" type="button">Camera off</button>

    </div>
    
    <!-- Webcam video snapshot -->
    <form action="camerachecker.php" method="post" id="form_id">
         <canvas id="canvas" width="640" height="480"></canvas>
        <textarea name="textarea" id="textarea" hidden></textarea>
        <button onlcik="searchimg" id="searchimg" >Search Image</button>
    </form>
   
    <!---->

</body>
</html>





