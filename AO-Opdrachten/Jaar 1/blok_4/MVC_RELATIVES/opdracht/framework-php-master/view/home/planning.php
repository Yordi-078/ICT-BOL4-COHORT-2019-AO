<?php 
   $resultsP = getAllPaarden($conn);
   $resultsB = getAllBezoekers($conn);
?>


<h1 class="text-center"> Reserveren</h1>
<form name ="create" method= "post" action="<?=URL?>/home/reserveer">

<ul>
<li>
Welk paard wil je reserveren?
<select name="nameP">
<? foreach($resultsP as $paarden) { ?>
     <option value="<?= $paarden['name'] ?>" required><?= $paarden['name'] ?></option>
     <? } ?>
</select>
</li>
<li>

Welke bezoeker gaat met het paar rijden?
<select name="nameB">
<? foreach($resultsB as $bezoekers) { ?>
     <option value="<?= $bezoekers['name'] ?>" required><?= $bezoekers['name']?> </option>
     <? } ?>
</select>
</li>
<li>
Hoeveel ritjes wilt u?<input type= "number" name="ritjes" required> 
</li> 
<input type="submit">
</ul>

<div class="card-header"  style="width: 18rem;">
<p>Elk ritje duurt 60 minuten.</p>
<p>Elk ritje kost 55 euro.</p>
</div>



</form>

