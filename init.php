<?php
Route::set('REST', '(REST(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'REST',
		'action'     => 'index',
	));
