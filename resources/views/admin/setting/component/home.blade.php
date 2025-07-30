<div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="row">

        {{-- Services Sections --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Services Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="service_title">Enter Service Title</label>
                        <input class="form-control br-8" type="text" name="service_title"
                            value="{{ $settings['service_title'] }}" placeholder="Enter Service Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-2" for="service_image">Enter Service Banner</label>
                        <div class="custom-file">
                            <input class="serviceimage" id="service_image" data-show-remove="false"
                                data-default-file="{{ $settings['service_image'] }}" type="file"
                                name="service_image">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-3" for="service_description">Enter Service Description</label>

                        <textarea class="form-control br-8" name="service_description" rows="11">{{ $settings['service_description'] }}</textarea>
                    </div>

                </div>

                <div class="col-md-12">

                </div>
            </div>
        </fieldset>

        {{-- Study Abroad --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Contact Banner</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="abroads_title">Enter Banner Title</label>
                        <input class="form-control br-8" type="text" name="abroads_title"
                            value="{{ $settings['abroads_title'] }}" placeholder="Enter Abroads Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-2" for="abroads_image">Enter Banner</label>
                        <div class="custom-file">
                            <input class="abroadsimage" id="abroads_image" data-show-remove="false"
                                data-default-file="{{ $settings['abroads_image'] }}" type="file"
                                name="abroads_image">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-3" for="abroads_description">Enter Banner Description</label>

                        <textarea class="form-control br-8" name="abroads_description" rows="11">{{ $settings['abroads_description'] }}</textarea>
                    </div>

                </div>

                <div class="col-md-12">

                </div>
            </div>
        </fieldset>

        {{-- Course  --}}

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Mission Vision</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="mision_title">Enter Mission Title</label>
                        <input class="form-control br-8" type="text" name="mision_title"
                            value="{{ $settings['mision_title'] }}" placeholder="Enter Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-3" for="mision_description">Enter Mission Description</label>

                        <textarea class="form-control br-8" name="mision_description" rows="11">{{ $settings['mision_description'] }}</textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="vision_title">Enter Vision Title</label>
                        <input class="form-control br-8" type="text" name="vision_title"
                            value="{{ $settings['vision_title'] }}" placeholder="Enter Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-3" for="vision_description">Enter Vision Description</label>

                        <textarea class="form-control br-8" name="vision_description" rows="11">{{ $settings['vision_description'] }}</textarea>
                    </div>

                </div>

                <div class="col-md-12">

                </div>
            </div>
        </fieldset>

        {{-- About us  --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">About Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="scholorship_title">Enter About Title</label>
                        <input class="form-control br-8" type="text" name="scholorship_title"
                            value="{{ $settings['scholorship_title'] }}" placeholder="Enter About Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-2" for="scholorship_image">Enter About Banner Image</label>
                        <div class="custom-file">
                            <input class="scholorship_image" id="scholorship_image" data-show-remove="false"
                                data-default-file="{{ $settings['scholorship_image'] }}" type="file"
                                name="scholorship_image">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-3" for="scholorship_description">Enter About Description</label>
                        <textarea class="form-control homepage br-8" name="scholorship_description" rows="11">
                    {{ $settings['scholorship_description'] }}
                </textarea>
                    </div>
                </div>

                <!-- Counter Section -->
                {{-- <div class="col-md-12">
                    <fieldset class="border p-3 mt-4">
                        <legend class="float-none w-auto legend-title">Counter Section</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="homepage_counter1">Counter 1 Title</label>
                                    <input class="form-control br-8" type="text" name="homepage_counter1"
                                        value="{{ $settings['homepage_counter1'] }}"
                                        placeholder="Enter Counter 1 Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="homepage_counter2">Counter 2 Title</label>
                                    <input class="form-control br-8" type="text" name="homepage_counter2"
                                        value="{{ $settings['homepage_counter2'] }}"
                                        placeholder="Enter Counter 2 Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="homepage_counter3">Counter 3 Title</label>
                                    <input class="form-control br-8" type="text" name="homepage_counter3"
                                        value="{{ $settings['homepage_counter3'] }}"
                                        placeholder="Enter Counter 3 Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="homepage_counter4">Counter 4 Title</label>
                                    <input class="form-control br-8" type="text" name="homepage_counter4"
                                        value="{{ $settings['homepage_counter4'] }}"
                                        placeholder="Enter Counter 4 Title">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="homepage_countervalue1">Counter 1 Value</label>
                                    <input class="form-control br-8" type="number" name="homepage_countervalue1"
                                        value="{{ $settings['homepage_countervalue1'] }}"
                                        placeholder="Enter Counter 1 Value">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="homepage_countervalue2">Counter 2 Value</label>
                                    <input class="form-control br-8" type="number" name="homepage_countervalue2"
                                        value="{{ $settings['homepage_countervalue2'] }}"
                                        placeholder="Enter Counter 2 Value">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="homepage_countervalue3">Counter 3 Value</label>
                                    <input class="form-control br-8" type="number" name="homepage_countervalue3"
                                        value="{{ $settings['homepage_countervalue3'] }}"
                                        placeholder="Enter Counter 3 Value">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="homepage_countervalue4">Counter 4 Value</label>
                                    <input class="form-control br-8" type="number" name="homepage_countervalue4"
                                        value="{{ $settings['homepage_countervalue4'] }}"
                                        placeholder="Enter Counter 4 Value">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div> --}}
            </div>
        </fieldset>

        {{-- Blogs --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Blogs Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="blogs_title">Enter Blogs Title</label>
                        <input class="form-control br-8" type="text" name="blogs_title"
                            value="{{ $settings['blogs_title'] }}" placeholder="Enter blogs_title Title">
                    </div>

                    <div class="form-group mb-3">
                        <label class="pb-2" for="blogs_image">Enter Blogs Banner </label>
                        <div class="custom-file">
                            <input class="abroadsimage" id="blogs_image" data-show-remove="false"
                                data-default-file="{{ $settings['blogs_image'] }}" type="file"
                                name="blogs_image">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-3" for="blogs_description">Enter Blogs Description </label>
                        <textarea class="form-control br-8" name="blogs_description" rows="11">{{ $settings['blogs_description'] }}</textarea>
                    </div>

                </div>

                <div class="col-md-12">

                </div>
            </div>
        </fieldset>

        {{-- testimonials --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Testimonials Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_testimonials">Enter Testimonials Title</label>
                        <input class="form-control br-8" type="text" name="homepage_testimonials"
                            value="{{ $settings['homepage_testimonials'] }}"
                            placeholder="Enter homepage_testimonials Title">
                    </div>

                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_testimonialsbanner">Enter Testimonials Banner </label>
                        <div class="custom-file">
                            <input class="abroadsimage" id="homepage_testimonialsbanner" data-show-remove="false"
                                data-default-file="{{ $settings['homepage_testimonialsbanner'] }}" type="file"
                                name="homepage_testimonialsbanner">
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-3" for="blogs_description">Enter Testimonials Description </label>
                        <textarea class="form-control br-8" name="blogs_description" rows="11">{{ $settings['blogs_description'] }}</textarea>
                    </div>

                </div> --}}

                <div class="col-md-12">

                </div>
            </div>
        </fieldset>

        {{-- contact --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Contact Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_contacttitle">Enter Contact Title</label>
                        <input class="form-control br-8" type="text" name="homepage_contacttitle"
                            value="{{ $settings['homepage_contacttitle'] }}" placeholder="Enter Contact Title">
                    </div>

                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_contactimage">Enter Contact Banner </label>
                        <div class="custom-file">
                            <input class="abroadsimage" id="homepage_contactimage" data-show-remove="false"
                                data-default-file="{{ $settings['homepage_contactimage'] }}" type="file"
                                name="homepage_contactimage">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_contacttitle">Enter Contact Title</label>
                        <input class="form-control br-8" type="text" name="homepage_contacttitle"
                            value="{{ $settings['homepage_contacttitle'] }}" placeholder="Enter Contact Title">
                    </div> --}}

                    <div class="form-group mb-3">
                        <label class="pb-2" for="footer_logo">Enter Footer Logo </label>
                        <div class="custom-file">
                            <input class="abroadsimage" id="footer_logo" data-show-remove="false"
                                data-default-file="{{ $settings['footer_logo'] }}" type="file"
                                name="footer_logo">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">

                </div>
            </div>
        </fieldset>

    </div>
</div>
