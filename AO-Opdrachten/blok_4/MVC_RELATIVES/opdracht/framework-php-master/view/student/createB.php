<h1 class="text-center"> voeg een bezoeker toe</h1>
<form name ="create" method= "post" action="<?=URL?>/student/storeB">
naam:<input type= "text" class="form-control" name="name"required>
adres:<input type= "text" class="form-control" name="adres"required>
telefoonnummer:<input type= "text" class="form-control"  name="telefoonnummer"required>
identificatienummer:<input type= "number" class="form-control" name="identificatienummer" required>

<input class="btn btn-primary" type="submit">

</form>