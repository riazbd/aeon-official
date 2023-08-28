@extends('layouts.admin')
@section('content')
<style>
    /* Add custom styles for the table container */
    .table-container {
        width: 100%;
        overflow-x: auto;
    }

    /* Add custom styles for the table */
    #table_id {
        width: 100%;
    }
</style>
<div class="container">


    <button style="float: right; margin-bottom:20px" class="btn btn-primary"><a href="{{ route('add-critical-path') }}" class="nav-link">Add New</a></button>


    <div class="table-container">
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Department</th>
                    <th>Season</th>
                    <th>Fabric Type</th>
                    <th>BLOCK</th>
                    <th>Unit</th>
                    <th>PLM Number</th>
                    <th>Order number</th>
                    <!-- Add more headers here -->
                </tr>
            </thead>
            <tbody>
                <!-- Populate table rows with data -->
            </tbody>
        </table>
    </div>
</div>

@endsection

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $("#table_id").dataTable();
    });
</script>