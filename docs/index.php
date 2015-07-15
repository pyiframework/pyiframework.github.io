
<?php
$rootPath = getenv('ROOT_PATH'); if ($rootPath == null) {$root = $_SERVER['DOCUMENT_ROOT'] . '/';} else { $path = explode('?', $_SERVER['REQUEST_URI']); $pathArray = explode('/', $path[0]);
unset($pathArray[0], $pathArray[1]); $howDeep = null; foreach ($pathArray as $pathCount) {$howDeep .= '../';} $root = dirname(__FILE__) . $howDeep; if ($howDeep == "../") {$root = null;} }
?>

<?php $path = $root; $path .= 'inc/doc.php'; include $path;?>

<!--
Pyi Framework Default - documents
v1.0.0
Last Updated: July 08 2015
Pyi Framework: http://pyiframework.github.io
Twitter: @PyiFramework
Author: Kevin Pybus - http://KevinPybus.com
Twitter: @KevinPybus
-->

<title>Documentation</title>

<!-- ADD ANY ADDITIONAL CSS OR JS REQUIRED FOR THIS PAGE HERE -->

<?php $path = $root; $path .= 'inc/header.php'; include $path;?>

<?php $path = $root; $path .= 'inc/top-nav.php'; include $path;?>

<!-- START PAGE CONTENT -->

