<div class="container">
<br><br><br>	
<div class="row">

		<div class="col-lg-5 m-auto">
			<div class="card ">
				<div class="card-body">
					<center><b>Авторизация </b></center>
					<br>

					    <form onsubmit="return false;">

					    	<div class="form-group">
					    	<label>Email</label>
							<input type="email" class="form-control" name="email" required placeholder="name@example.com">
							 </div>

							 <div class="form-group">
							<label>Пароль</label>
							<input type="password" class="form-control" name="password" required>
							 </div>

							<center>	<button class="btn btn-primary">
							Авторизоваться
								<br> </button></center>	
					    </form>

				</div>
				
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">

$("button").click(function(){

$(".alert").remove();
		 var forms = $("form").serializeArray();
		 $.ajax({
        type: "POST",
        url: "/index.php/usergate/login_process",
        data: forms
    }).done(function( result )
        {

        	

        	if(result==""){
        		$("form").prepend("<div class='alert alert-danger' role='alert'>Неправильный логин или пароль</div>")

        	}else{ 
                var anw = JSON.parse(result);
                if(anw['status']=="ok") {
                    window.location.href="/index.php/account";
                } 
            }

		})
})
</script>
