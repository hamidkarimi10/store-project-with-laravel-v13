<header class="sticky top-0 z-20 glass border-b border-slate-800/60 backdrop-blur px-4 py-3">
    <div class="mx-auto flex max-w-7xl items-center gap-3">
      <button id="openSidebar" class="xl:hidden inline-flex size-10 items-center justify-center rounded-xl text-slate-300 hover:bg-white/5">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h10"/></svg>
      </button>
      <div class="relative w-full">
        <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="11" cy="11" r="7"/><path d="M20 20l-3-3"/></svg>
        </span>
        <input type="text" placeholder="جستجو..." class="w-full rounded-xl border-0 bg-white/5 pl-3 pr-11 py-2.5 text-slate-100 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-600/50" />
      </div>
      <div class="relative hidden sm:block">
        <button id="notifBtn" class="relative inline-flex size-10 items-center justify-center rounded-xl text-slate-300 hover:bg-white/5">
          <span class="notif-dot absolute -top-0.5 -left-0.5 size-2 rounded-full bg-blue-500"></span>
          <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5"/></svg>
        </button>
        <div id="notifMenu" class="absolute left-0 mt-2 w-80 origin-top-left scale-95 opacity-0 pointer-events-none transition-all glass rounded-xl p-2 space-y-1">
          <div class="flex items-center justify-between px-2 py-1 text-xs text-slate-400"><span>اعلان‌ها</span><button id="markAllRead" class="text-blue-300 hover:text-blue-200">خوانده شد</button></div>
          <div class="rounded-lg bg-white/5 p-2 text-sm">افزودن گزارش موفقیت‌آمیز بود.</div>
          <div class="rounded-lg bg-white/5 p-2 text-sm">۳ کاربر جدید ثبت‌نام کردند.</div>
          <div class="rounded-lg bg-white/5 p-2 text-sm">به‌روزرسانی سیستم فردا ساعت ۹ صبح.</div>
        </div>
      </div>
      <div class="relative">
        <button id="userMenuBtn" class="inline-flex items-center gap-3 rounded-xl px-2 py-1.5 hover:bg-white/5">
          <img src="https://api.dicebear.com/9.x/initials/svg?seed=%D9%85%D8%AF" alt="avatar" class="size-9 rounded-xl" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=%D9%85%D8%AF%DB%8C%D8%B1+%D8%B3%DB%8C%D8%B3%D8%AA%D9%85&background=0b1220&color=fff&bold=true&size=96'" />
          <span class="hidden sm:block text-sm">مدیر</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6"/></svg>
        </button>
        <div id="userMenu" class="absolute left-0 mt-2 w-56 origin-top-left scale-95 opacity-0 pointer-events-none transition-all glass rounded-xl p-2">
          <a href="#" class="block rounded-lg px-3 py-2 text-sm hover:bg-white/5">پروفایل</a>
          <a href="#" class="mt-1 block rounded-lg px-3 py-2 text-sm hover:bg-white/5">اعلان‌ها</a>
          <div class="my-1 h-px bg-white/10"></div>
          <a href="auth-login.html" class="block rounded-lg px-3 py-2 text-sm text-rose-300 hover:bg-white/5">خروج</a>
        </div>
      </div>
    </div>
  </header>
