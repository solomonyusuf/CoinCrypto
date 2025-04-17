@php
    $setting = \App\Models\AppSetting::first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->name }} Auth</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset($setting->logo) }}" />

    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
    <style>
        :root {
            --font-sans: 'neueHaas', 'neueHaas Fallback';
            --font-serif: 'family', 'family Fallback';
            --font-mono: 'dmMono', 'dmMono Fallback';
        }
    </style>

</head>
<body class="flex items-center justify-center min-h-screen bg-gray-300">
    @include('sweetalert::alert')
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        
        <!-- Logo -->
        <div class="flex justify-center mb-6 mt-3">
            <img src="{{ asset($setting->logo) }}" style="height:100px;width:150px;" alt="Logo" class="w-40 h-10">
        </div>

        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>
