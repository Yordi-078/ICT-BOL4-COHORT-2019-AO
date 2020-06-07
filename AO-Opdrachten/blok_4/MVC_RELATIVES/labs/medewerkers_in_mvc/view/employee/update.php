	
	<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>/employee/update">

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="number" name="age" value=<?php echo $age;?>></td>
			</tr>

	    <input type="hidden" name="id" value="<?=$id["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
    	<td><input type="submit" name="update" value="Update"></td>
	</form>