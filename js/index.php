<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My First Paragraph</p>

<p id="add"></p>

<p><button type="button" onclick="document.write(5 + 6)">Try it</button>

<script>
document.getElementById("add").innerHTML = 5 + 5;

console.log(5 + 6);
</script>

</body>
</html>
