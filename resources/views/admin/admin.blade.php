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
                            <div class="row">
                                <div class="col-3">
                                    <h5>Email</h5>
                                </div>
                                <div class="col-3">
                                    <h5>Password</h5>
                                </div>
                            </div>
                                        @foreach($data as $da)
                                        <div class="row">
                                            <div class="col-5 card">{{$da->name}}</div>
                                            <div class="col-5 card">{{$da->password}}</div>
                                        </div>
                                        
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
