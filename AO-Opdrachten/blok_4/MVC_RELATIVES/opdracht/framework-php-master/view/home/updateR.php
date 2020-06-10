<h1 class="text-center">Reservering wijzigen</h1>
<?php 
  $resultsP = getAllPaarden($conn);
  $resultsB = getAllBezoekers($conn);
?>
	<form name="update" method="post" action="<?=URL?>home/updateR">

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
            <tr>
				<td>ritjes</td>
				<td><input type="number" name="ritjes" required value=<?php echo $ritjes;?>></td>
			</tr>
        
	    <input type="hidden" name="id" value="<?=$id["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
    	<td><input type="submit" name="update" value="Update"></td>
	</form>