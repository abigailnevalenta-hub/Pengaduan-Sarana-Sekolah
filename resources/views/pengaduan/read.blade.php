<!-- Detail Pengaduan Modal -->
<div id="detailModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h2>Detail Pengaduan</h2>
      <button class="modal-close" id="closeModal">&times;</button>
    </div>

    <div class="modal-body">
      <div class="detail-header">
        <div>
          <h3 id="modalTitle">Laporan Kerusakan Kursi Kelas</h3>
          <p id="modalDate" style="font-size: 12px; color: #919191; margin-top: 8px;">Dibuat pada: 03 Maret 2026</p>
        </div>
        <span id="modalStatus" class="detail-status status-pending">Menunggu</span>
      </div>

      <!-- Kode Laporan & Kelas -->
      <div class="detail-row">
        <div class="detail-field">
          <span class="detail-field-label">Kode Laporan</span>
          <div id="modalKode" class="detail-field-value">LP-2026-001</div>
        </div>

        <div class="detail-field">
          <span class="detail-field-label">Kelas</span>
          <div id="modalKelas" class="detail-field-value">X RPL 1</div>
        </div>
      </div>

      <!-- Kategori Sarana & Lokasi -->
      <div class="detail-row">
        <div class="detail-field">
          <span class="detail-field-label">Kategori Sarana</span>
          <div id="modalSarana" class="detail-field-value">Kursi</div>
        </div>

        <div class="detail-field">
          <span class="detail-field-label">Lokasi Spesifik</span>
          <div id="modalLokasi" class="detail-field-value">Lab RPL 1, Ruang 10</div>
        </div>
      </div>

      <!-- Detail Masalah -->
      <div class="detail-row full">
        <div class="detail-field">
          <span class="detail-field-label">Detail Masalah</span>
          <div id="modalDetail" class="detail-field-text">
            Kursi di bagian depan kelas sudah rusak, bagian sandaran belakang patah dan mengganggu kenyamanan siswa saat belajar.
          </div>
        </div>
      </div>

      <!-- File Lampiran -->
      <div class="detail-row full" id="fileSection">
        <div class="detail-field">
          <span class="detail-field-label">File Lampiran</span>
          <div class="file-preview">
            <div class="file-icon">
              <i class="fas fa-file-pdf"></i>
            </div>
            <div class="file-info">
              <div id="modalFileName" class="file-name">laporan_kerusakan_kursi.pdf</div>
              <div id="modalFileSize" class="file-size">2.45 MB</div>
            </div>
            <button class="file-btn" id="downloadBtn">
              <i class="fas fa-download"></i> Download
            </button>
          </div>
        </div>
      </div>

    </div>

    <!-- Action Buttons -->
    <div class="modal-footer">
      <button class="btn btn-primary">
        <i class="fas fa-edit"></i> Edit
      </button>
      <button class="btn btn-danger">
        <i class="fas fa-trash"></i> Hapus
      </button>
    </div>

  </div>
</div>

<style>

/* ============================= */
/* MODAL STYLES */
/* ============================= */

.modal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  animation: fadeIn 0.3s ease-in;
}

