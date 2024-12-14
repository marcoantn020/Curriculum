<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100 dark:bg-gray-800">
            <x-site.header />
            <x-site.empty />

            <main class="container mx-auto space-y-5">
                {{ $slot }}
            </main>

        </div>

        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>


        <script>
            const tabsElement = document.getElementById('tabs-certificate');

            // create an array of objects with the id, trigger element (eg. button), and the content element
            const tabElements = [
                {
                    id: 'php',
                    triggerEl: document.querySelector('#tab-php'),
                    targetEl: document.querySelector('#php'),
                },
                {
                    id: 'java',
                    triggerEl: document.querySelector('#tab-java'),
                    targetEl: document.querySelector('#java'),
                },
                {
                    id: 'python',
                    triggerEl: document.querySelector('#tab-python'),
                    targetEl: document.querySelector('#python'),
                },
                {
                    id: 'frontend',
                    triggerEl: document.querySelector('#tab-frontend'),
                    targetEl: document.querySelector('#frontend'),
                },
                {
                    id: 'aws',
                    triggerEl: document.querySelector('#tab-aws'),
                    targetEl: document.querySelector('#aws'),
                },
                {
                    id: 'behavior',
                    triggerEl: document.querySelector('#tab-behavior'),
                    targetEl: document.querySelector('#behavior'),
                },
                {
                    id: 'fullcycle',
                    triggerEl: document.querySelector('#tab-fullcycle'),
                    targetEl: document.querySelector('#fullcycle'),
                },
                {
                    id: 'others',
                    triggerEl: document.querySelector('#tab-others'),
                    targetEl: document.querySelector('#others'),
                },
            ];

            // options with default values
            const options = {
                defaultTabId: 'php',
                activeClasses:
                    'text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500',
                inactiveClasses:
                    'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',
                onShow: () => {
                    console.log('tab is shown');
                },
            };

            // instance options with default values
            const instanceOptions = {
            id: 'tabs-example',
            override: true
            };

        </script>


    </body>
</html>
