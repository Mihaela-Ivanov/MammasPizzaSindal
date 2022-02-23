<!DOCTYPE html>
<?php
include('../Shared/LayoutTop.php');
?>
  <CENTER>
    <!-- CONTENT ----------------------------------------------------------------------------->
            <div>
   <h4><a href="http://www.mammaspizzasindal.dk/View/Menucard/Search.php"> S&oslashg i menuen </a></h4>
  </div>
<div class="container" style="margin-top:30px;">

  <!----------------------------------------------------------------------------------------->
    
<?php
  include('frokosttilbud.php');//1
  include('pizza.php');//2
  include('salatpizza.php');//3
  include('pommesfritespizza.php');//4
  include('mexicanapizza.php');//5
  include('indbagtpizza.php');//8
  include('halvindbagtpizza.php');//9
  include('dobbeltindbagtpizza.php');//10
  include('parmapizza.php');//7
  include('nachospizza.php');//6
  include('ekstratilbehor.php');//20
  include('bornemenu.php');//19
  include('pastaretter.php');//16
  include('specialretter.php');//18
  include('pitabrød.php');//13
  include('Burger.php');//15
  include('hjemmelavetsandwich.php');//12
  include('baguettesandwich.php');//11
  //include('durum.php');//14
  include('Steak.php');//17
  include('forretter.php');//21
  include('isdesserter.php');//22
  include('kaffe.php');//23
  include('spiritus.php');//24
  include('vin.php');//25
  include('drikkevarer.php');//26
?> 
<br/>
    <br/>
  <!----------------------------------------------------------------------------------------->
 </div> <!--END container-->

  <script href="js.js"></script>
<script>
  
  /*--- 1 ---*/
  function showHideFrokostTilbud() {
  var x = document.getElementById("shfrokosttilbud");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
 }
  /*--- 2 ---*/
  function showHidePizza() {
  var x = document.getElementById("shpizza");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
 }
    /*--- 3 ---*/
	function showHideSalatPizza() {
  var x = document.getElementById("shsalatpizza");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
 }
      /*--- 4 ---*/
 	 function showHidePommesFritesPizza() {
  var x = document.getElementById("shpommesfritespizza");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 5 ---*/
  function showHideMexicanaPizza() {
  var x = document.getElementById("shmexicanapizza");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 6 ---*/
	function showHideNachosPizza() {
  var x = document.getElementById("shnachospizza");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 7 ---*/
  function showHideParmaPizza() {
  var x = document.getElementById("shparmapizza");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 8 ---*/
	function showHideIndbagtPizza() {
  var x = document.getElementById("shindbagtpizza");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
 		/*--- 9 ---*/     
  function showHideHalvindbagtPizza() {
  var x = document.getElementById("shhalvindbagtpizza");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 10 ---*/
  function showHideDobbeltindbagtPizza() {
  var x = document.getElementById("shdobbeltindbagtpizza");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 11 ---*/
  function showHideBaguetteSandwich() {
  var x = document.getElementById("shbaguettesandwich");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 12 ---*/
  function showHideHjemmelavetSandwich() {
  var x = document.getElementById("shhjemmelavetsandwich");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 13 ---*/
  function showHidePitabrod() {
  var x = document.getElementById("shpitabrod");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 14 ---*/
  function showHideDurum() {
  var x = document.getElementById("shdurum");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*-- 15 ---*/
  function showHideBurger() {
  var x = document.getElementById("shburger");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
      /*--- 16 ---*/
  function showHidePastaretter() {
  var x = document.getElementById("shpastaretter");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
	/*--- 17 ---*/
  function showHideSteak() {
  var x = document.getElementById("shsteak");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  	/*--- 18 ---*/
  function showHideSpecialretter() {
  var x = document.getElementById("shspecialretter");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  	/*--- 19 ---*/
  function showHideBornemenu() {
  var x = document.getElementById("shbornemenu");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  	/*--- 20 ---*/
  function showHideEkstraTilbehor() {
  var x = document.getElementById("shekstratilbehor");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  	/*--- 21 ---*/
  function showHideForretter() {
  var x = document.getElementById("shforretter");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  	/*--- 22 ---*/
  function showHideIsdesserter() {
  var x = document.getElementById("shisdesserter");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  	/*--- 23 ---*/
  function showHideKaffe() {
  var x = document.getElementById("shkaffe");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  	/*--- 24 ---*/
  function showHideSpiritus() {
  var x = document.getElementById("shspiritus");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  	/*--- 25 ---*/
  function showHideVin() {
  var x = document.getElementById("shvin");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  	/*--- 26 ---*/
  function showHideDrikkevarer() {
  var x = document.getElementById("shdrikkevarer");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
    </script>

<?php
include('../Shared/LayoutBottom.php');
    $conn->close();
?>

    
</body>