@extends('layouts.app')

@section('extraCSS')
    <!-- DataTables CSS -->
    <link href="/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/dataTables/sb-admin-2.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/css/preferences/bootstrap-timepicker.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
         <div class="col-md-5 col-md-offset-1">
              <div class="panel panel-primary">
                 <div class="panel-heading">User Profile</div>

                 <div class="panel-body">
                   <b>  NAME </b><br>
                     <span>{{ $user->name}}</span> <br> <br>
                     <b> PROGRAM <br> </b>
                     <span>{{ $user->program->program_name}}</span>  <br> <br>
                     <b> EMAIL <br> </b>
                     <span>{{ $user->email}}</span> <br><br>

                 </div>

             </div>
         </div>
         <div class="col-md-5">
              <div class="panel panel-primary" style="padding-bottom:4%">
                   <div class="panel-heading">Preferences</div>
                        <div class="panel-body">
                          {!!  Form::model($preferences, ['url' => 'updatePreferences', 'class' => 'form-horizontal'])   !!}
                              @include('users.preferences_form')
                          {!! Form::close() !!}
                   </div>
              </div>
         </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    List of Completed Courses
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Credits</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($completedCourses as $course)
                            <tr class="odd gradeX" id="classrow-{{$course->course_id}}">
                                <td>{{ $course->course_code }}</td>
                                <td>{{ $course->course_name }}</td>
                                <td style="text-align: center;">{{ $course->credits }}</td>
                                <td style="text-align: center;">
                                    <button class="btn btn-danger btn-sm" value="{{$course->course_id}}">
                                    <span class="glyphicon glyphicon-remove-sign"></span> Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('extraJS')
    <!-- DataTables JavaScript -->
    <script src="/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables/dataTables.bootstrap.min.js"></script>
    <script src="/js/dataTables/dataTables.responsive.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>
    <script src="/js/preferences/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript">
        $('#timepicker1').timepicker();
        $('#timepicker2').timepicker();
    </script>

    <script>
    $(document).ready(function() {
          var table = $('#dataTables-example').DataTable({
              responsive: true
         });

         $('#dataTables-example tbody').on('click', 'td button', function(){
            var course_id = $(this).val();

              $.ajax({
                  url: '/profile',
                  type: 'POST',
                  data: {
                       course_id: course_id
                  },
                  success: function (data) {
                     console.log(data);
                     if(data['response'] == true)
                     {
                          var row = document.getElementById('classrow-'+course_id);
                          $('#dataTables-example').DataTable()
                                                      .row(row)
                                                      .remove()
                                                      .draw(false);
                     }
                   }
              });
         });
   });
    </script>

@endsection
