<?php var_dump($users); ?>
<div class="col-lg-6">
	<h5 class="card-title">Список продавцов</h5>
    <table class="table table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Компания</th>
      <th scope="col">Видимость</th>
    </tr>
  </thead>
  <tbody>

<?php 
for ($i=1; $i<=20 ; $i++) { 
?>
    <tr>
      <th scope="row"> <?=$i; ?> </th>
      <td><a>Fanserials</a></td>
      <td class="text-center">♥</td>
    </tr>

<?php
}
?>


  </tbody>
</table>
</div>