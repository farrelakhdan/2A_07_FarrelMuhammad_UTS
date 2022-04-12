@extends('admin.nav')

@section('link_rel')
    <link rel="stylesheet" href="css/homeHtyle.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('LTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('LTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('LTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('LTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('LTE/plugins/toastr/toastr.min.css') }}">
@endsection

@section('title')
  
@endsection 
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">DATA </h5>
        <div class="card-tools">
          <a href="" value="new" class="EditBtn btn-sm btn-primary" data-toggle="modal" data-target="#EditModal" data-placement="top" title="Tambah Data">
            <i class="fa fa-plus-circle"></i> Create Data
          </a>
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <!-- Chart Canvas Top Player -->
            <div class="card">
              <div class="card-body p-0">
                <!-- <table id="example3" class="table table-bordered table-striped"> -->
                <table id="findTable2" class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 70px">Kode</th>
                      <th >Whatsapp</th>
                      <th >Facebook</th>
                      <th >Instagram</th>
                      <th >Twitter</th>
                      <th width="130px" class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 0 ?>
                    @foreach ($data as $fld)
                    <tr>
                      <td class="text-center" width="3%">{{ ++$i }}</td>
                      <td>{{ $fld->kode }} </td>
                      <td>{{ $fld->whatsapp }} </td>
                      <td>{{ $fld->facebook }} </td>
                      <td>{{ $fld->instagram }} </td>
                      <td>{{ $fld->twitter }} </td>
                      <td class="text-center">
                        <a href="" value="{{ $fld->kode }}" class="InfoBtn btn-warning btn-xs" data-toggle="modal" data-target="#infoDetail" data-placement="top" title="Info Detail">
                        <i class="fa fa-info-circle"></i> Info</a>
                        <a href="" value="{{ $fld->kode }}" class="EditBtn btn-primary btn-xs" data-toggle="modal" data-target="#EditModal" data-placement="top" title="Koreksi Data">
                        <i class="fa fa-edit"></i> Edit</a>
                        <a href="" value="{{ $fld->kode }}" class="DelBtn btn-secondary btn-xs" data-toggle="modal" data-target="#DelRecModal" data-placement="top" title="Data tidak boleh dihapus">
                        <i class="fa fa-trash"></i> Del</a>
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Deskripsi -->
<div class="modal fade" id="infoDetail">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h6 class="modal-title">Informasi Detail</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="callout callout-info">
          <dl class="row">
            <dt class="col-sm-4">Kode</dt><dd class="col-sx-1">:</dd>
            <dd class="col-sm-7" id="aKode"></dd>
            <dt class="col-sm-4">Whatsapp</dt><dd class="col-sx-1">:</dd>
            <dd class="col-sm-7" id="aWhatsapp"></dd>
            <dt class="col-sm-4">Facebook</dt><dd class="col-sx-1">:</dd>
            <dd class="col-sm-7" id="aFacebook"></dd>
            <dt class="col-sm-4">Instagram</dt><dd class="col-sx-1">:</dd>
            <dd class="col-sm-7" id="aInstagram"></dd>
            <dt class="col-sm-4">Twitter</dt><dd class="col-sx-1">:</dd>
            <dd class="col-sm-7" id="aTwitter"></dd>
          </dl>            
        </div>
      </div>

      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-reply-all"></i> Close</button>
      </div>

    </div>
  </div>
