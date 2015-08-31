<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		onerror = errorHandler
		document.write("Welcome to this website")  // Deliberate(cố ý) error

		function errorHandler(message, url, line){
			out  = "Sorry, an error was encountered.\n\n";
			out += "Error: " + message + "\n";
			out += "URL: " + url + "\n";
			out += "Line: " + line + "\n";
			out += "Click to OK to continue.\n\n";
			alert(out);
			return true;
		}
	</script>
</head>
<body>

</body>

</html>