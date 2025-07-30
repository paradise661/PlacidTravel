<div class="tab-pane fade" id="v-pills-seo" role="tabpanel" aria-labelledby="v-pills-seo-tab">
    <div class="row">
        {{-- Home Sections --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Home Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_title">Enter Home Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="homepage_seo_title"
                            value="{{ $settings['homepage_seo_title'] }}" placeholder="Enter Home Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_keywords">Enter Home Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="homepage_seo_keywords"
                            value="{{ $settings['homepage_seo_keywords'] }}" placeholder="Enter Home Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_description">Enter Home Description</label>
                        <textarea class="form-control br-8" name="homepage_seo_description" rows="4">{{ $settings['homepage_seo_description'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>
        {{-- About Sections --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">About Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="about_title">Enter About Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="about_title"
                            value="{{ $settings['about_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="about_seo_keywords">Enter About Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="about_seo_keywords"
                            value="{{ $settings['about_seo_keywords'] }}" placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="about_seo_description">Enter About Description</label>
                        <textarea class="form-control br-8" name="about_seo_description" rows="4">{{ $settings['about_seo_description'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- Services --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Services Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="service_seo_title">Enter Services Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="service_seo_title"
                            value="{{ $settings['service_seo_title'] }}" placeholder="Enter Homepage Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_description">Enter Services
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="service_seo_keywords"
                            value="{{ $settings['service_seo_keywords'] }}" placeholder="Enter service Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="service_seo_description">Enter Services Seo
                            Description</label>
                        <textarea class="form-control br-8" name="service_seo_description" rows="4">{{ $settings['service_seo_description'] }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        {{-- Abroad --}}

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Abroad Study Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="abroads_seo_title">Enter Abroad Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="abroads_seo_title"
                            value="{{ $settings['abroads_seo_title'] }}" placeholder="Enter Abroad Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_description">Enter Abroad
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="abroads_seo_keywords"
                            value="{{ $settings['abroads_seo_keywords'] }}" placeholder="Enter service Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="abroads_seo_description">Enter Abroad Seo
                            Description</label>
                        <textarea class="form-control br-8" name="abroads_seo_description" rows="4">{{ $settings['abroads_seo_description'] }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        {{-- Teams --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Teams Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="testpreperation_seo_title">Enter Teams Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="testpreperation_seo_title"
                            value="{{ $settings['testpreperation_seo_title'] }}"
                            placeholder="Enter Testpreperation Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="testpreperation_description">Enter Teams
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="testpreperation_description"
                            value="{{ $settings['testpreperation_description'] }}"
                            placeholder="Enter service Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="testpreperation_seo_keywords">Enter Teams Seo
                            Description</label>
                        <textarea class="form-control br-8" name="testpreperation_seo_keywords" rows="4">{{ $settings['testpreperation_seo_keywords'] }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        {{-- Course --}}

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Course</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="scholorship_seo_title">Enter course Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="scholorship_seo_title"
                            value="{{ $settings['scholorship_seo_title'] }}"
                            placeholder="Enter scholorship Seo Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="scholorship_seo_keywords">Enter Course
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="scholorship_seo_keywords"
                            value="{{ $settings['scholorship_seo_keywords'] }}"
                            placeholder="Enter service Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="scholorship_seo_description">Enter Course Seo
                            Description</label>
                        <textarea class="form-control br-8" name="scholorship_seo_description" rows="4">{{ $settings['scholorship_seo_description'] }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        {{-- Testimonials --}}

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Testimonials</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="testimonials_seo_title">Enter Testimonials Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="testimonials_seo_title"
                            value="{{ $settings['testimonials_seo_title'] }}"
                            placeholder="Enter Testimonials Seo Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="testimonials_seo_keywords">Enter Testimonials
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="testimonials_seo_keywords"
                            value="{{ $settings['testimonials_seo_keywords'] }}"
                            placeholder="Enter Testimonials Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="testimonials_seo_description">Enter Testimonials Seo
                            Description</label>
                        <textarea class="form-control br-8" name="testimonials_seo_description" rows="4">{{ $settings['testimonials_seo_description'] }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        {{-- Blogs --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Blogs</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="blogs_seo_title">Enter Blogs
                            Title</label>
                        <input class="form-control br-8" type="text" name="blogs_seo_title"
                            value="{{ $settings['blogs_seo_title'] }}" placeholder="Enter scholorship Seo Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="scholorship_seo_description">Enter Blogs
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="blogs_seo_description"
                            value="{{ $settings['blogs_seo_description'] }}"
                            placeholder="Enter service Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="blogs_seo_keywords">Enter Blogs
                            Description</label>
                        <textarea class="form-control br-8" name="blogs_seo_keywords" rows="4">{{ $settings['blogs_seo_keywords'] }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

    </div>
</div>
