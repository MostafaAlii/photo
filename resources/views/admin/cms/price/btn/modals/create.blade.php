<div class="modal fade" id="create_price" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white">
                <h5 class="modal-title white" id="exampleModalLabel">Create New {{ ucfirst($title) }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('price.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <!-- Start Name -->
                    <div class="form-group">
                        <label for="note">Name</label>
                        <input type="text" class="form-control" required name="name" id="name" value="">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Name -->

                    <div class="form-group">
                        <label>Multiple Image : <span style="color:rgb(199, 8, 8)">*</span></label>
                        <input class="form-control img" name="images[]" type="file" accept="image/*" multiple>
                    </div>

                    <!-- Start Status Status -->
                    <div class="p-1 form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option selected disabled>Select {{ $title }} Status...</option>
                            <option value="1" {{ old('status')=='1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status')=='0' ? 'selected' : '' }}>Not Active</option>
                        </select>
                        @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Status Selected -->
                    <hr>
                    <!-- Start Name -->
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" required name="price" id="price" value="">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Name -->
                    <!-- Start Advantages Status -->
                    <div class="p-1 form-group">
                        <label for="status">Advantages</label>
                        <select name="advantages[]" class="select2 form-control" multiple>
                            <option selected disabled>Select {{ $title }} Advantages...</option>
                            @if($advantages && $advantages->count() > 0)
                                @foreach($advantages as $advantage)
                                    <option value="{{$advantage->id }}">{{$advantage->note}}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('advantages.0')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Advantages Selected -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>