<div class="modal fade" id="modal-lg-perkiraan">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Perkiraan Pengeluaran Bulanan</h4>
        </div>
        <div class="modal-body">
            <p>Perkiraan pengeluaran bulanan merupakan perkiraan pengeluaran yang akan dikeluarkan selama satu bulan ke depan. Perhitungan pengeluaran bulanan dihitung berdasarkan <b>jumlah pemasukan</b> dengan <b>jumlah pengeluaran kebutuhan pokok</b>.</p>

            <form action="/perkiraan/hitung" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="formGroupExampleInput">Jumlah Pemasukan</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah Pemasukan" name="jumlah_pemasukan">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Kebutuhan Pokok</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Jumlah Pemasukan" name="jumlah_pemasukan">
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-primary" value="Hitung">
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
