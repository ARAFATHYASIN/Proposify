<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/pintsize.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.6/interact.min.js"></script>

</head>
<body style="background-color:#f5f5f5;
    height:100%;width:100%;padding:0;margin:0;
    font-family:Roboto, sans-serif;">
<div class="topbar" style="background-color:#fff; width:100%;height:60px;position:fixed;top:0; box-shadow: 0 0 30px rgba(7, 51, 84, 0.17);">
<p style="color:#000;"><a href="#" style="text-decoration:none; top:15px;position:relative;left:30px; a:hover{color:#ddd;} color:#000 !important;"><img src="icons/back.svg" width="20px" height="20px"></a></p><span>
<center><p><a href="#" style="text-decoration:none;position:fixed;top:15px;"><img src="icons/addpage.svg" width="25px" height="25px"></a></p></center></span>
<a href="#" style="top:15px;position:fixed; right:25px;"><img src="icons/eye.svg" width="25px" height="25px"></a>
  </div>
  <template id='section-template'>

<div class='section'>
<img src="icons/I.png" style="width:100px;height:100px; position:relative;" data-section="1" draggable="true"><br>
</div><br>
<div class='section'>
<img src="icons/HI.png"style="width:100px;height:100px;position:relative;draggable=true;" data-section="2"><br>

</div><br>
<div class='section'>
<img src="icons/HCI.png"style="width:100px;height:100px;position:relative;" data-section="3" draggable="true"><br>

</div><br>
<div class='section'>
<img src="icons/HIC.png"style="width:100px;height:100px;position:relative;" data-section="4" draggable="true"><br>

</div><br>
<div class='section'>
<img src="icons/HCCI.png"style="width:100px;height:100px;position:relative;" data-section="5"draggable="true"><br>

</div><br>
<div class='section'>
<img src="icons/I.png"style="width:100px;height:100px;position:relative;" data-section="6"draggable="true"><br>

</div><br>
<div class='section'>
<img src="icons/HIC.png"style="width:100px;height:100px;position:relative;" data-section="7" draggable="true"><br>

</div><br>
<div class='section'>
<img src="icons/HCCI.png"style="width:100px;height:100px;position:relative;" data-section="8" draggable="true"><br>

</div><br>
<div class='section'>
<img src="icons/I.png"style="width:100px;height:100px;position:relative;" data-section="9" draggable="true"><br>

</div><br>


<div class='section'>
<img src="icons/HIC.png"style="width:100px;height:100px;position:relative;" data-section="10" draggable="true"><br>

</div><br>
<div class='section'>
<img src="icons/HCCI.png"style="width:100px;height:100px;position:relative;" data-section="11" draggable="true"><br>

</div><br>

<div class='section'>
<img src="icons/I.png"style="width:100px;height:100px;position:relative;" data-section="12" draggable="true"><br>
</div><br>

<div class='section'>
<img src="icons/HIC.png"style="width:100px;height:100px;position:relative;" data-section="13" draggable="true"><br>
</div>

</template>
<div id="result" class="flex" style="top:100px;left:175px;position:relative;">
</div>
<script>
(function(){
	let template = document.getElementById('section-template');
	let src = document.importNode(template.content,true);
	let elem = src.querySelectorAll('.section');
	let selected = sessionStorage.getItem('cards').split(',');
	var sections='';
	selected.map(section=>{
		console.log(section)
			for(let i=0;i< elem.length; i++){
			
			if(elem[i].children[0].dataset['section']==section){
				
				sections+='<div class="col col--4"><figure><div class="thumbnail"id="section1"  onclick="check(id)">'+elem[i].innerHTML+'</div></figure></div>'
			}
		}
	})
	document.getElementById('result').innerHTML = sections;
	
	
})()
</script>
<template id="layout1" style="top:30px;height:500px;width:500px;visibility:hidden;">
  <div class="paragraph" style="padding-left:30px;">
    <h3 contenteditable="true">click to add content</h3>
  </div>
