<!DOCTYPE html>
<?php
include('../Shared/LayoutTop.php');
?>
  <CENTER>
<!-- CONTENT ----------------------------------------------------------------------------->
<div class="container" style="margin-top:30px;">

  <!----------------------------------------------------------------------------------------->

 
<div class="container container-menu bg-dark shadow p-3 mb-5" id="search">
  <h4>S&oslashg i menuen: </h4>

<form action="" method="post">
<input type="text" name="search" class="search-txt">
  <button class="btn-search" type="submit" name="submit"><i class="fa fa-search"></i></button>
</form>

  <br>
  

  <? 
 
$search_value = $_POST["search"];
    if($search_value != null){
$sql = "SELECT *  FROM `MPS-menu` WHERE `description` LIKE '%$search_value%'";
$result = $conn->query($sql);

echo "
	<hr>
    <h2>Menuer indeholdende: " .$search_value. "</h2>
    <table class='table-responsive' id='shsteak'>
      ";
    
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $price_alm = $row["price_alm"];
          			$price_fam = $price_alm * 2;
            echo "
            <tr>
            	<td align='left' class='title'><h3>"
              		.$row["nr"].". ".$row["title"].
                "</h3></td>
            </tr>
            <tr>
            <td class='description'>"
              .$row["description"]
              ."</td>
            </tr>
            <tr>
              <td class='price'>"
              	.$row["price_alm"].",- "
              ."</td>
            </tr>";
  }
} else {
  echo "0 results";
}
    ?>
    </table>
    <?php
$conn->close();
    }
?>
      
    
  </div><!--END Search------------------------------------------------------------------------------------>
    <br/>
    <br/>
  <!----------------------------------------------------------------------------------------->
 </div> <!--END container-->
    <?php
include('../Shared/LayoutBottom.php');
?>