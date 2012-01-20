<?php

$nav = array('home', 'shop', 'contact');

?>

<ul class="nav">
	<? $i = 0; ?>
	<? foreach($nav as $n) : ?>
		<li class="<?=uri_string()==$n?"active":""?>"><a href="<?=base_url()?>index.php/<?=preg_replace("/ /", "_", $n)?>"><?=$n?></a></li>
		<? $i++; ?>
	<? endforeach; ?>
</ul>