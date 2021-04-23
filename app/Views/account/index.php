

<div class="card ">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#information">Личная информация</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#coupons">Мои купоны</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#coupons"></a>
      </li>
    </ul>
  </div>
  <div class="tab-content card-body" >
  <div class="tab-pane fade show active" id="information">

    <div class="row"> 
    <div class="col-lg-6">
	<h5 class="card-title">Редактирование личных данных</h5>
	<form>
   	<label>ФИО</label>
	<input type="text" class="form-control" name="fio" required value="<?=$user_info->fio?>"> <br>
	<label>Email</label>
	<input type="email" class="form-control" name="email" required placeholder="name@example.com" value="<?=$user_info->email?>"><br>
	<label>Пароль</label>
	<input type="password" class="form-control" name="password" required value="<?=$user_info->password?>"><br>
	<button href="#" class="btn btn-primary">Сохранить</button>
	</form>
	</div>
    
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
	</div>

<br>
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
<div class="tab-pane fade" id="coupons">

<div class="card border-0">
  <div class="card-body px-0">
    <h6 class="card-title">Фильтр</h6>


		<select class="custom-select d-inline-block col-lg-3 border-primary text-primary">
		  <option selected>По дате покупки</option>
		  <option value="1">Шиномонтаж</option>
		  <option value="2">Атрибутика</option>
		  <option value="3">Сладости</option>
		</select>



  </div>
</div>




<div class="row">
  <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Северный Шиномонтаж </h5>
        <p class="card-text">Кол. приобретённых купонов - 7</p>
        <p class="card-text">Дата: 23.04.2021</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">FanSerials</h5>
        <p class="card-text">Кол. приобретённых купонов - 20</p>
        <p class="card-text">Дата: 05.04.2021</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Food Mall</h5>
        <p class="card-text">Кол. приобретённых купонов - 3</p>
        <p class="card-text">Дата: 12.03.2021</p>
      </div>
    </div>
  </div>
    <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Северный Шиномонтаж </h5>
        <p class="card-text">Кол. приобретённых купонов - 7</p>
        <p class="card-text">Дата: 23.04.2021</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">FanSerials</h5>
        <p class="card-text">Кол. приобретённых купонов - 20</p>
        <p class="card-text">Дата: 05.04.2021</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Food Mall</h5>
        <p class="card-text">Кол. приобретённых купонов - 3</p>
        <p class="card-text">Дата: 12.03.2021</p>
      </div>
    </div>
  </div>
    <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Северный Шиномонтаж </h5>
        <p class="card-text">Кол. приобретённых купонов - 7</p>
        <p class="card-text">Дата: 23.04.2021</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">FanSerials</h5>
        <p class="card-text">Кол. приобретённых купонов - 20</p>
        <p class="card-text">Дата: 05.04.2021</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Food Mall</h5>
        <p class="card-text">Кол. приобретённых купонов - 3</p>
        <p class="card-text">Дата: 12.03.2021</p>
      </div>
    </div>
  </div>
</div>
  </div>


</div>



  </div>
  
  
</div>










<!--
<?$user_info->fio?>
<?$user_info->email?>
<?$user_info->password?>
-->