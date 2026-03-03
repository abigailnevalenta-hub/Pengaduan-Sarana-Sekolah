<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Pengaduan - PSS</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
/* copy styles from dashboard, may be refactored later */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Inter', sans-serif;
}

body {
  background: #f5f6f8;
}

.layout {
  display: flex;
  min-height: 100vh;
}

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

.main {
  flex: 1;
  margin-left: 205px;
  padding: 24px 32px;
}

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

.button {
  display: flex;
  justify-content: flex-end;
  margin-bottom: 16px;
}

.button a {
  text-decoration: none;
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

/* content-specific */
.header-controls {
  display: flex;
  align-items: center;
  gap: 12px;
}

.search-wrapper {
  position: relative;
  width: 200px;
}

.search-wrapper i {
  position: absolute;
  left: 12px;
  top: 50%;
  transform: translateY(-50%);
  color: #919191;
  font-size: 13px;
  pointer-events: none;
}

.search-box {
  padding: 8px 16px 8px 36px;
  border: 1px solid #e5e5e5;
  border-radius: 8px;
  font-size: 13px;
  color: #919191;
  width: 100%;
}

.filter-btn {
  display: flex;;
  align-items: center;
  gap: 8px;
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

.header-controls {
  /* keep existing display:flex and gap if needed */
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

tbody tr {
  background: white;
}

td {
  text-align: left;
  padding: 12px 16px;
  border-bottom: 1px solid #eee;
  font-size: 13px;
  color: #242424;
}

tbody tr:last-child td {
  border-bottom: none;
}

.status-pending {
  display: inline-block;
  padding: 6px 12px;
  background: #ffe6e6;
  color: #FF4757;
  font-weight: 500;
  border-radius: 8px;
  font-size: 12px;
}

.status-repair {
  display:inline-block;
  padding:6px 12px;
  background:#fff4e6;
  color:#FF9632;
  font-weight:500;
  border-radius:8px;
  font-size:12px;
}

.status-done {
  display:inline-block;
  padding:6px 12px;
  background:#e6f9f0;
  color:#52C41A;
  font-weight:500;
  border-radius:8px;
  font-size:12px;
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

.action-btn.view {
  background: #e6f7f5;
  color: #4ECDC4;
}

.action-btn.view:hover {
  background: #d0f1ed;
}

.action-btn.edit {
  background: #fff4e6;
  color: #FF9632;
}

.action-btn.edit:hover {
  background: #ffe8d1;
}

.action-btn.delete {
  background: #ffe6e6;
  color: #FF4757;
}

.action-btn.delete:hover {
  background: #ffd0d0;
}

/* responsive */
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

  .topbar {
    flex-direction: column;
    align-items: flex-start;
  }

  .topbar-right {
    width: 100%;
    margin-top: 16px;
  }

  .cards {
    grid-template-columns: repeat(2, 1fr);
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
        <h1>Data Pengaduan</h1>
        <p>Kelola data pengaduan masuk dari warga sekolah.</p>
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
    <div class="button">
      <a href="{{ route('pengaduan.create') }}">
        <button class="filter-btn" style="background:#FF7C19;">
            <i class="fas fa-plus"></i>
            Buat Laporan Baru
        </button>
      </a>
    </div>

    <section class="table-section">
      <div class="table-header">
        <h3>Semua Laporan</h3>
        <div class="header-controls">
          <div class="search-wrapper">
            <i class="fas fa-search"></i>
            <input type="text" class="search-box" placeholder="Cari laporan...">
          </div>
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
            <td>XII IPA 1</td>
            <td>Vel in sint ipsa ip</td>
            <td>Numquam e</td>
            <td>20/02/2026</td>
            <td><span class="status-pending">Menunggu</span></td>
            <td class="action-buttons">
              <button class="action-btn view"><i class="fas fa-eye"></i></button>
              <button class="action-btn edit"><i class="fas fa-edit"></i></button>
              <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <td>LP-002</td>
            <td>abigail.nevalenta48</td>
            <td>XII IPA 1</td>
            <td>Architecto est eius</td>
            <td>kos</td>
            <td>19/02/2026</td>
            <td><span class="status-pending">Menunggu</span></td>
            <td class="action-buttons">
              <button class="action-btn view"><i class="fas fa-eye"></i></button>
              <button class="action-btn edit"><i class="fas fa-edit"></i></button>
              <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <td>P-01</td>
            <td>abigail.nevalenta48</td>
            <td>XII IPA 1</td>
            <td>Toilet</td>
            <td>Sekolah</td>
            <td>17/02/2026</td>
            <td><span class="status-pending">Menunggu</span></td>
            <td class="action-buttons">
              <button class="action-btn view"><i class="fas fa-eye"></i></button>
              <button class="action-btn edit"><i class="fas fa-edit"></i></button>
              <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>

  </div>
</div>

<!-- Modal Detail Pengaduan -->
@include('pengaduan.read')

<!-- Modal Edit Pengaduan -->
@include('pengaduan.update')

<!-- Modal Delete Pengaduan -->
@include('pengaduan.delete')

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
    // Get data from table row
    const row = this.closest('tr');
    const cells = row.querySelectorAll('td');
    
    // Extract data from table cells
    const sampleData = {
      title: 'Laporan Pengaduan Sarana',
      date: cells[5]?.textContent || '03 Maret 2026',
      kode: cells[0]?.textContent || '-',
      kelas: cells[2]?.textContent || '-',
      sarana: cells[3]?.textContent || '-',
      lokasi: cells[4]?.textContent || '-',
      detail: 'Masalah sarana sesuai dengan laporan di atas',
      status: cells[6]?.querySelector('.status-completed')?.textContent || 'Menunggu',
      statusClass: cells[6]?.querySelector('.status-completed') ? 'completed' : (cells[6]?.querySelector('.status-processing') ? 'processing' : 'pending'),
      file: {
        name: 'laporan_pengaduan.pdf',
        size: '2.45 MB'
      }
    };
    openDetailModal(sampleData);
  });
});

// Edit button functionality
document.querySelectorAll('.action-btn.edit').forEach(btn => {
  btn.addEventListener('click', function() {
    // Get data from table row
    const row = this.closest('tr');
    const cells = row.querySelectorAll('td');
    
    // Extract data from table cells
    const editData = {
      kode: cells[0]?.textContent || '',
      kelas: cells[2]?.textContent || '',
      sarana: cells[3]?.textContent || '',
      lokasi: cells[4]?.textContent || '',
      detail: 'Masalah sarana sesuai dengan laporan di atas',
      action: '#' // Set ke route update yang sesuai
    };
    openEditModal(editData);
  });
});

// Delete button functionality
document.querySelectorAll('.action-btn.delete').forEach(btn => {
  btn.addEventListener('click', function() {
    // Get data from table row
    const row = this.closest('tr');
    const cells = row.querySelectorAll('td');
    
    // Extract data from table cells
    const deleteData = {
      kode: cells[0]?.textContent || '',
      sarana: cells[3]?.textContent || '',
      lokasi: cells[4]?.textContent || '',
      action: '#' // Set ke route delete yang sesuai
    };
    openDeleteModal(deleteData);
  });
});
</script>

</body>
</html>