@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6 main-header">
                <h2><span>List {{ $title }} </span></h2>
            </div>
            <div class="col-lg-6 breadcrumb-right text-left">
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-primary m-1" type="button" data-toggle="modal"
                onclick="$('#newsForm').trigger('reset')" data-target=".bd-example-modal-lg">
                <i class="pe-7s-plus"></i> Tambah {{ $title}}
            </button>
            <div class="table-responsive mt-4">
                <table class="display datatables" id="dataTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Konten</th>
                            <th>Gambar</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
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
                <form id="newsForm" enctype="multipart/form-data">
                    <!-- Title Input -->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                        <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter id">
                    </div>

                    <!-- Content Input -->
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="description" name="description" rows="5"
                            placeholder="Enter description"></textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="title">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="start_date" name="start_date"
                                placeholder="Enter title">
                        </div>
                        <div class="form-group col-6">
                            <label for="title">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="end_date" name="end_date"
                                placeholder="Enter title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title">Lokasi Kegiatan</label>
                        <input type="text" class="form-control" id="location" name="location"
                            placeholder="Masukan Lokasi Kegiatan">
                    </div>

                    <!-- Image Input -->
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        let $dt = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('event.create') }}',
            columns: [
                { data: 'title', name: 'title' },
                { data: 'description', name: 'description' },
                { data: 'image', name: 'image', orderable: false, searchable: false , render: function(data) {
                    return '<img src="{{ asset('') }}/' + data + '" width="100px" />';
                }},
                { data: 'id', name: 'id', orderable: false, searchable: false , render: function(data, type, row) {

                    return row.start_date + ' Sampai ' + row.end_date;

                }},
                { data: 'aksi', name: 'aksi', orderable: false, searchable: false },
            ]
        });

        $('#dataTable').on('click', '.delete', function() {
            let id = $(this).data('id');
            let url = '{{ route('news.destroy', ':id') }}';
            url = url.replace(':id', id);

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            '_method': 'DELETE',
                            '_token': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $dt.ajax.reload();
                            Swal.fire(
                                'Terhapus!',
                                'Data berhasil dihapus.',
                                'success'
                            );
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Gagal!',
                                'Data gagal dihapus.',
                                'error'
                            );
                        }
                    });
                }
            });
        });

        $('#dataTable').on('click', '.edit', function() {
            let row = $(this).closest('tr');
            // Ambil data dari baris tersebut menggunakan DataTables API
            let data = $('#dataTable').DataTable().row(row).data();

            // Set the modal title
            $('#myLargeModalLabel').text('Edit ' + data.title);

            $.each(data, function (key, val) {
            // Unset the key 'aksi' and handle the image field separately
            if (key != 'aksi' && key != 'image') {
            let element = $('#newsForm #' + key);

            // Check if the element exists before setting the value
            if (element.length) {
                element.val(val);
                }
            }
            });

            $('.bd-example-modal-lg').modal('show');
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
    });
</script>
@endpush