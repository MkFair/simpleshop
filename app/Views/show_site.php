

<div class="row mt-3">
      <div class="col-lg-6 mb-3">
        <div class="card">
	          <div class="card-body">
	          	<a href="<?=$site->url?>"><h2><?=$site->url?> </h2></a>
	          	<br>
	          	<?=$site->description?>
			</div>
		</div>
</div>
<div class="col-lg-6 mb-3">
        <div class="card">
	          <div class="card-body">
	          	<h4>Услуги</h4>
	          	 <table class="table table-hover table-sm">
  <thead>
    <tr>
     <th scope="col">Наименование</th>
     <th scope="col">Цена в купонах</th>
    </tr>
  </thead>
  <tbody>

<?php 
for ($i=1; $i<=5 ; $i++) { 
?>
    <tr>
      <td>Мойка машины</td>
      <td>10</td>
    </tr>

<?php
}
?>
  </tbody>
</table>


<form method=post action="/index.php/buy">

	<div class="form-group">
	<label><b>Купить купоны на услуги магазина</b></label>
    <input class="form-control" type=number step=1 min=1 value=1 name="count" width="10">
    <input type=hidden name="site_id" value="<?=$site->id?>">
	</div>
    <button class="btn btn-primary">
        Купить
    </button>

</form>



	</div>
	</div>
</div>
</div>




