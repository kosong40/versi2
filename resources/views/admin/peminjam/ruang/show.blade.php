<div class="modal fade" id="show{{$ruang->username}}{{$ruang->tgl_pinjam}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$ruang->nama}}</h4>
            </div>
            <div class="modal-body">
                <p>Kegunaan : {{$ruang->kegunaan}}</p>
                <p>Tanggal Pinjam : {{$ruang->tgl_pinjam}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
