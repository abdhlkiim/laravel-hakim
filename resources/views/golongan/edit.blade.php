<form action="{{ url('golongan/edit/' . $row->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EDIT DATA GOLONGAN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA GOLONGAN</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama_gol" value="{{ $row->gol_nama }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> BATAL
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> SIMPAN PERUBAHAN
                    </button>                    
                </div>
            </div>
        </div>
    </div>
</form>
