@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">جزئیات کاربر</h1>
            <p class="mt-1 text-slate-400">مشاهده اطلاعات کاربر و آدرس‌های ثبت‌شده.</p>
        </div>
        <div class="flex flex-wrap items-center gap-2">
            <a href="#"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M18.5 2.5a2.12 2.12 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                </svg>
                ویرایش کاربر
            </a>
            <a href="#"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                بازگشت به لیست
            </a>
        </div>
    </div>

    <section class="mt-6 glass rounded-2xl p-5 sm:p-6">
        <div class="mb-6 border-b border-white/10 pb-4">
            <h2 class="font-bold text-slate-100">اطلاعات کاربر</h2>
            <p class="mt-1 text-sm text-slate-400">اطلاعات پایه حساب کاربری.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">نام</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">علی رضایی</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">ایمیل</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">
                    ali.rezaei@example.com</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">موبایل</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">۰۹۱۲۱۲۳۴۵۰۱</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">وضعیت ایمیل</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">
                    <span class="rounded-lg bg-green-500/10 px-2 py-1 text-xs text-green-300">تایید شده</span>
                    <span class="mr-2 text-slate-400">(۱۴۰۴/۰۶/۲۹)</span>
                </p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">تاریخ عضویت</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">۱۴۰۴/۰۶/۲۹</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">آخرین بروزرسانی</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">۱۴۰۴/۰۶/۳۰</p>
            </div>
        </div>
    </section>

    <section class="mt-6 glass rounded-2xl p-5">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h2 class="font-bold text-slate-100">آدرس‌های کاربر</h2>
                <p class="mt-1 text-sm text-slate-400">۲ آدرس ثبت‌شده</p>
            </div>
            <a href="#"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-4 py-2 text-sm font-medium text-white hover:opacity-95 transition-opacity">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                افزودن آدرس
            </a>
        </div>

        <div class="mt-4 overflow-x-auto rounded-xl border border-white/5">
            <table class="min-w-full text-sm">
                <thead class="bg-white/5 text-slate-300">
                    <tr class="text-right">
                        <th class="px-4 py-3 font-medium whitespace-nowrap">شناسه</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">عنوان</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">آدرس</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">شهر</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">استان</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">کد پستی</th>
                        <th class="px-4 py-3 font-medium text-center whitespace-nowrap">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="px-4 py-3 text-slate-400">۱</td>
                        <td class="px-4 py-3 font-medium text-slate-100">منزل</td>
                        <td class="px-4 py-3 max-w-xs text-slate-400">خیابان ولیعصر، کوچه نگار، پلاک ۱۲، واحد ۳</td>
                        <td class="px-4 py-3 text-slate-400">تهران</td>
                        <td class="px-4 py-3 text-slate-400">تهران</td>
                        <td class="px-4 py-3 text-slate-400 whitespace-nowrap">۱۴۱۷۸۱۲۳۴۵</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center justify-center gap-1">
                                <a href="#" title="مشاهده"
                                    class="inline-flex size-9 items-center justify-center rounded-lg text-slate-400 hover:bg-emerald-500/15 hover:text-emerald-300 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                </a>
                                <a href="#" title="ویرایش"
                                    class="inline-flex size-9 items-center justify-center rounded-lg text-slate-400 hover:bg-blue-500/15 hover:text-blue-300 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M18.5 2.5a2.12 2.12 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="px-4 py-3 text-slate-400">۲</td>
                        <td class="px-4 py-3 font-medium text-slate-100">محل کار</td>
                        <td class="px-4 py-3 max-w-xs text-slate-400">خیابان آزادی، برج میلاد، طبقه ۱۲، واحد ۱۲۰۳</td>
                        <td class="px-4 py-3 text-slate-400">تهران</td>
                        <td class="px-4 py-3 text-slate-400">تهران</td>
                        <td class="px-4 py-3 text-slate-400 whitespace-nowrap">۱۳۸۷۶۱۲۳۴۵</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center justify-center gap-1">
                                <a href="#" title="مشاهده"
                                    class="inline-flex size-9 items-center justify-center rounded-lg text-slate-400 hover:bg-emerald-500/15 hover:text-emerald-300 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                </a>
                                <a href="#" title="ویرایش"
                                    class="inline-flex size-9 items-center justify-center rounded-lg text-slate-400 hover:bg-blue-500/15 hover:text-blue-300 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M18.5 2.5a2.12 2.12 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
