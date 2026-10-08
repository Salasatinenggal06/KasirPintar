<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="space-y-6">
    <h1 class="text-2xl font-bold text-white">Form Menu</h1>
    <form onsubmit="alert('Simpan dummy berhasil'); location.href='/admin/menu'; return false;" class="space-y-4 max-w-xl">
        <div><label class="block text-xs text-slate-400 mb-1">Nama Menu</label><input type="text" value="Contoh Menu" class="w-full bg-slate-900 border border-white/10 rounded-xl p-3 text-white"></div>
        <div><label class="block text-xs text-slate-400 mb-1">Harga</label><input type="number" value="15000" class="w-full bg-slate-900 border border-white/10 rounded-xl p-3 text-white"></div>
        <button type="submit" class="bg-sky-600 px-5 py-2.5 rounded-xl text-white font-bold text-sm">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>
