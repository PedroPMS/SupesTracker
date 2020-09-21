  @extends('layouts.app')

  @section('content')
      <h1 class="display-4 border border-top-0 border-left-0 border-right-0">Posts</h1>
      <main>
          <div class="container">
              <div class="form justify-content-center">
                  <form action="" class="">
                      <div class="form-group">
                          <input class="form-control p-4" placeholder="Create Post" type="text" id="create_post"
                              name="content">
                      </div>
                  </form>
              </div>

              @foreach ($posts as $post)
                  <section>
                      <div class="card">
                          <div class="card-header form-inline d-flex justify-content-between">
                              <div class="d-inline-flex">
                                  <h5>{{ $post->name }}</h5>
                                  @if (Auth::id() == $post->user_id)
                                      <div class="btn-group">
                                          <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                              aria-haspopup="true" aria-expanded="false">
                                          </button>

                                          <div class="dropdown-menu">
                                              <a class="dropdown-item"
                                                  href="{{ route('posts.edit', ['id_post' => $post->id_post]) }}">Editar</a>
                                              <a class="dropdown-item text-danger"
                                                  href="{{ route('posts.delete') }}">Excluir</a>
                                          </div>
                                      </div>
                                  @endif
                              </div>
                              <a class="h4 text-decoration-none"
                                  href="{{ route('posts.show', ['id_supe' => $post->id_supe, 'supe' => Str::slug($post->nickname)]) }}">{{ $post->nickname }}</a>
                          </div>
                          <div class="card-body">
                              <p class="card-text">{{ $post->text }}</p>
                              <small>{{ date('H:i - Y/m/d ', strtotime($post->updated_at)) }}</small>
                          </div>
                      </div>
                  </section>
                  <hr>
              @endforeach
              <div class="row">
                  <div class="col-md-12">
                      {{ $posts->links() }}
                  </div>
              </div>
          </div>
      </main>
      <script type="text/javascript">
          document.getElementById("create_post").onfocus = function() {
              const submit = window.location.href + 'submit';
              window.location.replace(submit);
          };

      </script>
  @endsection
