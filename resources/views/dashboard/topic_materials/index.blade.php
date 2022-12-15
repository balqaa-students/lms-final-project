@extends('dashboard.layouts.app', ['activePage' => 'topics'])


@push('styles')
    <style>
        .preview-img {
            width: 100px;
            height: 100px;
            border-radius: 15px;
            border: 1px solid #e9e9e9;
            box-shadow: 0px 0px 4px #e9e9e975;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            overflow: hidden;
        }
        .preview-img .icon {
            font-size: 50px;
            color: #c2b9b9;
        }
        .uploaded-image{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        #image{
            height: 0px
        }
    </style>
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">Topics Table</h3>
                    <button type="button" class="mr-0 btn btn-default" data-toggle="modal" data-target="#modal-lg">
                        Add New Material
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="p-0 card-body table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($topic->materials as $material)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $material->name }}</td>
                                <td>{{ $material->category_id }}</td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal-{{ $material->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>

                                        <button class="ml-2 btn btn-sm btn-outline-danger delete-btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <form action="{{ route('dashboard.materials.destroy' , $material->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            {{-- Update Modal --}}
                            <div class="modal fade" id="modal-{{ $material->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update topic</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('dashboard.materials.update' , $material->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    @if ($material->file)
                                                        <label for="update-image-{{$material->id}}" class="preview-img">
                                                            <i class="fas fa-file"></i>
                                                        </label>
                                                    @else
                                                        <label for="update-image-{{$material->id}}" class="preview-img">
                                                            <i class="ri-image-line"></i>
                                                            <p>Upload File</p>
                                                        </label>
                                                    @endif
                                                    <input type="file" name="file" class="custom-file-input" id="update-image-{{$material->id}}" style="opacity: 0" accept="image/*">
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Name</label>
                                                    <input type="text" name="name" value="{{ $material->name }}" class="form-control" id="name" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="year">Category</label>
                                                    <select class="form-control" name="category_id" id="year" aria-label="Default select example">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}" @selected($material->category_id == $category->name)>{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        @empty
                        <tr >
                            <td colspan="4">
                                <h3 class="text-center">There isn't any material yet !</h3>
                            </td>
                        </tr>
                        @endforelse

                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->


                {{-- Create Modal --}}
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add new material</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('dashboard.materials.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="image" class="preview-img">
                                            <i class="ri-image-line"></i>
                                            <p>upload file</p>
                                        </label>
                                        <input type="file" name="file" required class="custom-file-input" id="image" style="opacity: 0" accept="application/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Name</label>
                                        <input type="text" name="name" class="form-control" id="title" required placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="year">Category</label>
                                        <select class="form-control" name="category_id" id="year" aria-label="Default select example">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" name="topic_id" value="{{$topic->id}}">
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
            title: 'Material will be deleted!',
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

       // Preview Image
    $('.custom-file-input').on('change', function(e) {
        const img = `<i class="fas fa-file-upload fs-4"></i>`;
        $('.preview-img').html( img );
    });
</script>

@endpush
