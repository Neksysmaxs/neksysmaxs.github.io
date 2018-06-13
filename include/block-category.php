<div id="block-category">
<p class="header-title">Товары</p>

<ul>
<li><a id="index1" ><img src="/image/mobile-icon.png" id="mobile-images"/>Основное</a>
<ul class="category-section">
<li><a href="view_cat.php?type=NugaBestTov"><strong>Все модели</strong></a></li>

<?php
	
    $result = mysql_query("SELECT * FROM category WHERE type='NugaBestTov'",$link);
    
    if (mysql_num_rows($result) > 0)
 {
 $row = mysql_fetch_array($result);
 do
 {
    echo '
    
    <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    
    ';
    
  }  
  while ($row = mysql_fetch_array($result));  
  }  
    
?>

</ul>
</li>




<li><a id="index2" ><img src="/image/book-icon.png" id="book-images" />Аксесуары</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Accessories"><strong>Все модели</strong></a></li>
<?php
	
    $result = mysql_query("SELECT * FROM category WHERE type='Accessories'",$link);
    
    if (mysql_num_rows($result) > 0)
 {
 $row = mysql_fetch_array($result);
 do
 {
    echo '
    
    <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    
    ';
    
  }  
  while ($row = mysql_fetch_array($result));  
  }  
    
?>
</ul>
</li>





<li><a id="index3" ><img src="/image/mobile-iconn.png" id="prochee-images"/>Прочее</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Prochee"><strong>Все модели</strong></a></li>
<?php
	
    $result = mysql_query("SELECT * FROM category WHERE type='Prochee'",$link);
    
    if (mysql_num_rows($result) > 0)
 {
 $row = mysql_fetch_array($result);
 do
 {
    echo '
    
    <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    
    ';
    
  }  
  while ($row = mysql_fetch_array($result));  
  }  
    
?>

</ul>
</li>





</ul>






</div>