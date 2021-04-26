<script type="text/javascript" src="/static/js/jquery.js"></script>

<script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
<script>
    $(function(){

    	if ($("#main_filter").lenght!=0) {
        $("#main_filter").change(function(){
            var type_id = $(this).val();
            window.location.href="/?type="+type_id;
        });

    	}
    })
</script>
</div>