<div class="wrap-main">
  <h1>Pyi Framework</h1>
  <p>This is the Pyi Framework (pronounced Pi, as in 3.14 Pi). The Pyi Framework is open source, simple, and fast.</p>
  <p>Pyi lets you create and edit multiple pages of a website by editing just one file, or a set of files. No more tedious updates or repeated code, and no more clunky CMS when you just need something simple and lightweight.</p>
  <p>The Pyi Framework was created by Kevin Pybus.</p>

  <h1>Documentation</h1>
  <p>
    <ul>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#requirements">Server Requirements</a></li>
      <li><a href="#whatsincluded">What's Included</a></li>
      <li><a href="#installation">Installation</a></li>
      <li><a href="#customization">Customization</a></li>
      <li><a href="#subdirectory">Using Pyi In A Subdirectory Install</a></li>
    </ul>
  </p>


  <h1><a name="faq">FAQ</a></h1>

  <h2>What is The Pyi Framework?</h2>
  <p>Pyi divides the primary pieces of your website (like your header, footer, navigation, etc.) into their own files. You code them once and never worry about them again.</p>
  <p>Each of these segments are then combined into a single file and served to the browser. You can include these segments whenever you want and you can still customize every page's unique code separately.</p>

  <h2>What can I make with Pyi?</h2>
  <p>You can use Pyi to quickly create a brochure site, mock-up a prototype design, or make a full-fledged website.</p>
  <p>The Pyi Framework is great for developers who create brochure type sites, but don't want the bulk and complications of a full CMS.</p>

  <h2>Who is Pyi For?</h2>
  <p>Pyi is for developers who like to code websites by hand but still need a fast and easy way to create and edit their projects.</p>
  <p>Pyi is not a CMS, there's no automation or back-end. If you're not comfortable editing HTML, CSS, and PHP then the Pyi Framework probably isn't what you need.</p>

  <h2>What is Pyi made of?</h2>
  <p>The Pyi Framework uses HTML5, CSS3, and PHP. You can add anything else you want. Pyi is extremely flexible.</p>

  <h2>How does Pyi work?</h2>
  <p>Pyi divides a standard HTML page into segments (header, footer, navigation, etc.) and each segment goes into its own file. Pyi uses PHP to call these files and include them in your main HTML pages.</p>

  <h2>Couldn't I just do all this by hand?</h2>
  <p>Of course you could. The Pyi Framework is an out-of-box solution that saves a few hours and a few headaches. We've done all the hard work for you, including...<br />
    <ul>
      <li>custom scripts that make php includes work hassle-free across almost any setup and folder depth (even if your root directory is a subdirectory)</li>
      <li>custom .htaccess file that also does a few optional tricks</li>
      <li>custom css file that takes care of the basics, like resetting browser defaults and minimum styling.</li>
      <li>and more...</li>
    </ul>
  </p>

  <h1><a name="requirements">Server Requirements</a></h1>

  <p>Any server that runs PHP can run Pyi. Plain and simple.</p>
  <p>There are no databases so MySQL is not required.</p>

  <h1><a name="whatsincluded">What's included</a></h1>

  <p>Pyi comes with the following files..<br />
    <ul>
      <li>/docs/ - includes the documentation, delete if you want</li>
      <li>/img/ - for your images, Pyi logo included</li>
      <li>/css/ - comes with style.css, a minimum stylesheet ready for you to develop your way</li>
      <li>/subfolder/ - sample subfolder and index file</li>
      <li>/subfolder/sub-subfolder/ - sample sub-subfolder and index file</li>
      <li>/inc/ - the folder that holds all of your segments
        <ul>
          <li>doc.php - sets your DOCTYPE and starts the page</li>
          <li>header.php - sample header file</li>
          <li>top-nav.php - sample top navigation</li>
          <li>footer.php - sample footer file</li>
          <li>footer-scripts.php - to store all your js files that go before the closing body tag</li>
        </ul>
      </li>
      <li>index.php - sample main index page</li>
      <li>.htaccess -  custom .htaccess that ensures php includes work across all types of installs and folder depthis. It also has optional features to improve your site, like dropping the .php extension in the URL, or redirecting your www site to the non-www</li>
    </ul>
  </p>

    <h1><a name="installation">Installation</a></h1>

    <p>We recommend that you build your website in the root of your domain or subdomain. If not there will be a few extra steps when installing and using Pyi.
    <br />Plus, building a website in the subdirecty of a domain is not good practice.</p>
    <p style="margin-top:35px;"> </p>
    <p>There are two ways to install The Pyi Framework on your server.</p>
    <p>(1. upload the tar.bz2 file and unzip it using your file manager.</p>
    <p>(2. unzip the tar.bz2 file with a program like 7zip and then upload the files.</p>
    <p style="margin-top:35px;"> </p>
    <p>If you installed directly to your root domain or a subdomain you're good to go!</p>
    <p>If you installed the Pyi Framework inside a subdirectory (http://domain/subdirectory/) open .htaccess and define your subdirectory name after SetEnv ROOT_PATH (see the instructions provided inside the .htaccess).</p>

    <h1><a name="customization">Customization</a></h1>

    <h2>How do I edit files?</h2>
    <p>The example subfolders and sub-subfolders are for reference. You can delete them if you want.</p>
    <p>The main page of the Pyi Framework example website is index.php. Here you'll find the "body" or content of the page.</p>
    <p>Inside the /inc/ folder you'll find the segmented files that appear on every page like your header, footer, navigation, etc.</p>

    <h2>How do I add more segments?</h2>
    <p>Create your segment in a php file inside the /inc/ folder, then add the php include script where you want the file to be included. See the sample files for examples.</p>
    <p>For example, if you wanted to add navigation to the footer you would first create a file called footer-nav.php (or whatever you like) in /inc/ and add your navigation code inside.
    <br />Then inside the index.php file you add &#60;?php include $root . 'inc/footer-nav.php'; ?&#62; where you want it to actually appear.</p>

    <h1><a name="subdirectory">Using Pyi In A Subdirectory Install</a></h1>

    <p>* Building a website in a subdirectly is never a good idea. Treating a subdirectory as a root folder causes a lot of unexpected chaos with your links. But if you must, the Pyi Framework includes a way to do this. See below... *</p>
    <p style="margin-top:35px;"> </p>
    <p>First, make sure that you defined SetEnv ROOT_PATH inside the .htaccess file as described in the <a name="installation">installation instructions</a>.</p>
    <p>If you decided to install the Pyi Framework in a subdirectory you will have to always use absolute URL's -OR- add some extra code to new links that you create.</p>

    <h2>Images</h2>
    <p>To add images first upload them to your image folder (/img/).</p>
    <p>After it's uploaded you can use absolute URL's or define your link using &#60;?php echo $sf . '/img/yourimage.jpg'; ?&#62;. Make sure you use the "/" before the folder name.</p>
    <p>for example, to add an image to a page use &#60;img src="&#60;?php echo $sf . '/img/yourimage.jpg'; ?&#62;" /&#62;</p>

    <h2>Links</h2>
    <p>Like images, you can use absolute URL's or define your link using &#60;?php echo $sf . '/yourfolder/file.php'; ?&#62;. Make sure you use the "/" before the folder name.</p>
    <p>for example, to add a link to a page or navigation use &#60;a href="&#60;?php echo $sf . '/yourfolder/file.php'; ?&#62;"&#62;Your Link&#60;/a&#62;</p>

    <h2>External CSS Files</h2>
    <p>To link to external CSS files use absolute URL's or define your link using &#60;?php echo $sf . '/css/style.css'; ?&#62;. Make sure you use the "/" before the folder name.</p>
    <p>for example, to add a css file to the header use &#60;link href="&#60;?php echo $sf . '/css/style.css'; ?&#62;" rel="stylesheet" type="text/css"></p>

    <h2>External Javascript Files</h2>
    <p>To link to external javascript files use absolute URL's or define your link using &#60;?php echo $sf . '/myscripts.js'; ?&#62;. Make sure you use the "/" before the folder name.</p>
    <p>for example, to add a javascript file to the header or footer use &#60;script type="text/javascript" src="&#60;?php echo $sf . '/myscripts.js'; ?&#62;"&#62;&#60;/script&#62;</p>

    <h1>Thank You!</h1>

    <p>Thanks for using the Pyi Framework! If you have any questions or get stuck contact me through <a href="http://KevinPybus.com">KevinPybus.com</a></p>
    <p>This is a free open source project but I'm happy to offer some limited support for your individual needs when I can.</p>
    <p>I use The Pyi Framework on several of my own websites so it is under active development. New versions can be found at <a href="http://pyiframework.github.io">pyiframework.github.io</a></p>
    <p>Please feel free to fork it for your own projects or to improve Pyi.</p>
    <p style="margin-top:35px;"> </p>
    <p>Kevin Pybus</p>

</div>

<!-- END PAGE CONTENT -->

<?php $path = $root; $path .= 'inc/footer.php'; include $path;?>

<?php $path = $root; $path .= 'inc/footer-scripts.php'; include $path;?>
