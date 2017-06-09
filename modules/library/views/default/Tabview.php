<?php
$this->widget('zii.widgets.jui.CJuiTabs', array(
 'tabs' => array(
  'Tab 1'=>$this->renderPartial('tab1', array('value'=>$value),TRUE),
  'Tab 2'=>$this->renderPartial('tab2',
   array('value'=>$value),TRUE) 
   
   ),

 // additional javascript options for the tabs plugin
 'options' => array(
	'collapsible' => true,
	'selected'=>isset($_GET['tab_id']) && is_numeric($_GET['tab_id'])?$_GET['tab_id']:0
 ),
  
'id'=>'MyTab',
));
?>