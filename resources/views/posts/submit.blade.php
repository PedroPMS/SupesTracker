@extends('layouts.app')

@section('content')
    <main>
        <h1 class="display-4 border border-top-0 border-left-0 border-right-0">@if(isset($post)) Edit Your Post @else Create Your Post @endif</h1>
        <div class="container">
            <div class="form justify-content-center">
                <form action="{{ route('posts.create') }}" class="" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control p-4 h-75" placeholder="Create Post" type="text" id="create_post"
                            name="text">
                    </div>
                    <div class="form-group">
                        <label for="select-supe" class="h5">Select the Supe</label>
                        <select class="form-control" id="select-supe" required="true" name="id_supe">
                            <option selected>Supe</option>
                            @foreach ($supes as $supe)
                                <option value="{{ $supe->id_supe }}">{{ $supe->nickname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            tinymce.init({
                selector: '#create_post',
                menubar: false,
            });

        </script>
    </main>
@endsection
