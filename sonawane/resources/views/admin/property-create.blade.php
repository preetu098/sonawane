@if(Session::get('user')!=null)

@include('admin.header')
<section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                   @if(session('success'))
                   <div class="alert alert-success">
                        {{session('success')}}
                   </div>
                   @endif
                        <h2 class="content-title">Add New Property</h2>
                      
                        <form action="/property-add" method="post" enctype="multipart/form-data">
                            @csrf
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save</button>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="product_title" class="form-label">Product title</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_title" name="product_title">
                            </div>
                            <div class="row gx-3">
                                <div class="col-md-4  mb-3">
                                    <label for="product_sku" class="form-label">Slug</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_sku" name="slug">
                                </div>
                                <div class="col-md-8 mb-4">
                                <label class="form-label">City</label>
                                <select class="form-select" name="city">
                                    <option value="">Choose</option>
                                    <option value="Kalyan, Maharashtra, India">Kalyan, Maharashtra, India</option>
                                    <option value="Dombivil, Maharashtra, India">Dombivil, Maharashtra, India</option>
                                </select>
                                 </div>
                               
                            </div>
                            <div class="mb-4">
                                <label for="product_brand" class="form-label">Address</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_brand" name="address">
                            </div>
                            <div class="mb-4">
                                <label for="product_brand" class="form-label">Email</label>
                                <input type="email" placeholder="Type here" class="form-control" id="product_brand" name="email">
                            </div>
                            <div class="mb-4">
                                <label for="product_brand" class="form-label">Phone</label>
                                <input type="number" name="phone" placeholder="Type here" class="form-control" id="product_brand">
                            </div>
                            <div class="mb-4">
                                <label for="product_brand" class="form-label">Website</label>
                                <input type="text" name="website" placeholder="Type here" class="form-control" id="product_brand">
                            </div>
                        </div>
                    </div> 
                    <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                <label class="form-label">Images</label>
                                <input class="form-control" type="file" name="file" multiple>
                            </div>
                           
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            
                            <div class="mb-4">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">InActive</option>
                                </select>
                            </div>

                          
                            <div class="mb-4">
                                <label class="form-label">Completed Project</label>
                                <select class="form-select" name="complete">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">SEO Title</label>
                                <textarea placeholder="Type here" class="form-control" rows="4" name="seo"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">SEO Description</label>
                                <textarea placeholder="Type here" class="form-control" name="seo_desc" rows="4"></textarea>
                            </div>

                        </div>
                    </div> 
                    </form>
                </div>
            </div>
        </section>
        @include('admin.footer')
@else
<script>
    window.location = "/login";
  </script>
 @endif
