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
            <header></header>
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
