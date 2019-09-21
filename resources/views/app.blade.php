<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app" class="flex flex-col min-h-screen h-screen bg-gray-200">
            <header class="bg-white">
                <nav class="flex justify-between w-full">
                    <div class="w-64 px-4 bg-gray-300"></div>
                    <div class="flex flex-row flex-no-wrap items-center justify-bewteen flex-1 px-8 py-3">
                        <div>
                            <input class="block w-full max-w-xs border border-transparent bg-gray-100 border-gray-300 text-gray-900 rounded-lg pl-10 pr-4 py-2">
                        </div>
                        <div class="flex items-center justify-between ml-auto mr-0">
                            <ul class="flex flex-row items-center justify-between">
                                <li>
                                    <a href="#">Messages</a>
                                </li>
                                <li class="ml-4">
                                    <a href="#">Saved Jobs</a>
                                </li>
                            </ul>
                            <button class="w-8 h-8 ml-8 rounded-full overflow-hidden" aria-labeledby="id">
                                <span id="account" hidden>My Account</span>
                                <img class="w-full h-full object-cover" src="https://pbs.twimg.com/profile_images/996570710305685504/DK-JzW4X.jpg">
                            </button>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="flex flex-1 overflow-y-hidden">
                <aside class="w-64 p-4 bg-gray-300">
                    <form>
                        <label>
                            <span class="block">State</span>
                            <select class="w-full">
                                <option>California</option>
                            </select>
                        </label>
                    </form>
                </aside>
                <main class="flex-1 py-6 overflow-x-hidden">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
