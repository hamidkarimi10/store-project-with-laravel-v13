@extends('admin.layouts.master')

@section('content')
    <div class="flex items-end justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">خوش آمدید 👋</h1>
            <p class="mt-1 text-slate-400">چشم‌انداز کلی کسب‌وکار شما در یک نگاه.</p>
        </div>
        <button
            class="hidden sm:inline-flex items-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-4 py-2 font-medium text-white hover:opacity-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            افزودن گزارش
        </button>
    </div>

    <!-- KPI Cards -->
    <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <div class="glass rounded-2xl p-5">
            <div class="flex items-center justify-between">
                <div class="text-sm text-slate-400">درآمد امروز</div>
                <span class="inline-flex items-center gap-1 text-emerald-400 text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7 7 7" />
                    </svg>
                    ۵.۴٪
                </span>
            </div>
            <div class="mt-3 text-3xl font-extrabold tracking-tight">۲۴٬۸۵۰٬۰۰۰ تومان</div>
            <div class="mt-4 h-12 w-full overflow-hidden rounded-xl bg-white/5">
                <svg viewBox="0 0 400 48" class="w-full h-full">
                    <polyline fill="url(#g1)" stroke="none"
                        points="0,48 0,34 25,36 50,22 75,30 100,18 125,28 150,16 175,22 200,14 225,24 250,20 275,26 300,21 325,25 350,19 375,23 400,20 400,48" />
                    <defs>
                        <linearGradient id="g1" x1="0" x2="0" y1="0" y2="1">
                            <stop offset="0%" stop-color="#60a5fa" stop-opacity="0.6" />
                            <stop offset="100%" stop-color="#2563eb" stop-opacity="0.05" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
        <div class="glass rounded-2xl p-5">
            <div class="flex items-center justify-between">
                <div class="text-sm text-slate-400">کاربران فعال</div>
                <span class="inline-flex items-center gap-1 text-emerald-400 text-xs">+۱٬۲۳۰</span>
            </div>
            <div class="mt-3 text-3xl font-extrabold tracking-tight">۵۳٬۱۲۸</div>
            <div class="mt-4 flex h-12 items-end gap-1">
                <div class="h-6 w-3 rounded bg-blue-500/60"></div>
                <div class="h-9 w-3 rounded bg-blue-500/60"></div>
                <div class="h-8 w-3 rounded bg-blue-500/60"></div>
                <div class="h-10 w-3 rounded bg-blue-500"></div>
                <div class="h-7 w-3 rounded bg-blue-500/60"></div>
                <div class="h-11 w-3 rounded bg-blue-500"></div>
                <div class="h-9 w-3 rounded bg-blue-500/60"></div>
            </div>
        </div>
        <div class="glass rounded-2xl p-5">
            <div class="flex items-center justify-between">
                <div class="text-sm text-slate-400">نرخ تبدیل</div>
                <span class="inline-flex items-center gap-1 text-rose-300 text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7-7-7" />
                    </svg>
                    ۰.۸٪-
                </span>
            </div>
            <div class="mt-3 text-3xl font-extrabold tracking-tight">۳.۹٪</div>
            <div class="mt-4 h-12 w-full overflow-hidden rounded-xl bg-white/5">
                <div class="h-full w-[38%] bg-gradient-to-l from-indigo-600 to-blue-600"></div>
            </div>
        </div>
        <div class="glass rounded-2xl p-5">
            <div class="flex items-center justify-between">
                <div class="text-sm text-slate-400">سفارشات امروز</div>
                <span class="inline-flex items-center gap-1 text-emerald-400 text-xs">+۲۳</span>
            </div>
            <div class="mt-3 text-3xl font-extrabold tracking-tight">۸۷۶</div>
            <div class="mt-4 grid grid-cols-7 gap-1">
                <div class="h-2.5 rounded bg-blue-500/70"></div>
                <div class="h-2.5 rounded bg-blue-500/70"></div>
                <div class="h-2.5 rounded bg-blue-500"></div>
                <div class="h-2.5 rounded bg-blue-500/60"></div>
                <div class="h-2.5 rounded bg-blue-500"></div>
                <div class="h-2.5 rounded bg-blue-500/70"></div>
                <div class="h-2.5 rounded bg-blue-500/60"></div>
            </div>
        </div>
    </div>

    <!-- Charts + Feed -->
    <div class="mt-6 grid grid-cols-1 gap-4 lg:grid-cols-3">
        <section class="glass rounded-2xl p-5 lg:col-span-2">
            <div class="flex items-center justify-between">
                <h2 class="font-bold">روند فروش</h2>
                <div class="flex items-center gap-2 text-xs text-slate-400">
                    <span class="inline-flex items-center gap-1 rounded-lg bg-white/5 px-2 py-1">۷ روز گذشته</span>
                    <span class="hidden sm:inline">·</span>
                    <span class="hidden sm:inline">میانگین: ۱۲٬۸۳۰</span>
                </div>
            </div>
            <canvas id="salesChart" class="mt-4 h-64 w-full"></canvas>
        </section>

        <section class="glass rounded-2xl p-5">
            <h2 class="font-bold">فعالیت‌های اخیر</h2>
            <ul class="mt-4 space-y-3">
                <li class="flex items-center gap-3 rounded-xl bg-white/5 p-3">
                    <span class="size-2.5 rounded-full bg-emerald-400"></span>
                    پرداخت جدید از «محمد ر.» به مبلغ ۱٬۲۰۰٬۰۰۰ تومان
                </li>
                <li class="flex items-center gap-3 rounded-xl bg-white/5 p-3">
                    <span class="size-2.5 rounded-full bg-blue-400"></span>
                    ثبت نام کاربر جدید «نگار ش.»
                </li>
                <li class="flex items-center gap-3 rounded-xl bg-white/5 p-3">
                    <span class="size-2.5 rounded-full bg-amber-400"></span>
                    هشدار سطح موجودی انبار «کالای A»
                </li>
                <li class="flex items-center gap-3 rounded-xl bg-white/5 p-3">
                    <span class="size-2.5 rounded-full bg-rose-400"></span>
                    بازگشت سفارش شماره ۹۸۲۳
                </li>
            </ul>
        </section>
    </div>

    <!-- Table -->
    <section class="mt-6 glass rounded-2xl p-5">
        <div class="flex items-center justify-between">
            <h2 class="font-bold">سفارشات اخیر</h2>
            <button class="text-sm text-blue-300 hover:text-blue-200">مشاهده همه</button>
        </div>
        <div class="mt-4 overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="text-slate-300">
                    <tr class="text-right">
                        <th class="px-3 py-2 font-medium">شناسه</th>
                        <th class="px-3 py-2 font-medium">مشتری</th>
                        <th class="px-3 py-2 font-medium">مبلغ</th>
                        <th class="px-3 py-2 font-medium">وضعیت</th>
                        <th class="px-3 py-2 font-medium">تاریخ</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    <tr class="hover:bg-white/5">
                        <td class="px-3 py-3">#۹۸۲۳</td>
                        <td class="px-3 py-3">نگین رستگار</td>
                        <td class="px-3 py-3">۱٬۲۰۰٬۰۰۰</td>
                        <td class="px-3 py-3"><span
                                class="rounded-lg bg-emerald-500/15 px-2 py-1 text-emerald-300">موفق</span></td>
                        <td class="px-3 py-3">۱۴۰۳/۰۴/۱۴</td>
                    </tr>
                    <tr class="hover:bg-white/5">
                        <td class="px-3 py-3">#۹۸۲۲</td>
                        <td class="px-3 py-3">محمد رضوی</td>
                        <td class="px-3 py-3">۸۴۰٬۰۰۰</td>
                        <td class="px-3 py-3"><span class="rounded-lg bg-amber-500/15 px-2 py-1 text-amber-300">در
                                انتظار</span></td>
                        <td class="px-3 py-3">۱۴۰۳/۰۴/۱۴</td>
                    </tr>
                    <tr class="hover:bg-white/5">
                        <td class="px-3 py-3">#۹۸۲۱</td>
                        <td class="px-3 py-3">الهام سادات</td>
                        <td class="px-3 py-3">۲٬۴۹۰٬۰۰۰</td>
                        <td class="px-3 py-3"><span
                                class="rounded-lg bg-rose-500/15 px-2 py-1 text-rose-300">ناموفق</span></td>
                        <td class="px-3 py-3">۱۴۰۳/۰۴/۱۳</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