</template>
<template id="cover" class="draggable">
  <div class="blog-card">
   <!-- <script>
    var template = document.querySelector('#layout');
    document.getElementById('cover').appendChild(document.importNode(template.content, true));
    </script>
	-->
  </div>
</template>
<template id="cover2">
  <div class="blog-card">
    <!--<script>
    var template = document.querySelector('#layout');
    document.getElementById('cover2').appendChild(document.importNode(template.content, true));
    </script>-->
  </div>
</template>
<template id="cover3">
  <div class="blog-card">

  </div>
</template>
<!--<script>
var template = document.querySelector('#cover');
document.getElementById('section1').appendChild(document.importNode(template.content, true));
</script>
<script>
var template = document.querySelector('#cover2');
document.getElementById('section2').appendChild(document.importNode(template.content, true));
</script>
<script>
var template = document.querySelector('#cover3');
document.getElementById('section3').appendChild(document.importNode(template.content, true));
</script>
<div id="bottombar" style="background-image;#d3d3d3;position:fixed;height:100px; width:100%;">
</div>
</div>
<script>
$('#hello').click(function(){
  document.getElementById('main').innerHTML = document.getElementById('editor').innerHTML;
});
</script>-->


<style>

.modal {
    display: none;
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100% !important;
    height: 100% !important;
    background-color: #f5f5f5;
    box-shadow: none;
    padding-bottom: 0;
     overflow: auto;
}
.modal-content {
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<div id="myModal" class="modal">
<div class="modal-content">
<a href="#" style="top:15px;position:fixed; right:25px;"><img src="icons/close.svg" width="25px" height="25px"class="close"></a>
<div id="bottombar" style="bottom:0;height:60px;width:100%;position:fixed; box-shadow: 0 0 30px rgba(7, 51, 84, 0.17);padding-bottom:0; background-color:#fff; border:0.5px">
<a href="#" style="bottom:15px;position:fixed; right:25px;"><img src="icons/save.svg" width="25px" height="25px"class="close"></a>
</div>
<div id="content1" style="top:30px;height:500px;width:500px;">
<div style="padding-left:30px;padding-top:30px;">
    <div>
    <h3 contenteditable="true" placeholder="click to add title">Click to add title</h3>
  </div>
  </div>
  <div class="paragraph" style="padding-left:30px;">
    <p contenteditable="true" placeholder="click to add content">Click to add title</p>
  </div>
</div>
</div>
</div>
</div>
<!--<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("section1");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("section2");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("section3");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <script>
  var element = document.getElementById('grid-snap'),
    x = 0, y = 0;

interact(element)
  .draggable({
    snap: {
      targets: [
        interact.createSnapGrid({ x: 30, y: 30 })
      ],
      range: Infinity,
      relativePoints: [ { x: 0, y: 0 } ]
    },
    inertia: true,
    restrict: {
      restriction: element.parentNode,
      elementRect: { top: 0, left: 0, bottom: 1, right: 1 },
      endOnly: true
    }
  })
  .on('dragmove', function (event) {
    x += event.dx;
    y += event.dy;

    event.target.style.webkitTransform =
    event.target.style.transform =
        'translate(' + x + 'px, ' + y + 'px)';
  });
  </script>-->
  <template id="content2" style="top:30px;height:500px;width:500px;visibility:hidden;">
    <div class="paragraph" style="padding-left:30px;">
      <h3 contenteditable="true">Click to add content</h3>
    </div>
  </template>
  <template id="content3" style="top:30px;height:500px;width:500px;visibility:hidden;">
    <div class="paragraph" style="padding-left:30px;">
      <h3 contenteditable="true">Click to add content</h3>
    </div>
  </template>

  <div class="ui animated  positive button" tabindex="0" style="position:fixed;right:20px;bottom:20px;">
  <div class="visible content">Publish</div>
  <div class="hidden content">
    <i class="right arrow icon"></i>
  </div>
</div>

</body>
</html>
