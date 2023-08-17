@include('admin.header')
<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Partner Record</h2>
                    
                </div>
                
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                   
                                    <th scope="col">UserName</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Name Maherara</th>
                                    <th scope="col">Rera Avaiable</th>
                                    <th scope="col">Pan Number</th>
                                    <th scope="col">CP Firm Type</th>
                                    <th scope="col">CP Type</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>

            @foreach($data as $d)

                                                                <tr>
                                    <td>{{$d->name}}</td>
                                    <td><b>{{$d->email}}</b></td>
                                    <td>{{$d->phone}}</td>
                                    <td>{{$d->name_maherera}}</td>
                                    <td>{{$d->rera_ava}}</td>
                                    <td>{{$d->pan_number}}</td>
                                    <td>{{$d->cp_firm_type}}</td>
                                    <td>{{$d->cp_type}}</td>
                                    <td>{{$d->created_at}}</td>
                                </tr>
                    @endforeach
                            </tbody>
                        </table>
                    </div> <!-- table-responsive //end -->
                </div> <!-- card-body end// -->
            </div> <!-- card end// -->
            <!-- <div class="pagination-area mt-15 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
                    </ul>
                </nav>
            </div> -->
        </section> <!-- content-main end// -->
       
        @include('admin.footer')