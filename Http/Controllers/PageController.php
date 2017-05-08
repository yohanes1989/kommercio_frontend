<?php

namespace Project\Project\Http\Controllers;

use Illuminate\Http\Request;
use Kommercio\Facades\EmailHelper;
use Kommercio\Facades\ProjectHelper;
use Kommercio\Http\Controllers\Controller;

class PageController extends Controller
{
    public function contactProcess(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ];

        $this->validate($request, $rules);

        $messages = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'order_id' => $request->input('order_id'),
            'message' => $request->input('message'),
        ];

        EmailHelper::sendMail($messages['email'], 'Thank you for contacting us', 'customer_contact', ['messages' => $messages], 'general');
        EmailHelper::sendMail(ProjectHelper::getConfig('contacts.general.email'), 'There is new contact us inquiry', 'admin_contact', ['messages' => $messages], 'general');

        return redirect()->back()->with('success', ['Thank you for contacting us. We shall get back to you as soon as possible.']);
    }

    public function wholesaleProcess(Request $request)
    {
        $rules = [
            'store_name' => 'required',
            'website' => '',
            'company_resale' => 'required',
            'federal_tax_id' => 'required',
            'type' => 'required',
            'buyer_full_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'captcha' => 'required|captcha'
        ];

        $this->validate($request, $rules);

        $messages = $request->all();

        EmailHelper::sendMail(ProjectHelper::getConfig('contacts.general.email'), 'There is new wholesale application', 'admin_wholesale', ['messages' => $messages], 'general');

        return redirect()->back()->with('success', ['Thank you for applying. We shall get back to you as soon as possible.']);
    }
}
