<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="flex flex-col lg:flex-row gap-4 min-h-[540px]">
    <div class="flex-1 min-w-0 flex flex-col">
        <div class="rounded-[2rem] border border-white/10 bg-white/[.035] p-4 mb-4">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div><div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-sky-500/10 border border-sky-400/20 text-sky-300 text-xs font-semibold mb-2"><i class="fa-solid fa-cash-register"></i> POS Pintar — Dummy</div><h1 class="text-xl font-extrabold text-white">Pilih Menu</h1><p class="text-xs text-slate-500">Data dummy, tambah ke keranjang jalan via JS lokal.</p></div>
                <div class="relative w-full sm:w-72"><i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i><input id="pos-search" placeholder="Cari menu..." class="w-full bg-white/[.04] border border-white/10 text-white rounded-2xl pl-11 pr-4 py-3 text-sm outline-none"></div>
            </div>
        </div>
        <div id="pos-grid" class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-3"></div>
    </div>
    <div class="w-full lg:w-[390px] flex flex-col rounded-[2rem] border border-white/10 bg-white/[.035] overflow-hidden">
        <div class="p-4 border-b border-white/10"><h2 class="font-extrabold text-white text-sm">Keranjang <span id="pos-count" class="text-slate-400">0</span></h2></div>
        <div id="pos-cart" class="flex-1 p-4 space-y-2 overflow-y-auto"><p class="text-sm text-slate-500 text-center py-8">Keranjang kosong</p></div>
        <div class="border-t border-white/10 p-4 space-y-3">
            <input id="pos-nama" placeholder="Nama pelanggan" class="w-full bg-white/[.04] border border-white/10 text-white text-xs rounded-xl px-3 py-2.5 outline-none">
            <div class="rounded-2xl bg-white/[.04] border border-white/10 px-4 py-3 flex justify-between"><span class="text-xs font-bold text-white">Total</span><span id="pos-total" class="font-black text-white">Rp 0</span></div>
            <button onclick="posCheckout()" class="w-full rounded-2xl bg-gradient-to-r from-sky-500 to-purple-600 px-5 py-3.5 text-sm font-extrabold text-white">Buat Pesanan (Dummy)</button>
        </div>
    </div>
</div>
<script>
const menus=[{id:1,nama:'Es Teh Manis',harga:5000},{id:2,nama:'Nasi Goreng',harga:20000},{id:3,nama:'Ayam Bakar',harga:25000},{id:4,nama:'Mie Goreng',harga:18000},{id:5,nama:'Kopi Hitam',harga:8000},{id:6,nama:'Jus Alpukat',harga:12000}];
let cart=[];
function rupiah(n){return 'Rp '+Number(n).toLocaleString('id-ID')}
function renderMenus(f=''){
    const g=document.getElementById('pos-grid'); g.innerHTML='';
    menus.filter(m=>m.nama.toLowerCase().includes(f.toLowerCase())).forEach(m=>{
        const q=(cart.find(c=>c.id===m.id)?.qty)||0;
        g.innerHTML+=`<div onclick="addCart(${m.id})" class="rounded-2xl border border-white/10 bg-white/[.04] p-4 cursor-pointer hover:border-sky-400/30"><div class="w-full h-20 rounded-xl bg-white/[.03] flex items-center justify-center text-slate-600"><i class="fa-solid fa-utensils"></i></div><p class="text-xs font-bold text-white mt-2">${m.nama}</p><p class="text-sm font-black text-sky-300">${rupiah(m.harga)}</p>${q?`<span class="text-xs bg-sky-500 text-white px-2 py-0.5 rounded-full">${q}</span>`:''}</div>`;
    });
}
function addCart(id){const e=cart.find(c=>c.id===id); if(e) e.qty++; else {const m=menus.find(x=>x.id===id); cart.push({id:m.id,nama:m.nama,harga:m.harga,qty:1});} renderCart(); renderMenus(document.getElementById('pos-search').value);}
function inc(id){const c=cart.find(x=>x.id===id); c.qty++; renderCart(); renderMenus(document.getElementById('pos-search').value);}
function dec(id){const i=cart.findIndex(x=>x.id===id); if(cart[i].qty>1) cart[i].qty--; else cart.splice(i,1); renderCart(); renderMenus(document.getElementById('pos-search').value);}
function renderCart(){
    const el=document.getElementById('pos-cart'); const total=cart.reduce((s,c)=>s+c.harga*c.qty,0); const cnt=cart.reduce((s,c)=>s+c.qty,0);
    document.getElementById('pos-total').textContent=rupiah(total); document.getElementById('pos-count').textContent=cnt+' item';
    if(!cart.length){el.innerHTML='<p class="text-sm text-slate-500 text-center py-8">Keranjang kosong</p>';return;}
    el.innerHTML=cart.map(c=>`<div class="flex items-center gap-3 rounded-2xl bg-white/[.03] border border-white/[.06] p-3"><div class="flex-1"><p class="text-xs font-bold text-white">${c.nama}</p><p class="text-[11px] text-sky-300">${rupiah(c.harga)} x ${c.qty}</p></div><div class="flex items-center gap-1"><button onclick="dec(${c.id})" class="w-7 h-7 rounded-lg bg-rose-500/15 text-rose-300">-</button><span class="w-7 text-center text-xs font-black text-white">${c.qty}</span><button onclick="inc(${c.id})" class="w-7 h-7 rounded-lg bg-sky-500/15 text-sky-300">+</button></div></div>`).join('');
}
function posCheckout(){ if(!cart.length) return alert('Keranjang kosong'); const nama=document.getElementById('pos-nama').value||'Tamu'; alert('Dummy: Pesanan '+nama+' total '+document.getElementById('pos-total').textContent+' berhasil (tanpa backend)'); cart=[]; renderCart(); renderMenus('');}
document.getElementById('pos-search').addEventListener('input',e=>renderMenus(e.target.value));
renderMenus(); renderCart();
</script>
<?= $this->endSection() ?>