.modal.active {
  display: flex;
  align-items: center;
  justify-content: center;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.modal-content {
  background-color: #ffffff;
  padding: 0;
  border-radius: 20px;
  box-shadow: 0 10px 50px rgba(0, 0, 0, 0.15);
  max-width: 800px;
  width: 90%;
  max-height: 90vh;
  overflow-y: auto;
  animation: slideIn 0.3s ease-out;
}

@keyframes slideIn {
  from {
    transform: translateY(-50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 24px 32px;
  border-bottom: 1px solid #e5e5e5;
  position: sticky;
  top: 0;
  background: #ffffff;
}

.modal-header h2 {
  font-size: 20px;
  color: #242424;
  margin: 0;
}

.modal-close {
  background: none;
  border: none;
  font-size: 28px;
  color: #919191;
  cursor: pointer;
  padding: 0;
  width: 32px;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.2s;
}

.modal-close:hover {
  color: #FF7C19;
}

.modal-body {
  padding: 32px;
}

.modal-footer {
  padding: 24px 32px;
  border-top: 1px solid #e5e5e5;
  display: flex;
  justify-content: flex-end;
  gap: 12px;
  sticky: bottom 0;
  background: #ffffff;
}

/* ============================= */
/* DETAIL SECTION STYLES */
/* ============================= */

.detail-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 32px;
  padding-bottom: 24px;
  border-bottom: 1px solid #e5e5e5;
}

.detail-header h3 {
  font-size: 20px;
  color: #242424;
  margin: 0 0 8px 0;
}

.detail-status {
  display: inline-block;
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 11px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.status-pending {
  background: #fff3cd;
  color: #856404;
}

.status-processing {
  background: #d1ecf1;
  color: #0c5460;
}

.status-completed {
  background: #d4edda;
  color: #155724;
}

.detail-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 32px;
  margin-bottom: 32px;
}

.detail-row.full {
  grid-template-columns: 1fr;
}

.detail-field {
  padding-bottom: 16px;
}

.detail-field-label {
  font-size: 12px;
  font-weight: 600;
  color: #919191;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: 8px;
  display: block;
}

.detail-field-value {
  font-size: 16px;
  color: #242424;
  font-weight: 500;
  word-break: break-word;
}

.detail-field-text {
  font-size: 14px;
  color: #242424;
  line-height: 1.6;
  word-break: break-word;
}

.file-preview {
  background: #f5f6f8;
  border: 1px solid #e5e5e5;
  border-radius: 10px;
  padding: 20px;
  display: flex;
  align-items: center;
  gap: 16px;
  margin-top: 8px;
}

.file-icon {
  font-size: 32px;
  color: #FF7C19;
}

.file-info {
  flex: 1;
}

.file-name {
  font-size: 14px;
  font-weight: 600;
  color: #242424;
}

.file-size {
  font-size: 12px;
  color: #919191;
  margin-top: 4px;
}

.file-btn {
  padding: 8px 16px;
  border: 1px solid #FF7C19;
  background: #fff;
  color: #FF7C19;
  border-radius: 8px;
  font-size: 12px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.2s;
}

.file-btn:hover {
  background: #fff3e9;
}

/* ============================= */
/* BUTTONS */
/* ============================= */

.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 10px;
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
  transition: 0.2s;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.btn-secondary {
  background: #e9ecef;
  color: #495057;
}

.btn-secondary:hover {
  background: #dee2e6;
}

.btn-primary {
  background: #FF7C19;
  color: #ffffff;
}

.btn-primary:hover {
  background: #ff8c33;
}

.btn-danger {
  background: #FF3333;
  color: #ffffff;
}

.btn-danger:hover {
  background: #ff4d4d;
}

/* ============================= */
/* RESPONSIVE MODAL */
/* ============================= */

@media (max-width: 768px) {
  .modal-content {
    width: 95%;
    max-height: 95vh;
  }

  .modal-header,
  .modal-body,
  .modal-footer {
    padding: 16px 20px;
  }

  .detail-row {
    grid-template-columns: 1fr;
    gap: 16px;
  }

  .detail-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
  }

  .modal-footer {
    flex-wrap: wrap;
  }

  .btn {
    padding: 8px 16px;
    font-size: 12px;
  }
}

</style>

<script>
// Modal functionality
const modal = document.getElementById('detailModal');
const closeModal = document.getElementById('closeModal');
const closeBtn = document.getElementById('closeBtn');

// Close modal when X button is clicked
closeModal.addEventListener('click', () => {
  modal.classList.remove('active');
});

// Close modal when Close button is clicked
closeBtn.addEventListener('click', () => {
  modal.classList.remove('active');
});

// Close modal when clicking outside
modal.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.classList.remove('active');
  }
});

// Function to open modal with data
function openDetailModal(data) {
  document.getElementById('modalTitle').textContent = data.title || 'Detail Pengaduan';
  document.getElementById('modalDate').textContent = 'Dibuat pada: ' + (data.date || '03 Maret 2026');
  document.getElementById('modalKode').textContent = data.kode || '-';
  document.getElementById('modalKelas').textContent = data.kelas || '-';
  document.getElementById('modalSarana').textContent = data.sarana || '-';
  document.getElementById('modalLokasi').textContent = data.lokasi || '-';
  document.getElementById('modalDetail').textContent = data.detail || '-';

  // Handle status
  const statusElement = document.getElementById('modalStatus');
  statusElement.textContent = data.status || 'Menunggu';
  statusElement.className = 'detail-status status-' + (data.statusClass || 'pending');

  // Handle file
  const fileSection = document.getElementById('fileSection');
  if (data.file) {
    document.getElementById('modalFileName').textContent = data.file.name || '-';
    document.getElementById('modalFileSize').textContent = data.file.size || '-';
    fileSection.style.display = 'block';
  } else {
    fileSection.style.display = 'none';
  }

  modal.classList.add('active');
}

// Expose function globally
window.openDetailModal = openDetailModal;
</script>

