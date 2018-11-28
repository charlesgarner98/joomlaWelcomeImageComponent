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

  //Get value for image
  $query = "SELECT image FROM #__welcomeImage WHERE id = 1;";
  $db->setQuery($query);
  $image = $db->loadResult();


?>
<form action="/administrator/index.php?option=com_welcomeImage" id="component-form" method="post" name="adminForm" autocomplete="off" class="form-validate form-horizontal">
  <div class="control-group">
    <div class="control-label">
      <label id="jform_image-lbl" for="jform_welcomeImage" class="hasPopover" title data-content="Select welcome image to display on homepage." data-original-title="Welcome Image">
        Select Welcome Image
      </label>
    </div>
    <div class="controls">
      <fieldset id="jform_welcomeImage" class="">
  			<input type="text" id="jform_image" value="<?php $image ?>" name="jform[image]">
  		</fieldset>
    </div>
  </div>
</form>
<div id="update"></div>

<script>

  jQuery('#toolbar-save button').click(function(){

    var imageURL = jQuery('#jform_image').val();

    jQuery.ajax({
      type: "POST",
      url: "/administrator/components/com_welcomeImage/ajax.php",
      data: { 'imageURL' : imageURL },
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
