<div class="footer">
	<div class="footer-inner">
		 2022 &copy; Multidados TI.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
   $('.portlet-body').load('ajax.php?tabela=cliente');
   $("#caixasuperior").removeClass( "grey" ).addClass( "blue" );

    $(".more").click(function(){
        let tabela = $(this).data('tabela');
        $.ajax({
        type: 'GET',
        url: 'ajax.php?tabela='+tabela,
        error: function(e) {
            alert('erro');
        },
        success: function (data){

        if(tabela == 'cliente')
        {
            $("#caixasuperior").removeClass( "grey" ).addClass( "blue" );
            $("#caixasuperior").removeClass( "green" ).addClass( "blue" );
            $("#caixasuperior").removeClass( "purple" ).addClass( "blue" );
        }

        if(tabela == 'usuario')
        {
            $("#caixasuperior").removeClass( "grey" ).addClass( "green" );
            $("#caixasuperior").removeClass( "purple" ).addClass( "green" );
            $("#caixasuperior").removeClass( "blue" ).addClass( "green" );
        }

        if(tabela == 'fornecedor')
        {
            $("#caixasuperior").removeClass( "grey" ).addClass( "purple" );
            $("#caixasuperior").removeClass( "green" ).addClass( "purple" );
            $("#caixasuperior").removeClass( "blue" ).addClass( "purple" );
        }

          $('.portlet-body').html(data);
          
        }
		});
    });
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>