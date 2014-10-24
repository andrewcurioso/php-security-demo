<?php
$title = 'Passwords';

ob_start();
?>

<h1>Passwords</h1>
<p class="lead">
  What happens if you get ahold of a user password database? You can figure out the actual passwords using
  a number of methods.
</p>

<h2>Step 1</h2>

<p>
  Figure out what hash is used. If you have an account on the server you stole the password from
  this is easy. Just hash your own password with the various schemes. Try <code>MD5</code> and <code>SHA1</code> and move on from there.
</p>

<h2>Step 2</h2>

<p>
  If it is a common hash (such as MD5), try a rainbox table!
</p>

<h2>Step 2</h2>

<p>
  If the hash is something more exotic, try a dictionary attack.<br>
  There are dictionaries that will try sentences, numbers, and 1337 speak so those clever users that replaced the <code>O</code> in <code>passw0rd</code> are no match.
</p>

<h2>Step 3</h2>

<p>
  If that doesn't work, try brute force. 
</p>

<h2>Problem 1</h2>

<p>
  If the website uses a salt they probably store it with the password like this:
  <code>5f4dcc3b5aa765d61d8327deb882cf99:some_salt</code>.<br>
  And if they are good the salt will be unique to each user. So you're only choice is to
  loop brute force every one.
</p>

<h2>Problem 2</h2>

<p>
  If the website uses a salt and pepper you better hope that you have the pepper.
  Otherwise your best bet is to take a known password (such as your own) and try to figure out
  the pepper with brute force.
</p>




<?php
include('template.php');

