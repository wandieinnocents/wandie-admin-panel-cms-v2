<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Http\Request;
use App\Models\FlutterwavePayment;
class FlutterwavePaymentsController extends Controller
{
    // payments page default
    public function payments_page(){
        
        return view("frontend.pages_frontend.payments.flutterwave.create");
    }

   

    // flutterwave docs 
    public function initialize(Request $request)
    {
        //This generates a payment reference
        $reference = Flutterwave::generateReference();
        // $payment_f = new FlutterwavePayment();
        // $payment->amount = $request->amount;
        // $flutter_amount = $payment->amount;
        // dd($flutter_amount);

        // Enter the details of the payment
        $data = [
            'payment_options' => 'mobilemoneyuganda,card,banktransfer',
            'amount' => request()->amount,
            'email' => request()->email,
            'tx_ref' => $reference,
            'currency' => "UGX",
            'redirect_url' => route('callback'),
            'customer' => [
                'email' => request()->email,
                "phone_number" => request()->phone,
                "name" => request()->name
            ],

            "customizations" => [
                "title" => 'Movie Ticket',
                "description" => "20th October"
            ]
        ];

        // test data in the system
        dd($data);

        $payment = Flutterwave::initializePayment($data);


        if ($payment['status'] !== 'success') {
            // notify something went wrong
            return;
        }

        return redirect($payment['data']['link']);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {
        
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {
        
        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);

        dd($data);
        }
        elseif ($status ==  'cancelled'){
            //Put desired action/code after transaction has been cancelled here
        }
        else{
            //Put desired action/code after transaction has failed here
        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}
