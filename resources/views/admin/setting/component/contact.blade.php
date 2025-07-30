<div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="contact_title">Map</label>
                <input class="form-control br-8" type="text" name="contact_title"
                    value="{{ $settings['contact_title'] }}" placeholder="Enter Contact Title">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="contact_image">Enter Contact Image</label>
                <div class="custom-file">
                    <input class="contactimage" id="contact_image" data-show-remove="false"
                        data-default-file="{{ $settings['contact_image'] }}" type="file" name="contact_image">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group mb-3">
                <label for="contact_description">Enter Contact Description</label>
                <textarea class="form-control ckeditor br-8" name="contact_description" rows="4">{{ $settings['contact_description'] }}</textarea>
            </div>
        </div>
        <div class="col-md-12">

            <fieldset class="border p-3">
                <legend class="float-none w-auto legend-title">SEO</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="contact_seo_title">Enter Contact Seo
                                Title</label>
                            <input class="form-control br-8" type="text" name="contact_seo_title"
                                value="{{ $settings['contact_seo_title'] }}" placeholder="Enter Contact Seo Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="contact_seo_description">Enter Contact Seo
                                Keywords</label>
                            <input class="form-control br-8" type="text" name="contact_seo_description"
                                value="{{ $settings['contact_seo_description'] }}"
                                placeholder="Enter Homepage Seo Keywords">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="contact_seo_keywords">Enter Contact Seo
                                Description</label>
                            <textarea class="form-control br-8" name="contact_seo_keywords" rows="4">{{ $settings['contact_seo_keywords'] }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="contact_section_title">Get in touch title</label>
                            <textarea class="form-control br-8" name="contact_section_title" rows="4">{{ $settings['contact_section_title'] }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="getintouch_description">Get in touch Description</label>
                            <textarea class="form-control video-desc br-8" name="getintouch_description" rows="4">{{ $settings['getintouch_description'] ?? '' }}</textarea>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
