<div class="card mb-3">
  <img src="https://cdn.pixabay.com/photo/2018/03/21/07/16/learning-3245793_960_720.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of student</h5>
    <p class="card-text">You can find all the information about student.</p>
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
</div>


