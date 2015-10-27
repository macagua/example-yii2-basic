<?php
// http://www.frattv.com/yii2-swiftmailer-sending-email-via-remote-smtp-server-gmail/
return [
    'class' => 'yii\swiftmailer\Mailer',
    // send all mails to a file by default. You have to set
    // 'useFileTransport' to false and configure a transport
    // for the mailer to send real emails.
    'useFileTransport' => false,
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.gmail.com',
        'username' => 'YOUR_GMAIL_ACCOUNT@gmail.com',
        'password' => 'YOUR_PASSWORD_GMAIL_ACCOUNT',
        'port' => '587',
        'encryption' => 'tls',
    ]
];
