<div class="table-responsive">
    <table class="table" id="tests-table">
        <thead>
            <tr>
                <th>UserID</th>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($response as $r)
                <tr>
                    <td>{{ $r->userId }}</td>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->title }}</td>
                    <td>{{ $r->body }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['tests.destroy', $r->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tests.show', [$r->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tests.edit', [$r->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
