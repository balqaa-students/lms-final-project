@extends('dashboard.layouts.app', ['activePage' => 'members'])

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
                    <h3 class="card-title">Members Table</h3>
                    <button type="button" class="btn btn-default mr-0" data-toggle="modal" data-target="#modal-lg">
                        Add New Member
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Social Links</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($members as $member)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $member->name }}</td>
                                <td><img src="{{ asset('storage/'.$member->image) }}" alt="" style="width: 60px; height: 60px;"></td>
                                <td>{{ $member->description }}</td>
                                <td>
                                    <ul>
                                        @foreach ($member->social_links as $key => $value)
                                        <li>{{ $key }} : {{$value}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal-{{ $member->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>

                                        <button class="ml-3 btn btn-sm btn-outline-danger delete-btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <form action="{{ route('dashboard.members.destroy' , $member->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            {{-- Update Modal --}}
                            <div class="modal fade" id="modal-{{ $member->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update member informations</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('dashboard.members.update' , $member->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    @if ($member->image)
                                                        <label for="update-image-{{$member->id}}" class="preview-img">
                                                            <img src="{{ asset('storage/'.$member->image) }}" class="img-fluid" >
                                                        </label>
                                                    @else
                                                        <label for="update-image-{{$member->id}}" class="preview-img">
                                                            <i class="ri-image-line"></i>
                                                            <p>upload image</p>
                                                        </label>
                                                    @endif
                                                    <input type="file" name="image" class="custom-file-input" id="update-image-{{$member->id}}" style="opacity: 0" accept="image/*">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" value="{{ $member->name }}" class="form-control" id="name" required placeholder="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <input type="text" name="description" value="{{ $member->description }}" class="form-control" required id="description" placeholder="Description">
                                                </div>
                                                <hr>
                                                <h5>Social Links</h5>
                                                <hr>
                                                <div class="form-group">
                                                    <input type="text" name="social_links[facebook]"  value="{{ $member->social_links['facebook'] ?? '' }}" class="form-control" placeholder="facebook">
                                                    <input type="number" name="social_links[phone]"  value="{{ $member->social_links['phone']  ?? '' }}" class="form-control" placeholder="phone">
                                                    <input type="email" name="social_links[email]"  value="{{ $member->social_links['email'] ??  '' }}" class="form-control" placeholder="email">
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
                                <h3 class="text-center">There isn't any member yet !</h3>
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
                                <h4 class="modal-title">Add new member</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('dashboard.members.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required placeholder="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" name="description" class="form-control" required id="description" placeholder="Description">
                                    </div>
                                    <hr>
                                    <h5>Social Links</h5>
                                    <hr>
                                    <div class="form-group">
                                        <input type="text" name="social_links[facebook]" class="form-control" placeholder="facebook">
                                        <input type="number" name="social_links[phone]" class="form-control" placeholder="phone">
                                        <input type="email" name="social_links[email]" class="form-control" placeholder="email">
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
