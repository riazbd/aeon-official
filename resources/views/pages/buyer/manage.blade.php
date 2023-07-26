@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Buyers</h3>
                        @can('user.add')
                            <p class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#create-buyer">
                                <span class="fas fa-plus-circle"></span>
                                @lang('global.add')
                            </p>
                        @endcan
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Data table -->
                        <table id="dataTable"
                            class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                            user="grid" aria-describedby="dataTable_info">
                            <thead>
                                <tr>
                                    <th class="w-25">@lang('global.actions')</th>
                                    <th>@lang('cruds.user.fields.id')</th>
                                    <th>Logo</th>
                                    <th>@lang('cruds.user.fields.name')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        @can('user.delete')
                                            <form action="" method="post">
                                                @csrf
                                                <div class="btn-group">
                                                    @can('user.edit')
                                                        <p class="btn btn-info btn-sm"> @lang('global.edit')</p>
                                                    @endcan
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <p class="btn btn-danger btn-sm"
                                                        onclick="if (confirm('Вы уверены?')) { this.form.submit() } ">
                                                        @lang('global.delete')</p>
                                                </div>
                                            </form>
                                        @endcan
                                    </td>
                                    <td>#</td>
                                    <td>Logo</td>
                                    <td>Name</td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    @include('pages.buyer.modals.buyer_create')
@endsection
