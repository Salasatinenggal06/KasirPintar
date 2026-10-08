<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="space-y-6">
    <h1 class="text-2xl font-bold text-white">Riwayat Kasir</h1>
    <div class="rounded-2xl border border-white/10 bg-white/[.035] p-5">
        <table class="w-full text-left text-sm text-white">
            <thead><tr class="text-slate-500 text-xs uppercase"><th class="p-3">Kode</th><th class="p-3">Pelanggan</th><th class="p-3">Total</th></tr></thead>
            <tbody><tr class="border-t border-white/10"><td class="p-3">#KSR-01</td><td class="p-3">Tamu Dummy</td><td class="p-3">Rp 35.000</td></tr></tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
