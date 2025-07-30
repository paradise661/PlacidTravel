<div class="col-md-4">
    <div class="card-body card shadow br-8">
        <div class="form-group mb-3 d-flex align-items-center">
            <label class="m-0 p-0">Status</label>
            <select name="status" id="status" class="form-select ms-5">
                <option value="1" class="p-3">Publish</option>
                <option value="0" class="p-3">Draft</option>
            </select>
        </div>

        <hr class="shadow-sm">

        <div class="form-group mb-3 d-flex align-items-center">
            <label for="order">Order</label>
            <input type="number" name="order" value="{{ old('order')  }}" class="form-control ms-5 @error('order') is-invalid @enderror" placeholder="Enter Order">
            @error('order')
            <div class="invalid-feedback" style="display: block;">
                {{ $message }}
            </div>
            @enderror
        </div>

        <hr class="shadow-sm">

        <div class="form-group mb-3 mt-2">
            <label for="image">Featured Image</label>
            <div class="custom-file">
                <input type="file" name="image" data-show-remove="false" class="dropify @error('image') is-invalid @enderror" id="image">
                @error('image')
                <div class="invalid-feedback" style="display: block;">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group mb-3 mt-2">
            <label for="image">Banner Image</label>
            <div class="custom-file">
                <input type="file" name="banner_image" data-show-remove="false" class="dropify @error('banner_image') is-invalid @enderror" id="banner_image">
                @error('image')
                <div class="invalid-feedback" style="display: block;">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <hr class="shadow-sm">

        <div class="card-footers d-flex justify-content-center">
            <button type="submit" class="btn btn-lg btn-primary w-full"><i class="fa-solid fa-plus"></i> Publish</button>
        </div>

    </div>
</div>