<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        
</head>
    
<div class="bg-gray-200 p-6">
    <h2 class="text-2xl font-bold mb-4">Changement de mot de passe</h2>
    <p class="mb-4">Veuillez saisir votre adresse e-mail pour recevoir un e-mail de confirmation pour le changement de mot de passe :</p>
    <form action="{{ route('forget.password.post') }}" method="post">
        @csrf <!-- Protection CSRF fournie par Laravel -->

        <label for="email" class="block mb-2">Adresse e-mail :</label>
        <input type="email" id="email" name="email" placeholder="Votre adresse e-mail" class="w-full border-gray-300 rounded-md py-2 px-3 mb-4 focus:outline-none focus:ring focus:border-blue-500">

        <input type="submit" value="Envoyer le mail de confirmation" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 cursor-pointer">
    </form>
</div>

</html>