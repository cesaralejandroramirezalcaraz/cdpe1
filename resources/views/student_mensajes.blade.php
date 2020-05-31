
@extends('boostrap_alumno')



@section('seccion')

<style type="text/css">
@media handheld, only screen and (min-width: 1023px) {
.search_and_share1{
display:none;
}
}
 
@media only screen and (max-width: 1023px) {
.search_and_share2{
display:none;
}
}

</style>

  <div class="row ">
    <div class="col-md-2 shadow p-3 mb-5 bg-white rounded">
     <img src="user.png" alt="Responsive image " class="img-thumbnail search_and_share2">
     <br>
     <p>Nombre</p>
     <p>Matricula</p>
      <p>Carrera </p>
       <p></p>
    
    </div>
    <div class="col-md-10 ">
    <br>
    
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">mensajes </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>texto de mensaje </td>
    
    </tr>

  </tbody>
</table>
    
    </div>

</div>
@endsection