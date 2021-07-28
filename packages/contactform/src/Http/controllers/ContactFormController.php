<?php
// Contactform\src\Http\Controllers\ContactFormController.php
namespace Contactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Contactform\Models\ContactForm;

class ContactFormController extends Controller
{

    public function index()
    {
        return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());

        return redirect(route('contact'));
    }
}
