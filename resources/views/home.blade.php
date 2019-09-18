@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Leads</div>

                <div class="card-body">
                   
                  

                        <div class="container">
                                <!--Row with three equal columns-->
                                <div class="row">
                                <h5>WEB</h5>
                                    <table class="table" id="WEB">
                                      
                                        <thead> 
                                            <tr>
                                                <th>User_id</th>
                                                <th>Query</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($leads as  $index => $row)
                                                @if($row->type == 'WEB')
                                                    <tr>
                                                        <td>{{ $row->user_id }}</td>
                                                        <td>{{ $row->query }}</td>
                                                        <td>{{ $row->status }}</td>
                                                        <td>{{ $row->type }}</td>
                                                    </tr>
                                                    @endif
                                            @endforeach
                                        
                                        </tbody>
                                </table>
                            </div>
                        </div>   
                </div>
            </div>
        </div>

  <div class="col-md-6">
            <div class="card">
                <div class="card-header">Leads</div>

                <div class="card-body">
                   
                        <div class="container">
                                <!--Row with three equal columns-->
                                <div class="row">
                                <h5>MOBILE</h5>
                                    <table class="table" id="MOBILE">
                                      
                                        <thead> 
                                            <tr>
                                                <th>User_id</th>
                                                <th>Query</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($leads as $row)
                                                @if($row->type == 'MOBILE')
                                                    <tr>
                                                        <td>{{ $row->user_id }}</td>
                                                        <td>{{ $row->query }}</td>
                                                        <td>{{ $row->status }}</td>
                                                        <td>{{ $row->type }}</td>
                                                    </tr>
                                                    @endif
                                            @endforeach
                                        
                                        </tbody>
                                </table>
                            </div>
                        </div>   
                </div>
            </div>
        </div>



<div class="col-md-6">
            <div class="card">
                <div class="card-header">Leads</div>

                <div class="card-body">
                   
                        <div class="container">
                                <!--Row with three equal columns-->
                                <div class="row">
                                <h5>AUTO</h5>
                                    <table class="table"  id="AUTO">
                                      
                                        <thead> 
                                            <tr>
                                                <th>User_id</th>
                                                <th>Query</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($leads as $row)
                                                @if($row->type == 'AUTO')
                                                    <tr>
                                                        <td>{{ $row->user_id }}</td>
                                                        <td>{{ $row->query }}</td>
                                                        <td>{{ $row->status }}</td>
                                                        <td>{{ $row->type }}</td>
                                                    </tr>
                                                    @endif
                                            @endforeach
                                        
                                        </tbody>
                                </table>
                            </div>
                        </div>   
                </div>
            </div>
        </div>



<div class="col-md-6">
            <div class="card">
                <div class="card-header">Leads</div>

                <div class="card-body">
                   
                        <div class="container">
                                <!--Row with three equal columns-->
                                <div class="row">
                                <h5>EMBEDDED</h5>
                                    <table class="table" id="EMBEDDED">
                                       
                                        <thead> 
                                            <tr>
                                                <th>User_id</th>
                                                <th>Query</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($leads as $row)
                                                @if($row->type == 'EMBEDDED')
                                                    <tr>
                                                        <td>{{ $row->user_id }}</td>
                                                        <td>{{ $row->query }}</td>
                                                        <td>{{ $row->status }}</td>
                                                        <td>{{ $row->type }}</td>
                                                    </tr>
                                                    @endif
                                            @endforeach
                                        
                                        </tbody>
                                </table>
                            </div>
                        </div>   
                </div>
            </div>
        </div>


    </div>
</div>
@endsection

<!--Import jQuery before export.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<script type="text/javascript"  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<script>
  $(document).ready(function() {
    $('#WEB').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "scripts/ids-objects.php",
        "columns": [
            { "data": "User_id" },
            { "data": "Query" },
            { "data": "Status" },
            { "data": "Type" },
        ]
    } );
} );
</script>