<div class="col">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
    </tr>
  </thead>
  <tbody>
      @foreach($students as $student)
  <tr>
      <td scope="col">{{$student->cne}}</td>
      <td scope="col">{{$student->firstName}}</td>
      <td scope="col">{{$student->lastName}}</td>
      <td scope="col">{{$student->age}}</td>
      <td scope="col">{{$student->speciality}}</td>
      <td>
          <a href="{{url('/edit/'.$student->id)}}" class="btn btn-success btn-sm">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>