<?php
if (!empty($data['msg'])) {
    echo '<div class="alert alert-' . $data['type'] . '">' . $data['msg'] . '</div>';
}
?>

<form method="POST" action="<?php echo _WEB_ROOT_PATH . '/product/add_product' ?>" enctype="multipart/form-data">
    <div class="grid-cols-12 grid gap-4">
        <div class="mb-3 col-span-6">
            <label for="exampleInputEmail1" class="form-label">Name product</label>
            <input type="text" class="form-control" name="productname" placeholder="Name product">
        </div>
        <div class="mb-3 col-span-6 h-[70px]" id="image-upload">
            <label for="image" class="form-label flex flex-col justify-center" id="upload-img">
                <span>Image Product</span>
                <div class="flex items-center gap-3 bg-[#fff] mt-2 px-2 py-1 rounded border border-[#99a1a8] w-[483px]">
                    <img src="<?php echo _PUBLIC_PATH . '/client/assets/image/image_upload.png' ?>" alt="" class="w-7">
                    <span>
                        Upload file
                    </span>
                </div>
            </label>
            <input type="file" id="image" class="form-control hidden" name="product" onchange="readURL(this);"><br>
        </div>
        <div class="mb-3 col-span-6 h-[70px]" id="images-upload">
            <label for="image-multiple" class="form-label flex flex-col justify-center" id="upload-imgs">
                <span>Images Product</span>
                <div class="flex items-center gap-3 bg-[#fff] mt-2 px-2 py-1 rounded border border-[#99a1a8] w-[483px]">
                    <img src="<?php echo _PUBLIC_PATH . '/client/assets/image/image_upload.png' ?>" alt="" class="w-7">
                    <span>
                        Upload file
                    </span>
                </div>
            </label>
            <input type="file" id="image-multiple" multiple class="form-control hidden" name="detail_image[]"><br>
        </div>
        <div class="mb-3 col-span-6">
            <label for="exampleInputEmail1" class="form-label">Category</label><br>
            <select name="category" id="category" class="custom-select" required>
                <option>Select....</option>
                <?php
                foreach ($data['categories'] as $category) {
                ?>
                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3 col-span-6">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Example: 205">
        </div>
        <div class="mb-3 col-span-6">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea rows="4" type="text" class="form-control" name="description" placeholder="Description"></textarea>
        </div>
    </div>
    <input type="hidden" name="add_product" value="add_product">
    <button type="submit" class="btn btn-primary px-4 mb-4">Add</button>
</form>