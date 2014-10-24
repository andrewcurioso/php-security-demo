<?php
$title = 'Clickjacking';

ob_start();
?>

<h1>Clickjacking</h1>
<p class="lead">
  Tricking a user to click on a link they shouldn't and possibly do an action like tweet a message.
</p>
<p>
  This page has a button on it that executes some Javascript:
</p>
<pre>
  &lt;button onclick="alert('hello')"&gt;Do Something!&lt;/button&gt;
</pre>
<p>Try it out here:</p>

<div>
  <button onclick="alert('hello')">Do Something!</button>
  <br><br>
</div>

<p>The attacker server has a page that includes this page in an Iframe at <a target="blank" href="http://localhost:8081/clickjack.php">http://localhost:8081/clickjack.php</a>


<?php
include('template.php');

