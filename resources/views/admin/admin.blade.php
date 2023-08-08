@if(Session::get('user')!=null)

@include('admin.header')
<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Admin</h2>
                    @if(session('success'))
                   <div class="alert alert-success">
                        {{session('success')}}
                   </div>
                   @endif
                </div>
               
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form method="post" action="/addAdmin">
                                @csrf
                                <div class="mb-4">
                                    <label for="product_slug" class="form-label">Email</label>
                                    <input type="email" name="email" placeholder="Type here" class="form-control" id="product_slug" required />
                                </div>
                                <div class="mb-4">
                                    <label for="product_slug" class="form-label">Password</label>
                                    <input type="password" name="password" placeholder="Type here" class="form-control" id="product_slug" required/>
                                </div>
                              
                              
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                           
                                          
                                          
                                            <th>Email</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $da)
                                        <tr>
                                            <td>{{$da->name}}</td>
                                            <td>{{$da->password}}</td>
                                        </tr>
                                        @endforeach
                                                                           </tbody>
                                </table>
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
        </section> <!-- content-main end// -->
                  
@include('admin.footer')
@else
<script>
    window.location = "/login";
  </script>
 @endif
