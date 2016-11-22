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
	<div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List of Courses In Your Program</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Click Add For Completed Courses
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Credits</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($courses as $course)
                                    <tr class="odd gradeX" id="classrow-{{$course->course_id}}">
                                        <td>{{ $course->course_code }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ $course->course_type }}</td>
                                        <td style="text-align: center;">{{ $course->credits }}</td>
                                        <td style="text-align: center;">
                                        	<button class="btn btn-primary btn-xs add-course" value="{{$course->course_id}}">
                                        	<span class="glyphicon glyphicon-plus"></span> Add</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection




@section('extraJS')
	<!-- DataTables JavaScript -->
    <script src="/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables/dataTables.bootstrap.min.js"></script>
    <script src="/js/dataTables/dataTables.responsive.js"></script>

    <script>
     $(document).ready(function() {
           var table = $('#dataTables-example').DataTable({
               responsive: true
          });

          $('#dataTables-example tbody').on('click', 'td button', function(){
             var course_id = $(this).val();

               $.ajax({
                   url: '/completedCourses',
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
