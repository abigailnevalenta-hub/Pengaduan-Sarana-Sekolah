<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - PSS</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Inter', sans-serif;
}

body {
  background: #f5f6f8;
}

/* Layout */
.layout {
  display: flex;
  min-height: 100vh;
}

/* Sidebar */
.sidebar {
  width: 205px;
  background: white;
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
  padding: 12px 12px;
  border-radius: 10px;
  margin-bottom: 8px;
  cursor: pointer;
  color: #74747c;
  transition: all 0.2s;
  display: flex;
  align-items: center;
  font-size: 14px;
}

.menu li i {
  margin-right: 12px;
  width: 20px;
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
  background: white;
  color: #FF3333;
  border-radius: 10px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.logout-btn i {
  margin-right: 8px;
}

/* Main Content */
.main {
  flex: 1;
  margin-left: 205px;
  padding: 24px 32px;
}

/* Topbar */
.topbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 32px;
}

.topbar-left h1 {
  font-size: 28px;
  color: #242424;
  margin-bottom: 4px;
}

.topbar-left p {
  font-size: 14px;
  color: #919191;
}

.topbar-right {
  display: flex;
  align-items: center;
  gap: 12px;
}

.theme-toggle {
  display: flex;
  align-items: center;
  gap: 0;
  background: #f5f6f8;
  border-radius: 20px;
  padding: 4px;
  cursor: pointer;
}

.theme-toggle-btn {
  padding: 8px 16px;
  border: none;
  background: transparent;
  cursor: pointer;
  font-size: 13px;
  color: #74747c;
  border-radius: 18px;
  transition: all 0.3s;
  display: flex;
  align-items: center;
  gap: 6px;
  font-weight: 500;
}

.theme-toggle-btn.active {
  background: #FF7C19;
  color: white;
}

.theme-toggle-btn:hover {
  color: #FF7C19;
}

.icon-btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: white;
  border: 1px solid #e5e5e5;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #74747c;
  font-size: 16px;
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
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 14px;
  cursor: pointer;
}

/* Cards */
.cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-bottom: 32px;
}

.card {
  background: white;
  padding: 24px;
  border-radius: 16px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.04);
  transition: 0.2s;
}

.card:hover {
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.card-icon {
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 12px;
  font-size: 24px;
  margin-bottom: 12px;
}

.card-icon.total {
  background: #FFF3EB;
  color: #FF7C19;
}

.card-icon.pending {
  background: #FFF7EB;
  color: #FFB84D;
}

.card-icon.review {
  background: #EFFBFA;
  color: #4ECDC4;
}

.card-icon.completed {
  background: #F2FDED;
  color: #52C41A;
}

.card h3 {
  font-size: 13px;
  color: #919191;
  margin-bottom: 8px;
  font-weight: 500;
}

.card p {
  font-size: 28px;
  font-weight: 700;
  color: #242424;
}

.card-desc {
  font-size: 12px;
  color: #919191;
  margin-top: 8px;
}

/* Table */
.table-section {
  background: white;
  padding: 24px;
  border-radius: 16px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}

.table-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.table-header h3 {
  font-size: 16px;
  color: #242424;
  font-weight: 600;
}

.search-box {
  padding: 8px 12px 8px 36px;
  border: 1px solid #e5e5e5;
  border-radius: 8px;
  font-size: 13px;
  color: #919191;
  width: 100%;
}

.search-box::placeholder {
  color: #919191;
}

.search-wrapper {
  position: relative;
  width: 200px;
}

.search-wrapper i {
  position: absolute;
  left: 16px;
  margin-right: 4px;
  top: 50%;
  transform: translateY(-50%);
  color: #919191;
  font-size: 13px;
  pointer-events: none;
}

.header-controls {
  display: flex;
  align-items: center;
  gap: 12px;
}

.filter-btn {
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 8px 12px;
  background: #FF7C19;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 13px;
  color: white;
  transition: 0.2s;
}

.filter-btn:hover {
  background: #ff8c33;
}


table {
  width: 100%;
  border-collapse: collapse;
}

th {
  text-align: left;
  padding: 12px 16px;
  border-bottom: 1px solid #e5e5e5;
  background: #f5f6f8;
  color: #74747c;
  font-weight: 600;
  font-size: 13px;
}

td {
  text-align: left;
  padding: 12px 16px;
  border-bottom: 1px solid #eee;
  font-size: 13px;
  color: #242424;
}

tbody tr {
  background: white;
}

tbody tr:last-child td {
  border-bottom: none;
}

.status-pending {
  display: inline-block;
  padding: 6px 12px;
  background: #FFF0F1;
  color: #FF4757;
  font-weight: 500;
  border-radius: 8px;
  font-size: 12px;
}

.action-buttons {
  display: flex;
  gap: 8px;
}

.action-btn {
  width: 32px;
  height: 32px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.2s;
}

.action-btn.delete {
  background: #FFF0F1;
  color: #FF4757;
}

.action-btn.delete:hover {
  background: #FFE5E8;
}

.action-btn.view {
  background: #EFFBFA;
  color: #4ECDC4;
}

.action-btn.view:hover {
  background: #d0f1ed;
}

/* Responsive */
@media(max-width: 768px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    padding-bottom: 80px;
  }

  .main {
    margin-left: 0;
  }

  .cards {
    grid-template-columns: repeat(2, 1fr);
  }

  .topbar {
    flex-direction: column;
    align-items: flex-start;
  }

  .topbar-right {
    width: 100%;
    margin-top: 16px;
  }
}

@media(max-width: 480px) {
  .cards {
    grid-template-columns: 1fr;
  }
}
</style>
</head>

<body>

