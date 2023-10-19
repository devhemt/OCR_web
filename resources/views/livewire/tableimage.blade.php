<div class="card-body">
    <h5 class="card-title">Table with stripped rows</h5>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Input</th>
            <th scope="col">Output</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $d)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$d->name}}</td>
            <td>{{$d->email}}</td>
            <td><img style="max-height: 500px; max-width: 300px; object-fit: cover" src="{{asset('upload/images/'.$d->path)}}" alt=""></td>
            <td><img style="max-height: 500px; max-width: 300px; object-fit: cover" src="{{asset('upload/results/'.$d->path)}}" alt=""></td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>
