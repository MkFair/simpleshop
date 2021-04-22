<div class="container">
<br><br><br>	
<div class="row">

		<div class="col-lg-5 m-auto">
			<div class="card ">
				<div class="card-body">
					<center><b>Авторизация </b></center>
					<br>

					    <form onsubmit="log();return false;">
					    	<label>Email</label>
							<input type="email" class="form-control" name="email" required placeholder="name@example.com"><br>
							<label>Пароль</label>
							<input type="password" class="form-control" name="password" required><br>
							<center>	<button class="btn btn-primary">
							Авторизоваться
								<br> </button></center>	
					    </form>

				</div>
				
			</div>
		</div>
	</div>
</div>
/index.php/usergate/login_process
пустой результ - ошибка
["status"=>"ok"] - пересыл на /index.php/account
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
