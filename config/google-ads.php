<?php

return [
    'ADWORDS' => [
        'developerToken' => 'yyyL4bPi12t951WWXtibnw'


        /*
         * Optional additional AdWords API settings.
         * endpoint = "https://adwords.google.com/"
         *
         * 'isPartialFailure' => false,
         */

        /*
         * Optional setting for utility usage tracking in the user agent in requests.
         * Defaults to true.
         *
         * 'includeUtilitiesInUserAgent' => true,
         */
    ],

    'ADWORDS_REPORTING' => [
        /*
         * Optional reporting settings.
         *
         * 'isSkipReportHeader' => false,
         * 'isSkipColumnHeader' => false,
         * 'isSkipReportSummary' => false,
         * 'isUseRawEnumValues' => false,
         */
    ],

    'OAUTH2' => [
        /*
         * Required OAuth2 credentials. Uncomment and fill in the values for the
         * appropriate flow based on your use case. See the README for guidance:
         * https://github.com/googleads/googleads-php-lib/blob/master/README.md#getting-started
         */


          'clientId' => '648250528807-5krtkrltlgqvdp0h1i1jh4c2f2f931sq.apps.googleusercontent.com',
          'clientSecret' => 'OwqHTF2dhlE4GejQf8NtVjCM',
          'refreshToken' => '1/-LuwvmDKzIo9k23UFBGLapjaU0UFHkmcc2S6w0Eoruc'


        /*
         * For service account flow.
         * 'jsonKeyFilePath' => 'INSERT_ABSOLUTE_PATH_TO_OAUTH2_JSON_KEY_FILE_HERE'
         * 'scopes' => 'https://www.googleapis.com/auth/adwords',
         */
    ],

    'SOAP' => [
        /*
         * Optional SOAP settings. See SoapSettingsBuilder.php for more information.
         * 'compressionLevel' => <COMPRESSION_LEVEL>,
         * 'wsdlCache' => <WSDL_CACHE>,
         */
    ],

    'PROXY' => [
        /*
         * Optional proxy settings to be used by SOAP requests.
         * 'host' => '<HOST>',
         * 'port' => <PORT>,
         * 'user' => '<USER>',
         * 'password' => '<PASSWORD>',
         */
    ],

    'LOGGING' => [
        /*
         * Optional logging settings.
         * 'soapLogFilePath' => 'path/to/your/soap.log',
         * 'soapLogLevel' => 'INFO',
         * 'reportDownloaderLogFilePath' => 'path/to/your/report-downloader.log',
         * 'reportDownloaderLogLevel' => 'INFO',
         * 'batchJobsUtilLogFilePath' => 'path/to/your/bjutil.log',
         * 'batchJobsUtilLogLevel' => 'INFO',
         */
    ],

    'ADWORDS_COUNTRIES' => [

            'Netherlands',
            'Belgium'
    ],

    'ADWORDS_LANGUAGES' => [
        'Dutch',
        'Belgium'
    ]
];
