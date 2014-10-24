<script>
function now() {
  var msg = document.getElementById('in').value;
  document.getElementById('out').innerHTML='<img src="http://localhost:8080/do-something-on-get.php?message='+msg+'">';
}
</script>

<input type="text" id="in"> <input type="button" onclick="now()" value="go">

<div id="out">
</div>
