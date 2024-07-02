<div class="modal fade" id="modal-lg-delete-{{$p -> id_pengeluaran}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
            <form action="/pengeluaran/delete" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id_pengeluaran" value="{{$p -> id_pengeluaran}}">
                <p>Yakin akan menghapus "{{$p -> jenis_pengeluaran}}"?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-danger" value="Delete">
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
