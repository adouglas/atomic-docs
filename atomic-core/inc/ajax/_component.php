<?php
require_once(dirname(__FILE__) .'/../../required.php');

global $Atomic;

if( Atomic::getValue('form') === 'component-create' ){
	require_once($Atomic::includePath() .'/inc/lib/Component.php');
	$Component = new Component();
	$return = $Component->create(Atomic::getValue('component'), Atomic::getValue('category'), Atomic::getValue('description'), Atomic::getValue('backgroundColor'));
}
else if( Atomic::getValue('form') === 'component-update' ){
	require_once($Atomic::includePath() .'/inc/lib/Component.php');

	$Component = new Component();
	$where = array(
		'component' => Atomic::getValue('component')
	);
	$update = array(
		Atomic::getValue('key') => Atomic::getValue('newValue'),
		'category' => Atomic::getValue('category')
	);

	$return = $Component->update(Atomic::getValue('component'), $update, $where, Atomic::getValue('updateType'));
}
else {
	$return = array('status' => false, 'message' => 'Form incorrectly accessed');
}

echo json_encode($return);