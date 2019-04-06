
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Topic
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('topics.update', $topic->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Nama Topic:</label>
          <input type="text" class="form-control" name="nama_topic" value={{ $topic->nama_topic }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>