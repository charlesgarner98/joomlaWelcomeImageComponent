<?php

//joomla bootstrap
define( 'DS', DIRECTORY_SEPARATOR );
error_reporting(E_ALL);
date_default_timezone_set('UTC');
define('_JEXEC', 1);
define('JOOMLA_PATH',realpath(dirname(__FILE__).DS.'..'.DS.'..' ));
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['REQUEST_URI'] = '';

if (file_exists(JOOMLA_PATH . '/defines.php'))
{
    include_once JOOMLA_PATH . '/defines.php';
}

if (!defined('_JDEFINES'))
{
    define('JPATH_BASE', JOOMLA_PATH);
    require_once JPATH_BASE . '/includes/defines.php';
}

require_once JPATH_BASE . '/includes/framework.php';

if(isset($_POST['imageURL'])){

  $imageURL = $_POST['imageURL'];

  $db = JFactory::getDbo();
  $query = $db->getQuery(true);

  //Snow
  $query = "UPDATE #__welcomeImage SET image=". $imageURL ." WHERE id=1;";
  $db->setQuery($query);
  $result = $db->query();
  if($result){
    $result1 = 'success';
  }

  if($result1 == 'success') {
    echo 'success';
  }

}

?>
