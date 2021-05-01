<?php

  $config = [

      'driver' => 'SMTP',
      'host' => 'smtp.gmail.com',
      'port' => '587',
      'username' => 'tallerlaravel7notificaciones@gmail.com',
      'password' => 'taller2021',
      'encryption'=> 'tls',
      'from' => [

          'address' => 'tallerlaravel7notificaciones@gmail.com',
          'name' =>  'tallerlaravel7notificaciones@gmail.com'

      ],
      'email_reply' => 'tallerlaravel7notificaciones@gmail.com',
      'email_cc'    => 'tallerlaravel7notificaciones@gmail.com'
    
  ];

\Config::set('mail', $config  );
Mail::to( $value->correo  )->send( new EnviarCertificadoCorreo( $value ) );

