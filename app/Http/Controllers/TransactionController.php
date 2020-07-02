<?php

namespace App\Http\Controllers;

use App\Services\VPCPaymentConnection;
use Omnipay\Omnipay;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
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
        // 1. Omnipayment migs Approach
        // Setup payment gateway
        $gateway = Omnipay::create('Migs_ThreeParty');

        $gateway->setMerchantId('TESTEGPTEST');
        $gateway->setMerchantAccessCode('77426638');
        $gateway->setSecureHash('7E5C2F4D270600C61F5386167ECB8DA6');

        try {
            $response = $gateway->purchase([
                'amount' => 10.00, // amount should be greater than zero
                'currency' => 'AED',
                'transactionId' => 123456, // replace this for your reference # such as invoice reference #
                'returnURL' => route('paymentStatus'),
                'localeCode' => 'ar'
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
        // $_POST = $request->all();
        // unset($_POST['_token']);

        // // Define Merchant ID and Access Code
        // $merchantId = 'TESTEGPTEST';
        // $accessCode = '77426638';
        
        // $conn = new VPCPaymentConnection();
       
        // // This is secret for encoding the SHA256 hash
        // // This secret will vary from merchant to merchant

        // $secureSecret = "7E5C2F4D270600C61F5386167ECB8DA6";

        // // Set the Secure Hash Secret used by the VPC connection object
        // $conn->setSecureSecret($secureSecret);


        // // *******************************************
        // // START OF MAIN PROGRAM
        // // *******************************************
        
        // // Sort the POST data - it's important to get the ordering right
        // ksort ($_POST);

        // // Add MerchantID and MerchentAccessCode
        // $_POST = ["vpc_Merchant" => $merchantId] + $_POST ;

        // // add the start of the vpcURL querystring parameters
        // $vpcURL = $_POST["virtualPaymentClientURL"];

        // // This is the title for display
        // $title  = $_POST["Title"];


        // // Remove the Virtual Payment Client URL from the parameter hash as we 
        // // do not want to send these fields to the Virtual Payment Client.
        // unset($_POST["virtualPaymentClientURL"]); 
        // unset($_POST["SubButL"]);
        // unset($_POST["Title"]);

        // // Add VPC post data to the Digital Order
        // foreach($_POST as $key => $value) {
        //     if (strlen($value) > 0) {
        //         $conn->addDigitalOrderField($key, $value);
        //     }
        // }

        // // Add original order HTML so that another transaction can be attempted.
        // $againLink = route('register');
        // $conn->addDigitalOrderField("vpc_ReturnURL", $againLink);

        // // Obtain a one-way hash of the Digital Order data and add this to the Digital Order
        // $secureHash = $conn->hashAllFields();
        // // $conn->addDigitalOrderField("Title", $title);
        // $conn->addDigitalOrderField("vpc_SecureHash", $secureHash);
        // $conn->addDigitalOrderField("vpc_SecureHashType", "SHA256");

        // // Obtain the redirection URL and redirect the web browser
        // $vpcURL = $conn->getDigitalOrder($vpcURL);
        // echo $vpcURL;
        // return redirect($vpcURL);
        // //echo "<a href=$vpcURL>$vpcURL</a>";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}