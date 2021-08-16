<?php

/** 
 * https://feedy.btekno.id
 * @author Noviyanto Rahmadi <novay@btekno.id>
 * @copyright 2020 - Borneo Teknomedia
 *
 * Landing Page Routes
 */
Route::namespace('Landing')->as('feedy.')->group(function() 
{
	Route::get('/', 'IndexController@index')->name('index');
	Route::get('get-started', 'IndexController@start')->name('get-started');
	Route::post('get-started', 'IndexController@register');

	Route::get('widget/{uuid?}', 'WidgetController@view')->name('widget.view');
	Route::get('widget/{uuid?}/script', 'WidgetController@script')->name('widget.script');
	Route::post('widget/{uuid?}/submit', 'WidgetController@submit')->name('widget.submit');
});

/** 
 * Panel Routes
 */
Route::namespace('Panel')->as('feedy.panel.')->prefix('console')->middleware('feedy.auth')->group(function() 
{
	Route::get('/', 'IndexController@index')->name('index');

	Route::prefix('campaign')->as('campaign.')->group(function() {
		Route::post('/', 'CampaignController@create')->name('create');

		Route::get('{uuid?}/editor', 'CampaignController@editor')->name('editor');
		Route::get('{uuid?}/responses', 'CampaignController@responses')->name('responses');
		Route::get('{uuid?}/integrations', 'CampaignController@integrations')->name('integrations');
		Route::get('{uuid?}/privacy', 'CampaignController@privacy')->name('privacy');
		Route::get('{uuid?}/data', 'CampaignController@data')->name('data');
		Route::get('{uuid?}/delete', 'CampaignController@delete')->name('delete');

		Route::post('{uuid?}/export', 'CampaignController@export')->name('export');
		Route::post('{uuid?}/privacy', 'CampaignController@changePrivacy');
		Route::delete('{uuid?}/delete', 'CampaignController@deleteCampaign');
		Route::delete('{uuid?}/responses/{id?}', 'CampaignController@deleteResponse')->name('responses.delete');

		Route::get('{uuid?}/editor/view', 'EditorController@index')->name('editor.index');
		Route::post('{uuid?}/editor/view', 'EditorController@update');
	});
});

