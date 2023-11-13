@extends('layout.main-admin')

@section('content')
<div class="main-content w-75">
    <h1> Data Form</h1>
</div>
    <div class="container mt-4" data-bs-theme="dark">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forms as $form)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $form->nama }}</td>
                        <td>{{ $form->email }}</td>
                        <td>{{ $form->pesan }}</td>
                        <td> <a href="{{ url('hapus/' . $form->id) }}" title="delete-form"><button
                             class="btn btn-outline-danger"><i
                                 class="fa-solid fa-trash fa-lg"
                                 style="color: #ff5252;"></i></button></a></td>
                         </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endsection



@push('addJs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#example").DataTable({
                scrollX: true,
                responsive: true,
                pagingNumbers: 3,
            });
        });
    </script>
@endpush
