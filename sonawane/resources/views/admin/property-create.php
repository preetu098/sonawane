
<?php include('header.php');?>
<section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Add New Property</h2>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="product_title" class="form-label">Product title</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_title">
                            </div>
                            <div class="row gx-3">
                                <div class="col-md-4  mb-3">
                                    <label for="product_sku" class="form-label">Slug</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_sku">
                                </div>
                                <div class="col-md-8 mb-4">
                                <label class="form-label">City</label>
                                <select class="form-select">
                                    <option value="">Choose</option>
                                    <option>Kalyan, Maharashtra, India</option>
                                    <option>Dombivil, Maharashtra, India</option>
                                </select>
                                 </div>
                                <!-- <div class="col-md-4  mb-3">
                                    <label for="product_size" class="form-label">Size</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_size">
                                </div> -->
                            </div>
                            <div class="mb-4">
                                <label for="product_brand" class="form-label">Address</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_brand">
                            </div>
                            <div class="mb-4">
                                <label for="product_brand" class="form-label">Email</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_brand">
                            </div>
                            <div class="mb-4">
                                <label for="product_brand" class="form-label">Phone</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_brand">
                            </div>
                            <div class="mb-4">
                                <label for="product_brand" class="form-label">Website</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_brand">
                            </div>
                        </div>
                    </div> <!-- card end// -->
                    <!-- <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                <label class="form-label">Description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                    </div>  -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                <label class="form-label">Images</label>
                                <input class="form-control" type="file">
                            </div>
                            <div>
                                <label class="form-label">Images</label>
                                <input class="form-control" type="file">
                            </div>
                            <div>
                                <label class="form-label">Images</label>
                                <input class="form-control" type="file">
                            </div>
                        </div>
                    </div> <!-- card end// -->
                </div>
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            
                            <div class="mb-4">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>Active</option>
                                    <option>InActive</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Ongoing Project</label>
                                <select class="form-select">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Contruction Update</label>
                                <select class="form-select">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Completed Project</label>
                                <select class="form-select">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">SEO Title</label>
                                <textarea placeholder="Type here" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">SEO Description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4"></textarea>
                            </div>
<!-- 
                            <div class="mb-4">
                                <label class="form-label">Tags</label>
                                <input type="text" placeholder="Type here" class="form-control">
                            </div>
                            <a href="#" class="font-xs hover-up mr-15"><i class="font-xs material-icons md-close text-body"></i> Tech</a>
                            <a href="#" class="font-xs hover-up mr-15"><i class="font-xs material-icons md-close text-body"></i> Mobile</a>
                            <a href="#" class="font-xs hover-up mr-15"><i class="font-xs material-icons md-close text-body"></i> Apple</a>
                            <hr>
                            <h5 class="mb-3">Categories</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="product-cat">
                                <label class="form-check-label" for="product-cat"> Shirt </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="product-cat-1">
                                <label class="form-check-label" for="product-cat-1"> T-Shirt </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="product-cat-2">
                                <label class="form-check-label" for="product-cat-2"> Sneakers </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="product-cat-3">
                                <label class="form-check-label" for="product-cat-3"> Joggers </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="product-cat-4">
                                <label class="form-check-label" for="product-cat-4"> Vests </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="product-cat-5">
                                <label class="form-check-label" for="product-cat-5"> Knitwear </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="product-cat-8">
                                <label class="form-check-label" for="product-cat-8"> Shorts </label>
                            </div> -->
                        </div>
                    </div> <!-- card end// -->
                </div>
            </div>
        </section>
  <?php include('footer.php');?>