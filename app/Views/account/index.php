

<div class="card ">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#information">Личная информация</a>
      </li>
      <?php if(!empty($additional_tab_panel)){?>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#coupons">Мои купоны</a>
      </li>
      <?php } ?>
       
    </ul>
  </div>
  <div class="tab-content card-body" >
  <div class="tab-pane fade show active" id="information">

    <div class="row"> 
    <div class="col-lg-6">
	<h5 class="card-title">Редактирование личных данных</h5>
	<form method=post action="/index.php/account/update">
        <?php 
        if($error) echo"<div class='alert alert-danger alert-message'>$error</div>";
        if($success) echo"<div class='alert alert-success alert-message'>$success</div>";
        ?>
        <label>ФИО</label>
        <input type="text" class="form-control" name="fio" required value="<?=$user_info->fio?>"> <br>
        <label>Email</label>
        <input type="email" class="form-control" name="email" required placeholder="name@example.com" value="<?=$user_info->email?>"><br>
        <label>Пароль(отавить пустым если замена не требуется)</label>
        <input type="password" class="form-control" name="password" placeholder="******" value="<?=$user_info->password?>"><br>
        <button href="#" class="btn btn-primary">Сохранить</button>
	</form>
	</div>
    
  <?=$additional_block?>
  
    </div>
</div>


<?=$additional_tab_panel?>

</div>



  </div>
  
  
</div>










<!--
<?$user_info->fio?>
<?$user_info->email?>
<?$user_info->password?>
-->
