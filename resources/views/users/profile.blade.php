@extends('layouts.app')

@section('extraCSS')
    <!-- DataTables CSS -->
    <link href="/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/dataTables/sb-admin-2.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">User Profile</div>

                <div class="panel-body">
                  <b>  NAME </b><br>
                    <span contenteditable="">{{ $user->name}}</span> <br> <br>
                    <b> PROGRAM <br> </b>
                    <span contenteditable="">{{ $user->program->program_name}}</span>  <br> <br>
                    <b> EMAIL <br> </b>
                    <span contenteditable="">{{ $user->email}}</span> <br><br>
                    <a href="#">Change your profile</a>

                </div>

            </div>

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
                            <tr class="odd gradeX">
                                <td>{{ $course->course_code }}</td>
                                <td>{{ $course->course_name }}</td>
                                <td style="text-align: center;">{{ $course->credits }}</td>
                                <td style="text-align: center;">
                                    <a href="#" class="btn btn-danger btn-sm">
                                    <span class="glyphicon glyphicon-remove-sign"></span> Delete</a>
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

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

@endsection
