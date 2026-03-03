<!-- Delete Pengaduan Modal -->
<div id="deleteModal" class="modal">
  <div class="modal-content delete-modal-content">
    <div class="modal-header">
      <h2>Hapus Pengaduan</h2>
      <button class="modal-close" id="closeDeleteModal">&times;</button>
    </div>

    <div class="modal-body">
      <div class="delete-icon">
        <i class="fas fa-exclamation-triangle"></i>
      </div>

      <h3>Apakah Anda yakin ingin menghapus?</h3>
      
      <p class="delete-warning">Tindakan ini tidak dapat dibatalkan. Data pengaduan akan dihapus secara permanen.</p>

    </div>

    <div class="modal-footer">
      <button class="btn btn-secondary" id="closeDeleteBtn">Batal</button>
      <form id="deleteForm" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
          <i class="fas fa-trash"></i> Hapus Sekarang
        </button>
      </form>
    </div>

  </div>
</div>

<style>

/* ============================= */
/* DELETE MODAL STYLES */
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
  max-width: 500px;
  width: 90%;
  animation: slideIn 0.3s ease-out;
}

.delete-modal-content {
  max-width: 500px;
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
  text-align: center;
}

.delete-icon {
  font-size: 64px;
  color: #FF3333;
  margin-bottom: 24px;
  display: flex;
  justify-content: center;
}

.modal-body h3 {
  font-size: 20px;
  color: #242424;
  margin: 0 0 12px 0;
  font-weight: 600;
}

.delete-warning {
  font-size: 14px;
  color: #919191;
  margin: 0 0 32px 0;
  line-height: 1.6;
}

.modal-footer {
  padding: 24px 32px;
  border-top: 1px solid #e5e5e5;
  display: flex;
  justify-content: flex-end;
  gap: 12px;
  background: #ffffff;
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
  }

  .modal-header,
  .modal-body,
  .modal-footer {
    padding: 16px 20px;
  }

  .delete-icon {
    font-size: 48px;
  }

  .modal-body h3 {
    font-size: 18px;
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
const deleteModal = document.getElementById('deleteModal');
const closeDeleteModal = document.getElementById('closeDeleteModal');
const closeDeleteBtn = document.getElementById('closeDeleteBtn');

// Close modal when X button is clicked
closeDeleteModal.addEventListener('click', () => {
  deleteModal.classList.remove('active');
});

// Close modal when Cancel button is clicked
closeDeleteBtn.addEventListener('click', () => {
  deleteModal.classList.remove('active');
});

// Close modal when clicking outside
deleteModal.addEventListener('click', (e) => {
  if (e.target === deleteModal) {
    deleteModal.classList.remove('active');
  }
});

// Function to open delete modal with data
function openDeleteModal(data) {
  // Set form action if provided
  if (data.action) {
    document.getElementById('deleteForm').action = data.action;
  }

  deleteModal.classList.add('active');
}

// Expose function globally
window.openDeleteModal = openDeleteModal;
</script>
