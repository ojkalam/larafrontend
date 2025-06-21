
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @routes
    @viteReactRefresh
    @vite( entrypoints: ['resources/css/app.css', 'resources/js/app.js'])
    {{-- dynamic component loading : "resources/js/Pages/{$page['component']}.vue --}}
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
