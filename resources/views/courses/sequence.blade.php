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
                                <thead>
                                    <tr>
                                        <th>Semester</th>
                                        <th>0</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    //$sequence = array_reverse($sequence)
                                  ?>
                                  @for ($i = 0; $i < sizeof($sequence); $i++)
                                    <tr class="odd gradeX" >
                                      <td>
                                        Semester {{$i}}
                                      </td>
                                      @foreach ($sequence[$i] as $course)
                                          <td>
                                            {{ $course != null ? "$course->name" : "" }}
                                          </td>
                                      @endforeach
                                    </tr>
                                  @endfor
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


    <br>

    @foreach ($sequenceInfo as $s)
        {{$s->name}} | {{$s->level}} |
        @foreach ($s->prerequisiteList as $p)
        (
        [{{$p->prereq_id}}] [{{$p->isCorequisite}}]
            @for ($i = 0; $i < (sizeof($p->prerequisiteChoices) - 1); $i++)
                {{$p->prerequisiteChoices[$i]->name}} or
            @endfor
            {{array_values(array_slice($p->prerequisiteChoices, -1))[0]->name}}
        )
        @endforeach
        <br>
    @endforeach

    <br>
    <br>
    <br>

    {{json_encode($sequenceInfo)}}
@endsection






@section('extraJS')
    <!-- DataTables JavaScript -->
    <script src="/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables/dataTables.bootstrap.min.js"></script>
    <script src="/js/dataTables/dataTables.responsive.js"></script>

@endsection
