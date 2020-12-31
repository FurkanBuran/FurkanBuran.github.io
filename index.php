<!DOCTYPE html>
<html>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<head>
	<meta charset="utf-8">
	<title>Furkan Buran | GitHub FurkanBuran</title> <!--Site ismi-->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!----------------------------------------------------------------------------------------------------------------------------------------->
</head>
<body onLoad="openPeeker()">  
<!---------------------HESAP MAKİNESİ---------------------->
<center> <h1 class="display-1">Hesap Makinesi <br> <h3>Tasarım: <a href="https://www.youtube.com/channel/UCeQuTVNcRaE3h1tyfQp-pYg?sub_confirmation=1">FurkanBuran/YouTube</a></h3> </h1> </center>  


<div class="container p-3 my-3 bg-dark text-white" style="border-style: double;">
    <input style="font-family: Franklin Gothic Heavy; background-color: #F0F8FF;" type="number" name="" class="form-control" placeholder="1.sayı" onkeyup="hesapla()" id="sayi1">
    <br>
    <input style="font-family: Franklin Gothic Heavy; background-color: #F0F8FF;" type="number" name="" class="form-control" placeholder="2.sayı" onkeyup="hesapla()" id="sayi2">
</div>



<div class="container p-3 my-3 bg-dark text-white" style="font-family: Franklin Gothic Heavy; border-style: double;">
  <div class="row">
            <div class="col-lg-3">
              <label for="">Toplam</label>
              <input class="form-control" name="" id="toplam">
            </div>

            <div class="col-lg-3">
              <label for="">Fark</label>
              <input class="form-control" name="" id="fark">
            </div>

            <div class="col-lg-3">
              <label for="">Çarpım</label>
              <input class="form-control" name="" id="carpim">
            </div>

            <div class="col-lg-3">
              <label for="">Bölümü</label>
              <input class="form-control" name="" id="bolum">
            </div>

            <div class="col-lg-3">
              <label for="">Yüzde</label>
              <input class="form-control" name="" id="yüzde">
            </div>   
  </div>      
</div>




  
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/bootstrap.js" type="text/javascript"></script>

<script>
  function hesapla (){
    var sayi1= Number($("#sayi1").val());
    var sayi2= Number($("#sayi2").val());


  var toplam =sayi1+sayi2;
  var carpim =sayi1*sayi2;
  var fark =sayi1-sayi2;
  var bolum =sayi1/sayi2;
  var yüzde =sayi1%sayi2;

  $("#toplam").val(toplam);
   $("#carpim").val(carpim);
    $("#fark").val(fark);
     $("#bolum").val(bolum);
      $("#yüzde").val(yüzde);

  console.log(sayi1+""+sayi2)

}
</script>

<!----------------------END----------------------------->



<!----------------------POP-UP----------------------------->
<SCRIPT LANGUAGE="JavaScript">


<!-- Begin
// burası en ve yüksekliğini ayarlayın

var windowW = 1280;  // en
var windowH = 720;  // yükseklik



var Yoffset = 0;   


var windowStep = 2;
var moveSpeed = 10; 


Xmode = "right";


Xoffset = 35;

// Yüklenmesini istediğiniz sayfanın URLsi

var urlPop = "https://www.youtube.com/channel/UCeQuTVNcRaE3h1tyfQp-pYg?sub_confirmation=1"

// sayfanın title'i

var title =  "MuhammedFurkan-YouTube";

var autoclose = true;


// Buradan aşağısını değiştirmeyin


var windowX = (screen.width/2)-(windowW/2);
if (Xmode=="left") windowX=0+Xoffset;
if (Xmode=="right") windowX=screen.availWidth-Xoffset-windowW;
var windowY = (screen.availHeight);
var windowYstop = windowY-windowH-Yoffset;
var windowYnow = windowY;

s = "width="+windowW+",height="+windowH;
var beIE = document.all?true:false
function openPeeker() {
if (beIE) {
PFW = window.open("","popFrameless","fullscreen,"+s);
PFW.blur();
window.focus();
PFW.resizeTo(windowW,windowH);
PFW.moveTo(windowX,windowY);
var frameString=""+
"<html>"+
"<head>"+
"<title>"+title+"</title>"+
"</head>"+
"<frameset rows='*,0' framespacing=0 border=0 frameborder=0>"+
"<frame name='top' src='"+urlPop+"' scrolling=auto>"+
"<frame name='bottom' src='about:blank' scrolling='no'>"+
"</frameset>"+
"</html>"
PFW.document.open();
PFW.document.write(frameString);
PFW.document.close();
}
else {
PFW=window.open(urlPop,"popFrameless","scrollbars,"+s);
PFW.blur();
window.focus(); 
PFW.resizeTo(windowW,windowH);
PFW.moveTo(windowX,windowY);
}
PFW.focus();
if (autoclose) {
window.onunload = function(){PFW.close()}
}
movePFW();
}
function movePFW() {
if (document.all) {
if (windowYnow>=windowYstop) {
PFW.moveTo(windowX,windowYnow);
PFW.focus();
windowYnow=windowYnow-windowStep;
timer=setTimeout("movePFW()",moveSpeed);
}
else {
clearTimeout(timer);
PFW.moveTo(windowX,windowYstop);
PFW.focus();
   }
}
else {
PFW.moveTo(windowX,windowYstop);
   }
}
</script>

<!-- End -->
<div class="container p-3 my-3" style="background-image: url('https://www.imagevisit.com/images/2020/06/23/Fatih-Sultan-Mehmet-Han.jpg');">

<center>
  <div class="display-1" style="font-size: 150%; border-style: double;">Fatih Sultan Mehmet</div>
</center>

<center>
  <p class="display-1" style="font-size: 150%; margin-top: 20px;">İmkanın sınırını görmek için imkansızı denemek lazım.</p>
</center>


</div>
















</body>
</html>
