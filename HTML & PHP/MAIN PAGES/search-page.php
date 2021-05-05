<?php
	$pgNm = 'Search';
  $pgFileNm = 'search-page.php';
	include('../header_main_ASADO.php');
?>
<link rel="stylesheet" type="text/css" href="../../CSS/lightbox.min.css">
<div class="content"></div>	


<!--search bar-->
<div class= "container1"></div>
  

<div class="container"> 
  <!-- code for search result -->
   <div class="result">
    <div class="text">
      <!-- search result -->
    <?php
      
    ?>
   <!-- map result -->
   <div class="mapResult">
      <a href="../../images/Search Page/Small-map.jpg" data-lightbox="TheMap"><img src="../../images/Search Page/map.jpg"></a>
   </div>
  </div>
 <div class="form"> 

  <!-- search bar -->
  <div class="search"> 
   <input type="text" class="searchInput" placeholder="Search"> 
   <div> 
    <button class="btn" type="submit"><i class="fas fa-search"></i></button> 
   </div> 
  </div> 
  <!--  dropdown list category and sort -->
  <div class="dropdown"> 
    <!-- dropdown list category name-->
   <div class="default-option" id=" filter">
     Category 
   </div> 
    <!-- dropdown list for category choices -->
   <div class="dropList"> 

    <ul> 
     <li><i class="fas fa-utensils">&nbsp;</i>Food and Beverage</li> 
     <li><i class="fas fa-pencil-ruler">&nbsp;</i>Stationery</li> 
     <li><i class="fas fa-laptop">&nbsp;</i>Internet Cafe</li> 
     <li><i class="fas fa-print">&nbsp;</i>Printing Services</li> 
    </ul>

   </div> 
  </div> 
  
  <div class="dropSort">
    <!-- dropdown list sort by name-->
   <div class="sort-option" id="sort">
     Sort by 
   </div> 
   <!-- dropdown list for sort by choices -->
   <div class="sortList"> 

    <ul>
      <li class="hover-me">Alphabetical <i class="fa fa-angle-right"></i>
    <!-- sub menu list alphabetical-->
    <div class="sub-menu">
       <ul>
         <li> A - Z</li>
         <li> Z - A </li>
       </ul>
     </div>

    </li>

    <li class="hover-me" >Proximity <i class="fa fa-angle-right"></i>
    <!-- sub menu list proximity-->
    <div class="sub-menu">
       <ul>
         <li> Nearest</li>
         <li> Farthest</li>
       </ul>
     </div>

      </li>
  
     <li class="hover-me" >Price <i class="fa fa-angle-right"></i>
      <!-- sub menu list price-->
      <div class="sub-menu">
       <ul>
         <li> Low - High</li>
         <li> High - Low </li>
       </ul>
     </div>

     </li> 
    
     <li class="hover-me"> Available Quantity
     </li>
     
     <li class="hover-me">Relevance/ Popularity

     </li> 
    </ul> 

   </div> 
  </div> 
</div>
<script type="text/javascript" src="../../JS/lightbox-plus-jquery.min.js"></script>
 <!-- end of search bar-->

  
   

<?php
	include('../footer_main_ASADO.php');
?>