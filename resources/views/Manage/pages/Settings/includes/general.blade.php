<div class="row">
    <div class="col-md-12">
        <h3>System Settings</h3>
        <hr>
        <form action="{{ route('settings.update') }}" method="POST" role="form">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="site_name">Site Name</label>
                        <input class="form-control radius" type="text" placeholder="Enter site name" id="site_name"
                            name="site_name" value="{{ Config::get('settings.site_name') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="dashboard_color">Dashboard Color</label>
                        <input class="form-control radius" type="color" placeholder="Enter site title" id="dashboard_color"
                            name="dashboard_color" value="{{ config('settings.dashboard_color') }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block radius">Update</button>
        </form>
    </div>
</div>
