<div class="container container-menu bg-dark shadow p-3 mb-5" id="parma-pizza">
  <? 
 	$sql = "SELECT * FROM `MPS-menu-category` WHERE `id` = 7";
	$result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        echo "
    <h2 onclick='showHideParmaPizza()'>" .$row["category"]. "</h2>
    <table class='table-responsive' id='shparmapizza'>
      <tr>
        <td class='intro-text'>"
        	.$row["intro"].
      	"</td>
      </tr>
      ";
   }

    } else {
        echo "0 resultater";
    }
     

    $sql = "SELECT * FROM `MPS-menu` WHERE `category_fk` = 7";
	$result = $conn->query($sql);
  
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
              	."<strong><i>Alm. </i></strong>".$row["price_alm"].",- "
              	."<strong><i>Fam. </i></strong>".$price_fam.",- "
              ."</td>
            </tr>";
        }

    } else {
        echo "0 resultater";
    }
    
?>
      
    </table>
  </div><!--END Pizza------------------------------------------------------------------------------------>