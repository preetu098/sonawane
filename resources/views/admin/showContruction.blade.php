@include('admin.header')
<style>
    #cards
    {
        height:300px!important;
        width:200px!important;
    }
</style>
<section class="content-main">
            <div class="content-header">
                <h2 class="content-title">Construction Update Details</h2>
                
            </div>
            <div class="card mb-4">
               
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                        @foreach($all_record as $record)
                       
                        
                        <div class="col">
                            <div class="card card-user" id="cards">
                                <div class="card-header">
                <img class="img-md img-avatar" src="{{asset('/storage/'.$record->image)}}" alt="asset('storage/app/public/'.$record->image)}}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Header Title:{{$record->header}}</h5>
                                    <div class="card-text text-muted">
                                    <!-- <h5 class="card-title ">Description: {{$record->description}}</h5> -->
                                    <!-- <h5 class="card-title ">{{$record->seo_title}}</h5>  
                                    <h5 class="card-title">{{$record->seo_desc}}</h5>
                                    <h5 class="card-title">{{$record->showpage}}</h5> -->
                                    <a href="/editconst/id={{$record->id}}"><button class="btn" style="background-color:rgb(14,46,80);color:white">Update</button></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->

                        @endforeach
                        
        </section> <!-- content-main end// -->
       @include('admin.footer')
       