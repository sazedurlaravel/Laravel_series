@extends('welcome')

@section('content')

<h1>Post Details</h1>

   <h2>{{$post_details->title}}</h2>
    <p>{{$post_details->des}}</p>
    <small class="float-right">
        <span title="Likes" id="saveLikeDislike" data-type="like" data-post="{{ $post_details->id}}" class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold">
            Like
            <span class="like-count">{{ $post_details->likes() }}</span>
        </span>
        <span title="Dislikes" id="saveLikeDislike" data-type="dislike" data-type="dislike" data-post="{{ $post_details->id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
            Dislike
            <span class="dislike-count">{{ $post_details->dislikes() }}</span>
        </span>
    </small>

    
@endsection

@section('scripts')
    <script>
        
            // Save Like Or Dislike
            $(document).on('click','#saveLikeDislike',function(){
                var _post=$(this).data('post');
                var _type=$(this).data('type');
                var vm=$(this);
                // Run Ajax
                $.ajax({
                    url:"{{ url('save-likedislike') }}",
                    type:"post",
                    dataType:'json',
                    data:{
                        post:_post,
                        type:_type,
                        _token:"{{ csrf_token() }}"
                    },
                    beforeSend:function(){
                        vm.addClass('disabled');
                    },
                    success:function(res){
                        if(res.bool==true){
                            vm.removeClass('disabled').addClass('active');
                            vm.removeAttr('id');
                            var _prevCount=$("."+_type+"-count").text();
                            _prevCount++;
                            $("."+_type+"-count").text(_prevCount);
                        }
                    }   
                });
            });
            // End
    </script>
@endsection