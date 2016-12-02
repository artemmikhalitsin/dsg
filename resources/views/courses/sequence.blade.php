@extends('layouts.app')

@section('content')

@section('extraCSS')
    <!-- DataTables CSS -->
    <link href="/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/dataTables/sb-admin-2.css" rel="stylesheet">
@endsection

{{ json_encode($sequence) }}

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sequences</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Suggested Sequence
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            @if ($sequence != null)
                            @if (!empty($sequence[0]))
                                <thead>
                                    <tr>
                                        <th>Semester</th>
                                        @for ($i = 0; $i < sizeof($sequence[0]); $i++)
                                        <th>
                                          {{$i+1}}
                                        </th>
                                        @endfor
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $sequence = array_reverse($sequence)
                                  ?>
                                  @for ($i = 0; $i < sizeof($sequence); $i++)
                                    <tr class="odd gradeX" >
                                      <td>
                                        Semester {{$i + 1}}
                                      </td>
                                      @foreach ($sequence[$i] as $course)
                                          <td>
                                            {{ $course != null ? "$course->name" : "" }}
                                          </td>
                                      @endforeach
                                    </tr>
                                  @endfor
                                </tbody>
                            @else
                                <div>
                                    Looks like you haven't selected any classes yet.
                                </div>
                            @endif
                            @endif
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

@endsection
