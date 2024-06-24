<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/robsontenorio/mary@0.44.2/libs/currency/currency.js">
    </script>
    <style>
        /* Active page highlight */
        .mary-table-pagination span[aria-current="page"]>span {
            @apply bg-primary text-base-100
        }

        /* For dark mode*/
        .mary-table-pagination span[aria-disabled="true"] span {
            @apply bg-inherit
        }

        /* For dark mode*/
        .mary-table-pagination button {
            @apply bg-base-100
        }
    </style>
</head>

<body class="min-h-screen font-sans antialiased bg-base-200/50 dark:bg-base-200">
    <x-main full-width>
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>
    <x-toast />
</body>

</html>
