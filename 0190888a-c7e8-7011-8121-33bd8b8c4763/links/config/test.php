<?php
return [
	'id' => 'app-links-tests',
	'components' => [
		'assetManager' => [
			'basePath' => __DIR__ . '/../web/assets',
		],
		'urlManager' => [
			'showScriptName' => true,
		],
		'request' => [
			'cookieValidationKey' => 'test',
		],
		'mailer' => [
			'messageClass' => \yii\symfonymailer\Message::class
		]
	],
];
