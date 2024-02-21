<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\PaymentGateway;
use Config;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        $ssLConfg=PaymentGateway::get()->first();
         if($ssLConfg->test_mode == TRUE) {

            $apiDomain ="https://sandbox.sslcommerz.com";
         }else{
            $apiDomain ="https://securepay.sslcommerz.com";
         }
         
         
        if($ssLConfg){
            $data = [
                'apiCredentials' => [
                    'store_id' => $ssLConfg->store_id,
                    'store_password' => $ssLConfg->store_password,
                ],
                'apiUrl' => [
                    'make_payment' => "/gwprocess/v4/api.php",
                    'transaction_status' => "/validator/api/merchantTransIDvalidationAPI.php",
                    'order_validate' => "/validator/api/validationserverAPI.php",
                    'refund_payment' => "/validator/api/merchantTransIDvalidationAPI.php",
                    'refund_status' => "/validator/api/merchantTransIDvalidationAPI.php",
                ],
                'apiDomain' => $apiDomain,
                'connect_from_localhost' => env("IS_LOCALHOST", false), // For Sandbox, use "true", For Live, use "false"
                'success_url' => '/success',
                'failed_url' => '/fail',
                'cancel_url' => '/cancel',
                'ipn_url' => '/ipn',
            ];
           // dd( $data);
            Config::set('sslcommerz',  $data );
       }
        
       if($ssLConfg){
        if($ssLConfg->bkash_test_mode == 1){
            $mode="true";
        }else{
            $mode="false";

        }
       
        $data = [
           
                    "sandbox"         => $mode,
                    "bkash_app_key"     => $ssLConfg->bkash_app_key,
                    "bkash_app_secret" => $ssLConfg->bkash_app_secret,
                    "bkash_username"      => $ssLConfg->bkash_user_name,
                    "bkash_password"     => $ssLConfg->bkash_user_password,
                    "callbackURL"     => $ssLConfg->bkash_curl,
                    'timezone'        => 'Asia/Dhaka', 
        ];
     //   dd( $data);
        Config::set('bkash',  $data );
   }
    








    }
}
