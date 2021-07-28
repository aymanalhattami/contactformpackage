<?php
// contactform\src\routes\web.php
Route::group(['namespace' => 'Contactform\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('contact', [Contactform\Http\Controllers\ContactFormController::class, 'index']);
    Route::post('contact', [Contactform\Http\Controllers\ContactFormController::class, 'sendMail'])->name('contact');
});
