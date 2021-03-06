<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>JS Bin</title>
</head>
<body>
  <style>
input::after {
  color:red;
  content: attr(data-myvaluename) '/' attr(max);
  position: relative;
  left: 100px; top: -15px;
}
</style>
This is an example of data-* attribute added by Javascript on the fly (the range input field does not have a data attribute in the html source code, it is added from JavaScript.<p>
  <p>The current value is displayed using a pseudo CSS element input::after and attr() to get the value. This example is a variation of <a href="http://www.htmlfivecan.com/#23">an example by Eric Bilderman</a>.</p> <p>Just move the cursor below... </p>
<input type="range" min="0" max="100" value="25">
<script>
var input = document.querySelector('input');
input.dataset.myvaluename = input.value; // Set an initial value.

input.addEventListener('change', function(e) {
  this.dataset.myvaluename = this.value;
});
</script>
</body>
</html>
