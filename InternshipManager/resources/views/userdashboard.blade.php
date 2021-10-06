<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User Dashboard</title>            
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-indigo-500">
        <div class="bg-indigo-700 p-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="/img/logo1.png" width="50" alt="Logo" class="mr-2">
                <li>
                <a href="" class="inline-block p-2 text-indigo-200 hover:text-indigo-100 mr-2">Home</a>
                </li>
                <li>       
                <a href="#" class="flex justify-center text-indigo-400 capitalize text-lg">User Dashboard</a>    
                </li>
                @auth
                {{-- <li> --}}
                    {{-- <a href="" class="p-3"> {{auth()->user()->name}}</a> --}}
                {{-- </li> --}}
                <li>
                    <form action="{{ route('logout') }}" method="get" class=" p-3 inline">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    
                </li>  
                @endauth    
            </div>
        </div>        
    </body>
</html>