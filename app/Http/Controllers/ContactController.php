<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request) // Deze functie slaat het formulier op op basis wat de gebruiker invult
    {
        $data = "Voornaam: {$request->firstname}\n";
        $data .= "Achternaam: {$request->lastname}\n";
        $data .= "Land: {$request->country}\n";
        $data .= "Onderwerp: {$request->subject}\n";
        $data .= "--------------------------\n";

        // Pad naar bestand
        $path = storage_path('app/contactformulier.txt');

        // Bestand opslaan
        file_put_contents($path, $data, FILE_APPEND);

        // Bestand direct laten downloaden
        return response()->download($path, 'contactformulier.txt')->deleteFileAfterSend(false);

    }
}
