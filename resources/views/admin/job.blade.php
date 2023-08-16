@include('admin.header')
        <section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                   
                        <h2 class="content-title">Jobs Upload</h2>
                       

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
                                        <form  action="/jobAdd" method="post">
                                            @csrf
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Job Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="job" required class="form-control" placeholder="Job Title">
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Experience</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" required name="experience" placeholder="Experience" rows="4"></textarea>
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->
                                           
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Education</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="education" required class="form-control" placeholder="Education">
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->

                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Employement Type</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="emp_type" placeholder="Employement Type" rows="4" required></textarea>
                                                </div> <!-- col.// -->
                                            </div> <!-- row.// -->

                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Skills</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="skills" placeholder="Skills" rows="4" required></textarea>
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