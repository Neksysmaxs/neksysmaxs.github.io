<div id="block-parameter"> <!-- Блок параметров поиск по цене  -->
<p class="header-title">Поиск по параметрам</p>
<p class="title-filter">Стоимость</p>
<form method="GET" action="search-filter.php">
<div id="block-input-price">
<ul>
<li><p>от</p></li>
<li><input type="text" id="start-price" name="start_price" value="1000" /></li>
<li><p>До</p></li>
<li><input type="text" id="end-price" name="end_price" value="30000" /></li>


</ul>
</div>
<!-- Блак для трек бара -->
<div id="blocktrackbar"></div>
<p class="title-filter">Производители</p>
<ul class="checkbox-brand">
<li><input type="checkbox" id="checkbrend1" /><label for="checkbrend1">Бренд 1</label></li>
<li><input type="checkbox" id="checkbrend2" /><label for="checkbrend2">Бренд 2</label></li>
<li><input type="checkbox" id="checkbrend3" /><label for="checkbrend3">Бренд 3</label></li>
</ul>
<input type="submit" name="submit" id="button-param-search" value=" " />






</form>


</div>