<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="space-y-6">
    <h1 class="text-2xl font-bold text-white">Riwayat Transaksi</h1>
    <div class="bg-white/[.035] border border-white/10 p-5 rounded-2xl">
        <table class="w-full text-left text-sm text-white">
            <thead><tr class="text-slate-500 text-xs uppercase"><th class="p-3">Waktu</th><th class="p-3">Kode</th><th class="p-3">Pelanggan</th><th class="p-3">Total</th></tr></thead>
            <tbody>
                <tr class="border-t border-white/10"><td class="p-3">10:21</td><td class="p-3">#ORD-01</td><td class="p-3">Budi</td><td class="p-3">Rp 45.000</td></tr>
                <tr class="border-t border-white/10"><td class="p-3">10:42</td><td class="p-3">#ORD-02</td><td class="p-3">Andi</td><td class="p-3">Rp 62.000</td></tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
