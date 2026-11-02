@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">افزودن محصول</h1>
            <p class="mt-1 text-slate-400">اطلاعات محصول جدید را وارد کنید.</p>
        </div>
        <a href="{{ route('admin.products.index') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            بازگشت به لیست
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
            <h2 class="font-bold text-slate-100">اطلاعات محصول</h2>
            <p class="mt-1 text-sm text-slate-400">فیلدهای ستاره‌دار الزامی هستند.</p>
        </div>

        <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="space-y-2 sm:col-span-2">
                    <label for="name" class="block text-sm font-medium text-slate-300">
                        نام محصول
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="text" id="name" value="{{ old('name') }}" name="name"
                        placeholder="مثلاً: گوشی سامسونگ A54"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="category_id" class="block text-sm font-medium text-slate-300">
                        دسته‌بندی
                        <span class="text-rose-400">*</span>
                    </label>
                    <select id="category_id" name="category_id"
                        class="w-full rounded-xl border border-white/10 bg-white/5 ps-4 pe-10 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="" class="bg-slate-900">انتخاب دسته‌بندی</option>
                        @foreach ($categories ?? [] as $category)
                            <option value="{{ $category->id }}" class="bg-slate-900"
                                @selected(old('category_id') == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="status" class="block text-sm font-medium text-slate-300">
                        وضعیت
                        <span class="text-rose-400">*</span>
                    </label>
                    <select id="status" name="status"
                        class="w-full rounded-xl border border-white/10 bg-white/5 ps-4 pe-10 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="0" class="bg-slate-900" @selected(old('status', '0') == '0')>غیرفعال</option>
                        <option value="1" class="bg-slate-900" @selected(old('status') == '1')>فعال</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="price" class="block text-sm font-medium text-slate-300">
                        قیمت (تومان)
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="number" id="price" value="{{ old('price') }}" name="price" min="0"
                        placeholder="مثلاً: 1500000"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="off_price" class="block text-sm font-medium text-slate-300">
                        قیمت با تخفیف (تومان)
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="number" id="off_price" value="{{ old('off_price') }}" name="off_price" min="0"
                        placeholder="مثلاً: 1200000"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="quantity" class="block text-sm font-medium text-slate-300">
                        موجودی
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="number" id="quantity" value="{{ old('quantity') }}" name="quantity" min="0"
                        placeholder="مثلاً: 10"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="image" class="block text-sm font-medium text-slate-300">تصویر محصول</label>
                    <input type="file" id="image" name="image" accept="image/*"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 file:me-3 file:rounded-lg file:border-0 file:bg-white/10 file:px-3 file:py-1.5 file:text-sm file:text-slate-200 hover:file:bg-white/15 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2 sm:col-span-2">
                    <label for="description" class="block text-sm font-medium text-slate-300">
                        توضیحات
                        <span class="text-rose-400">*</span>
                    </label>
                    <textarea id="description" name="description" rows="5" placeholder="توضیح کامل درباره این محصول…"
                        class="w-full resize-none rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">{{ old('description') }}</textarea>
                </div>
            </div>

            <div
                class="flex flex-col-reverse gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-end">
                <a href="{{ route('admin.products.index') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-5 py-2.5 text-sm font-medium text-white hover:opacity-95 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    ذخیره محصول
                </button>
            </div>
        </form>
    </section>
@endsection
