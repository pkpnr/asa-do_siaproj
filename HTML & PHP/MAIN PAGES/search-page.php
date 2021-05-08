<?php
	$pgNm = 'Search';
  $pgFileNm = 'search-page.php';
	include('../header_main_ASADO.php');
?>
<link rel="stylesheet" type="text/css" href="../../CSS/lightbox.min.css">
<script type="text/javascript" src="../../JS/lightbox-plus-jquery.min.js"></script>
<div class="content"></div>	


<!--search bar-->

		<div class="container">
	 
    <!-- code for search result -->
     <div class="result">
      <div class="text">
        <!-- search result -->
        <h3 id="text">this is goona be the search page but i dont know how to place all the codes so... yeah</h3>
     </div>
     <!-- map result -->
     <div class="mapResult">
        <a href="../../images/Search Page/Small-map.jpg" data-lightbox="TheMap"><img src="../../images/Search Page/map.jpg"></a>
      </div>
    </div>
  </div>
  

   <div class="form"> 

    <!-- search bar -->
    <div class="search"> 
     <input type="text" class="search-input" placeholder="Search"> 
     <div> 
      <div class="search-button" type="submit"><i class="fas fa-search"></i></div> 
     </div> 
    </div> 
    <!--  dropdown list category and sort -->
    <div class="dropdown"> 

      <!-- dropdown list category name-->
     <div class="default-option"  onclick="dropdownCategory()">Category</div> 

      <!-- dropdown list for category choices -->
     <div class="category-list" id="category-filter"> 

      <ul> 
       <li id ="food-beverage"><i class="fas fa-utensils">&nbsp;</i>Food & Beverage</li> 
       <li id = "Stationery"><i class="fas fa-pencil-ruler">&nbsp;</i>Stationery</li> 
       <li id ="InternetCafe"><i class="fas fa-laptop">&nbsp;</i>Internet Cafe</li> 
       <li id ="printing"><i class="fas fa-print">&nbsp;</i>Printing Services</li> 
      </ul>

     </div> 
    </div> 
  
    
    <div class="dropdown-sort">
      <!-- dropdown list sort by name-->
     <div class="sort-option" id="sort" onclick="sortBy()"> Sort by </div> 
     <!-- dropdown list for sort by choices -->
     <div class="sort-list" id="sort-filter"> 

      <ul>
        <li class="submenu" onclick="subMenu()">Alphabetical <i class="fa fa-angle-right"></i>
      <!-- sub menu list alphabetical-->
      <div class="sub-menu">
         <ul>
           <li onclick ="mess()" id="mess"> A - Z </li>
           <li onclick ="mess()"> Z - A </li>
         </ul>
       </div>
     </li>
    
      <li class="submenu" onclick="subMenu()">Proximity <i class="fa fa-angle-right"></i>
      <!-- sub menu list proximity-->
      <div class="sub-menu">
         <ul>
           <li> Nearest</li>
           <li> Farthest</li>
         </ul>
       </div>
      </li>
       <li class="submenu"> Available Quantity
       </li>
      </ul> 

     </div> 
    </div> 

</div>

  
<script type="text/javascript" src="../../JS/search bar.js"></script>

<?php
	include('../footer_main_ASADO.php');
?>