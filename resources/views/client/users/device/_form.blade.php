<form action="{{ route('frontend.users.device_store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama Device</label>
        <input required type="text" class="form-control" id="name" name="name" placeholder="Nama.."
            value="{{ old('name') }}">
    </div>
    <div>
        <label for="phone" class="form-label">Phone</label>
        <input required type="text" class="form-control" id="phone" name="phone" placeholder="No Telepon.."
            value="{{ old('phone') }}">
    </div>
    <div>
        <label for="tags" class="form-label">Tag</label>
        <select required id="tags" class="form-control" multiple="multiple">
        </select>
    </div>
    <div class="row mt-2">
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">
                simpan
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
