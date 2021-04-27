
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
					    <form onsubmit="return false;" >

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
                                <label>Деятельность</label>
                                <select class="form-control" value="type">
                                <?php 
                                if($types){
                                    foreach($types as $type){?>
                                        <option value="<?=$type["id"]?>"><?=$type["name"]?></option>
                                <?php }} ?>
                                </select>
                            </div>
                            

                            <div class="form-group">
                                <label>Список услуг</label>
                                <input type="text" class="form-control mb-1" name="services[]" required>
                                <input type="text" class="form-control mb-1" name="services[]" required>
                                <input type="text" class="form-control mb-1" name="services[]" required>
                                <input type="text" class="form-control mb-1" name="services[]" required>
                                <input type="text" class="form-control" name="services[]" required>
                            </div>


							<center>
                                <button class="btn btn-primary " name="seller_reg">
                                Зарегистрироваться
                                </button>
                            </center>	
					    </form>
					  </div>
					  <div class="tab-pane fade" id="client">
					   	<form onsubmit="return false;" >

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
							<center><button class="btn btn-primary " name="buyer_reg">
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

$("button").click(function(){

	var forms = $(this).parents("form").serializeArray();
	var method_reg = $(this).attr("name");
		 $.ajax({
        type: "POST",
        url: "/index.php/usergate/"+method_reg+"",
        data:forms
    }).done(function( result )
        {
        	let anw = JSON.parse(result);

        	if(anw['status']=="ok") {
        		$(this).parents("form").append("<div class='alert alert-success'>Вы успешно зарегистрировались, просьба подтвердить почту уже отправлена</div>");
        		location.href("/index.php");
        	} 
        	if (anw['status']=="error") {
        		$("small").remove();
        		for (var feald in anw["errorlist"]) {
        			
        			$("[name="+feald+"]").parent().append("<small class='text-danger'>"+anw["errorlist"][feald]+"</small>");
        		}
        	}



	})	
})


</script>
