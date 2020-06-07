<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>/student/updateB">

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>Adres</td>
				<td><input type="text" name="adres" value=<?php echo $adres;?>></td>
			</tr>
            <tr>
				<td>telefoonnummer</td>
				<td><input type="text" name="telefoonnummer" value=<?php echo $telefoonnummer;?>></td>
			</tr>
            <tr>
				<td>identificatienummer</td>
				<td><input type="number" name="identificatienummer" value=<?php echo $identificatienummer;?>></td>
			</tr>

	    <input type="hidden" name="id" value="<?=$id["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
    	<td><input type="submit" name="update" value="Update"></td>
	</form>