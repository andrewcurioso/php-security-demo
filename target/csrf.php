<?php
$title = 'CSRF';

ob_start();
?>

<h1>Cross Site Request Forgery</h1>
<p class="lead">
  Submitting a form on behalf of a user or including a page that executes an action.
</p>

<h2>Step 1</h2>

<p>
  If an action is performed on behalf of a user when they load a page using a HTTP <code>GET</code> request you can exploit it by include an <code>img</code>, <code>script</code>, or <code>iframe</code> on your page that includes the remote URL.
</p>
<p>
  If the URL contains their username or you may need to trick them into giving that to you. Unless it has social features like profiles in which case their user ID is probably easy to find.
</p>
<p>If you go to <a href="do-something-on-get.php?message=hello" target="_blank">do-something-on-get.php?message=hello</a> on this server it will write a new line to a file and print all the messages. Try create a page that includes this file in an image tag. If the user had any cookies, they will be passed on along with the request (including authentication). I already made a page for you: <a href="localhost:8081/csrf-get.php" target="blank">click here</a>.
</p>
<p>
  You won't be able to read the content of the page so if the target doesn't modify data on <code>GET</code> requests you need to move to step 2.
</p>

<h2>Step 2</h2>

<p>
  If the user only modifies data on <code>POST</code> (good for them!) you'll need to use a form. An dyou can submit it with Javascript.
</p>
<p>
  However, if they use a secret token you are out of luck.
</p>

<?php
include('template.php');

