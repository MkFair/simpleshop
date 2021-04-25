<div class="col-lg-6">
	<h5 class="card-title">Последние покупки</h5>
    <table class="table table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Компания</th>
      <th scope="col">Кол. купонов</th>
      <th scope="col">Дата</th>
    </tr>
  </thead>
  <tbody>

<?php 
for ($i=1; $i<=20 ; $i++) { 
?>
    <tr>
      <th scope="row"> <?=$i; ?> </th>
      <td>Fanserials</td>
      <td class="text-center">15</td>
      <td>25.04.2021</td>
    </tr>

<?php
}
?>


  </tbody>
</table>
</div>