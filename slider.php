

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>sliders</title>
</head>

<style type="text/css">
body{
   margin: 0;
}
.header{
   width: 100%;
   height: 50px;
   background: blue;
}
.slidecontroller{
   margin-left: 100px;
   margin-top: 30px;

   }
.button{
   position: absolute;
   top: 230px;

}
.btn{
   background:skyblue;
   border: none;
   color: white;
   padding: 5px ;
   width: 70px;
}
.slidertext{
   font-size: 15px;
   background: blue;
   padding: 5px;
   margin-left: 10px;
   color: white;
}
</style>
<body>
   <form method="POST" action="slider.php">
       <div class="header">
       </div>
       <div class="slidecontroller">
       <input type="range" name="slider1" min="0" max="180" value="0" class="slider" id="myRange1"><span id="demo1"></span>

<span class="slidertext"> slider1</span><br><br>


       <input type="range" name="slider2" min="0" max="180" value="0" class="slider" id="myRange2"><span id="demo2"></span>

<span class="slidertext"> slider2</span><br><br>


       <input type="range" name="slider3" min="0" max="180" value="0" class="slider" id="myRange3"><span id="demo3"></span>

<span class="slidertext"> slider3</span><br><br>


       <input type="range" name="slider4" min="0" max="180" value="0" class="slider" id="myRange4"><span id="demo4"></span>

<span class="slidertext"> slider4</span><br><br>


       <input type="range" name="slider5" min="0" max="180" value="0" class="slider" id="myRange5"><span id="demo5"></span>

<span class="slidertext"> slider5</span><br><br>


       <input type="range" name="slider6" min="0" max="180" value="0" class="slider" id="myRange6"><span id="demo6"></span>

<span class="slidertext"> slider6</span><br><br>
       </div>
       <div class="button">
           <input class="btn" type="submit" name="save" value="save"><br><br>   </form>
        <form action="run.php" method="post"> <input class="btn" type="submit" name="run" value="run"><br><br>   </form>
       </div>
       <div class="header">
       </div>

</body>
<script type="text/javascript"> //javascript to show the slider values aside while changing
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;
slider1.oninput = function() {
output1.innerHTML = this.value;
}

var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;
slider2.oninput = function() {
output2.innerHTML = this.value;
}

var slider3 = document.getElementById("myRange3");
var output3= document.getElementById("demo3");
output3.innerHTML = slider3.value;
slider3.oninput = function() {
output3.innerHTML = this.value;
}

var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;
slider4.oninput = function() {
output4.innerHTML = this.value;
}

var slider5= document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;
slider5.oninput = function() {
output5.innerHTML = this.value;
}

var slider6 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider6.value;
slider6.oninput = function() {
output6.innerHTML = this.value;
}


</script>

</html>

<?php


$database=mysqli_connect("localhost","root","","sliders");

if(isset($_POST['save']))
{
$s1=$_POST['slider1'];
$s2=$_POST['slider2'];
$s3=$_POST['slider3'];
$s4=$_POST['slider4'];
$s5=$_POST['slider5'];
$s6=$_POST['slider6'];

$off=0;
$edit = mysqli_query($database, "UPDATE `sliders` SET `slider1`='$s1',`slider2`='$s2',`slider3`='$s3',`slider4`='$s4',`slider5`='$s5',`slider6`='$s6',`on/off`='$off' WHERE id='0'");

if(!$edit)
{
    echo mysqli_error($database);
}
}
?>
