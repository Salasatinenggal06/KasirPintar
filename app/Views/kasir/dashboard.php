<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="space-y-6">
    <h1 class="text-2xl font-bold text-white">Antrean Pesanan (Dummy Kasir)</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="rounded-2xl border border-white/10 bg-white/[.035] p-5"><p class="text-xs text-slate-400">Menunggu</p><p class="text-2xl font-bold text-white">3</p></div>
        <div class="rounded-2xl border border-white/10 bg-white/[.035] p-5"><p class="text-xs text-slate-400">Pendapatan Hari Ini</p><p class="text-2xl font-bold text-white">Rp 450.000</p></div>
    </div>
    <div class="rounded-2xl border border-white/10 bg-white/[.035] p-5 space-y-3">
        <h2 class="font-bold text-white">Pesanan Menunggu (Dummy)</h2>
        <div class="p-4 rounded-xl border border-amber-400/20 bg-amber-500/10 flex justify-between items-center">
            <div><p class="font-extrabold text-white">Antrian #A15 — Dina</p><p class="text-xs text-slate-300">2x Nasi Goreng, 1x Es Teh</p></div>
            <button onclick="alert('Telah bayar dummy')" class="bg-emerald-500 text-white px-4 py-2 rounded-xl text-xs font-bold">Telah Bayar</button>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
