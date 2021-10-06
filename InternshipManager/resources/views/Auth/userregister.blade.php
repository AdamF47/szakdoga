<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User Registration</title>            
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-indigo-500">
        <div class="bg-indigo-700 p-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="/img/logo1.png" width="50" alt="Logo" class="mr-2">
                <a href="" class="inline-block p-2 text-indigo-200 hover:text-indigo-100 mr-2">Home</a>        
                <a href="#" class="flex justify-center text-indigo-400 capitalize text-lg">User Registration</a>             
            </div>
        </div>        
        <div class="flex justify-center">
            <div class="w-4/12 bg-indigo-300 p-6 rounded-lg">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                        <div class="mb-4">
                            <label for="first_name" class="sr-only">Name</label>
                            <input type="text" name="first_name" id="first_name" placeholder="Your first name"
                            class="bg-indigo-200 border-2 w-full p-4 rounded-lg @error('first_name')
                            border-red-500 @enderror" value="{{ old('first_name') }}">

                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="last_name" class="sr-only">Name</label>
                            <input type="text" name="last_name" id="last_name" placeholder="Your last name"
                            class="bg-indigo-200 border-2 w-full p-4 rounded-lg @error('last_name')
                            border-red-500 @enderror" value="{{ old('last_name') }}">

                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

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
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" name="email" id="email" placeholder="Your email"
                            class="bg-indigo-200 border-2 w-full p-4 rounded-lg @error('email')
                            border-red-500 @enderror" value="{{ old('email') }}">

                            @error('email')
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

                        <div class="mb-4">
                            <label for="password_confirmation" class="sr-only">Password again</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Repeat your password" class="bg-indigo-200 border-2 w-full p-4 rounded-lg @error('password_confirmation')
                            border-red-500 @enderror" value="">

                            @error('password_confirmation')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>