<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'App' }}</title>
    
    <!-- WireUI -->
    @wireUiScripts

    <!-- Resources -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="dark:bg-dark-main bg-main dark:text-dark-text-primary">

    <div class="flex flex-col h-screen" x-data="themeSwitcher()" x-init="init()">
        <!-- Navbar -->
        <div class="border-b-[1px] border-slate-700 z-10">
            <x-partials.navbar />
        </div>

        <!-- Main content area with max-w -->
        <div class="flex flex-1 max-w-7xl mx-auto w-full space-x-8 overflow-hidden">
            <!-- Sidebar -->
            <x-partials.sidebar />

            <!-- Content -->
            <div class="w-full pt-8">

                <!-- Title -->
                <div class="text-2xl mb-4">
                    @if (isset($title))
                        <span>{{$title}}</span>
                    @endif
                </div>

                <!-- Body -->
                <div class="s">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('themeSwitcher', () => ({
                darkMode: false,
                init() {
                    this.darkMode = localStorage.getItem('darkMode') === 'true';
                    this.updateTheme();
                },
                toggleTheme() {
                    this.darkMode = !this.darkMode;
                    localStorage.setItem('darkMode', this.darkMode);
                    this.updateTheme();
                },
                updateTheme() {
                    if (this.darkMode) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                }
            }));
        });
    </script>
</body>

</html>