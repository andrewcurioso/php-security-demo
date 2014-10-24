<?php
$title = 'File Inclusion Vulnerability';

ob_start();
?>

<h1>File Inclusion Vulnerability</h1>
<p class="lead">
  PHP <code>include</code> and <code>require</code> can be exploited to not only include
  but also run malicious content. This can happen any time either is used to include a
  file that was supplied by a user or has it's location specified by a user.
</p>
<p>
  Take this page for instance. It has a `file=` in the URL and inside the PHP it does this:
</p>
<pre>
  if ( !empty( $_GET['file'] ) )
    include($_GET['file']);
</pre>

<h2>Step 1</h1>

<p>Let's use this file to include the contents of step 2.</p>
<p>Click this link: <a href="/include.php?file=include-step2.php">/include.php?file=include-step2.php</a></p>

<?php
  if ( !empty( $_GET['file'] ) )
    include($_GET['file']);
?>


<?php
include('template.php');

