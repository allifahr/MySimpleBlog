@include('inc.header')
<br><br>
    <div class="container">
      <div class="row">
        <legend>YOUR POST</legend>
  
                @if(session('info'))
            <div class="alert alert-successs">
              {{session('info')}}
            </div>
              @endif
          
                <table class="table table-stripped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @if(count($articles) > 0)
                @foreach($articles->all() as $article)
              <tr class="table-active">
                <th>{{ $article->id }}</th>
                <th>{{ $article->title }}</th>
                <th>{{ $article->description }}</th>
                <th>
                  <a href='{{ url("/read/{$article->id}") }}' class="
                    label label-primary">Read</a> |
                  <a href='{{ url("/update/{$article->id}") }}' class="
                    label label-success">Update</a> |
                  <a href='{{ url("/delete/{$article->id}") }}' class="
                    label label-success">Delete</a>
                </th>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table> 
      </div>
    </div>


@include('inc.footer')