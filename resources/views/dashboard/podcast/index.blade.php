@extends('layouts.appDash')

@section('content')
<table class="uk-table uk-table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr class="uk-visible-toggle">
            <td>{{ $item->id }}</td>
            <td>
                <a href="{{ route($nome . '.show', $item->id) }}">
                    {{ $item->titulo }}
                </a>
            </td>
            <td>
                <div >
                    <ul class="uk-iconnav uk-flex uk-flex-right uk-invisible-hover">
                        <li><a href="#" class="uk-text-primary" uk-icon="icon: file-edit"></a></li>
                        <li><a href="#" class="uk-text-danger" uk-icon="icon: trash"></a></li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links('layouts.paginate', ['item' => $data  ]) }}
@endsection
