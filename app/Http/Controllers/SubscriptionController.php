<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\Package;
use App\Post;
use App\Traits\Curl;
use App\Services\VPCPaymentConnection;
use Omnipay\Omnipay;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
  // use Curl trait
  use Curl;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }

    /**
     * got to Subscribe page with all packages we have.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe()
    {
        return view('register.subscribe', [
            'packages' => Package::all()
        ]);
    }

    /**
     * got to Subscribe page with the testing payment page.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
        return view('register.register', [
            'posts' => Post::home()
        ]);
    }
    
    /**
     * make request to MiGS payment gateway.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return redirect MiGS URL
     */

    /***** There are two ways to connect to the payment gateway both working fine *****/
    public function request(Request $request)
    {
        $this->fawryPay($request);
        $merchantData = DB::table('merchant_api_data')->first();
        // // Setup payment gateway
        $gateway = Omnipay::create('Migs_ThreeParty');

        $gateway->setMerchantId($merchantData->merchantId);
        $gateway->setMerchantAccessCode($merchantData->accessCode);
        $gateway->setSecureHash($merchantData->secureHash);

        try {
            $response = $gateway->purchase([
                'amount' => (float)$request->vpc_Amount, // amount should be greater than zero
                'currency' => $request->vpc_Currency,
                'transactionId' => $request->vpc_MerchTxnRef, // replace this for your reference # such as invoice reference #
                'returnURL' => $request->vpc_ReturnURL,
                'localeCode' => $request->vpc_Locale,
                'description' => $request->vpc_OrderInfo
            ])->send();
        
            if ($response->isRedirect()) {
                $url = $response->getRedirectUrl(); // do whatever with the return url
                
                return redirect($url);
            } else {
                echo 'error';
                // payment failed: display message to customer
                echo $response->getMessage();
            }
        } catch (\Exception $e) {
            // internal error, log exception and display a generic message to the customer
            echo $e;
            exit('Sorry, there was an error processing your payment. Please try again later.');
        }

        // 2. Virtual Payment Client Approach
    /*
        // $_POST = $request->all();
        
        // // unset unneeded data
        // unset($_POST['_token']);
        // unset($_POST["SubButL"]);
        // unset($_POST["Title"]);

        // // Define Merchant ID and Access Code
        // $merchantId = $merchantData->merchantId;
        // $accessCode = $merchantData->accessCode;
        
        // // Add MerchantID and MerchentAccessCode
        // $_POST = ["vpc_Merchant" => $merchantId] + $_POST ;

        
        // $conn = new VPCPaymentConnection();
       
        // // This is secret for encoding the SHA256 hash
        // // This secret will vary from merchant to merchant
        // $secureSecret = $merchantData->secureHash;

        // // Set the Secure Hash Secret used by the VPC connection object
        // $conn->setSecureSecret($secureSecret);


        // // *******************************************
        // // START OF MAIN PROGRAM
        // // *******************************************
        
        // // Sort the POST data - it's important to get the ordering right
        // ksort ($_POST);
        
        // // add the start of the vpcURL querystring parameters
        // $vpcURL = $_POST["virtualPaymentClientURL"];

        
        
        // // Remove the Virtual Payment Client URL from the parameter hash as we 
        // // do not want to send these fields to the Virtual Payment Client.
        // unset($_POST["virtualPaymentClientURL"]); 
        

        // // Add VPC post data to the Digital Order
        // foreach($_POST as $key => $value) {
        //     if (strlen($value) > 0) {
        //         $conn->addDigitalOrderField($key, $value);
        //     }
        // }

        // // Obtain a one-way hash of the Digital Order data and add this to the Digital Order
        // $secureHash = $conn->hashAllFields();
        // $conn->addDigitalOrderField("vpc_SecureHash", $secureHash);
        // $conn->addDigitalOrderField("vpc_SecureHashType", "SHA256");

        // // Obtain the redirection URL and redirect the web browser
        // $vpcURL = $conn->getDigitalOrder($vpcURL);

        // return redirect($vpcURL);
    */
    }

    /**
     * make request to MiGS payment gateway.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return redirect MiGS URL
     */
    public function response(Request $request)
    {
        $merchantData = DB::table('merchant_api_data')->first();
        // Setup payment gateway
        $gateway = Omnipay::create('Migs_ThreeParty');

        $gateway->setMerchantId($merchantData->merchantId);
        $gateway->setMerchantAccessCode($merchantData->accessCode);
        $gateway->setSecureHash($merchantData->secureHash);

        try {
            $response = $gateway->completePurchase([
                'amount' => 10.00, // amount should be greater than zero
                'currency' => 'AED',
                'transactionId' => 123456, // replace this for your reference # such as invoice reference #
                'returnURL' => route('response'),
                'localeCode' => 'ar'
            ])->send();

            if ($response->isSuccessful()) {
                $responseData = $response->getMessage();
                return redirect()->route('payment');
            } else {
                echo 'error: '. '<br>';
                // payment failed: display message to customer
                echo $response->getMessage();
            }
        } catch (\Exception $e) {
            // internal error, log exception and display a generic message to the customer
            echo $e;
            exit('Sorry, there was an error processing your payment. Please try again later.');
        }
    }
    
    // Fawry pay API Gateway
    public function fawry(){
        
        $secureKey = "091df1cc36c7403099f4b58451b91cbd";
        
        $merchantCode = "1tSa6uxz2nRu3yG+kcSzGQ==";
        $merchantRefNum = (string)rand(100000000, 999999999);
        $customerProfileId = (string)rand(100000000, 999999999);
        $customerMobile = "01000000200";
        $customerEmail = "77@test.com";
        $total_price = "20.10";
        $paymentMethod = "PAYATFAWRY";

        $data = [
            "merchantCode"=> $merchantCode,
            "merchantRefNum"=> $merchantRefNum,
            "customerProfileId"=> $customerProfileId,
            "customerMobile"=> $customerMobile,
            "customerEmail"=>  $customerEmail,
            "paymentMethod"=> "PAYATFAWRY",
            "amount"=> $total_price,
            "currencyCode"=> "EGP",
            "description"=> "the charge request description from mobile",
            "paymentExpiry"=> 1594802689,
            "chargeItems"=> [
                [
                    "itemId"=> "1",
                    "description"=> "city club subscription",
                    "price"=> $total_price,
                    "quantity"=> 1
                ]
            ],
            "signature"=> hash('sha256', $merchantCode.$merchantRefNum.$customerProfileId.'PAYATFAWRY'.$total_price.$secureKey)
        ];
        $url = "https://atfawry.fawrystaging.com/ECommerceWeb/Fawry/payments/charge";
        
        $response = $this->callFawryApi($url,$data);
        $response = json_decode($response);
        dd($response);
        if (isset($response->statusCode) && $response->statusCode == 200) {
            
            // success
            return [
                'status'            => true,
                'referenceNumber'   => $response->referenceNumber,
                'merchantRefNumber' => $response->merchantRefNumber,
            ];
        }else{
            return [
                'status' => false,
                'error'  => (isset($response->statusDescription)) ? $response->statusDescription : $response->description      ,
                'statusCode'  => (isset($response->statusCode)) ? $response->statusCode : 500      ,
            ];
        }
    }

    /**
     * Sample Request:
     * 
     * Http Method : GET
     * 
     * http://URL/ECommerceWeb/Fawry/payments/status?merchantCode=is0N+YQzlE4=&merchantRefNumber=99900642041&signature=a5701a2e1e865bf863f0c781829f709ea4d36bdaf7d70e9bafb9458b1
     */ 
    public function fawryCallBack(Request $request)
    {
        $referenceNumber = '948184369';
        $merchantCode = '1tSa6uxz2nRu3yG+kcSzGQ==';
        $merchantRefNum = '532743256';
        $secureKey = '091df1cc36c7403099f4b58451b91cbd';
        $url = 'https://atfawry.fawrystaging.com/ECommerceWeb/Fawry/payments/status';

        $data = [
          "merchantCode" => $merchantCode,
          "merchantRefNumber" => $merchantRefNum,
          "signature" => hash("sha256", $merchantCode.$merchantRefNum.$secureKey)
        ];

        $response = $this->fawryCallBackAPI($url, $data);
        echo $response;
    }

    // may be not necessary
    public function fawryCallbackResponse(Request $request)
    {
      dd($request);
    }

    // create fawry POST request
    public function callFawryApi($url, $data)
    {
      
      //Initiate cURL.
      $ch = curl_init($url);
      
      //The JSON data.
      $jsonData = $data;
      
      //Encode the array into JSON.
      $jsonDataEncoded = json_encode($jsonData);
      
      //Tell cURL that we want to send a POST request.
      curl_setopt($ch, CURLOPT_POST, true);
      
      //Attach our encoded JSON string to the POST fields.
      curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

      //return the output from curl_exec() as a string value
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      //Set the content type to application/json
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
      
      //Execute the request
      $result = curl_exec($ch);
      
      //Close curl
      curl_close($ch);
      
      return $result;
    }

    // create fawry callback url GET request
    public function fawryCallBackAPI($url, $data)
    {
      $callBackUrl = '';

      foreach($data as $key => $value)
      {
        $callBackUrl .=  $key . "=" . $value . "&";
      }
      $callBackUrl =  $url . '?' . substr($callBackUrl, 0, strlen($callBackUrl)-1);

      return redirect($callBackUrl);
    
      $ch = curl_init();

      curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_URL => $callBackUrl,
        CURLOPT_HTTPHEADER => array(
          "accept: application/json",
          "content-type: application/json",
        )
      ]);
      
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

      $response = curl_exec($ch);
      
      // in case there is an error we can show it here using this code
      // dd('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
      //   dd(curl_getinfo($ch));
      
      curl_close($ch);
      return $response;
    
    }
}