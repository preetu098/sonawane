<?php include('header.php');?>
<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Admin</h2>
                 
                </div>
               
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Name</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" />
                                </div>
                                <div class="mb-4">
                                    <label for="product_slug" class="form-label">Email</label>
                                    <input type="email" placeholder="Type here" class="form-control" id="product_slug" />
                                </div>
                                <div class="mb-4">
                                    <label for="product_slug" class="form-label">Password</label>
                                    <input type="password" placeholder="Type here" class="form-control" id="product_slug" />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option>Active</option>
                                        <option>InActive</option>
                                    </select>
                                </div>
                              
                                <div class="d-grid">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </th>
                                          
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                           
                                            <td><b>demo1</b></td>
                                            <td>demo1</td>
                                            <td>demo1</td>
                                            <td>demo1</td>
                                            <td class="text-end">
                                               
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                           
                                            <td><b>demo1</b></td>
                                            <td>demo1</td>
                                            <td>demo1</td>
                                            <td>demo1</td>
                                            <td class="text-end">
                                               
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                  
                                            </td>
                                        </tr>
                                                                           </tbody>
                                </table>
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
        </section> <!-- content-main end// -->
       
        <?php include('footer.php');?>