@include('admin.header')
        <section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                   
                        <h2 class="content-title">Construction Update</h2>
                       

                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gx-5">
                               
                                <div class="col-lg-9">
                                    <section class="content-body p-xl-4">
                                    @if(session('success'))
                   <div class="alert alert-success">
                        {{session('success')}}
                   </div>
                   @endif
                                        <form enctype="multipart/form-data" action="/constructiondata" method="post">
                                            @csrf
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Header</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="header" class="form-control" placeholder="Urgent Property">
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Description*</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="description" placeholder="Type here" rows="4"></textarea>
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->
                                           
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">SEO Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="seo_title" class="form-control" placeholder="">
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->

                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">SEO Description</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="seo_desc" placeholder="Type here" rows="4"></textarea>
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->



                                            
                                            <div class="row mb-4">
                                                <!-- <label class="col-lg-3 col-form-label">Show HomePage</label> -->
                                                <div class="col-lg-9">
                                                    <label class="form-check my-2">
                                                        <input type="hidden" name="show" class="form-check-input" value="no" checked="">
                                                        <!-- <span class="form-check-label">Enable this product </span> -->
                                                    </label>
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->

                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Image</label>
                                                <div class="col-lg-9">
                                                    <label class="form-check my-2">
                                                    <input class="form-control" type="file" name="file">
                                                    </label>
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->












                                            <br>
                                            <button class="btn btn-primary" type="submit"> Save</button>
                                        </form>
                                    </section> <!-- content-body .// -->
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                        </div> <!-- card body end// -->
                    </div>
                </div>
            </div>
        </section>
@include('admin.footer')