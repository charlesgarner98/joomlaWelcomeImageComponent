<?php

  defined('_JEXEC') or die('Restricted access');


  JToolbarHelper::title(JText::_('DLC Welcome Image'), 'flash');
  JToolbarHelper::save('welcomeimage.save');
	JToolbarHelper::cancel(
		'welcomeimage.cancel',
		$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
	);

  // Get a db connection.
  $db = JFactory::getDbo();
  $query = $db->getQuery(true);


?>
<form action="/administrator/index.php?option=com_welcomeimage" id="component-form" method="post" name="adminForm" autocomplete="off" class="form-validate form-horizontal">
  <
</form>
<div id="update"></div>

<script>

  jQuery('#toolbar-save button').click(function(){
    jQuery.ajax({
      type: "POST",
      url: "/administrator/components/com_welcomeimage/ajax.php",
      data: {},
    }).done(function(result){
      if(result == 'success'){
        window.location.href = "/administrator";
      }
    });
  });

  jQuery('#toolbar-cancel button').click(function(){
    window.location.href = "/administrator";
  });

</script>
