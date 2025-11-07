<x-layouts.app>
    <form id="ticket12" action="/contact/store" method="POST">
        @csrf <!-- CSRF token for security, verplicht van Laravel, is voor de post methode -->
        <h1>Contact Formulier</h1>

        <label for="fname">Voornaam</label>
        <input type="text" id="fname" name="firstname" placeholder="Je naam.." required>

        <label for="lname">Achternaam</label>
        <input type="text" id="lname" name="lastname" placeholder="Je achternaam.." required>

        <label for="country">Land</label>
        <input type="text" id="country" name="country" placeholder="Je land.." required>

        <label for="subject">Onderwerp</label>
        <textarea id="subject" name="subject" placeholder="Schrijf iets.." style="height:200px" required></textarea>

        <input id="submit" type="submit" value="Verzenden">
    </form>
</x-layouts.app>