<div class="layout">
  
  @include('components.sidebar')

  <div class="main">
    
    <header class="topbar">
      <div class="topbar-left">
        <h1>Dashboard</h1>
        <p>Selamat datang — ringkasan laporan terbaru ditampilkan di bawah</p>
      </div>
      <div class="topbar-right">
        <div class="theme-toggle">
          <button class="theme-toggle-btn active">
            <i class="fas fa-sun"></i>
            Light
          </button>
          <button class="theme-toggle-btn">
            <i class="fas fa-moon"></i>
            Dark
          </button>
        </div>
        <button class="icon-btn">
          <i class="fas fa-bell"></i>
        </button>
        <div class="profile-avatar">AB</div>
      </div>
    </header>

    <section class="cards">
      <div class="card">
        <div class="card-icon total"><i class="fas fa-file"></i></div>
        <h3>Total Pengaduan</h3>
        <p>4 Laporan</p>
        <div class="card-desc">Semua laporan yang masuk</div>
      </div>

      <div class="card">
        <div class="card-icon pending"><i class="fas fa-clock"></i></div>
        <h3>Menunggu Proses</h3>
        <p>4 Laporan</p>
        <div class="card-desc">Belum ditindaklanjuti</div>
      </div>

      <div class="card">
        <div class="card-icon review"><i class="fas fa-tools"></i></div>
        <h3>Diperbaiki</h3>
        <p>0 Laporan</p>
        <div class="card-desc">Dalam proses perbaikan</div>
      </div>

      <div class="card">
        <div class="card-icon completed"><i class="fas fa-check-circle"></i></div>
        <h3>Selesai Ditanganani</h3>
        <p>0 Laporan</p>
        <div class="card-desc">Sudah diperbaiki</div>
      </div>
    </section>

    <section class="table-section">
      <div class="table-header">
        <h3>Laporan Pengaduan Terbaru</h3>
        <div class="header-controls">
          <div class="search-wrapper">
            <i class="fas fa-search"></i>
            <input type="text" class="search-box" placeholder="Search here...">
          </div>
          <button class="filter-btn">
            <i class="fas fa-filter"></i>
            Filter
          </button>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th>Kode Lapor</th>
            <th>Nama Pelapor</th>
            <th>Kelas</th>
            <th>Kategori Sarana</th>
            <th>Lokasi Spesifik</th>
            <th>Tanggal Lapor</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Non quia molestias v</td>
            <td>abigail.nevalenta48</td>
            <td>XII RPL 1</td>
            <td>Vel in sint ipsa ip</td>
            <td>Numquam e</td>
            <td>20/02/2026</td>
            <td><span class="status-pending">Menunggu</span></td>
            <td>
              <div class="action-buttons">
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                <button class="action-btn view"><i class="fas fa-eye"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>Sed quam ea rem dict</td>
            <td>abigail.nevalenta48</td>
            <td>XII RPL 1</td>
            <td>Mollit non occaecat</td>
            <td>Quisquam voluptatem</td>
            <td>20/02/2026</td>
            <td><span class="status-pending">Menunggu</span></td>
            <td>
              <div class="action-buttons">
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                <button class="action-btn view"><i class="fas fa-eye"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>LP-002</td>
            <td>abigail.nevalenta48</td>
            <td>XII RPL 1</td>
            <td>Architecto est eius</td>
            <td>kos</td>
            <td>19/02/2026</td>
            <td><span class="status-pending">Menunggu</span></td>
            <td>
              <div class="action-buttons">
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                <button class="action-btn view"><i class="fas fa-eye"></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>P-01</td>
            <td>abigail.nevalenta48</td>
            <td>XII RPL 1</td>
            <td>Toilet</td>
            <td>Sekolah</td>
            <td>17/02/2026</td>
            <td><span class="status-pending">Menunggu</span></td>
            <td>
              <div class="action-buttons">
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                <button class="action-btn view"><i class="fas fa-eye"></i></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </section>

  </div>
</div>

<!-- Modal Detail Pengaduan -->
@include('pengaduan.read')

<!-- Modal Delete Pengaduan -->
@isset($pengaduan)
    @include('pengaduan.delete')
@endisset

<script>
// Theme toggle functionality
const themeButtons = document.querySelectorAll('.theme-toggle-btn');

themeButtons.forEach(button => {
  button.addEventListener('click', function() {
    themeButtons.forEach(btn => btn.classList.remove('active'));
    this.classList.add('active');
  });
});

// View button functionality
document.querySelectorAll('.action-btn.view').forEach(btn => {
  btn.addEventListener('click', function() {
    // Sample data - replace dengan data dari database nanti
    const sampleData = {
      title: 'Laporan Kerusakan Kursi Kelas',
      date: '03 Maret 2026',
      kode: 'LP-2026-001',
      kelas: 'X RPL 1',
      sarana: 'Kursi',
      lokasi: 'Lab RPL 1, Ruang 10',
      detail: 'Kursi di bagian depan kelas sudah rusak, bagian sandaran belakang patah dan mengganggu kenyamanan siswa saat belajar.',
      status: 'Menunggu',
      statusClass: 'pending',
      file: {
        name: 'laporan_kerusakan_kursi.pdf',
        size: '2.45 MB'
      }
    };
    openDetailModal(sampleData);
  });
});



// Delete button functionality
document.querySelectorAll('.action-btn.delete').forEach(btn => {
  btn.addEventListener('click', function() {
    // Sample data - replace dengan data dari database nanti
    const deleteData = {
      kode: 'LP-2026-001',
      sarana: 'Kursi',
      lokasi: 'Lab RPL 1, Ruang 10',
      action: '#' // Set ke route delete yang sesuai
    };
    openDeleteModal(deleteData);
  });
});
</script>

</body>
</html>