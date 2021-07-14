<div class="row">
    <div class="col-md-12">
        <h3>SEO</h3>
        <hr>
        <form action="{{ route('settings.update') }}" method="POST" role="form">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="control-label" for="seo_meta_title">SEO Meta Title</label>
                    <input class="form-control radius" type="text" placeholder="Enter seo meta title for store"
                        id="seo_meta_title" name="seo_meta_title" value="{{ config('settings.seo_meta_title') }}">
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label" for="seo_meta_description">SEO Meta Description</label>
                        <textarea class="form-control radius" rows="4" placeholder="Enter seo meta description for store"
                            id="seo_meta_description"
                            name="seo_meta_description">{{ config('settings.seo_meta_description') }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label" for="seo_meta_keywords">SEO Meta Keywords (Separated with ',')</label>
                        <textarea class="form-control radius" rows="4" placeholder="Enter seo meta keywords for store"
                                  id="seo_meta_keywords"
                                  name="seo_meta_keywords">{{ config('settings.seo_meta_keywords') }}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block radius">Update</button>
        </form>
    </div>
</div>
