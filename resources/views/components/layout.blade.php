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
    <meta name="theme-color" content="#ffffff" />
    <link rel="manifest" href="/site.webmanifest">

    <title>Weight-Tracker</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="pull-to-refresh">
        <span>Reloading...</span>
    </div>
    {{ $slot }}
</body>

<script type="text/javascript">
    const pullToRefresh = document.querySelector('.pull-to-refresh');
    let touchstartY = 0;

    document.addEventListener('touchstart', e => {
        touchstartY = e.touches[0].clientY;
    });

    document.addEventListener('touchmove', e => {
        const touchY = e.touches[0].clientY;
        const touchDiff = touchY - touchstartY;
        if (touchDiff > 0 && window.scrollY === 0) {
            pullToRefresh.classList.add('visible');
        }
    });

    document.addEventListener('touchend', e => {
        if (pullToRefresh.classList.contains('visible')) {
            pullToRefresh.classList.remove('visible');
            location.reload();
        }
    });
</script>

@stack('scripts')

</html>
