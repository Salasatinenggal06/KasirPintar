<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="space-y-6 max-w-lg">
    <h1 class="text-2xl font-bold text-white">Pengaturan Akun Kasir</h1>
    <form onsubmit="alert('Profil dummy diupdate'); return false;" class="space-y-4 rounded-2xl border border-white/10 bg-white/[.035] p-6">
        <div><label class="block text-xs text-slate-400 mb-1">Nama Lengkap</label><input type="text" value="Demo Kasir" class="w-full bg-slate-900 border border-white/10 rounded-xl p-3 text-white"></div>
        <div><label class="block text-xs text-slate-400 mb-1">Username</label><input type="text" value="kasir01" class="w-full bg-slate-900 border border-white/10 rounded-xl p-3 text-white"></div>
        <button type="submit" class="bg-sky-600 px-5 py-2.5 rounded-xl text-white font-bold text-sm">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>
