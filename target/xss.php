<?php
$title = 'XSS';

ob_start();
?>

<h1>Cross Site Scripting</h1>
<p class="lead">
  If a website embeds your user input directly into the page without esacping it you can exploit that using a technique call XSS.
</p>

<p>
  Try putting some text in the form that includes HTML.
</p>

<form method="POST">
  <textarea name="content" style="display: block; width: 50%; height: 200px;"></textarea>
  <br>
  <input type="submit" value="Submit Content">
</form>

<div>
<?php
  if ( !empty($_POST['content']) ) 
   echo $_POST['content'];
?>
</div>

<?php
include('template.php');

