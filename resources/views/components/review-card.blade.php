@props(['review'])


<div class="container-fluid bg-black text-white text-center border">
    <div class="row">
        <div class="col-sm text-center">
            <h3>
                <h3>{{$review->score}}</h3>
                <h5>{{$review->description}}</h6>
                <h6>{{$review->user->name}}</h5>
            </h3>
        </div>
    </div>
</div>