</div>
    <!-- Modal Update -->
  <div class="modal fade" id="EditModal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h6 class="modal-title" id="tJudul">Data</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form class="form-horizontal" id="EditForm">
          @csrf
          @method('PUT')

          <div class="modal-body">
            <div class="form-group row">
              <label for="inputText" class="col-sm-2 col-form-label">Whatsapp</label>
              <div class="col-sm-10">
                <div class="input-group input-group-sm">
                  <input type="text" name="Whatsapp" id="eWhatsapp"  class="form-control" placeholder="Uraian" required>
                </div>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputText" class="col-sm-2 col-form-label">Facebook</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-sm">
                    <input type="text" name="Facebook" id="eFacebook"  class="form-control" placeholder="Uraian" required>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputText" class="col-sm-2 col-form-label">Instagram</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-sm">
                    <input type="text" name="Instagram" id="eInstagram"  class="form-control" placeholder="Uraian" required>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputText" class="col-sm-2 col-form-label">Twitter</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-sm">
                    <input type="text" name="Twitter" id="eTwitter"  class="form-control" placeholder="Uraian" required>
                  </div>
                </div>
              </div>
          </div>

          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-reply"></i> Cancel</button>
            <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Save</button>
          </div>
        </form>  

      </div>
    </div>
  </div>

  <!-- Modal Delete -->
  <div class="modal fade" id="DelRecModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h6 class="modal-title"><i class="fa fa-question-circle"></i>  Hapus Detail Data</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="DelRecForm">
          @csrf
          @method('PUT')

          <div class="modal-body">
            <div class="row">
                <dd class="col-sm-8" id="dKode" hidden=""></dd>
              <dt class="col-sm-4">Whatsapp </dt><dd class="col-sx-1">:</dd>
              <dd class="col-sm-6" id="dWhatsapp"></dd>
              <dt class="col-sm-4">Facebook </dt><dd class="col-sx-1">:</dd>
              <dd class="col-sm-6" id="dFacebook"></dd>
              <dt class="col-sm-4">Instagram </dt><dd class="col-sx-1">:</dd>
              <dd class="col-sm-6" id="dInstagram"></dd>
              <dt class="col-sm-4">Twitter </dt><dd class="col-sx-1">:</dd>
              <dd class="col-sm-6" id="dTwitter"></dd>
            </div>
          </div>

          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-reply-all"></i> Cancel</button>
            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> Delete</button>
          </div>
        </form>  
      
      </div>
    </div>
  </div>
@endsection

@section('script_src')
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('LTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('LTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <!-- SweetAlert2 -->
  <script src="{{ asset('LTE/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ asset('LTE/plugins/toastr/toastr.min.js') }}"></script>
@endsection

@section('script_e')
  <script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });  

      // Modal Deskripsi
    $('.InfoBtn').on('click',function() {
      $.get("Det_Con/"+$(this).attr("value"))
        .done(function(data){
          $("#aKode").text(data[0].kode);
          $("#aWhatsapp").text(data[0].whatsapp);
          $("#aFacebook").text(data[0].facebook);
          $("#aInstagram").text(data[0].instagram);
          $("#aTwitter").text(data[0].twitter);
        });
    });
      // Modal Add & Edit
    $('.EditBtn').on('click',function() {
      $cID = $(this).attr("value");
      if ($cID == "new") { 
        $("#tJudul").text("Add Data Contact");
        $("#eWhatsapp").val("");
        $("#eFacebook").val("");
        $("#eInstagram").val("");
        $("#eTwitter").val("");
        }
      else { 
        $("#tJudul").text("Edit Data Uraian");
        $.get("Det_Con/"+$(this).attr("value"))
          .done(function(data){
            $("#eWhatsapp").val(data[0].whatsapp);
            $("#eFacebook").val(data[0].facebook);
            $("#eInstagram").val(data[0].instagram);
            $("#eTwitter").val(data[0].twitter);
            $cID = data[0].kode;
          });
        }

      $i = 0;
      $('#EditForm').on('submit',function(e){
        e.preventDefault();
        if ( $i == 0 ) {
          $i = 1;
          var id = $cID;

          $.ajax({
            type : "PUT",
            url : "Upd_Con/"+id,
            data : $('#EditForm').serialize(),
            success : function (response) {
              console.log(response);
              $('#EditModal').modal('hide');

              toastr.success('SUCCESS.., Input data berhasil, Silahkan klik reload/refresh.');
              location.reload();
            },
            error: function(error) {
              console.log(error);
              toastr.error('ERROR.., silahkan dicek kembali.');
              $i = 0;
            }
          });
        }
      });
    })

    // Modal Delete Record
    $('.DelBtn').on('click',function() {
      $.get("Det_Con/"+$(this).attr("value"))
        .done(function(data){
          $("#dKode").text(data[0].kode);
          $("#dWhatsapp").text(data[0].whatsapp);
          $("#dFacebook").text(data[0].facebook);
          $("#dInstagram").text(data[0].instagram);
          $("#dTwitter").text(data[0].twitter);
      });

      $('#DelRecForm').on('submit',function(e){
        e.preventDefault();
        var id = $('#dKode').text();
        $.ajax({
          type : "PUT",
          url : "Del_Con/"+id,
          data : $('#DelRecForm').serialize(),
          success : function (response) {
            console.log(response);
            $('#DelRecModal').modal('hide');
            toastr.success('SUCCESS..., Data CPL sudah terhapus, Silahkan klik refresh/reload');
            // location.reload();
          },
          error: function(error) {
            console.log(error);
            toastr.error('ERROR.., Hapus data terjadi kesalahan.');
          }
        });
      });

    });
  </script>
@endsection