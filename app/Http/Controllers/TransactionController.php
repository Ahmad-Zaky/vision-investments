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