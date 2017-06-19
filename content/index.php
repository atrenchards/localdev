<html>
	<head></head>
	<body>
		<button id="button">Button</button>
		<div id="progress"></div>
		<script>
			
			function doStuff(){
				var startTime = new Date().getTime();
				console.log("happening");
				var xhr = new XMLHttpRequest();
				xhr.open("POST", "testScript.php", true);
				var length = null;
				var received = 0;
				xhr.onreadystatechange = function(){
					if(xhr.readyState == 2){
						length = xhr.getResponseHeader("Content-Length");
						console.log(length);
					}
					else if(xhr.readyState == 3){
						console.log(xhr.responseText.length);
						received = xhr.responseText.length;
						console.log(received);
						console.log(length);
						document.getElementById("progress").innerHTML = received/length + "%";
					}
				}
				xhr.send();
			}
			
			var button = document.getElementById("button");
			button.addEventListener("click", doStuff);
			
		</script>
	</body>
</html>