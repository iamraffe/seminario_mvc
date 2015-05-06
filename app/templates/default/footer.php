
</div> <!-- ./container -->

	<footer>
		<div class="container">
			<div class="row">
				<?php echo \core\language::show('footer', LANGUAGE_INDEX, \helpers\cookie::get('language')) ?>
			</div>
		</div>
	</footer>
<!-- JS -->
<?php
	helpers\assets::js(array(
		'//code.jquery.com/jquery-1.11.2.min.js',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', 
		'//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js',
		'//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js'
	)) ;

	echo $data['js'];
?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-62580041-1', 'auto');
      ga('send', 'pageview');
      /*  function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
            }
            return "";
        }

        function checkCookie() {
            var language = getCookie("language");
            if (language != "") {
                //alert("Welcome again " + user);
                setCookie("language", "es", 365);
            } else {
                if (user != "" && user != null) {
                    setCookie("username", user, 365);
                }
            }
        }*/
    </script>
</body>
</html>
