@extends('dashboard.layouts.app', ['activePage' => 'years'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">Years Table</h3>
                    {{-- <button type="button" class="btn btn-default mr-0" data-toggle="modal" data-target="#modal-lg">
                        Add New Year
                    </button> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($years as $year)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $year->name }}</td>
                                    <td>{{ $year->description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal-{{ $year->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            @if ($year->is_removable)
                                            <button class="ml-3 btn btn-sm btn-outline-danger delete-btn">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            <form action="{{ route('dashboard.years.destroy' , $year->id) }}" method="POST" class="delete-form">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>

                                {{-- Update Modal --}}
                                <div class="modal fade" id="modal-{{ $year->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Year</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('dashboard.years.update' , $year->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    <div class="form-group mb-2">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" value="{{ $year->name }}" class="form-control" id="name" placeholder="Name">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="description">Description</label>
                                                        <input type="text" name="description" value="{{ $year->description }}" class="form-control" id="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->


                {{-- Create Modal --}}
                {{-- <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Create Year</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('dashboard.years.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}


            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $('.delete-btn').on('click' , function(){
        let delete_btn = $(this)
        $.confirm({
            title: 'Year will be deleted!',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Delete',
                    btnClass: 'btn-red',
                    action: function(){
                        delete_btn.siblings('.delete-form').first().submit();
                    }
                },
                close: function () {
                }
            }
        });
    })
</script>

@endpush
