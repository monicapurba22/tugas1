<div class="modal fade" id="modal-lg-add">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Pengeluaran</h4>
        </div>
        <div class="modal-body">
            <form action="/pengeluaran/add" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="formGroupExampleInput">Jenis Pengeluaran</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Jenis Pengeluaran" name="jenis_pengeluaran">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Tanggal Pengeluaran</label>
                  <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal Pengeluaran" name="tanggal_pengeluaran">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Jumlah Pengeluaran</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah Pengeluaran" name="jumlah_pengeluaran">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Berita</label>
                    <textarea class="form-control" name="berita" id="" cols="30" rows="10"></textarea>
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-primary" value="Save">
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
