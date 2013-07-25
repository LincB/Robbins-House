<!DOCTYPE html>
<html>
<head>
<title>Robbins House Character Map</title>
<style>
line {stroke: #333; stroke-width:0;}
circle {fill: green; stroke: black; stroke-width:2}
textarea {outline: none; resize: none; font-family: Verdana; font-size: 13px;}
.t {background-color:transparent; width:90px; height:60px; position:absolute; border:0; overflow:hidden; font-size:11px; padding:0; margin:0; text-align:center;}
.tl {background-color:transparent; width:90px; height:40px; position:absolute; border:0; overflow:hidden; padding:0; margin:0;}
</style>
</head>
<body style="">
<center><h2>Robbins House Interpretive Center</h2>
<table id="content">
<tr>
<td id="ul" style="width: 750px; position: relative; padding:0; margin:0;">
<div style="position:relative;">
<textarea id="t9" class="t" style="left:110px; top:10px;" readonly></textarea>
<textarea id="t7" class="t" style="left:210px; top:10px;" readonly></textarea>
<textarea id="t6" class="t" style="left:310px; top:10px;" readonly></textarea>
<textarea id="t8" class="t" style="left:410px; top:10px;" readonly></textarea>
<textarea id="t10" class="t" style="left:510px; top:10px;" readonly></textarea>
<textarea id="t4" class="t" style="left:110px; top:550px;" readonly></textarea>
<textarea id="t2" class="t" style="left:210px; top:550px;" readonly></textarea>
<textarea id="t1" class="t" style="left:310px; top:550px;" readonly></textarea>
<textarea id="t3" class="t" style="left:410px; top:550px;" readonly></textarea>
<textarea id="t5" class="t" style="left:510px; top:550px;" readonly></textarea>
<textarea id="t11" class="t" style="left:10px; top:175px;" readonly></textarea>
<textarea id="t15" class="t" style="left:10px; top:275px;" readonly></textarea>
<textarea id="t13" class="t" style="left:10px; top:375px;" readonly></textarea>
<textarea id="t12" class="t" style="left:600px; top:175px;" readonly></textarea>
<textarea id="t16" class="t" style="left:600px; top:275px;" readonly></textarea>
<textarea id="t14" class="t" style="left:600px; top:375px;" readonly></textarea>

<textarea id="centerlabel" class="t" style="left:250px; top:170px; width:200px; height:100px; font-size:17px; font-weight:bold; text-align:center;" readonly></textarea>
</div>

<svg id="map" xmlns="http://www.w3.org/2000/svg" version="1.1" height="602" width="702">
<polyline id="mapborder" points="1,1 1,600 700,600 700,1 1,1" style="fill:none;stroke:black;stroke-width:3"/>

<line id="l4" x1="350" y1="300" x2="150" y2="500"/>
<line id="l2" x1="350" y1="300" x2="250" y2="500"/>
<line id="l1" x1="350" y1="300" x2="350" y2="500"/>
<line id="l3" x1="350" y1="300" x2="450" y2="500"/>
<line id="l5" x1="350" y1="300" x2="550" y2="500"/>
<line id="l9" x1="350" y1="300" x2="150" y2="100"/>
<line id="l7" x1="350" y1="300" x2="250" y2="100"/>
<line id="l6" x1="350" y1="300" x2="350" y2="100"/>
<line id="l8" x1="350" y1="300" x2="450" y2="100"/>
<line id="l10" x1="350" y1="300" x2="550" y2="100"/>
<line id="l11" x1="350" y1="300" x2="150" y2="200"/>
<line id="l15" x1="350" y1="300" x2="150" y2="300"/>
<line id="l13" x1="350" y1="300" x2="150" y2="400"/>
<line id="l12" x1="350" y1="300" x2="550" y2="200"/>
<line id="l16" x1="350" y1="300" x2="550" y2="300"/>
<line id="l14" x1="350" y1="300" x2="550" y2="400"/>

<circle id="center" cx="350" cy="300" r="20"/>

<circle id="c4" cx="150" cy="500" r="0"/>
<circle id="c2" cx="250" cy="500" r="0"/>
<circle id="c1" cx="350" cy="500" r="0"/>
<circle id="c3" cx="450" cy="500" r="0"/>
<circle id="c5" cx="550" cy="500" r="0"/>
<circle id="c9" cx="150" cy="100" r="0"/>
<circle id="c7" cx="250" cy="100" r="0"/>
<circle id="c6" cx="350" cy="100" r="0"/>
<circle id="c8" cx="450" cy="100" r="0"/>
<circle id="c10" cx="550" cy="100" r="0"/>
<circle id="c11" cx="150" cy="200" r="0"/>
<circle id="c15" cx="150" cy="300" r="0"/>
<circle id="c13" cx="150" cy="400" r="0"/>
<circle id="c12" cx="550" cy="200" r="0"/>
<circle id="c16" cx="550" cy="300" r="0"/>
<circle id="c14" cx="550" cy="400" r="0"/>
</svg>
</td><td id="ur">
<textarea id="description" style="border: 3px solid #000; width: 200px; height: 592px;" readonly>Description</textarea>
</td></tr><tr><td id="ll">
<!--<div style="position:relative;">
<svg id="time" xmlns="http://www.w3.org/2000/svg" version="1.1" width="702" height="200">
<polyline id="timeborder" points="100,50 100,100 600,100 600,50 100,50" style="fill:none;stroke:black;stroke-width:2"/>
<rect id="life" x="200" y="51" width="100" height="48" style="fill:#555;stroke:none;"/>
<text x="60" y="80" style="font-weight:bold;">1913</text>
<text x="610" y="80" style="font-weight:bold;">2013</text>
</svg>
<textarea id="born" class="tl" style="font-weight:bold; top:30px;">1111</textarea>
<textarea id="died" class="tl" style="font-weight:bold; top:105px;">2222</textarea>
</div>-->
</td><td id="lr">
<button onclick="centerOnText('Welcome to The Robbins House Interpretative Center')">Back to entrance</button>
<!--Feedback link?-->
</td></tr></table></center>
<script>
var scale;
if(window.innerHeight > 750){
scale=1;
}else{
scale = (window.innerHeight / 750);
}
if(navigator.appName == "Microsoft Internet Explorer"){
document.body.setAttribute('style',"zoom: "+scale+";");
}else{
document.body.setAttribute('style',"-webkit-transform: scale("+scale+"); -moz-transform: scale("+scale+"); transform: scale("+scale+");");
}
for(var c=1; c<17; c++){
var node=document.getElementById("c"+c);
node.setAttribute('onmouseover','light(this);');
node.setAttribute('onmouseout','dark(this);');
node.setAttribute('onclick','centerOnNode(this);');
}

<?php
$start = $_GET['start'];
if(!$start){
$start='Welcome to The Robbins House Interpretative Center';
}
echo('centerOnText("'.$start.'");');
?>
/**
 * 
 * @param {PersonNode} node
 * @returns {void}
 */
function centerOnNode(node){
number = node.getAttribute('id').substr(1);
label = document.getElementById('t'+number).innerHTML;
centerOnText(label);
}
/**
 * 
 * @param {PersonName} name
 * @returns {void}
 */
function centerOnText(name){
var client = new XMLHttpRequest();
client.open('GET', 'http://robbinshouse.hostoi.com/read.php?name='+encodeURI(name));
client.onreadystatechange = function() {
if(client.readyState == 4 && client.status == 200){
  loadNodes(client.responseText,name);
}
}
client.send();
}
function loadNodes(response,name){
var nodes = contractNodes();
var cir=1;
var people = response.split('*');
for(var c=0; c<(people.length-1); c++){
var info = people[c].split('~');
if(info.length == 4){
document.getElementById('center').setAttribute('r',info[2]*4);
document.getElementById('centerlabel').innerHTML = name;
document.getElementById('description').innerHTML = info[3];
var age=(info[0]-1913)*5;
/*document.getElementById('life').setAttribute('x', age+100);
var diff=info[1]-info[0];
document.getElementById('life').setAttribute('width', diff*5);
document.getElementById('born').style.left = (((info[0]-1913)*5)+85)+'px';
document.getElementById('born').innerHTML =�info[0];
document.getElementById('died').style.left = (((info[1]-1913)*5)+85)+'px';
document.getElementById('died').innerHTML = info[1];*/
}else{
document.getElementById("c"+cir).setAttribute('r',info[1]*4);
document.getElementById("t"+cir).innerHTML = info[0];
document.getElementById('l'+cir).style.strokeWidth=2;
cir++;
}
}
setTimeout(function(){expandNodes(nodes)},1000);
}
function clearNodes(){
for(var c=1; c<=16; c++){
document.getElementById('t'+c).innerHTML = "";
document.getElementById('l'+c).style.strokeWidth=0;
document.getElementById("c"+c).setAttribute('r',0);
/*if(document.getElementById('c'+c).getAttribute('r') == 0) continue;
document.getElementById('t'+c).innerHTML = "";
label = document.getElementById('l'+c);
x=label.x2;
y=label.y2;
move=setInterval(function(){RunMove()},50);
setTimeout(function(){clearTimeout(move)},500);*/
}
}
function light(node){
node.style.fill="#0f0";
}
function dark(node){
node.style.fill="green";
}
/**
 * @param {NodeNumber} idnum
 * @returns {ObjContractingNode}
 */
function ClassChangingNode(idnum){
    this.cir = document.getElementById('c'+idnum);
    this.line = document.getElementById('l'+idnum);
    this.label = document.getElementById('t'+idnum);
    this.origx = this.cir.cx.baseVal.value;
    this.origy = this.cir.cy.baseVal.value;
    this.xdist = this.origx - 350;
    this.ydist = this.origy - 300;
    this.moveIn = _moveIn;
    this.moveout = _moveOut;
}
function _moveIn(){
    
}
function _moveOut(){
    this.label.style.opacity = 1;
    this.cir.cx = origx;
    this.cir.cy = origy;
    this.line.x2 = origx;
    this.line.y2 = origy;
}
var timer;
function contractNodes(){
    clearNodes(); //Temporary addin to make it stay functional.
    var nodelist = new Array();
    for(var c=1; c!=17; c++){
        nodelist[c] = new ClassChangingNode(c);
    }
    timer = setInterval(function(){stepInAll(nodelist);},20);
    setTimeout(function(){clearInterval(window.timer);},1000);
}
function expandNodes(nodelist){
    
}
function stepInAll(nodelist){
    for(var c=1; c!=17; c++){
        nodelist[c].moveIn();
    }
}
function stepOutAll(nodelist){
    for(var c=1; c!=17; c++){
        nodelist[c].moveOut();
    }
}
</script>
</body>
</html>