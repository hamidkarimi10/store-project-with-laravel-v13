<!doctype html>
<html lang="fa" dir="rtl" class="dark">

<head>
    @include('admin.layouts.head-tag')
</head>

<body class="bg-[#000814] text-slate-100 min-h-screen selection:bg-blue-600/30">
    <div class="fixed inset-0 -z-20 bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1557683316-973673baf926?q=90&w=2400&auto=format&fit=crop');">
    </div>
    <div
        class="fixed inset-0 -z-10 bg-gradient-to-b from-[#000814]/[0.99] via-[#000814]/[0.992] to-[#000814]/[0.996] backdrop-blur-sm">
    </div>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('admin.layouts.partials.sidebar')

        <!-- Main -->
        <div class="flex w-full flex-col xl:pr-72">
            <!-- Topbar -->
            @include('admin.layouts.partials.header')

            <!-- Content -->
            <main class="mx-auto w-full max-w-7xl px-4 py-8">

                @yield('content')

            </main>
        </div>
    </div>

    @include('admin.layouts.scripts')
</body>

</html>
