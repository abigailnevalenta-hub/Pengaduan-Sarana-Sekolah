<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buat Pengaduan - PSS</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>

/* ============================= */
/* GLOBAL STYLES */
/* ============================= */

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Inter', sans-serif;
}

body {
  background: #f5f6f8;
  color: #242424;
}

.layout {
  display: flex;
  min-height: 100vh;
}

/* ============================= */
/* SIDEBAR */
/* ============================= */

.sidebar {
  width: 205px;
  background: #ffffff;
  padding: 24px 16px;
  box-shadow: 2px 0 8px rgba(0,0,0,0.04);
  position: fixed;
  height: 100vh;
  overflow-y: auto;
}

.logo {
  font-size: 24px;
  font-weight: 700;
  color: #FF7C19;
  margin-bottom: 32px;
}

.menu-section {
  margin-bottom: 24px;
}

.menu-label {
  font-size: 11px;
  font-weight: 700;
  color: #919191;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: 12px;
  padding: 0 12px;
}

.menu {
  list-style: none;
}

.menu li {
  display: flex;
  align-items: center;
  padding: 12px;
  margin-bottom: 8px;
  border-radius: 10px;
  font-size: 14px;
  color: #74747c;
  cursor: pointer;
  transition: 0.2s;
}

.menu li i {
  width: 20px;
  margin-right: 12px;
  text-align: center;
}

.menu li:hover {
  background: #f5f6f8;
  color: #FF7C19;
}

.menu li.active {
  background: #fff3e9;
  color: #FF7C19;
  font-weight: 500;
}

.menu-link {
  display: flex;
  align-items: center;
  color: #74747c;
  text-decoration: none;
  width: 100%;
}

.menu li:hover .menu-link {
  color: #FF7C19;
}

.menu li.active .menu-link {
  color: #FF7C19;
}

.logout-btn {
  position: absolute;
  bottom: 24px;
  left: 16px;
  right: 16px;
  padding: 12px;
  border: none;
  border-radius: 10px;
  background: #ffffff;
  color: #FF3333;
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
  display: flex;
  align-items: center;
}

.logout-btn i {
  margin-right: 8px;
}

/* ============================= */
/* MAIN CONTENT */
/* ============================= */

.main {
  flex: 1;
  margin-left: 205px;
  padding: 24px 32px;
}

/* ============================= */
/* TOPBAR */
/* ============================= */

.topbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 32px;
}

.topbar-left h1 {
  font-size: 28px;
  margin-bottom: 4px;
}

.topbar-left p {
  font-size: 14px;
  color: #919191;
}

.topbar-right {
  display: flex;
  align-items: center;
  gap: 20px;
}

/* Theme Toggle */

.theme-toggle {
  display: flex;
  background: #f5f6f8;
  border-radius: 20px;
  padding: 4px;
}

.theme-toggle-btn {
  padding: 8px 16px;
  border: none;
  background: transparent;
  border-radius: 18px;
  font-size: 13px;
  font-weight: 500;
  color: #74747c;
  cursor: pointer;
  transition: 0.3s;
  display: flex;
  align-items: center;
  gap: 6px;
}

.theme-toggle-btn.active {
  background: #FF7C19;
  color: #ffffff;
}

.theme-toggle-btn:hover {
  color: #FF7C19;
}

.icon-btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #ffffff;
  border: 1px solid #e5e5e5;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #74747c;
  cursor: pointer;
  transition: 0.2s;
}

.icon-btn:hover {
  color: #FF7C19;
}

.profile-avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, #FF7C19, #FF9D45);
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 14px;
  cursor: pointer;
}

/* ============================= */
/* FORM SECTION */
/* ============================= */

.form-section {
  max-width: 800px;
  margin: 10px;
  background: #ffffff;
  padding: 36px;
  border-radius: 20px;
  box-shadow: 0 2px 16px rgba(0,0,0,0.04);
}

.form-group {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 20px;
}

.field {
  flex: 1 1 48%;
  min-width: 200px;
}

.field.full {
  flex: 1 1 100%;
}

label {
  font-size: 14px;
  margin-bottom: 6px;
  display: block;
}

input,
textarea {
  width: 100%;
  padding: 12px 14px;
  border: 1px solid #e5e5e5;
  border-radius: 10px;
  font-size: 14px;
}

textarea {
  resize: vertical;
  min-height: 120px;
}

.actions {
  margin-top: 24px;
  display: flex;
  justify-content: flex-end;
  gap: 12px;
}

.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 10px;
  font-size: 14px;
  cursor: pointer;
}

.btn.cancel {
  background: #e9ecef;
  color: #495057;
}

.btn.submit {
  background: #FF7C19;
  color: #ffffff;
}

.btn.submit:hover {
  background: #ff8c33;
}

/* ============================= */
/* RESPONSIVE */
/* ============================= */

@media (max-width: 768px) {
  .field {
    flex: 1 1 100%;
  }
}

</style>
</head>

<body>

<div class="layout">

  <!-- Sidebar -->
  @include('components.sidebar')
      <i class="fas fa-sign-out-alt"></i>Log Out
    </button>
  </aside>

  <!-- Main Content -->
  <div class="main">

    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-left">
        <h1>Buat Pengaduan</h1>
        <p>Laporkan masalah sarana sekolah dengan detail di bawah ini.</p>
      </div>

      <div class="topbar-right">
        <div class="theme-toggle">
          <button class="theme-toggle-btn active">
            <i class="fas fa-sun"></i>Light
          </button>
          <button class="theme-toggle-btn">
            <i class="fas fa-moon"></i>Dark
          </button>
        </div>

        <button class="icon-btn">
          <i class="fas fa-bell"></i>
        </button>

        <div class="profile-avatar">AB</div>
      </div>
    </header>

    <!-- Form -->
    <section class="form-section">
      <form action="#" method="POST">
        @csrf

        <div class="form-group">
          <div class="field">
            <label for="kode">Kode Laporan (Optional)</label>
            <input type="text" id="kode" name="kode" placeholder="Misal: LP-001">
          </div>

          <div class="field">
            <label for="sarana">Sarana / Fasilitas</label>
            <input type="text" id="sarana" name="sarana" placeholder="Misal: Kursi, Lampu, Proyektor">
          </div>
        </div>

        <div class="form-group">
          <div class="field full">
            <label for="lokasi">Lokasi Spesifik</label>
            <input type="text" id="lokasi" name="lokasi" placeholder="Misal: Lab RPL 1, Ruang 10">
          </div>
        </div>

        <div class="form-group">
          <div class="field full">
            <label for="detail">Detail Masalah</label>
            <textarea id="detail" name="detail" placeholder="Jelaskan kondisi kerusakan sarana..."></textarea>
          </div>
        </div>

        <div class="actions">
          <a href="{{ route('pengaduan.index') }}" class="btn cancel">Batal</a>
          <button type="submit" class="btn submit">Kirim Laporan</button>
        </div>

      </form>
    </section>

  </div>
</div>

<script>
const themeButtons = document.querySelectorAll('.theme-toggle-btn');

themeButtons.forEach(button => {
  button.addEventListener('click', function () {
    themeButtons.forEach(b => b.classList.remove('active'));
    this.classList.add('active');
  });
});
</script>

</body>
</html>