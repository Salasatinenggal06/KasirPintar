<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="space-y-6">
    <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[.035] backdrop-blur">
        <div class="absolute -top-24 -right-24 w-72 h-72 rounded-full bg-sky-500/20 blur-3xl"></div>
        <div class="absolute -bottom-28 -left-24 w-72 h-72 rounded-full bg-purple-600/20 blur-3xl"></div>
        <div class="relative p-5 lg:p-7">
            <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-5">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-sky-500/10 border border-sky-400/20 text-sky-300 text-xs font-semibold mb-4"><span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Admin Dashboard — Dummy</div>
                    <h1 class="text-2xl lg:text-4xl font-extrabold text-white">Dashboard Admin</h1>
                    <p class="text-sm text-slate-400 mt-2 max-w-2xl">Data dummy front-end only — tanpa database.</p>
                </div>
                <div class="grid grid-cols-2 gap-3 min-w-full sm:min-w-[360px]">
                    <a href="/admin/menu" class="rounded-3xl bg-white/[.04] hover:bg-white/[.07] border border-white/10 p-4"><div class="w-10 h-10 rounded-2xl bg-amber-500/10 text-amber-300 flex items-center justify-center mb-3"><i class="fa-solid fa-plus"></i></div><p class="text-sm font-bold text-white">Tambah Menu</p><p class="text-xs text-slate-500">Dummy link</p></a>
                    <a href="/admin/riwayat" class="rounded-3xl bg-white/[.04] hover:bg-white/[.07] border border-white/10 p-4"><div class="w-10 h-10 rounded-2xl bg-purple-500/10 text-purple-300 flex items-center justify-center mb-3"><i class="fa-solid fa-file-invoice"></i></div><p class="text-sm font-bold text-white">Riwayat</p><p class="text-xs text-slate-500">Dummy link</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
        <div class="rounded-[1.7rem] border border-white/10 bg-white/[.035] p-5"><p class="text-xs font-semibold text-slate-400 uppercase tracking-[0.16em]">Pesanan Hari Ini</p><p class="text-3xl font-extrabold text-white mt-3">42</p><p class="text-xs text-slate-500 mt-2">Dummy</p></div>
        <div class="rounded-[1.7rem] border border-white/10 bg-white/[.035] p-5"><p class="text-xs font-semibold text-slate-400 uppercase tracking-[0.16em]">Pendapatan Hari Ini</p><p class="text-3xl font-extrabold text-white mt-3">Rp 1.250.000</p><p class="text-xs text-slate-500 mt-2">Dummy</p></div>
        <div class="rounded-[1.7rem] border border-white/10 bg-white/[.035] p-5"><p class="text-xs font-semibold text-slate-400 uppercase tracking-[0.16em]">Menu Aktif</p><p class="text-3xl font-extrabold text-white mt-3">18</p><p class="text-xs text-slate-500 mt-2">Dummy</p></div>
        <div class="rounded-[1.7rem] border border-white/10 bg-white/[.035] p-5"><p class="text-xs font-semibold text-slate-400 uppercase tracking-[0.16em]">Pesanan Proses</p><p class="text-3xl font-extrabold text-white mt-3">5</p><p class="text-xs text-slate-500 mt-2">Dummy</p></div>
    </div>
    <div class="rounded-[1.7rem] border border-white/10 bg-white/[.035] overflow-hidden">
        <div class="p-5 border-b border-white/10 flex items-center justify-between"><h2 class="font-extrabold text-white">Pesanan Terbaru (Dummy)</h2><a href="/admin/riwayat" class="text-xs text-sky-300">Lihat Semua →</a></div>
        <div class="divide-y divide-white/10">
            <div class="p-5 flex items-center justify-between"><div><p class="font-bold text-white">Antrian #A12 — Budi</p><p class="text-xs text-slate-500">Tunai · 10:21 · Selesai</p></div><p class="font-extrabold text-white">Rp 45.000</p></div>
            <div class="p-5 flex items-center justify-between"><div><p class="font-bold text-white">Antrian #A13 — Siti</p><p class="text-xs text-slate-500">QRIS · 10:35 · Menunggu</p></div><p class="font-extrabold text-white">Rp 28.000</p></div>
            <div class="p-5 flex items-center justify-between"><div><p class="font-bold text-white">Antrian #A14 — Andi</p><p class="text-xs text-slate-500">Tunai · 10:42 · Selesai</p></div><p class="font-extrabold text-white">Rp 62.000</p></div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
