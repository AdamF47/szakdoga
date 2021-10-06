<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User Login</title>            
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-indigo-500">
        <div class="bg-indigo-700 p-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="/img/logo1.png" width="50" alt="Logo" class="mr-2">
                <a href="" class="inline-block p-2 text-indigo-200 hover:text-indigo-100 mr-2">Home</a>        
                <a href="#" class="flex justify-center text-indigo-400 capitalize text-lg">User Login</a>             
            </div>
        </div>        
        <div class="flex justify-center">
            <div class="w-4/12 bg-indigo-300 p-6 rounded-lg">
                @if (session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                        <div class="mb-4">
                            <label for="neptuncode" class="sr-only">Neptun code</label>
                            <input type="text" name="neptuncode" id="neptuncode" placeholder="Neptun code"
                            class="bg-indigo-200 border-2 w-full p-4 rounded-lg @error('neptuncode')
                            border-red-500 @enderror" value="{{ old('neptuncode') }}">

                            @error('neptuncode')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" placeholder="Choose a password"
                            class="bg-indigo-200 border-2 w-full p-4 rounded-lg @error('password')
                            border-red-500 @enderror" value="">

                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>