<div class="container">
<br><br><br>	<div class="row">

		<div class="col-lg-5 m-auto">
			<div class="card ">
				<div class="card-body">
					<center><b>Регистрация </b></center>
					<br>

					<ul class="nav nav-tabs">
						  <li class="nav-item">
						    <a class="nav-link active" data-toggle="tab" href="#seller" >Продавец</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" data-toggle="tab" href="#client">Покупатель</a>
						  </li>
					</ul>
					<div class="tab-content">
						<br>
					  <div class="tab-pane fade show active" id="seller">
					    <form onsubmit="log();return false;">
					    	<label>ФИО</label>
					    	<input type="text" class="form-control" name="fio" required=""><br>
					    	<label>Email</label>
							<input type="email" class="form-control" name="email" required placeholder="name@example.com"><br>
							<label>Пароль</label>
							<input type="password" class="form-control" name="password" required><br>
							<label>Адрес сайта</label>
							<input type="text" class="form-control" name="site_url" required><br>
							<label>Описание сайта</label>
							<textarea class="form-control" name="site_type" required></textarea><br>
							<label>Деятельность</label>
							<input type="text" class="form-control" name="services" required><br>
							<center><button class="btn btn-primary ">
							Зарегистрироваться
								<br> </button></center>	
					    </form>
					  </div>
					  <div class="tab-pane fade" id="client">
					   	<form onsubmit="log();return false;">
					    	<label>ФИО</label>
					    	<input type="text" class="form-control" name="fio" required><br>
					    	<label>Email</label>
							<input type="email" class="form-control" name="email" required placeholder="name@example.com"><br>
							<label>Пароль</label>
							<input type="password" class="form-control" name="password" required><br>

							<center><button class="btn btn-primary ">
							Зарегистрироваться
								<br> </button></center>	
					    </form>
					  </div>
					</div>

				
				</div>
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function log() {
		 var forms = $("form").serialize();
		 $.ajax({
        type: "POST",
        url: "log.php",
        data: {inp:forms}
    }).done(function( result )
        {
	})
	}
</script>