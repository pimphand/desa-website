@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6 main-header">
                <h2><span>Profile Desa</span></h2>
            </div>
            <div class="col-lg-6 breadcrumb-right text-left">
            </div>
        </div>
    </div>
</div>
<div class="card">
    <form class="form" id="newsForm">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Desa</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="address" name="address"
                                placeholder="masukan alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="email" name="email" placeholder="masukan email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="phone" name="phone"
                                placeholder="masukan nomor telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Logo</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input class="form-control" type="file" name="logo" id="logo"
                                    placeholder="masukan latitude - longitude"
                                    aria-label="masukan latitude - longitude">
                                @if (isset($villageProfile->logo))
                                <div class="input-group-append">
                                    <button type="button" class="input-group-text add-lat">lihat Logo</button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Google map (Latitude - Longitude)</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input class="form-control" type="text" id="longitude" name="longitude"
                                    placeholder="masukan latitude - longitude"
                                    aria-label="masukan latitude - longitude">
                                <div class="input-group-append">
                                    <button type="button" class="input-group-text add-lat">Cara menambahkan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3"></div>
                        <div class="col-sm-9 mt-3">
                            <iframe width="100%" height="170" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?q=-7.729968820170873,111.48946810384074&hl=es;z=14&amp;output=embed">
                            </iframe>
                            <br />
                            <small>
                                <a href="https://maps.google.com/maps?q=-7.729968820170873,111.48946810384074&hl=es;z=14&amp;output=embed"
                                    style="color:#0000FF;text-align:left" target="_blank">
                                    Lihat Peta Lebih Besar
                                </a>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Visi</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input class="form-control" type="text" name="visi" id="visi" placeholder="masukan visi"
                                    aria-label="masukan visi">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Misi</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input class="form-control" type="text" name="misi[]" id="misi"
                                    placeholder="maukan misi" aria-label="masukan misi">

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-info add-misi">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row data" id="input-misi">

                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="col-sm-9 offset-sm-3">
                <button class="btn btn-pill btn-primary" id="save" type="submit">Simpan</button>
                <input class="btn btn-pill btn-light" type="reset" value="Cancel">
            </div>
        </div>
    </form>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('Screen-Recording-2024-08-27-at-10.24.53.gif') }}" width="100%"></img>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Selesai</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $('.add-lat').click(function (e) {
        e.preventDefault();

        $('.bd-example-modal-lg').modal('show');
    });
    let id =1;
    $('.add-misi').click(function (e) {
        e.preventDefault();

        const form = `
            <label class="col-sm-3 col-form-label mb-2 ${id}" id=""></label>
            <div class="col-sm-9 mb-2 ${id}">
                <div class="input-group">
                    <input class="form-control" type="text" name="misi[]" id="misi" placeholder="masukan misi"
                        aria-label="maukan misi">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-danger delete " data-id="${id}">Hapus</button>
                    </div>
                </div>
            </div>
        `
        id++;
        $('#input-misi').append(form);
    });

    $('#input-misi').on('click', '.delete', function (e) {
        e.preventDefault();
        // remove parent element
        $(`.${$(this).data('id')}`).remove();
    });

        $('#save').click(function (e) {
            e.preventDefault();
            let formData = new FormData($('#newsForm')[0]);
            $.ajax({
                type: "POST",
                url: "",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $dt.ajax.reload();
                    $('.bd-example-modal-lg').modal('hide');
                }
            });
        });
</script>
@endpush