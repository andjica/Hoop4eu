<!-- Icons -->
<h4 class="pl-3 pr-3 font-italic">Aanverwante zaken</h4>
@foreach($jobs as $job)
        <a href="{{asset('/job/'.$job->id)}}">
        <div class="media text-muted p-3">
            <img src="{{asset('/img-categories/'.$job->category->img)}}" alt="{{$job->category->name}}" class="mr-2 rounded" width="75px">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">{{$job->name}}</strong>
            </div>
            <span class="d-block">Category: {{$job->category->name}}</span>
            </div>
        </div>
        </a>
 @endforeach     
        <!-- End Icons -->