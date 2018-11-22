<?php 
return array(
    /** set your paypal credential **/

    // 'client_id' =>'paypal client_id',
    // 'secret' => 'paypal secret ID',
   
    'client_id' =>'AbZ8DP1KFXZlAR1vnaCf-Ca07-k2HM1jBstwePxIhU1BAy2WZsUBd2eDGqBZXVZWZYqOOWnu3KdhXRKF',
    'secret' => 'EFBwytxFVRF7UH147ED6ePw0F36XTSMHwi97pf4mBLSrRcSpdzLbhLCvA3OnB4j7Y-vsiN6_t-j2o_Ge',
    /**
    * SDK configuration 
    */
    
    'settings' => array(
        /**
        * Available option 'sandbox' or 'live'
        */
        'mode' => 'sandbox',
        /**
        * Specify the max request time in seconds
        */
        'http.ConnectionTimeOut' => 10000,
        /**
        * Whether want to log to a file
        */
        'log.LogEnabled' => true,
        /**
        * Specify the file that want to write on
        */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
        * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
        *
        * Logging is most verbose in the 'FINE' level and decreases as you
        * proceed towards ERROR
        */
        'log.LogLevel' => 'FINE'
        ),
    );
