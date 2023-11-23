{{-- Modal Import Data --}}
<div class="modal fade static" id="importModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Import Data</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-fw fa-times"></i>
                </button>
            </div>
            <form action="{{ route('StudentImport') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <input type="file" name="file" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Import</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal Export Data --}}
<div class="modal fade static" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="ExportData">Export Data</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-fw fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>Data akan didownload dengan format (.xlsx)</p>
                <div class="modal-footer">
                    <a href="{{ route('StudentExport') }}" class="btn btn-success">Export</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal Show Data --}}
{{-- <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Detail:</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Nama: {{ $item->nama }}</p>
                <!-- Tambahkan bagian lainnya sesuai dengan detail yang Anda butuhkan -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> --}}
