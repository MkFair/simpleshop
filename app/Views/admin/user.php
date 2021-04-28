<?php //var_dump($user); ?>
<br>
 <div class="row"> 
    <div class="col-lg-6">
	<h5 class="card-title">Личные данные покупателя</h5>


<div class="form-group">
        <label>ФИО</label>
        <input type="text" class="form-control" name="fio" disabled required value="<?=$user->fio?>"> 
  </div>
<div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" required disabled placeholder="name@example.com" value="<?=$user->email?>">
  </div>
	</div>
    

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
  
    </div>

