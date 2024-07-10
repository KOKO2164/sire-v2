<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PayController extends Controller
{
    public function pagar(Request $request)
    {
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('services.paypal.client_id'),
                config('services.paypal.secret')
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        
        $total = number_format($request->total, 2, '.', '');

        $precio = new Amount();
        $precio->setTotal('3.99');
        $precio->setCurrency('USD');

        $transaccion = new Transaction();
        $transaccion->setAmount($precio);

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('home'))
        ->setCancelUrl(route('show-login'));

        $payment = new Payment();
        $payment->setIntent('sale')
        ->setPayer($payer)
        ->setTransactions([$transaccion])
        ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($apiContext);
            $reserArray = json_decode($request->reservations);
            foreach ($reserArray as $reservation) {
                $reserva = Reservation::find($reservation);
                $reserva->status_id = 2;
                $reserva->save();
            }
            return redirect($payment->getApprovalLink());
        } catch (\Exception $e) {
            return redirect(route('show-login'));
        }
    }
}
