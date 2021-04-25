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
					    <form >

					    	<div class="form-group">
					    	<label>ФИО</label>
					    	<input type="text" class="form-control" name="fio" required="">
					    	 </div>

					    	<div class="form-group">
					    	<label>Email</label>
							<input type="email" class="form-control" name="email" required placeholder="name@example.com">
							 </div>

							<div class="form-group">
							<label>Пароль</label>
							<input type="password" class="form-control" name="password" required>
							 </div>

							<div class="form-group">
							<label>Адрес сайта</label>
							<input type="text" class="form-control" name="site_url" required>
							 </div>

							<div class="form-group">
							<label>Описание сайта</label>
							<textarea class="form-control" name="site_type" required></textarea>
                             </div>
                            <div class="form-group">
                                <select>
                                <?php 
                                if($types){
                                    foreach($types as $type){?>
                                        <option value="<?=$type["id"]?>"><?=$type["name"]?></option>
                                <?php }} ?>
                                </select>
                            </div>
                            

                            <div class="form-group">
							<label>Деятельность</label>
							<input type="text" class="form-control" name="services" required>
							 </div>


							<center><button class="btn btn-primary ">
							Зарегистрироваться
								<br> </button></center>	
					    </form>
					  </div>
					  <div class="tab-pane fade" id="client">
					   	<form >

					   		<div class="form-group">
					    	<label>ФИО</label>
					    	<input type="text" class="form-control" name="fio" required>
					    	 </div>

					    	<div class="form-group">
					    	<label>Email</label>
							<input type="email" class="form-control" name="email" required placeholder="name@example.com">
							 </div>
							<div class="form-group">
							<label>Пароль</label>
							<input type="password" class="form-control" name="password" required>
							 </div>
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
/index.php/usergate/<method>
method seller_reg и buyer_reg
["status"=>"ok"] - показывать сообщение о успехе реги и просьбе подтвердить почту - уже отправлено
["status"=>"error","errorlist"=>AssocArray] возврат массива с именами полей и значением ошибки

<script type="text/javascript">

$("button").click(function(){
	var forms = $("form").serializeArray();
		 $.ajax({
        type: "POST",
        url: "log.php",
        data:forms
    }).done(function( result )
        {
        	
	})	
})


</script>
