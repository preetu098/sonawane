@include('admin.header')
<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Newsletter</h2>
                    
                </div>
                
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                   
                                    <th scope="col">Id</th>
                                    <th scope="col">Email</th>
                                  
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>

            @foreach($all_record as $d)

                                                                <tr>
                                    
                                    <td><b>{{$d->id}}</b></td>
                                    <td>{{$d->email}}</td>
                                   
                                    <td>{{$d->created_at}}</td>
                                </tr>
                    @endforeach
                            </tbody>
                        </table>
                    </div> <!-- table-responsive //end -->
                </div> <!-- card-body end// -->
            </div> <!-- card end// -->
            
        </section> <!-- content-main end// -->
       
        @include('admin.footer')