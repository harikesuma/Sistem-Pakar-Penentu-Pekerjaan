<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Nama Topic</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($topics as $topic)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$topic->nama_topic}}</td>
            <td><a href="{{ route('topics.edit',$topic->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('topics.destroy', $topic->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>