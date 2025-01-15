<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function saveMessage (Request $request) {

        try {
            // Validation des données
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'mobile' => ['required', 'regex:/^[0-9\-\+\s]+$/', 'max:20'], // Validation stricte pour les numéros
                'service' => ['required', 'string', 'max:255'],
                'note' => ['required', 'string', 'max:1000'],
            ]);

            // Enregistrement des données dans la table

            Contact::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['mobile'],
                'service' => $validatedData['service'],
                'message' => $validatedData['note'],
            ]);

            // Redirection avec message de succès
            toastr()->success('Message sent successfully');
            return redirect()->back();
        }
        catch (\Illuminate\Validation\ValidationException $e) {
            // Gérer les erreurs de validation et afficher avec Toastr
            if ($e->errors()) {
                dd($e->errors());
                toastr()->error('Please verify your information');
                return redirect()->back()->withInput();
            }


        }

        catch (\Exception $e) {
            // Log l'erreur pour le débogage
            \Log::error('Erreur lors de la création du contact : ' . $e->getMessage());

            // Redirection avec message d'erreur
            toastr()->error('There were a problem while sending, please try again later');

            return redirect()->back()->withInput();
        }

    }

    public function inboxmessages() {

        $messages = Contact::all();
        return view('inbox', compact('messages'));


    }
}
