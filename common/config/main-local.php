<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=etanayan',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
			'tablePrefix'=>'cap_',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
                'transport' => [
                    'class' => 'Swift_SmtpTransport',
                    'host' => 'mailtrap.io',
                    'username' => 'df1150f2573920',
                    'password' => 'cef393d18b1bf3',
                    'port' => '2525',
                    'encryption' => 'tls',
					],
        ],
    ],
];
