<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Highlight dropzones with interact.js</title>
    <script src="js/interact.js"></script>
    <script src="js/dropzones.js"></script>
    <link rel="stylesheet" href="css/dropzones.css">
</head>
<body>



<div class="dropzone-wrapper">
    <div id="drop1" class="dropzone js-drop"> </div>
</div>
    
    <input id='myInput1' type='text'>   
    <input id='myInput2' type='text'>  
    <input id='myInput3' type='text'>  
    <input id='myInput4' type='text'>  
    <input id='myInput5' type='text'>  
    
<div id="drag1" class="draggable js-drag" onmouseout="sortic();">Position zoom 1</div>
<div id="drag2" class="draggable js-drag" onmouseout="sortic();">Position zoom 2</div>
<div id="drag3" class="draggable js-drag" onmouseout="sortic();">Position zoom 3</div>
<div id="drag4" class="draggable js-drag" onmouseout="sortic();">Position zoom 4</div>
<div id="drag5" class="draggable js-drag" onmouseout="sortic();">Position zoom 5</div>

</body>
</html>