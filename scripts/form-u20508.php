<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Landing',
	'heading' => 'Отправка новой формы',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_reCAPTCHA2_private_key' => 'Недействительный закрытый ключ reCAPTCHA 2.0.',
		'invalid_reCAPTCHA2_server_response' => 'Недействительный ответ сервера reCAPTCHA 2.0.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'e.roess@experimentmysite.ml',
		'to' => 'e.roess@experimentmysite.ml'
	),
	'fields' => array(
		'custom_U20515' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Имя',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Имя\' не может быть пустым.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Ваша почта',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Ваша почта\' не может быть пустым.',
				'format' => 'Поле \'Ваша почта\' содержит недействительное сообщение эл. почты.'
			)
		),
		'custom_U20511' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Сообщение',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U20525' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Телефон',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Телефон\' не может быть пустым.'
			)
		),
		'custom_U22631' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Домашний адрес',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Домашний адрес\' не может быть пустым.'
			)
		),
		'custom_U22643' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Город',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Город\' не может быть пустым.'
			)
		),
		'custom_U22655' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Область',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Область\' не может быть пустым.'
			)
		),
		'custom_U22667' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Почтовый индекс',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Почтовый индекс\' не может быть пустым.'
			)
		),
		'custom_U22679' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Страна',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Страна\' не может быть пустым.'
			)
		)
	)
);

process_form($form);
?>
