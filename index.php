<?php

require __DIR__ . '/vendor/autoload.php';

$resend = Resend::client('your_api');

$resend->emails->send([
  'from' => 'from@mail.com',
  'to' => 'to@gmail.com',
  'subject' => 'Mail Subject',
  'html' => 'your message',
]);

echo "email send successful";
