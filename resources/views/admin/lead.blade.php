@include('admin.header')
<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Lead Information</h2>
                    
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
                                    <th scope="col">URl</th>
                                    <th scope="col">Remark</th>
                                    <th scope="col">UTM Medium</th>
                                    <th scope="col">UTM Source</th>
                                    <th scope="col">Lead</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>

            @foreach($data as $d)

                                                                <tr>
                                    <td>{{$d->username}}</td>
                                    <td><b>{{$d->phone}}</b></td>
                                    <td>{{$d->email}}</td>
                                    <td>{{$d->url}}</td>
                                    <td>{{$d->remak}}</td>
                                    <td>{{$d->utm_medium}}</td>
                                    <td>{{$d->utm_source}}</td>
                                    <td>{{$d->lead}}</td>
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