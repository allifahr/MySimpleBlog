@include('inc.header')
<br><br>
    <div class="container">
      <div class="row">
        <legend>Read Article</legend>
        <tr class="lead"> {{ $articles->title }}</tr><br>
        <tr>{{ $articles->description }}</tr>
      </div>
      </div>

@include('inc.footer')