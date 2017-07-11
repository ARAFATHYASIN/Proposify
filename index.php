<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pintsize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>

</head>
<body style="background-color: #f5f5f5">
<div id="template">
<div id="sidebar" style="background-color:#fff; width:250px;right:0; position:fixed; height:100%;">
    <h3 style="right:60px;left:40px;position:relative;color:#000;top:20px;">Recent Templates</h3>
    <div class="ui transparent inverted icon input" style="top:70px; right:30px; position:fixed;">
    <input type="text" placeholder="Search templates">
    <i class="search icon"></i>
  </div>
</div>
<!-PROGRESSBAR><center><div style="top:200px;position:fixed;left:450px;">
<h3 style="postion:relative; color:#000">Would you like to add a template?</h3><br>
<div class="ui massive icon button" style="position:relative;" id="add" data-content="Add users to your feed" width="60px" height="60px">
  <i class="add icon"></i>
</div></div></center>
<div class="ui modal">
  <i class="close icon"></i>
  <div class="header" color="gray">
    What would you like to name the template?<br><br>
 <div class="ui transparent input">
  <input type="text" placeholder="Name....">
</div>
  </div>
  <div class="actions">
    <div class="ui #5b6378 deny button">
      Cancel
    </div>
    <div class="ui positive right labeled icon button" id="addname">
      Name it!
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>
<script>
$('#add').click(function(){
$('.ui.modal').modal('show');
});
</script>
</div>
<div id="session" style="visibility:hidden;">
<div id="sidebar" style="background-color:#fff; width:250px;right:0; position:fixed; height:100%;">
<h3 style="right:60px;left:40px;position:relative;color:#000;;top:20px;">Preview Pane</h3>
<div class="ui buttons" style="bottom:20px;right:10px;position:fixed;">
    <div class="ui button">Clear all</div>
    <div class="or"></div>
    <a class="ui positive button" id="addcontents"  href="editor.php">Add Contents</a>
  </div>
  </div>
<div id="sections1"  style="position:fixed;top:100px;left:300px;" align-items="center">
<div class='section'>
<img src="icons/I.png" style="width:100px;height:100px; position:relative;" data-section="1" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
<div class='section'>
<img src="icons/HI.png"style="width:100px;height:100px;position:relative;draggable=true;" data-section="2"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
<div class='section'>
<img src="icons/HCI.png"style="width:100px;height:100px;position:relative;" data-section="3" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
</div><span>
<div id="sections2"  style="position:fixed;top:100px;left:450px;">
<div class='section'>
<img src="icons/HIC.png"style="width:100px;height:100px;position:relative;" data-section="4" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
<div class='section'>
<img src="icons/HCCI.png"style="width:100px;height:100px;position:relative;" data-section="5"draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
<div class='section'>
<img src="icons/I.png"style="width:100px;height:100px;position:relative;" data-section="6"draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
</div>
<div id="sections3" style="position:fixed;top:100px;left:600px;"  draggable="true">
<div class='section'>
<img src="icons/HIC.png"style="width:100px;height:100px;position:relative;" data-section="7" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
<div class='section'>
<img src="icons/HCCI.png"style="width:100px;height:100px;position:relative;" data-section="8" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
<div class='section'>
<img src="icons/I.png"style="width:100px;height:100px;position:relative;" data-section="9" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
</div>
<div id="sections4"  style="position:fixed;top:100px;left:750px;">
<div class='section'>
<img src="icons/HIC.png"style="width:100px;height:100px;position:relative;" data-section="10" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></button></center>
</div><br>
<div class='section'>
<img src="icons/HCCI.png"style="width:100px;height:100px;position:relative;" data-section="11" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
<div class='section'>
<img src="icons/I.png"style="width:100px;height:100px;position:relative;" data-section="12" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
</div>
<div id="sections5"  style="position:fixed;top:100px;left:900px;">
<div class='section'>
<img src="icons/HIC.png"style="width:100px;height:100px;position:relative;" data-section="13" draggable="true"><br>
<center><button class="ui circular mini icon button"><i class="add icon"></i></button></center>
</div><br>
</div>

  
</div>
<script src="preview.js"></script>
<script>
$(document).ready(function(){

$('#addname').click(function(){
	
  $('.ui.modal').modal('hide')
  document.getElementById('template').innerHTML = document.getElementById('session').innerHTML;
  
  $('#addcontents').click(function(){
	  
	  listPreview();
	  
  })
  $('.section').click(function(evt){
	
	let src = evt.currentTarget.innerHTML;
	let target = document.createElement('div');
	target.className = 'preview';
	 src = '<center>'+src+'</center>';
	target.innerHTML = src.replace('<button class="ui circular mini icon button"><i class="add icon"></i></button>','');
	document.getElementById('sidebar').appendChild(target);
	
})
  });
})
</script>
</body>
</html>
