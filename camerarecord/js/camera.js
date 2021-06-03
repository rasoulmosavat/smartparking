'use strict';

  

var vid = document.getElementById("video");
var x = document.getElementById("myDIV");
    x.style.display = "block";
    
      vid.autoplay = true;
      vid.load();
            
        // function enableAutoplay(){
        //     var x = document.getElementById("myDIV");
        //     x.style.display = "block";
            
        //       vid.autoplay = true;
        //       vid.load();
        // }
        
        // function disableAutoplay(){
        //     var x = document.getElementById("myDIV");
        //     x.style.display = "none";
        //     vid.autoplay = false;
        //       vid.load();
        // }



const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const searchimg = document.getElementById("searchimg");
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
    audio: false,
    video: {
        width: 1370, height: 700,
        facingMode: "environment"
    }
};


// Access webcam
async function init() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
    } catch (e) {
        errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
    }
}


// Success
function handleSuccess(stream) {
    window.stream = stream;
    video.srcObject = stream;
}

// Load init
init();

// Draw image
var context = canvas.getContext('2d');
searchimg.addEventListener("click", function() {
    context.drawImage(video, 0, 0, 300, 200);
    	var dataURL = canvas.toDataURL()
	    document.getElementById('textarea').value=dataURL;
	    document.getElementById("myForm").submit();
        
	
});

	   
searchimages.addEventListener("click", function() {
    if (document.getElementById("searchimageinput").value=="")
        window.location.href = "https://saljningzone.se/camerarecord/check.php";
    else{
        document.getElementById("searchimageform").submit();
    }
  
        // document.getElementById("searchimageform").submit();
	   // document.getElementById("myForm").submit();
	
});

                   
// function searchimg(){
//     var dataURL = canvas.toDataURL();
//     document.getElementById('textarea').value=dataURL[0];
// }

// $('#searchimg').on('submit',function(){
// 	var canvas = document.getElementById('canvas')
// 	var dataURL = canvas.toDataURL()
// 	document.getElementById('textarea').value="jh";
// // 	('#textarea').val(dataURL)
// })




// var dataURL = canvas.toDataURL();
// $(function() {
//     $(form).submit(function(e) {
//           e.preventDefault();
//           $.ajax({
//               type: "POST",
//               url: "script.php",
//               data: { 
//                  imgBase64: dataURL
//               }
//          }).done(function(o) {
//               console.log('saved image'); 
//               $.post(url, form.serialize(), function(data) {
//                      console.log('saved form')
//               };
//     });
// }}
