<?php 
   $resultsP = getAllPaarden($conn);
   $resultsB = getAllBezoekers($conn);
?>

<h1 class="text-center"> Reserveren</h1>
<form name ="create" method= "post" action="<?=URL?>/home/reserveer">


Welk paard wil je reserveren?
<select name="nameP">
<? foreach($resultsP as $paarden) { ?>
     <option value="<?= $paarden['name'] ?>" required><?= $paarden['name'] ?></option>
     <? } ?>
</select>

Welke bezoeker gaat met het paar rijden?
<select name="nameB">
<? foreach($resultsB as $bezoekers) { ?>
     <option value="<?= $bezoekers['name'] ?>" required><?= $bezoekers['name']?> </option>
     <? } ?>
</select>

Hoeveel ritjes wilt u?<input type= "number" name="ritjes">
     
<input type="submit">

</form>

