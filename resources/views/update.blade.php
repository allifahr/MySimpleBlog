@include('inc.header')
<br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
<form class="form-horizontal" method="POST" action="{{ url('/edit', array($articles->id))}}">
            {{csrf_field()}}
            @if(count($errors) >0)
                @foreach($errors->all() as $error)
                  <div class="alert-danger">{{$error}}</div>
                  @endforeach
            @endif
            <fieldset>
              <legend>Laravel CRUD</legend>

              <div class="form-group">
                <label for="InputTitle" class="col-lg-2 control-label">Title</label>
                <div class="col-lg-10">
                  <input type="text" name="title" class="form-control" id="InputTitle" value="<?php echo $articles->title;?>" placeholder="Title">
                </div>
              </div>
              <div class="form-group">
                <label for="InputDescription" class="col-lg-2 control-label">Description</label>
                <div class="col-lg-10">

                  <textarea name="description" class="form-control" placeholder="Description">
                    <?php echo $articles->description;?>
                  </textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
                </div>
              </div>
            </fieldset> 
          </form>
        </div>
      </div>
    </div>
@include('inc.footer')