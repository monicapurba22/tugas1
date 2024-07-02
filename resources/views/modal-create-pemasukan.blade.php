<div class="modal fade" id="modal-lg-add-pemasukan">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Pemasukan</h4>
        </div>
        <div class="modal-body">
            <form action="/pemasukan/add" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="formGroupExampleInput">Jenis Pemasukan</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Jenis Pemasukan" name="jenis_pemasukan">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Tanggal Pemasukan</label>
                  <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal Pemasukan" name="tanggal_pemasukan">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Jumlah Pemasukan</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah Pemasukan" name="jumlah_pemasukan">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Catatan</label>
                    <textarea class="form-control" name="catatan" id="" cols="30" rows="10"></textarea>
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
