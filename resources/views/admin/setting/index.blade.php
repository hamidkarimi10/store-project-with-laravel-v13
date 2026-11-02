@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">تنظیمات</h1>
            <p class="mt-1 text-slate-400">مدیریت تنظیمات عمومی فروشگاه و سایت.</p>
        </div>
    </div>

    <section class="mt-6 glass rounded-2xl p-5">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="font-bold text-slate-100">همه تنظیمات</h2>
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                <div class="flex flex-wrap gap-2">
                    <button type="button"
                        class="rounded-lg border border-blue-500/30 bg-blue-500/10 px-3 py-1.5 text-xs font-medium text-blue-300">
                        همه
                    </button>

                </div>
                <div class="relative w-full sm:max-w-xs">
                    <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
                        </svg>
                    </span>
                    <input type="search" placeholder="جستجو در تنظیمات…"
                        class="w-full rounded-xl border border-white/10 bg-white/5 py-2 pr-10 pl-3 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
            </div>
        </div>

        <div class="mt-4 overflow-x-auto rounded-xl border border-white/5">
            <table class="min-w-full text-sm">
                <thead class="bg-white/5 text-slate-300">
                    <tr class="text-right">
                        <th class="px-4 py-3 font-medium whitespace-nowrap">شناسه</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">عنوان</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">توضیحات</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">تصویر</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">آیکون</th>
                        <th class="px-4 py-3 font-medium text-center whitespace-nowrap">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="px-4 py-3 text-slate-400">{{ $setting->id }}</td>
                        <td class="px-4 py-3 font-medium text-slate-100">{{ $setting->title }}</td>
                        <td class="px-4 py-3 font-mono text-xs text-slate-400">{{ $setting->description }}</td>
                        <td class="px-4 py-3">
                            @if ($setting->logo)
                                <img src="{{ asset($setting->logo) }}" alt="{{ $setting->title }}"
                                    class="w-10 h-10 rounded-full">
                            @endif
                        </td>
                        <td class="px-4 py-3">
                            @if ($setting->icon)
                                <img src="{{ asset($setting->icon) }}" alt="{{ $setting->title }}"
                                    class="w-10 h-10 rounded-full">
                            @endif
                        </td>


                        <td class="px-4 py-3">
                            <div class="flex items-center justify-center">
                                <a href="{{ route('admin.setting.edit', $setting->id) }}" title="ویرایش"
                                    class="inline-flex size-9 items-center justify-center rounded-lg text-slate-400 hover:bg-blue-500/15 hover:text-blue-300 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.6">
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
