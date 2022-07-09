<html>

<p>hay</p>

<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Position</th>
        <th>Number</th>
        <th>Action</th>
    </thead>
</table>
<table class="table table-striped">
    <tbody>
        @foreach($shows as $show)
        <tr>
            <td style="background-color: #000000;">{{$show->id}}</td>
            <td>{{$show->show_name}}</td>
            <td>{{$show->position}}</td>
            <td>{{$show->number}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</html>