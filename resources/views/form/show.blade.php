@extends('form.index')

@section('content')

<table class="table table-bordered">
    <tr>
        <th>Action</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Location</th>
    </tr>
    @foreach ($child as $item)
        <tr>
            <td>
                <form action="{{ route('child.destroy',$item->id) }}" method="post">
                    <a class="btn btn-primary" href="{{ route('child.update',$item->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
            
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            <td>{{$item->first_name}} </td>
            <td>{{$item->middle_name}} </td>
            <td>{{$item->last_name}} </td>
            <td>{{$item->age}} </td>
            <td>{{$item->gender}} </td>
            <td>{{$item->location}} </td>
        </tr>
    @endforeach
    <tr>
        <a class="btn btn-success" id="showHiddenForm">Add new</a>
    </tr>
</table>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let showButton = document.querySelector('#showHiddenForm');
        let hiddenForm = document.querySelector('.hiddenForm');

        showButton.addEventListener('click', function() {
            hiddenForm.style.display = 'block';
        });
    });
</script>

@endsection