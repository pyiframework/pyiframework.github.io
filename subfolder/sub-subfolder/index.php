
<?php
$rootPath = getenv('ROOT_PATH'); if ($rootPath == null) {$root = $_SERVER['DOCUMENT_ROOT'] . '/';} else { $path = explode('?', $_SERVER['REQUEST_URI']); $pathArray = explode('/', $path[0]);
unset($pathArray[0], $pathArray[1]); $howDeep = null; foreach ($pathArray as $pathCount) {$howDeep .= '../';} $root = dirname(__FILE__) . $howDeep; if ($howDeep == "../") {$root = null;} }
?>

<?php $path = $root; $path .= 'inc/doc.php'; include $path;?>

<!--
Pyi Framework Default - sample sub-subfolder page
v1.0.0
Last Updated: July 08 2015
Pyi Framework: http://pyiframework.github.io
Twitter: @PyiFramework
Author: Kevin Pybus - http://KevinPybus.com
Twitter: @KevinPybus
-->

<title>Yet Another Unique Page Title</title>

<!-- ADD ANY ADDITIONAL CSS OR JS REQUIRED FOR THIS PAGE HERE -->

<?php $path = $root; $path .= 'inc/header.php'; include $path;?>

<?php $path = $root; $path .= 'inc/top-nav.php'; include $path;?>

<!-- START PAGE CONTENT -->

<div class="wrap-main">
  <h1>We Must Go Deeper</h1>
  <p>This is a sub-subfolder page. It's just here as an example and you can delete it if you want.</p>
  <p>This code is exactly the same as the root (and subfolder) index.php.</p>
</div>

<!-- END PAGE CONTENT -->

<?php $path = $root; $path .= 'inc/footer.php'; include $path;?>

<?php $path = $root; $path .= 'inc/footer-scripts.php'; include $path;?>
