(function () {
  const select = (s, ctx = document) => ctx.querySelector(s);
  const selectAll = (s, ctx = document) => Array.from(ctx.querySelectorAll(s));

  const sidebar = select('#sidebar');
  const openSidebarBtn = select('#openSidebar');
  const closeSidebarBtn = select('#closeSidebar');

  const ensureHiddenOnMobile = () => {
    if (!sidebar) return;
    const xl = window.matchMedia('(min-width: 1280px)').matches;
    if (xl) sidebar.classList.remove('translate-x-full');
    else sidebar.classList.add('translate-x-full');
  };

  const overlayId = 'sidebar-overlay';
  const showOverlay = () => {
    if (select('#' + overlayId)) return;
    const ov = document.createElement('div');
    ov.id = overlayId;
    ov.className = 'fixed inset-0 z-20 bg-black/40 backdrop-blur-sm xl:hidden';
    ov.addEventListener('click', hideSidebar);
    document.body.appendChild(ov);
  };
  const hideOverlay = () => {
    const ov = select('#' + overlayId);
    if (ov) ov.remove();
  };

  const showSidebar = () => {
    if (!sidebar) return;
    sidebar.classList.remove('translate-x-full');
    showOverlay();
  };
  const hideSidebar = () => {
    if (!sidebar) return;
    sidebar.classList.add('translate-x-full');
    hideOverlay();
  };

  openSidebarBtn && openSidebarBtn.addEventListener('click', showSidebar);
  closeSidebarBtn && closeSidebarBtn.addEventListener('click', hideSidebar);
  window.addEventListener('resize', ensureHiddenOnMobile);
  ensureHiddenOnMobile();

  // User dropdown
  const userBtn = select('#userMenuBtn');
  const userMenu = select('#userMenu');
  const toggleUserMenu = () => {
    if (!userMenu) return;
    const open = userMenu.classList.contains('opacity-100');
    userMenu.classList.toggle('opacity-100', !open);
    userMenu.classList.toggle('scale-100', !open);
    userMenu.classList.toggle('pointer-events-auto', !open);
  };
  userBtn && userBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleUserMenu();
  });
  document.addEventListener('click', (e) => {
    if (!userMenu) return;
    if (!userMenu.contains(e.target) && !userBtn.contains(e.target)) {
      userMenu.classList.remove('opacity-100', 'scale-100', 'pointer-events-auto');
    }
  });

  // Active nav link highlight
  const path = (location.pathname.split('/').pop() || 'index.html').toLowerCase();
  selectAll('nav .nav-link').forEach((a) => {
    const href = (a.getAttribute('href') || '').toLowerCase();
    if (href === path) {
      a.classList.add('bg-white/8', 'ring-1', 'ring-white/10');
    }
  });

  // Modal controls (open with [data-modal-target="id"]) and [data-modal-close]
  const openModal = (id) => {
    const m = document.getElementById(id);
    if (!m) return;
    m.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-2');
    document.body.classList.add('overflow-hidden');
  };
  const closeModal = (m) => {
    m.classList.add('opacity-0', 'pointer-events-none', 'translate-y-2');
    document.body.classList.remove('overflow-hidden');
  };
  selectAll('[data-modal-target]').forEach((btn) => {
    btn.addEventListener('click', () => openModal(btn.getAttribute('data-modal-target')));
  });
  selectAll('[data-modal-close]').forEach((btn) => {
    btn.addEventListener('click', () => closeModal(btn.closest('.modal')));
  });

  // Toast notifications
  let toastHost = select('#toast-host');
  if (!toastHost) {
    toastHost = document.createElement('div');
    toastHost.id = 'toast-host';
    toastHost.className = 'fixed bottom-4 left-4 z-50 space-y-2';
    document.body.appendChild(toastHost);
  }
  window.notify = (message, type = 'info') => {
    const base = 'glass rounded-xl px-3 py-2 text-sm flex items-center gap-2';
    const color = type === 'success' ? 'text-emerald-300 ring-1 ring-emerald-400/20' : type === 'error' ? 'text-rose-300 ring-1 ring-rose-400/20' : 'text-blue-300 ring-1 ring-blue-400/20';
    const el = document.createElement('div');
    el.className = `${base} ${color}`;
    el.innerHTML = `<span>${message}</span>`;
    toastHost.appendChild(el);
    setTimeout(() => el.remove(), 3500);
  };

  // PWA install prompt + manifest for better sellability
  if (!document.querySelector('link[rel="manifest"]')) {
    const link = document.createElement('link');
    link.rel = 'manifest';
    link.href = 'data:application/manifest+json,' + encodeURIComponent(JSON.stringify({
      name: 'پنل مدیریت',
      short_name: 'Admin',
      start_url: 'index.html',
      display: 'standalone',
      background_color: '#000814',
      theme_color: '#0ea5e9',
      icons: []
    }));
    document.head.appendChild(link);
  }

  // Notification dropdown
  const notifBtn = select('#notifBtn');
  const notifMenu = select('#notifMenu');
  if (notifBtn && notifMenu) {
    notifBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      const open = notifMenu.classList.contains('opacity-100');
      notifMenu.classList.toggle('opacity-100', !open);
      notifMenu.classList.toggle('scale-100', !open);
      notifMenu.classList.toggle('pointer-events-auto', !open);
    });
    document.addEventListener('click', (e) => {
      if (!notifMenu.contains(e.target) && !notifBtn.contains(e.target)) {
        notifMenu.classList.remove('opacity-100', 'scale-100', 'pointer-events-auto');
      }
    });
    const markBtn = select('#markAllRead');
    markBtn && markBtn.addEventListener('click', () => {
      notifMenu.querySelectorAll('.rounded-lg.bg-white\/5').forEach((n) => n.classList.add('opacity-60'));
      const dot = select('.notif-dot');
      dot && dot.remove();
      window.notify && window.notify('همه اعلان‌ها خوانده شد','success');
    });
  }

  // Keyboard shortcuts for power users
  document.addEventListener('keydown', (e) => {
    if (e.key.toLowerCase() === 'k' && (e.metaKey || e.ctrlKey)) {
      const search = document.querySelector('input[placeholder="جستجو..."]');
      if (search) { e.preventDefault(); search.focus(); }
    }
  });
})();


