@extends('Parent.master')

@section('styles')
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Badan Hukum
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                    <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Data Table</h3>
                    </div>
                    <div class="box-body">
                        <form action="setpt/bdnhkm/save" method="POST" >
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="col-md-3" >
                                            <b>Kode Badan Hukum</b>
                                        </td>
                                        <td>
                                            <input type="text" name="kode" class="form-control" value="{{$data->kode}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Nama</b>
                                        </td>
                                        <td>
                                            <input type="text" name="nama" class="form-control" value="{{$data->nama}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Alamat</b>
                                        </td>
                                        <td>
                                            <input type="text" name="alamat1" class="form-control" value="{{$data->alamat1}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Alamat</b>
                                        </td>
                                        <td>
                                            <input type="text" name="alamat2" class="form-control" value="{{$data->alamat2}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Kota</b>
                                        </td>
                                        <td>
                                            <input type="text" name="kota" class="form-control" value="{{$data->kota}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Kode Pos</b>
                                        </td>
                                        <td>
                                            <input type="text" name="kdpos" class="form-control" value="{{$data->kdpos}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Telepon</b>
                                        </td>
                                        <td>
                                            <input type="text" name="telp" class="form-control" value="{{$data->telp}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Fax</b>
                                        </td>
                                        <td>
                                            <input type="text" name="fax" class="form-control" value="{{$data->fax}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Tanggal Akta/SK Terakhir</b>
                                        </td>
                                        <td>
                                            <input type="text" name="tgl_akta" class="form-control" value="{{$data->tgl_akta}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Nomor Akta/SK yayasan terakhir</b>
                                        </td>
                                        <td>
                                            <input type="text" name="no_sk" class="form-control" value="{{$data->no_sk}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Tanggal pengesahan pengadilan <br/>negeri/Lembar berita negara terakhir</b>
                                        </td>
                                        <td>
                                            <input type="text" name="tgl_pengesahan" class="form-control" value="{{$data->tgl_pengesahan}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Email</b>
                                        </td>
                                        <td>
                                            <input type="text" name="email" class="form-control" value="{{$data->email}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Website</b>
                                        </td>
                                        <td>
                                            <input type="text" name="website" class="form-control" value="{{$data->website}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Tanggal awal pendirian badan hukum</b>
                                        </td>
                                        <td>
                                            <input type="text" name="tgl_pendirian" class="form-control" value="{{$data->tgl_pendirian}}" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary" >SAVE</button>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->  
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop

@section('scripts')
<!-- DATA TABES SCRIPT -->
<script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
    $(function () {
        //sembunyikan form filter
        var isfilter = '{{isset($isfilter)?$isfilter:""}}';
        $('#formFilter').hide();
        if (!isfilter) {
            $('#btnFilter').click();
        }
        $('#formFilter').show();
        $('.btn-delete').click(function () {
            if (confirm('Hapus data ini?')) {

            } else {
                return false;
            }
        });

    });
</script>
@stop