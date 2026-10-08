<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="space-y-6">
    <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[.035] backdrop-blur p-5 lg:p-7">
        <h1 class="text-2xl lg:text-4xl font-extrabold text-white">Kelola Menu</h1>
        <p class="text-slate-400 mt-2">Data menu (dummy)</p>
        <a href="/admin/menu/create" class="mt-4 inline-block bg-sky-600 text-white px-5 py-2 rounded-xl text-sm font-bold">Tambah Menu</a>
    </div>
    <div class="rounded-[1.7rem] border border-white/10 bg-white/[.035] p-5">
        <table class="w-full text-left">
            <thead><tr class="text-slate-500 text-xs uppercase"><th class="p-3">Nama Menu</th><th class="p-3">Harga</th><th class="p-3">Aksi</th></tr></thead>
            <tbody class="text-white text-sm">
                <tr><td class="p-3">Es Teh Manis</td><td class="p-3">Rp 5.000</td><td class="p-3"><button class="text-sky-400">Edit</button></td></tr>
                <tr><td class="p-3">Nasi Goreng</td><td class="p-3">Rp 20.000</td><td class="p-3"><button class="text-sky-400">Edit</button></td></tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
