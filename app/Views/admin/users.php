<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="space-y-6">
    <h1 class="text-2xl font-bold text-white">Manajemen Akun</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white/[.035] border border-white/10 p-5 rounded-2xl">
            <h3 class="font-bold text-white mb-3">Daftar User</h3>
            <ul class="text-sm text-slate-300 space-y-2">
                <li>admin (Admin)</li>
                <li>kasir01 (Kasir)</li>
            </ul>
        </div>
        <div class="bg-white/[.035] border border-white/10 p-5 rounded-2xl">
            <h3 class="font-bold text-white mb-3">Tambah Akun</h3>
            <form onsubmit="alert('Tambah akun dummy'); return false;" class="space-y-3">
                <input type="text" placeholder="Username" class="w-full bg-slate-900 border border-white/10 rounded-xl p-3 text-white text-sm">
                <input type="password" placeholder="Password" class="w-full bg-slate-900 border border-white/10 rounded-xl p-3 text-white text-sm">
                <button type="submit" class="bg-sky-600 px-4 py-2 rounded-xl text-white text-sm font-bold">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
