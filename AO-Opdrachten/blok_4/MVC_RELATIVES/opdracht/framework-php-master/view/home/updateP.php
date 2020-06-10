<h1 class="text-center">Paard wijzigen</h1>

	<form name="update" method="post" action="<?=URL?>home/updateP">


			<tr>
				<td>naam</td>
				<td><input type="text" name="name" required value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>leeftijd</td>
				<td><input type="number" name="leeftijd" required value=<?php echo $leeftijd?>></td>
			</tr>
            <tr>
				<td>ras</td>
				<td><input type="text" name="ras" required value=<?php echo $ras;?>></td>
			</tr>
            <tr>
				<td>springsport</td>
				<td><input type="number" name="lengte" required value=<?php echo $lengte;?>></td>
			</tr>

	    <input type="hidden" name="id" value="<?=$id["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
    	<td><input type="submit" name="update" value="Update"></td>
	</form>