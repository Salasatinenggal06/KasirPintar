<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="space-y-6">
    <h1 class="text-2xl font-bold text-white">Pengaturan Toko</h1>
    <form onsubmit="alert('Update dummy berhasil'); return false;" class="space-y-4 max-w-xl bg-white/[.035] p-6 rounded-2xl border border-white/10">
        <div><label class="block text-xs text-slate-400 mb-1">Nama Toko</label><input type="text" value="Nama Toko" class="w-full bg-slate-900 border border-white/10 rounded-xl p-3 text-white"></div>
        <button type="submit" class="bg-sky-600 px-5 py-2.5 rounded-xl text-white font-bold text-sm">Simpan Pengaturan</button>
    </form>
</div>
<?= $this->endSection() ?>
