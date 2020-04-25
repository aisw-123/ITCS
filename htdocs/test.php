<html>
<head>
<title>
Python button script
</title>
</head>
<body>
<p id="demo"></p>
<script>
function myFunction() {
  $output = shell_exec("python new.py");
  var_dump($output);
}
</script>
<button onclick="myFunction()">Click me</button>
</body>
</html>