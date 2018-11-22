<?php

namespace App\Http\Controllers;
use App\Models\BoosterApplication;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    

    public function dashboard()
    {
        return view('welcome');
    }

    public function EloBoosting()
    {
        return view('frontend.elo_boosting');
    }

    public function solo_boosting()
    {
        return view('frontend.solo_boosting');
    }

    public function duo_boosting()
    {
        return view('frontend.duo_boosting');
    }

    public function coaching()
    {
        return view('frontend.coaching');
    }

    public function demo()
    {
        return view('frontend.demo');
    }

    public function booster_application()
    {
        return view('frontend.booster_application');
    }

    public function booster_store(Request $request)
    {

       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'boosterAccess' => 'required|string|max:20',
            'summonername' => 'required|string|max:20',
            'skype_discord' => 'required|string|max:255',
            'current_rank' => 'required|string|max:20',
            'boosted_before' => 'required|string|max:20',
            'willing' => 'required|string|max:255',
            'queue' => 'required|string|max:20',
            'otherHire' => 'required|string|max:20',
            'file' => 'required|string|max:255',
        ]);
            
        BoosterApplication::create([
            'name' => $request->name,
            'email' => $request->email,
            'boosterAccess' => $request->boosterAccess,
            'summonername' => $request->summonername,
            'skype_discord' => $request->skype_discord,
            'current_rank' => $request->current_rank,
            'boosted_before' => $request->boosted_before,
            'willing' => $request->willing,
            'queue' => $request->queue,
            'otherHire' => $request->otherHire,
            'file' => $request->file,
        ]);

        return redirect()->back();
    
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function contact()
    {
        return view('frontend.contact_us');
    }

    public function contact_with_admin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'subject' => 'required|string|max:60',
            'message' => 'required|string|max:200',
            
        ]);
            
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }


    public function memberArea()
    {
        return view('frontend.memberArea');
    }
}
