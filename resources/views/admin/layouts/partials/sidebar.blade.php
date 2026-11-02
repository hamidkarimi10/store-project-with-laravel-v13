<aside id="sidebar"
    class="fixed right-0 top-0 z-30 h-full w-72 translate-x-0 glass border-l border-slate-800/60 transition-transform xl:translate-x-0">
    <div class="flex items-center justify-between px-5 pt-5 pb-4">
        <div class="flex items-center gap-3">
            <div class="size-9 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-700 glow"></div>
            <div class="text-lg font-bold tracking-tight">پنل مدیریت</div>
        </div>
        <button id="closeSidebar"
            class="xl:hidden inline-flex size-9 items-center justify-center rounded-lg hover:bg-white/5">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <nav class="px-3">
        <a href="{{ route('admin.index') }}"
            class="nav-link group flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-9 9 9M4.5 10.5V21h15V10.5" />
                </svg>
            </span>
            <span class="font-medium">
                داشبورد
            </span>
        </a>
        <a href="{{ route('admin.categories.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 14c-4.418 0-8 2.239-8 5v1h16v-1c0-2.761-3.582-5-8-5z" />
                </svg>
            </span>
            <span class="font-medium">دسته بندی ها</span>
        </a>
        <a href="{{ route('admin.users.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </span>
            <span class="font-medium">کاربران</span>
        </a>
        <a href="{{ route('admin.addresses.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </span>
            <span class="font-medium">آدرس‌ها</span>
        </a>
        <a href="{{ route('admin.cities.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </span>
            <span class="font-medium">شهرها</span>
        </a>
        <a href="{{ route('admin.menus.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </span>
            <span class="font-medium">منوها</span>
        </a>
        <a href="{{ route('admin.discounts.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </span>
        <span class="font-medium">تخفیفات</span>
        </a>
        <a href="{{ route('admin.deliveries.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10m10 0h4l3 3V9a1 1 0 00-1-1h-3m-6 8H4m10 0v-3a1 1 0 011-1h2a1 1 0 011 1v3" />
                </svg>
            </span>
            <span class="font-medium">روش‌های ارسال</span>
        </a>
        <a href="analytics.html"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 15l3-3 2 2 4-5 3 4" />
                </svg>
            </span>
            <span class="font-medium">گزارش‌ها</span>
        </a>
        <a href="{{ route('admin.setting.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h3M4.5 12h15M9 18h6" />
                </svg>
            </span>
            <span class="font-medium">تنظیمات</span>
        </a>
        <a href="{{ route('admin.products.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <rect x="3" y="3" width="7" height="7" />
                    <rect x="14" y="3" width="7" height="7" />
                    <rect x="14" y="14" width="7" height="7" />
                    <rect x="3" y="14" width="7" height="7" />
                </svg>
            </span>
            <span class="font-medium">محصولات</span>
        </a>
        <a href="{{ route('admin.orders.index') }}"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path d="M6 2h12v4H6z" />
                    <path d="M4 6h16v14H4z" />
                </svg>
            </span>
            <span class="font-medium">سفارش‌ها</span>
        </a>
        <a href="components.html"
            class="nav-link group mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path d="M6 8h12M6 12h12M6 16h12" />
                </svg>
            </span>
            <span class="font-medium">کامپوننت‌ها</span>
        </a>
        <a href="support.html"
            class="nav-link group mt-1 mb-2 flex items-center gap-3 rounded-xl px-4 py-3 text-slate-200 hover:bg-white/5">
            <span
                class="inline-flex size-8 items-center justify-center rounded-lg bg-blue-500/15 text-blue-400 ring-1 ring-inset ring-blue-400/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path d="M12 2a10 10 0 100 20 10 10 0 000-20z" />
                    <path d="M12 6v6l4 2" />
                </svg>
            </span>
            <span class="font-medium">پشتیبانی</span>
        </a>

    </nav>
    <div class="mt-auto p-4 hidden xl:block">
        <div class="glass rounded-2xl p-4">
            <div class="text-sm text-slate-300">فضای مصرفی</div>
            <div class="mt-3 h-2 w-full rounded-full bg-white/10">
                <div class="h-2 rounded-full bg-gradient-to-l from-blue-600 to-indigo-600" style="width: 62%"></div>
            </div>
            <div class="mt-2 text-xs text-slate-400">۶۲٪ از ۱۰ گیگابایت</div>
        </div>
    </div>
</aside>
