<?php

 ?>
 <p> Weet je zeker dat je <?= $id['name'] ?> wilt verwijderen?</p>
 <a href="<?= URL ?>/employee/index"><button>nee</button></a>
 <a href="<?= URL ?>/employee/destroy/<?= $id['id'] ?>"><button>ja</button></a>

