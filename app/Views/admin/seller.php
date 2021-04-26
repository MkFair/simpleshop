<?php var_dump($user); ?>
<div class="card ">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#information">Личная информация</a>
      </li>
       
    </ul>
  </div>
  <div class="tab-content card-body" >
  <div class="tab-pane fade show active" id="information">

    <div class="row"> 
    <div class="col-lg-6">
	<h5 class="card-title">Личные данные продавца</h5>
	<form method=post >
<div class="form-group">
        <label>ФИО</label>
        <input type="text" class="form-control" name="fio" disabled value="<?=$user_info->fio?>"> 
  </div>
<div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" disabled placeholder="name@example.com" value="<?=$user_info->email?>">
  </div>

	</form>
	</div>
    
  <div class="col-lg-6">

	<h5 class="card-title">Данные по сайту</h5>

	<form>
<div class="form-group">
   <label>Адрес сайта</label>

	<input type="text" class="form-control" disabled value="<?=$user_info->shop->url?>"> 

</div>

<div class="form-group">
	<label>Деятельность</label>

	<input type="text" class="form-control" disabled value="<?=$user_info->shop->type?>">


</div>
<div class="form-group">
	<label>Описание</label>
	<textarea type="email" disabled class="form-control" ><?=$user_info->shop->description?></textarea>
</div>
<button class="btn btn-primary"> Изменить </button>
</form>
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
    <h5 class="card-title">Список услуг продавца</h5>
<form>
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
      <td><input type="text" class="form-control" name="" value="<?=$service["title"]?>"></td>
      <td><input type="text" class="form-control" name="" value="<?=$service["price"]?>"></td>
    </tr>
    <?php } }?>
<button class="btn btn-primary"> Изменить </button>


  </tbody>
</table>
</form>
 	</div> </div>
  </div>
    </div>

  
    </div>
</div>


</div>



  </div>
  
  


