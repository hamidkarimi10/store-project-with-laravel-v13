@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">ویرایش منو</h1>
            <p class="mt-1 text-slate-400">اطلاعات منو را ویرایش کنید.</p>
        </div>
        <a href="{{ route('admin.menus.index') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            بازگشت به لیست منوها
        </a>
    </div>

    <section class="mt-6 glass rounded-2xl p-5 sm:p-6">
        <div class="mb-6">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="bg-red-500/10 border border-red-500/20 rounded-xl p-4">
                        <p class="text-sm text-slate-400">{{ $error }}</p>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="mb-6 border-b border-white/10 pb-4">
            <h2 class="font-bold text-slate-100">اطلاعات منو</h2>
            <p class="mt-1 text-sm text-slate-400">فیلدهای ستاره‌دار الزامی هستند.</p>
        </div>

        <form action="{{ route('admin.menus.update', $menu->id) }}" method="post" class="space-y-6">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="space-y-2 sm:col-span-2">
                    <label for="title" class="block text-sm font-medium text-slate-300">عنوان منو <span
                            class="text-rose-400">*</span></label>
                    <input type="text" id="title" name="title" value="{{ old('title', $menu->title) }}"
                        placeholder="مثلاً: محصولات"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
                <div class="space-y-2 sm:col-span-2">
                    <label for="url" class="block text-sm font-medium text-slate-300">لینک <span
                            class="text-rose-400">*</span></label>
                    <input type="text" id="url" name="url" value="{{ old('url', $menu->url) }}"
                        placeholder="مثلاً: /products"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
                <div class="space-y-2">
                    <label for="parent_id" class="block text-sm font-medium text-slate-300">منوی والد</label>
                    <select id="parent_id" name="parent_id"
                        class="w-full rounded-xl border border-white/10 bg-white/5 ps-4 pe-10 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="" class="bg-slate-900" @selected(old('parent_id', $menu->parent_id) === null)>بدون والد</option>
                        @foreach ($parentMenus as $parentMenu)
                            <option value="{{ $parentMenu->id }}" class="bg-slate-900" @selected((int) old('parent_id', $menu->parent_id) === $parentMenu->id)>
                                {{ $parentMenu->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="space-y-2">
                    <label for="location" class="block text-sm font-medium text-slate-300">موقعیت <span
                            class="text-rose-400">*</span></label>
                    <select id="location" name="location"
                        class="w-full rounded-xl border border-white/10 bg-white/5 ps-4 pe-10 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="header" class="bg-slate-900" @selected(old('location', $menu->location) === 'header')>هدر</option>
                        <option value="footer" class="bg-slate-900" @selected(old('location', $menu->location) === 'footer')>فوتر</option>
                        <option value="sidebar" class="bg-slate-900" @selected(old('location', $menu->location) === 'sidebar')>سایدبار</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label for="sort_order" class="block text-sm font-medium text-slate-300">ترتیب نمایش</label>
                    <input type="number" id="sort_order" name="sort_order" min="0"
                        value="{{ old('sort_order', $menu->sort_order) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
                <div class="space-y-2">
                    <label for="target" class="block text-sm font-medium text-slate-300">نحوه باز شدن لینک</label>
                    <select id="target" name="target"
                        class="w-full rounded-xl border border-white/10 bg-white/5 ps-4 pe-10 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="_self" class="bg-slate-900" @selected(old('target', $menu->target) === '_self')>همان صفحه</option>
                        <option value="_blank" class="bg-slate-900" @selected(old('target', $menu->target) === '_blank')>صفحه جدید</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label for="status" class="block text-sm font-medium text-slate-300">وضعیت <span
                            class="text-rose-400">*</span></label>
                    <select id="status" name="status"
                        class="w-full rounded-xl border border-white/10 bg-white/5 ps-4 pe-10 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="1" class="bg-slate-900" @selected((int) old('status', $menu->status) === 1)>فعال</option>
                        <option value="0" class="bg-slate-900" @selected((int) old('status', $menu->status) === 0)>غیرفعال</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label for="icon" class="block text-sm font-medium text-slate-300">آیکون</label>
                    <input type="text" id="icon" name="icon" value="{{ old('icon', $menu->icon) }}"
                        placeholder="مثلاً: home"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
            </div>
            <div class="flex flex-col-reverse gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-end">
                <a href="{{ route('admin.menus.index') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">انصراف</a>
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-5 py-2.5 text-sm font-medium text-white hover:opacity-95 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    ویرایش منو
                </button>
            </div>
        </form>
    </section>
@endsection
