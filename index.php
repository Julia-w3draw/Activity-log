
<!DOCTYPE html>
	<html>
		<head>Saves the client activity log.</head>
		<body>
		
		</body>
		<script id='activity_log'>	
			function _geturl(url,params){				
				var retu="";       
				xmlhttp=new XMLHttpRequest();
				xmlhttp.open("GET",url,false);
				xmlhttp.send(); 
				if (xmlhttp.status!=200){_error(" _geturl(url) \nFile not found : " +url)}
				this.retu=xmlhttp.response;
				return this.retu;
			}
			
			function _server_log(){
				var _url='?'+'&code_name='+navigator.appCodeName+
				'&br='+navigator.appName+
				'&version='+navigator.appVersion+'&lang='+navigator.language+
				'&cookie='+navigator.cookieEnabled+
				'&platform='+navigator.platform+
				'&_X='+window.innerWidth+
				'&_Y='+window.innerHeight+
				'&_screen_w='+screen.width+
				'&_screen_h='+screen.height			
				var _logphp=_geturl("./LOG/log.php"+_url)
			}
		_server_log();
		</script>
	</html>
