<div class="tab-pane fade" id="v-pills-about" role="tabpanel" aria-labelledby="v-pills-about-tab">
    <div class="row">
        {{-- About us  --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">About Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_title">Enter About Title</label>
                        <input class="form-control br-8" type="text" name="aboutpage_title"
                            value="{{ $settings['aboutpage_title'] }}" placeholder="Enter About Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_image">Enter About Image</label>
                        <div class="custom-file">
                            <input class="aboutpage_image" id="aboutpage_image" data-show-remove="false"
                                data-default-file="{{ $settings['aboutpage_image'] }}" type="file"
                                name="aboutpage_image">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_bannerimage">Enter About Banner Image</label>
                        <div class="custom-file">
                            <input class="aboutpage_bannerimage" id="aboutpage_bannerimage" data-show-remove="false"
                                data-default-file="{{ $settings['aboutpage_bannerimage'] }}" type="file"
                                name="aboutpage_bannerimage">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-3" for="aboutpage_description">Enter About Description</label>
                        <textarea class="form-control aboutckeditor br-8" name="aboutpage_description" rows="11">
                    {{ $settings['aboutpage_description'] }}
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
                                    <label class="pb-2" for="about_counter1">Counter 1 Title</label>
                                    <input class="form-control br-8" type="text" name="about_counter1"
                                        value="{{ $settings['about_counter1'] }}" placeholder="Enter Counter 1 Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="about_counter2">Counter 2 Title</label>
                                    <input class="form-control br-8" type="text" name="about_counter2"
                                        value="{{ $settings['about_counter2'] }}" placeholder="Enter Counter 2 Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="about_counter3">Counter 3 Title</label>
                                    <input class="form-control br-8" type="text" name="about_counter3"
                                        value="{{ $settings['about_counter3'] }}" placeholder="Enter Counter 3 Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="about_counter4">Counter 4 Title</label>
                                    <input class="form-control br-8" type="text" name="about_counter4"
                                        value="{{ $settings['about_counter4'] }}" placeholder="Enter Counter 4 Title">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="about_countervalue1">Counter 1 Value</label>
                                    <input class="form-control br-8" type="number" name="about_countervalue1"
                                        value="{{ $settings['about_countervalue1'] }}"
                                        placeholder="Enter Counter 1 Value">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="about_countervalue2">Counter 2 Value</label>
                                    <input class="form-control br-8" type="number" name="about_countervalue2"
                                        value="{{ $settings['about_countervalue2'] }}"
                                        placeholder="Enter Counter 2 Value">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="about_countervalue3">Counter 3 Value</label>
                                    <input class="form-control br-8" type="number" name="about_countervalue3"
                                        value="{{ $settings['about_countervalue3'] }}"
                                        placeholder="Enter Counter 3 Value">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="pb-2" for="about_countervalue4">Counter 4 Value</label>
                                    <input class="form-control br-8" type="number" name="about_countervalue4"
                                        value="{{ $settings['about_countervalue4'] }}"
                                        placeholder="Enter Counter 4 Value">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div> --}}
            </div>
        </fieldset>

    </div>
</div>
