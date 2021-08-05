<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-Roboto antialised">
<header class="bg-white divide-y ml-18 border-b fixed inset-x-0">
    <div class="flex justify-between items-center h-14 mx-4">
        <div class="ml-10" style="margin-left: 60px; padding: 5px">
            <img src="{{asset('img/logo.png')}}" alt="Teezerbazar logo" class="w-20 h-12">
        </div>
        <div class="flex items-center justify-center flex-grow">
            <input type="text" placeholder="Search" class="border border-gray-400 h-8  px-1 py-2 focus:outline-none focus:border-blue-600 w-3/5">
            <button class="bg-gray-200 flex items-center justify-center h-8 w-16 border border-gray-400 border-l-0 hover:bg-gray-300">
                <i class="material-icons">search</i>
            </button>
        </div>
        <div class="flex items-center justify-center space-x-4">
            <button class="flex items-center justify-center" title="Cinema">
                <i class="material-icons">video_call</i>
            </button>
            <button class="flex items-center justify-center" title="Notifications">
                <i class="material-icons">notifications</i>
            </button>
            <button>
                <div>
                    {{--                    <img class="object-cover" src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">--}}
                    @if(Auth::check())
                        <a href="{{route('dashboard')}}" class="label label-info"> Hello {{ Auth::user()->name }}!</a>
                    @else
                        <a href="{{route('login')}}" class="bg-blue-500 rounded h-64 w-64" title="sign in">
                           <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                               </svg> </span>
                        </a>
                    @endif
                </div>
            </button>
        </div>
    </div>
    <div class="flex ml-10 items-end px-5 py-3 px-4 space-x-5 select-none justify-end">
        <span class="text-sm bg-gray-500 border border-gray-800 rounded-full px-2 py-1 text-gray-200 shadow-inner">All Recommendations</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">Tailwindcss</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">Javascript</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">Wrestling</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">Python</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">Coding</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">News</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">CSS</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">Computer Science</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">Comedy</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounrded-full px-2 py-1 text-gray-800 shadow-inner">Fiction</span>
        <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2 py-1 text-gray-800 shadow-inner">Horror</span>

    </div>
</header>
<aside class="fixed top-20 w-18 h-screen bg-white flex items-center flex-col mt-4 text-gray-700">
    <button><i class="material-icons">menu</i></button>
    <div class="mt-6 w-full">
        <button class="flex items-center justify-center flex-col hover:bg-gray-200 w-full py-4 text-red-600">
            <i class="material-icons small">home</i>
            <span class="text-xs">Dashboard</span>
        </button>
        <button class="flex items-center justify-center flex-col hover:bg-gray-200 w-full py-4">
            <i class="material-icons small">local_fire_department</i>
            <span class="text-xs">Trending</span>
        </button>
        <button class="flex items-center justify-center flex-col hover:bg-gray-200 w-full py-4">
            <i class="material-icons small">subscriptions</i>
            <span class="text-xs">Subscriptions</span>
        </button>
        <button class="flex items-center justify-center flex-col hover:bg-gray-200 w-full py-4">
            <i class="material-icons small">video_library</i>
            <span class="text-xs">Library</span>
        </button>
        <button class="flex items-center justify-center flex-col hover:bg-gray-200 w-full py-4">
            <i class="material-icons small">video_library</i>
            <span class="text-xs">Cinema</span>
        </button>
    </div>
</aside>
<main class="ml-32 pt-32 top-10">
    <div class="border-b-4 border-gray-300 border-opacity-75 pb-12">

        <div class="mt-4 grid grid-cols-4 row-gap-4 col-gap-2">

            <div class="">
                <div class="h-40 w-full bg-gray-700 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="">
                </div>
                <div class="flex mt-2">
                    <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden" >
                        <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                        <div class="text-xs text-gray-600">
                            <p>Channel Name</p>
                            <p>9 hours ago &middot; 87k views</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
{{--    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"--}}
{{--         width="104.000000pt" height="55.000000pt" viewBox="0 0 104.000000 55.000000"--}}
{{--         preserveAspectRatio="xMidYMid meet">--}}

{{--        <g transform="translate(0.000000,55.000000) scale(0.100000,-0.100000)"--}}
{{--           fill="#000000" stroke="none">--}}
{{--            <path d="M41 524 l-31 -26 0 -219 0 -220 26 -24 27 -25 454 0 454 0 24 25 c18--}}
{{--17 25 35 25 62 1 21 1 119 0 218 l0 180 -30 28 -30 27 -444 0 -444 0 -31 -26z--}}
{{--m516 -186 c32 -30 31 -81 -2 -113 -39 -39 -86 -32 -111 17 -42 80 48 157 113--}}
{{--96z m338 -208 c3 -5 15 -10 27 -10 15 0 19 -5 15 -20 -3 -11 -1 -20 4 -20 5 0--}}
{{--9 -4 9 -10 0 -5 -14 -10 -31 -10 -24 0 -29 3 -21 13 7 8 6 16 -4 25 -12 11--}}
{{---14 9 -14 -13 0 -16 -6 -25 -15 -25 -8 0 -15 8 -15 18 0 9 -3 27 -6 40 -5 19--}}
{{---2 22 19 22 14 0 29 -4 32 -10z"/>--}}
{{--            <path d="M480 286 c0 -53 11 -57 53 -23 l29 22 -41 23 -41 23 0 -45z"/>--}}
{{--        </g>--}}
{{--    </svg>--}}
</main>

</body>
</html>
