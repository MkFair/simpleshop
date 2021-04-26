
<div class="row mt-4">
	<div class="col-lg-12 m-auto">
				<div class="card ">
	<div class="card-body">

<div class="row">
<div class="col-lg-5">

	<form action="/admin/sitetypes/add" method=post>
		
		<div class="form-group ">
			<label>Добавить новую категорию</label>
		    <input class="form-control" type="text" name="newtype" >
			</div>
		    <button class="btn btn-primary">Сохранить</button>
			
	</form>

</div>
<div class="col-lg-7">
	<h5 class="card-title">Категории</h5>
    <table class="table table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Наименование</th>
      <th scope="col">Удалить</th>
    </tr>
  </thead>
  <tbody>

<?php 
if($types){
	$i=1;
    foreach($types as $type){
?>
    <tr>
      <th scope="row"> <?=$i; ?> </th>
      <td> <?php echo "{$type["name"]}"?></td>
      <td > <?php echo "<a href='/admin/sitetypes/delete?id={$type["id"]}'>Удалить</a><br>"; ?> </td>
    </tr>

<?php
$i+=1;
}
}
?>


  </tbody>
</table>
</div>
</div>

	</div></div>

	</div>
</div>

<?php 
//if($types){
   // foreach($types as $type){
      // echo" {$type["name"]} <a href='/admin/sitetypes/delete?id={$type["id"]}'>Удалить</a><br>";
    //}
//}
?>
