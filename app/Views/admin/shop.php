<div class="row">
    <div class="col-lg-6">

	<h5 class="card-title">Данные по сайту</h5>

<form method=post>
<div class="form-group">
   <label>Адрес сайта</label>
   <span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
	<input type="text" class="form-control" value="<?=$shop->url?>"> 
	</span>
</div>

<div class="form-group">
	<label>Деятельность</label>
	<span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
	<input type="text" class="form-control" value="<?=$shop->type?>">
	</span>

</div>
<div class="form-group">
	<label>Описание</label>
	<span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
	<textarea type="email" class="form-control" ><?=$shop->description?></textarea></span>
</div>
<button class="btn btn-primary">Сохранить</button>
</form>
</div>
	

    <div class="col-lg-6">
        <div class="card">
  <div class="card-header">УСЛУГИ</div>
  <div class="card-body row">

  	 <div class="col-lg-12">
    <h5 class="card-title">Статистика</h5>
    <p class="card-text">Количество проданных купоново - 20 шт.</p>
 	</div>
 	  <div class="col-lg-12 mt-3">
    <h5 class="card-title">Список услуг</h5>
    <table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Услуга</th>
      <th scope="col">Кол. купонов</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( $shop->services ){
          foreach( $shop->services as $k=>$service ){
    ?>
    <tr>
      <th scope="row"><?=$k+1?></th>
      <td><?=$service["title"]?></td>
      <td><?=$service["price"]?></td>
    </tr>
    <?php } }?>
  </tbody>
</table>
 	</div> </div>
  </div>
    </div>

</div>
