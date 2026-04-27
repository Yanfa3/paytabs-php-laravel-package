<?php

Route::post('/paymentIPN', [\Yanfaa\Laravel_paytabs\Controllers\PaytabsLaravelListenerApi::class, 'paymentIPN'])->name('payment_ipn');
