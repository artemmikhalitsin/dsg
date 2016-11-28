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
                    <h1 class="page-header">Specify Your Program</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Help
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="text-align: center;">
                                <thead id="head">
                                </thead>

                                <tbody id="table">
                                </tbody>
                            </table>

                            <?php 
                                function cmp($a, $b)
                                {
                                    return gmp_cmp($a->level, $b->level);
                                }
                                usort($sequenceInfo, "cmp");
                                $sequenceInfo = array_reverse($sequenceInfo);
                            ?>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                            <script type="text/javascript">
                                var sequenceInfo = JSON.parse('<?php echo json_encode($sequenceInfo) ?>');
                                //console.log (sequenceInfo);

                                var tr = tx = $("#head")[0].insertRow(0);
                                for (var j = 0; j < <?php echo $courseLoad ?>; j++){
                                    var th = tr.insertCell(j);
                                    th.innerHTML = '<b>' +      (j+1) + '</b>' ;
                                }
                                var th = tx.insertCell(0);
                                th.innerHTML = '' ;


                                var level = sequenceInfo[0].level;
                                var load = <?php echo $courseLoad ?>;

                                for (var current = 0; current < sequenceInfo.length;){
                                    var tr = $("#table")[0].insertRow(-1);
                                    for (var j = 0; j < load; j++){

                                        if ((typeof sequenceInfo[current] != 'undefined') 
                                            && current != 0 
                                            && sequenceInfo[current].level < sequenceInfo[current-1].level){

                                            for (; j < load; j++){
                                                var td = tr.insertCell(-1);
                                                td.innerHTML = " ";
                                            }
                                            tr = $("#table")[0].insertRow(-1);
                                            j = 0;
                                        }

                                        var td = tr.insertCell(-1);

                                        if (typeof sequenceInfo[current] != 'undefined'){
                                            td.innerHTML = sequenceInfo[current].name;
                                            /*
                                            var plist = sequenceInfo[current].prerequisiteList[0];
                                            if (typeof plist != 'undefined' && plist.prerequisiteChoices.length > 1){
                                                var selector = sequenceInfo[current].name + "</br>";
                                                selector += "<select>";
                                                    for (var x = 0; x < plist.prerequisiteChoices.length; x++){
                                                        selector += "<option value=\""+ plist.prerequisiteChoices[x].id + "\">";
                                                        selector += plist.prerequisiteChoices[x].name;
                                                        selector += "</option>";
                                                    }
                                                selector += "</select>";
                                                td.innerHTML = selector;
                                            }
                                            */
                                            td.id = sequenceInfo[current].id;
                                            current++;
                                        } else {
                                            td.innerHTML = " ";
                                        }
                                    }
                                }

                                for (var i = 0; i < $('#table tr').length; i++){
                                    var td = document.getElementById("table").rows[i].insertCell(0);
                                    td.innerHTML = i+1;
                                }

                            </script>


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

    @foreach ($sequenceInfo as $s)
        {{$s->name}} | {{$s->level}} |
        @foreach ($s->prerequisiteList as $p)
        (
        [{{$p->prereq_id}}] ({{$p->isCorequisite}})
            @for ($i = 0; $i < (sizeof($p->prerequisiteChoices) - 1); $i++)
                {{$p->prerequisiteChoices[$i]->name}} or
            @endfor
            {{array_values(array_slice($p->prerequisiteChoices, -1))[0]->name}}
        )
        @endforeach
        <br>
    @endforeach

@endsection

@section('extraJS')
	<!-- DataTables JavaScript -->
    <script src="/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables/dataTables.bootstrap.min.js"></script>
    <script src="/js/dataTables/dataTables.responsive.js"></script>

@endsection
