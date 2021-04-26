

<?php //var_dump($coupons_by_interval); ?>

<div class="row">
      <div class="col-lg-12 mb-3">
        <div class="card">
          <div class="card-body">


<nav class="nav nav-tabs nav-pills nav-fill">
 
<a class="nav-item nav-link active" data-toggle="tab" href="#day">За день</a>
  <a class="nav-item nav-link" data-toggle="tab" href="#week">За неделю</a>
  <a class="nav-item nav-link" data-toggle="tab" href="#month">За месяц</a>

</nav>

<div class="tab-content mt-3" >


  <div class="tab-pane fade show active" id="day">
	<div><?//$coupons["last_day"]?></div>

<div class="col-lg-8">
    <table class="table table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Продавец</th>
      <th scope="col">Покупатель</th>
      <th scope="col">Кол. купонов</th>
      <th scope="col">Дата</th>
    </tr>
  </thead>
  <tbody>

<?php 
for ($i=1; $i<=10 ; $i++) { 
?>
    <tr>
      <th scope="row"> <?=$i; ?> </th>
      <td>Fanserials</td>
      <td>alisa@mail.ru</td>
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

 <div class="tab-pane fade show" id="week">
<div><?=$coupons["last_week"]?>2</div>
  </div>
 <div class="tab-pane fade show" id="month">
<div><?=$coupons["last_month"]?>3</div>
  </div>
</div>


        </div>
      </div>
</div></div>