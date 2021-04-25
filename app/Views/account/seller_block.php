<div class="col-lg-6">

	<h5 class="card-title">Данные по сайту</h5>
	
   <label>Адрес сайта</label>
   <span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
	<input type="text" class="form-control" disabled value="<?=$user_info->fio?>"> <br>
	</span>
	<label>Деятельность</label>
	<span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
	<input type="text" class="form-control" disabled value="<?=$user_info->password?>"><br>
	</span>
	<label>Описание</label>
	<span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
	<textarea type="email" disabled class="form-control" ><?=$user_info->email?></textarea><br></span>

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
    <tr>
      <th scope="row">1</th>
      <td>Сменить масло</td>
      <td>2</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Поменять подвеску</td>
      <td>25</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Помыть машину</td>
      <td>4</td>
    </tr>
  </tbody>
</table>
 	</div> </div>
  </div>
    </div>
