
<?php
$rootPath = getenv('ROOT_PATH'); if ($rootPath == null) {$root = $_SERVER['DOCUMENT_ROOT'] . '/';} else { $path = explode('?', $_SERVER['REQUEST_URI']); $pathArray = explode('/', $path[0]);
unset($pathArray[0], $pathArray[1]); $howDeep = null; foreach ($pathArray as $pathCount) {$howDeep .= '../';} $root = dirname(__FILE__) . $howDeep; if ($howDeep == "../") {$root = null;} }
?>

<?php $path = $root; $path .= 'inc/doc.php'; include $path;?>

<!--
Pyi Framework Default - sample root home page
v1.0.0
Last Updated: July 08 2015
Pyi Framework: http://pyiframework.github.io
Twitter: @PyiFramework
Author: Kevin Pybus - http://KevinPybus.com
Twitter: @KevinPybus
-->

<title>Unique Page Title</title>

<!-- ADD ANY ADDITIONAL CSS OR JS REQUIRED FOR THIS PAGE HERE -->

<?php $path = $root; $path .= 'inc/header.php'; include $path;?>

<?php $path = $root; $path .= 'inc/top-nav.php'; include $path;?>

<!-- START PAGE CONTENT -->

<div class="wrap-main">
  <h1>Hello, World!</h1>
  <p>This is the Pyi Framework (pronounced Pi, as in 3.14 Pi). The Pyi Framework is open source, simple, and fast.</p>
  <p>Pyi lets you create and edit multiple pages of a website by editing just one file, or an easy to control set of files. No more tedious updates or repeated code, and no more clunky CMS when you just need something simple and lightweight.</p>
  <p>Read more about the Pyi Framework in the <a href="<?php echo $sf . '/docs/'; ?>">Documentation</a>.</p>
</div>

<!-- END PAGE CONTENT -->

<?php $path = $root; $path .= 'inc/footer.php'; include $path;?>

<?php $path = $root; $path .= 'inc/footer-scripts.php'; include $path;?>
