<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="/assets/img/logo_k.png">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root{--bg:#020617;--muted:#94a3b8;--muted2:#64748b;--gradient:linear-gradient(135deg,#0ea5e9,#7c3aed);--shadow:0 24px 80px rgba(0,0,0,.42)}
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Plus Jakarta Sans',sans-serif}
        body{min-height:100vh;background:radial-gradient(circle at top left,rgba(14,165,233,.22),transparent 24rem),radial-gradient(circle at top right,rgba(124,58,237,.20),transparent 24rem),linear-gradient(135deg,#020617 0%,#07111f 48%,#020617 100%);color:#fff;display:flex;align-items:center;justify-content:center;padding:24px 16px}
        body::before{content:'';position:fixed;inset:0;pointer-events:none;background-image:linear-gradient(rgba(255,255,255,.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.025) 1px,transparent 1px);background-size:42px 42px;mask-image:linear-gradient(to bottom,rgba(0,0,0,.9),rgba(0,0,0,.18));z-index:0}
        .login-wrapper{width:100%;max-width:430px;position:relative;z-index:1}
        .brand{display:flex;align-items:center;justify-content:center;gap:13px;margin-bottom:24px}
        .brand-logo{width:58px;height:58px;border-radius:22px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.10);display:flex;align-items:center;justify-content:center;overflow:hidden;box-shadow:0 0 40px rgba(14,165,233,.16)}
        .brand-logo img{width:48px;height:48px;object-fit:contain}
        .brand-info h1{font-size:22px;font-weight:900;color:#fff;letter-spacing:-.03em}
        .brand-info p{font-size:12px;color:var(--muted);margin-top:4px}
        .card{position:relative;overflow:hidden;background:rgba(255,255,255,.045);border:1px solid rgba(255,255,255,.10);border-radius:32px;padding:28px;box-shadow:var(--shadow);backdrop-filter:blur(18px)}
        .card::before{content:'';position:absolute;right:-70px;top:-80px;width:190px;height:190px;background:rgba(14,165,233,.22);filter:blur(42px);border-radius:50%}
        .card::after{content:'';position:absolute;left:-90px;bottom:-90px;width:220px;height:220px;background:rgba(124,58,237,.16);filter:blur(44px);border-radius:50%}
        .card-inner{position:relative;z-index:1}
        .badge{display:inline-flex;align-items:center;gap:7px;padding:7px 11px;border-radius:999px;background:rgba(14,165,233,.10);border:1px solid rgba(14,165,233,.22);color:#7dd3fc;font-size:11px;font-weight:900;margin-bottom:16px}
        .badge-dot{width:7px;height:7px;border-radius:999px;background:#22c55e;box-shadow:0 0 0 5px rgba(34,197,94,.10)}
        .card-header-text h2{font-size:25px;font-weight:900}
        .card-header-text p{font-size:13px;color:var(--muted);margin-top:8px}
        .input-wrap{position:relative}
        .input-icon{position:absolute;left:15px;top:50%;transform:translateY(-50%);font-size:14px;color:var(--muted2)}
        .input-wrap input{width:100%;background:rgba(2,6,23,.56);border:1px solid rgba(255,255,255,.10);color:#fff;border-radius:18px;padding:14px 45px 14px 43px;font-size:14px;outline:none;transition:.2s}
        .input-wrap input:focus{border-color:rgba(14,165,233,.55);box-shadow:0 0 0 4px rgba(14,165,233,.10)}
        .toggle-pw{position:absolute;right:15px;top:50%;transform:translateY(-50%);color:var(--muted2);cursor:pointer}
        .btn-submit{width:100%;border:0;border-radius:21px;background:var(--gradient);color:#fff;padding:15px 16px;font-size:14px;font-weight:900;display:flex;justify-content:center;align-items:center;gap:10px;cursor:pointer;box-shadow:0 20px 50px rgba(14,165,233,.25);margin-top:8px}
        .form-group{margin-bottom:18px}
        .form-group label{display:block;font-size:11px;font-weight:900;color:var(--muted);text-transform:uppercase;letter-spacing:.12em;margin-bottom:9px}
        .security-note{margin-top:18px;display:flex;gap:10px;padding:13px 14px;border-radius:18px;background:rgba(255,255,255,.035);border:1px solid rgba(255,255,255,.08)}
        .security-note p{font-size:12px;color:var(--muted)}
        .login-footer{text-align:center;margin-top:22px;font-size:12px;color:var(--muted2)}
        .alert{display:flex;gap:10px;background:rgba(244,63,94,.10);border:1px solid rgba(244,63,94,.22);color:#fda4af;border-radius:18px;padding:13px 14px;font-size:13px;font-weight:700;margin-bottom:14px}
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="brand">
            <div class="brand-logo"><img src="/assets/img/logo_k.png" alt="ARZANA" onerror="this.style.display='none'"></div>
            <div class="brand-info"><h1>Nama Toko</h1><p>Sistem Kasir Pintar — Frontend Demo</p></div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="badge"><span class="badge-dot"></span> Frontend Only</div>
                <div class="card-header-text"><h2>Masuk ke Akun</h2><p>Mode dummy. Klik masuk untuk lihat UI.</p></div>
                <div id="alert" class="alert" style="display:none"><i class="fa-solid fa-circle-exclamation"></i><span id="alert-msg"></span></div>
                <form onsubmit="return handleLogin(event)">
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-wrap"><i class="fa-solid fa-user input-icon"></i><input type="text" id="username" placeholder="demo / admin / kasir" value="demo"></div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-wrap"><i class="fa-solid fa-lock input-icon"></i><input type="password" id="password" placeholder="bebas" value="123456"><i class="fa-solid fa-eye toggle-pw" id="togglePw"></i></div>
                    </div>
                    <button type="submit" class="btn-submit"><i class="fa-solid fa-arrow-right-to-bracket"></i> Masuk Dashboard</button>
                </form>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-top:12px">
                    <button onclick="location.href='/admin/dashboard'" style="padding:10px;border-radius:14px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.10);color:#fff;font-weight:700;cursor:pointer;font-size:12px"><i class="fa-solid fa-house"></i> Admin</button>
                    <button onclick="location.href='/kasir/pos'" style="padding:10px;border-radius:14px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.10);color:#fff;font-weight:700;cursor:pointer;font-size:12px"><i class="fa-solid fa-cash-register"></i> Kasir</button>
                </div>
                <div class="security-note"><i class="fa-solid fa-shield-halved" style="color:#7dd3fc"></i><p>Halaman dummy — tidak ada cek auth / session. Semua navigasi bebas.</p></div>
            </div>
        </div>
        <p class="login-footer">&copy; 2026 <strong>Nama Toko</strong><br>Frontend only — data dummy</p>
    </div>
    <script>
        document.getElementById('togglePw').addEventListener('click',function(){
            const i=document.getElementById('password');
            const h=i.type==='password'; i.type=h?'text':'password';
            this.classList.toggle('fa-eye',!h); this.classList.toggle('fa-eye-slash',h);
        });
        function handleLogin(e){
            e.preventDefault();
            const u=document.getElementById('username').value.trim().toLowerCase();
            if(u==='kasir') location.href='/kasir/dashboard';
            else location.href='/admin/dashboard';
            return false;
        }
    </script>
</body>
</html>
