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
                        Add New Topic
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="p-0 card-body table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Year</th>
                                <th>Category</th>
                                <th>Materials</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($topics as $topic)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $topic->title }}</td>
                                <td><img src="{{ asset('storage/'.$topic->image) }}" alt="" style="width: 60px; height: 60px;"></td>
                                <td>{{ $topic->description }}</td>
                                <td>{{ $topic->year->name }}</td>
                                <td>{{ $topic->category->name }}</td>
                                <td>{{ $topic->materials_count }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('dashboard.materials.index' , ['topic_id' => $topic->id]) }}" class="mr-2 btn btn-sm btn-outline-secondary" >
                                            <i class="fas fa-file-upload"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal-{{ $topic->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>

                                        <button class="ml-2 btn btn-sm btn-outline-danger delete-btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <form action="{{ route('dashboard.topics.destroy' , $topic->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            {{-- Update Modal --}}
                            <div class="modal fade" id="modal-{{ $topic->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update topic</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('dashboard.topics.update' , $topic->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    @if ($topic->image)
                                                        <label for="update-image-{{$topic->id}}" class="preview-img">
                                                            <img src="{{ asset('storage/'.$topic->image) }}" class="img-fluid" >
                                                        </label>
                                                    @else
                                                        <label for="update-image-{{$topic->id}}" class="preview-img">
                                                            <i class="ri-image-line"></i>
                                                            <p>upload image</p>
                                                        </label>
                                                    @endif
                                                    <input type="file" name="image" class="custom-file-input" id="update-image-{{$topic->id}}" style="opacity: 0" accept="image/*">
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" name="title" value="{{ $topic->title }}" class="form-control" id="name" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <input type="text" name="description" value="{{ $topic->description }}" class="form-control" id="description" placeholder="Description">
                                                </div>
                                                <div class="form-group">
                                                    <label for="year">Year</label>
                                                    <select class="form-control" name="year_id" id="year" aria-label="Default select example">
                                                        @foreach ($years as $year)
                                                            <option value="{{ $year->id }}" @selected($topic->year_id == $year->id)>{{ $year->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="year">Catergory</label>
                                                    <select class="form-control" name="category_id" id="year" aria-label="Default select example">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}" @selected($topic->category_id == $category->id)>{{ $category->name }}</option>
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
                            <td colspan="7">
                                <h3 class="text-center">There isn't any topic yet !</h3>
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
                                <h4 class="modal-title">Create topic</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('dashboard.topics.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="image" class="preview-img">
                                            <i class="ri-image-line"></i>
                                            <p>upload image</p>
                                        </label>
                                        <input type="file" name="image" required class="custom-file-input" id="image" style="opacity: 0" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" required placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" name="description" class="form-control" required id="description" placeholder="Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <select class="form-control" name="year_id" id="year" required aria-label="Default select example">
                                            @foreach ($years as $year)
                                            <option value="{{ $year->id }}">{{ $year->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="year">Catergory</label>
                                        <select class="form-control" name="category_id" id="year" required aria-label="Default select example">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
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
            title: 'Topic will be deleted!',
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
        const file = e.target.files[0];
        const url = URL.createObjectURL(file);
        const img = `<img src="${url} " class="img-fluid uploaded-image" />`;
        $('.preview-img').html( img );
    });
</script>

@endpush
