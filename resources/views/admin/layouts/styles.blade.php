@section('styles')
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script>
        tailwind = window.tailwind || {};
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Vazirmatn', 'ui-sans-serif', 'system-ui', 'Segoe UI', 'Roboto', 'Arial', 'sans-serif']
                    }
                }
            }
        };
    </script>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('admin-assets/assets/css/base.css') }}" />
@show
