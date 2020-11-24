@extends('layout.template')

@section('content')

<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Add Posts</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
    <form class="text-center" action="{{route("post.insert")}}" method="post"style="color: #4f4b4b;" >
        @csrf

            <!-- Title -->
            <div class="md-form mt-3">
                <label for="materialContactFormName">Title</label>

                <input type="text" id="materialContactFormName" class="form-control" name="title">
            </div>

            <!-- slug -->
            <div class="md-form">
                <label for="materialContactFormEmail">Slug</label>

                <input type="text" id="materialContactFormEmail" class="form-control" name="slug">
            </div>

            <div class="md-form">
                <label for="materialContactFormEmail">Version</label>

                <input type="number" id="materialContactFormEmail" class="form-control" name="version">
            </div>

           

           
            <div class="md-form">
                <label for="">Content</label>

                <textarea id="" class="form-control md-textarea" rows="3" name="body"></textarea>
            </div>

            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 " type="submit">Send</button>
           

        </form>
        <!-- Form -->

    </div>

</div>

@endsection