<?php
	$pgNm = 'Search';
  $pgFileNm = 'search-page.php';
	include('../header_main_ASADO.php');
?>

<link rel="stylesheet" type="text/css" href="../../CSS/map-expand.css">
<div class="content"></div>


<!--search bar-->
<div class= "container1"></div>
  

<div class="container"> 
  <!-- code for search result -->
   <div class="result">
    <div class="text">
      <!-- search result -->
      <?php
        include('../search_res.php');
      ?>

    </div>
      <!-- map result -->
      <div class="mapResult">
        <!--<br><br><br><br><br><br>-->
      <a href="../../IMAGES/Search Page/map-small.jpg" data-lightbox="TheMap"><img src="../../IMAGES/Search Page/map-orig.jpg"></a>
      </div>
  </div>

  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <div class="form"> 

  <!-- search bar -->
  <!--<form action="" method="POST">-->
    <div class="search"> 
        <input type="text" name="textInp" class="searchInput" placeholder="Search"> 
        <div> 
          <button class="btn" name="search" type="submit"><i class="fas fa-search"></i></button> 
        </div> 
    </div> 
<!--</form>-->

  <!--  dropdown list category and sort -->
  <div class="dropdown"> 
    <!-- dropdown list category name-->
   <div class="default-option" onclick="dropdownCategory()">Category</div> 
    <!-- dropdown list for choices -->
   <div class="dropList" id="category-filter"> 

    <ul> 
     <button type="submit" name="fd&bvr"><li><i class="fas fa-utensils">&nbsp;</i>Food and Beverage</li></button>
     <button type="submit" name="PS"><li><i class="fas fa-print">&nbsp;</i>Printing Services</li></button>
     <button type="submit" name="BookS"><li>Stationery</li></button>
    </ul>

   </div> 
  </div> 
  
  <div class="dropSort">
    <!-- dropdown list sort by name-->
   <div class="sort-option" onclick="sortBy()">Sort/Filter by</div> 
   <!-- dropdown list for sort by choices -->
   <div class="sortList" id="sort-filter"> 

    <ul>
      <li class="hover-me" name="alpha"> Alphabetical <i class="fa fa-angle-right"></i>
    <!-- sub menu list alphabetical-->
    <div class="sub-menu">
       <ul>
         <button type="submit" name="az"><li> A - Z </li></button>
         <button type="submit" name="za"><li> Z - A </li></button>
       </ul>
     </div>

    </li>
<!--
    <li class="hover-me" name="prox">Proximity <i class="fa fa-angle-right"></i>
    <!-sub menu list proximity->
    <div class="sub-menu">
       <ul>
         <li> Nearest</li>
         <li> Farthest</li>
       </ul>
     </div>

      </li> -->
        <button type="submit" name="servAvb"><li class="hover-me"> Service Availability </li></button>
        <button type="submit" name="quant"><li class="hover-me"> Item Quantity </li></button>
    </ul> 

   </div> 
  </div> 


</div>

</form>



<script src="../../JS/map-expand.js"></script>
<script src="../../JS/search-bar.js"></script>





 <!-- end of search bar-->

  
   

<?php
	include('../footer_main_ASADO.php');
?>