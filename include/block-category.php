<div id="block-category">
<p class="header-title">������</p>

<ul>
<li><a id="index1" ><img src="/image/mobile-icon.png" id="mobile-images"/>��������</a>
<ul class="category-section">
<li><a href="view_cat.php?type=NugaBestTov"><strong>��� ������</strong></a></li>

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




<li><a id="index2" ><img src="/image/book-icon.png" id="book-images" />���������</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Accessories"><strong>��� ������</strong></a></li>
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





<li><a id="index3" ><img src="/image/mobile-iconn.png" id="prochee-images"/>������</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Prochee"><strong>��� ������</strong></a></li>
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