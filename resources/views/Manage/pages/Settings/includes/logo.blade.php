<div class="row">
    <div class="col-md-12">
        <h3>Logo and Favicon Setting</h3>
        <hr>
        <form action="{{ route('settings.update') }}" enctype="multipart/form-data" method="POST" role="form">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group files">
                                <label class="control-label">Site Logo</label>
                                <input class="form-control file" id="file" type="file" name="site_logo"
                                 accept="image/*"></input>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group files">
                                <label>Site Favicon </label>
                                <input type="file" id="file" name="site_favicon" onchange="loadFile(event,'faviconImg')"
                                    class="form-control file" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card radius">
                                <!-- Card image -->
                                @if (config('settings.site_logo') != null)
                                <img class="card-img-top" src="{{ asset(config('settings.site_logo')) }}" id="logoImg" height="80" width="auto" alt="">
                                @else
                                <img class="card-img-top" src="https://via.placeholder.com/1000x1000?text=Placeholder+Image" id="logoImg" height="80" width="auto" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <!-- Card image -->
                                @if (config('settings.site_favicon') != null)
                                <img class="card-img-top" src="{{ asset(config('settings.site_favicon')) }}" id="faviconImg" height="80" width="auto" alt="">
                                @else
                                <img class="card-img-top" src="https://via.placeholder.com/150x150?text=Placeholder+Image" id="faviconImg" height="80" width="auto" alt="">
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block radius">Update</button>
        </form>
    </div>
</div>
@push('scripts')
<script>
    loadFile = function (event, id) {
        const output = document.getElementById(id);
        output.src = URL.createObjectURL(event.target.files[0]);
    };

</script>
@endpush
