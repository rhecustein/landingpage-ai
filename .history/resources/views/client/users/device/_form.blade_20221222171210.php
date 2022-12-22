<form action="{{ isset($device) ? route('user.devices.update', $device->id) : route('devices') }}"
    method="POST">
    @if (isset($device))
        @method('put')
    @endif
    @csrf
    <div class="mb-3 has-validation">
        <label for="name" class="form-label">Nama Device</label>
        <input type="text" class="form-control
        @error('name')
            is-invalid
        @enderror"
            id="name" name="name" placeholder="Nama.." value="{{ old('name', $device->name ?? '') }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="has-validation">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control
        @error('phone')
        is-invalid
    @enderror"
            id="phone" name="phone" placeholder="No Telepon.." value="{{ old('phone', $device->phone ?? '') }}">
        @error('phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="has-validation">
        <label for="tags" class="form-label">Tag</label>

        <select id="tags" class="form-control @error('tags')
        is-invalid
    @enderror" multiple="multiple"
            name='tags[][name]'>
            @foreach (is_array(old('tags', isset($device) ? $device->tags : [])) ? old('tags', isset($device) ? $device->tags : []) : [] as $tag)
                <option selected="selected">{{ $tag['name'] ?? '' }}</option>
            @endforeach
        </select>
        @error('tags')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="row mt-2">
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">
                {{ isset($device) ? 'update' : 'simpan' }}
            </button>
        </div>
    </div>
</form>


@push('after-scripts')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $("#tags").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
    </script>
@endpush
