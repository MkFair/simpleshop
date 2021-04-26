<div class="col-lg-6">

	<h5 class="card-title">Данные по сайту</h5>


<div class="form-group">
   <label>Адрес сайта</label>
   <span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
	<input type="text" class="form-control" disabled value="<?=$user_info->shop->url?>"> 
	</span>
</div>

<div class="form-group">
	<label>Деятельность</label>
	<span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
	<input type="text" class="form-control" disabled value="<?=$user_info->shop->type?>">
	</span>

</div>
<div class="form-group">
	<label>Описание</label>
	<span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
	<textarea type="email" disabled class="form-control" ><?=$user_info->shop->description?></textarea></span>
</div>
</div>
	

    <div class="col-lg-12">
        <div class="card">
  <div class="card-header">УСЛУГИ</div>
  <div class="card-body row">

  	 <div class="col-lg-6">
    <h5 class="card-title">Статистика</h5>
    <p class="card-text">Количество проданных купоново - 20 шт.</p>
 	</div>
 	  <div class="col-lg-6">
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
      if( $user_info->shop->services ){
          foreach( $user_info->shop->services as $k=>$service ){
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
