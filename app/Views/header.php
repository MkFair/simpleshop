<link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css">
<script type="text/javascript" src="/static/js/jquery.js"></script>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
   <a class="navbar-brand" href="#">МАГАЗИН КУПОНОВ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Главная <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Аккаунт</a>
      </li>
      <li class="nav-item">
        <select onchange="window.location.href='/index.php/home/role/'+$(this).val()">
            <option value=0 <?=($user_info->role==0?"selected":"")?>>Нет роли</option>
            <option value=1 <?=($user_info->role==1?"selected":"")?>>Пользователь</option>
            <option value=2 <?=($user_info->role==2?"selected":"")?>>Продавец</option>
        </select>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Личный кабинет</button>
    </form>
  </div>
    </div>
	</nav>
	
<div class="container"> 


