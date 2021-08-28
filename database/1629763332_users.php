<?php

$schema->dropIfExists('users');

$schema->create('users', function ($table) {
	$table->id();
	$table->string('photo')->nullable();
	$table->string('name');
	$table->string('email')->unique();
	$table->string('password');
	$table->string('role')->nullable();
	$table->text('permissions')->nullable();
	$table->string('oauth')->nullable();
	$table->string('hash')->nullable();
	$table->datetime('date_create')->useCurrent();
	$table->datetime('date_update')->useCurrent()->seCurrentOnUpdate();
});

App\Models\User::create([
	'name' 		=> 'Admin',
	'email'		=> 'admin@admin.com',
	'password'	=> '21232f297a57a5a743894a0e4a801fc3',
	'hash'		=> 'c4ca4238a0b923820dcc509a6f75849b'
]);
