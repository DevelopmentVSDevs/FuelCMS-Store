<?php

$nav = array('home', 'shop', 'contact');

?>

<div class="navigation">
	<ul>
		<? $i = 0; ?>
		<? foreach($nav as $n) : ?>
			<li class="<?=$i%2?"even":""?> <?=uri_string()==$n?"active":""?>"><a href="<?=base_url()?>index.php/<?=preg_replace("/ /", "_", $n)?>"><?=$n?></a></li>
			<? $i++; ?>
		<? endforeach; ?>
	</ul>
</div>