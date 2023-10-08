
<x-layouts.main>
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"> Your post ID is  {{ $post->id }}</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="container" action="{{route('posts.update', ['post'=>$post->id]) }}"   enctype="multipart/form-data" method="POST" >
        @method('PUT')
        @csrf


        <div class="control-group pt-5 pt-5  col-sm-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input  name="title"  type="text" value="{{$post->title}}" class="form-control p-4" id="name" placeholder="Title"  data-validation-required-message="title" />
            <p class="help-block text-danger"></p>
        </div>

        <div class="control-group col-sm-4">
            <input type="text"  name="short_content" value="{{ $post->short_content }}" class="form-control p-4" id="subject" placeholder="short_content"  data-validation-required-message="short_content" />
            <p class="help-block text-danger"></p>
        </div>
        <div class="control-group  col-sm-4">
            <textarea class="form-control p-4" value="" name="contents" rows="6" id="message"  placeholder="body"  data-validation-required-message="content">{{ $post->content }}</textarea>
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-sm-4 mb-5">
            <input  name="photo"  class="form-control form-control-range" id="formFileLg" type="file">
        </div>
        <div>
            <button class="btn btn-primary col-sm-4 btn-block py-3 px-5 " type="submit" id="sendMessageButton">Send Message</button>
        </div>
    </form>

</x-layouts.main>
