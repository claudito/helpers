<?php

      $client               = \Storage::disk('spaces')->getDriver()->getAdapter()->getClient();
      $bucket               = \Config::get('filesystems.disks.spaces.bucket');
      $url_documento        = "";
      $command              = $client->getCommand('GetObject', [
          'Bucket'          => $bucket,
          'Key'             => $url_documento
      ]);
      $request      = $client->createPresignedRequest($command, '+20 minutes');
      $presignedUrl = (string)$request->getUri();
      return $presignedUrl;
?>
