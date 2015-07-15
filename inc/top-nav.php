
<?php /*
NOTE: ########## SUBDIRECTORY INSTALL ##########

--- !!IMPORTANT!! ---

If the Pyi Framework is installed in a subdirectory (http://domain.com/subdirectory/) you MUST define the subdirectory in the .htaccess file. Look for SetEnv ROOT_PATH

Otherwise links WILL NOT WORK!

--- !!IMPORTANT!! ---

*/ ?>

<div class="wrap-top-nav">
  <span>This is an example top navigation bar. You can edit this file at /inc/top-nav.php</span><br />
  <a href="<?php echo $sf . '/'; ?>">Home</a><span> | </span>
  <a href="<?php echo $sf . '/subfolder/'; ?>">Subfolder</a><span> | </span>
  <a href="<?php echo $sf . '/subfolder/sub-subfolder/'; ?>">Sub-Subfolder</a><span> | </span>
  <a href="<?php echo $sf . '/docs/'; ?>">Documentation</a>
</div>
