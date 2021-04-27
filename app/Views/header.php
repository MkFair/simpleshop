<link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css">
<script type="text/javascript" src="/static/js/jquery.js"></script>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
   <a class="navbar-brand" href="/">МАГАЗИН КУПОНОВ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Админ
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/index.php/admin/users/users">Покупатели</a>
          <a class="dropdown-item" href="/index.php/admin/users/sellers">Продавцы</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/index.php/admin/sitetypes">Категории</a>
          <a class="dropdown-item" href="/index.php/admin/coupons">Купоны</a>
          <a class="dropdown-item" href="/index.php/admin/shops">Магазины</a>
        </div>
      </li>
      
    </ul>
    <li class="nav-item mr-2">
        <select onchange="window.location.href='/index.php/home/role/'+$(this).val()">
            <option value=0 <?=($user_info->role==0?"selected":"")?>>Нет роли</option>
            <option value=1 <?=($user_info->role==1?"selected":"")?>>Пользователь</option>
            <option value=2 <?=($user_info->role==2?"selected":"")?>>Продавец</option>
        </select>
      </li>
    
      <a href="/account" class="btn btn-outline-success my-2 my-sm-0" type="submit">Личный кабинет</a>
    
  </div>
    </div>
	</nav>
	
<div class="container"> 


