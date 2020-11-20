<?php

return [
    /*
     |------------------------------------------------------
     | Set sandbox mode
     | ------------------------------------------------------
     | Specify whether this is a test app or production app
     | Sandbox base url: https://sandbox.safaricom.co.ke
     | Production base url: https://api.safaricom.co.ke
     |
     */
    'sandbox' => true,
    /*
   |--------------------------------------------------------------------------
   | Cache credentials
   |--------------------------------------------------------------------------
   |
   | If you decide to cache credentials, they will be kept in your app cache
   | configuration for sometime. Reducing the need for many requests for
   | generating credentials
   |
   */
    'cache_credentials' => true,
    /*
   |--------------------------------------------------------------------------
   | C2B array
   |--------------------------------------------------------------------------
   |
   | If you are accepting payments enter application details and shortcode info
   |
   */
    'c2b' => [
        /*
         * Consumer Key from developer portal
         */
        'consumer_key' => '8kPDSfNz60rRhiFqbYBHzgaghpaz8Guq',
        /*
         * Consumer secret from developer portal
         */
        'consumer_secret' => 'pvPeLLBcKAGYSbAM',
        /*
         * HTTP callback method [POST,GET]
         */
        'callback_method' => 'POST',
        /*
         * Your receiving paybill or till umber
         */
        'short_code' => 174379,
        /*
         * Passkey , requested from mpesa
         */
        'passkey' => 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919',
        /*
         * --------------------------------------------------------------------------------------
         * Callbacks:
         * ---------------------------------------------------------------------------------------
         * Please update your app url in .env file
         * Note: This package has already routes for handling this callback.
         * You should leave this values as they are unless you know what you are doing
         */
        /*
         * Stk callback URL
         */
        'stk_callback' => env('APP_URL') . '/payments/callbacks/stk_callback',
        /*
         * Data is sent to this URL for successful payment
         */
        'confirmation_url' => env('APP_URL') . '/payments/callbacks/confirmation',
        /*
         * Mpesa validation URL.
         * NOTE: You need to email MPESA to enable validation
         */
        'validation_url' => env('APP_URL') . '/payments/callbacks/validate',
    ],
    /*
      |--------------------------------------------------------------------------
      | B2C array
      |--------------------------------------------------------------------------
      |
      | If you are sending payments to customers or b2b
      |
      */
    'b2c' => [
        /*
         * Sending app consumer key
         */
        'consumer_key' => '8kPDSfNz60rRhiFqbYBHzgaghpaz8Guq',
        /*
         * Sending app consumer secret
         */
        'consumer_secret' => 'pvPeLLBcKAGYSbAM',
        /*
         * Shortcode sending funds
         */
        'short_code' => 600000,
        /*
        * This is the user initiating the transaction, usually from the Mpesa organization portal
        * Make sure this was the user who was used to 'GO LIVE'
        * https://org.ke.m-pesa.com/
        */
        'initiator' => 'testapi',
        /*
         * The user security credential.
         * Go to https://developer.safaricom.co.ke/test_credentials and paste your initiator password to generate
         * security credential
         */
        'security_credential' => 'W3Bu08QQviniCHnfdl4AC66Qen8u0+6Lsi1Ib/QIfPl+x8Xhjnd9/Kr/VLwi8+xn+am6jNoafZMN7cFoAQL4vPpEw6SGjptv2yjDZAhFVDeHLULuv8i1NIhgd4EK3UezSOmEZB19/yikznpOwpn8azUJJEcJhYqs+0ez/oiORDTrXf26EIVgZ6vi+F7Y+qChGiG+p3VmHpzuCLpAEY3ysI7bIC6PbpEBRCzQPeDnjObKCU8fLcg0SFlZvdf4hYitaMcDz7IL6cFpFJAWGTbBNBHGSOqQx5npmIyrRUlN21AWfZVVPYI3xoRmeSGoWgcXT5yao3/73nQqJeFfKlrXzQ==',
       /*
        * Notification URL for timeout
        */
        'timeout_url' => env('APP_URL') . '/payments/callbacks/timeout/',
        /**
         * Result URL
         */
        'result_url' => env('APP_URL') . '/payments/callbacks/result/',
    ],
    /*
     * Configure slack notifications to receive mpesa events and callbacks
     */
    'notifications' => [
        /*
         * Slack webhook URL
         * https://my.slack.com/services/new/incoming-webhook/
         */
        'slack_web_hook' => 'https://hooks.slack.com/services/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',
        /*
         * Get only important notifications
         * You wont be notified for failed stk push transactions
         */
        'only_important' => false,
    ],
];
