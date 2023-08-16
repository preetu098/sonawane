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
                                   
                                    <th scope="col">Job</th>
                                    <th scope="col">Experience</th>
                                    <th scope="col">Education</th>
                                    <th scope="col">Employement Type</th>
                                    <th scope="col">Skills</th>
                                    
                                    <th scope="col">Date</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>

            @foreach($record as $d)

                                                                <tr>
                                    <td>{{$d->job}}</td>
                                    <td><b>{{$d->exp}}</b></td>
                                    <td>{{$d->education}}</td>
                                    <td>{{$d->emplo}}</td>
                                    <td>{{$d->skills}}</td>
                                    <td>{{$d->created_at}}</td>
                                    <td><a href="/deleteJob/id={{$d->id}}">Delete</a></td>
                                    <td><a href="/editjob/id={{$d->id}}">Update</a></td>
                                </tr>
                    @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div> <!-- card-body end// -->
            </div> <!-- card end// -->
           
        </section> <!-- content-main end// -->
       
        @include('admin.footer')