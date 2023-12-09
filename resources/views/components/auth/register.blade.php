<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
    
<div class="flex justify-center items-center h-screen">
        <div class="bg-blue-400 p-8 rounded-lg  filter drop-shadow-xl w-full sm:w-1/2 lg:w-1/3">
            <h2 class="text-2xl mb-6">Inscription</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block mb-2 font-semibold">Nom</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                           class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500">
                    @error('name')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-2 font-semibold">Adresse Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                           class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500">
                    @error('email')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-2 font-semibold">Mot de passe</label>
                    <input id="password" type="password" name="password" required
                           class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500">
                    @error('password')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block mb-2 font-semibold">Confirmation du mot de passe</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                           class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500">
                </div>

                <div class="flex items-center">
                    <button type="submit" class="bg-white text-blue-500 rounded-md px-4 py-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        S'inscrire
                    </button>
                </div>

                <div class="flex items-center mb-4 my-4">
                    <input id="remember_me" type="checkbox" class="h-4 w-4 rounded border-gray-300 focus:ring-blue-500 text-blue-500">
                    <label for="remember_me" class="ml-2 text-gray-700">Se rappeler de moi</label>
                </div>
            </form>
        </div>
    </div>
