
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambah Topic
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
      <form method="post" action="{{ route('topics.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nama Topic:</label>
              <input type="text" class="form-control" name="nama_topic"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
  </div>
</div>