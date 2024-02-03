<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <meta name="theme-color" content="#ffffff"/>
        <link rel="manifest" href="/site.webmanifest">

        <title>Weight-Tracker</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app">
            @include('notifications')

            <div class="flex-none sm:flex h-screen">
                @include('user_panel', [
                    'user' => $user2
                ])

                @include('chart_panel', [
                    'data' => $data,
                    'labels' => $labels
                ])

                @include('user_panel', [
                    'user' => $user1
                ])
            </div>
        </div>
    </body>
</html>
