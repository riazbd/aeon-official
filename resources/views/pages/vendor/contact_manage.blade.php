@extends('layouts.admin')


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contacts</h3>
                        @can('user.add')
                            <p class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#create-contact">
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
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Manufacturer</th>
                                    <th>Department</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($contacts as $contact)
                                    <tr>
                                        <td class="text-center">
                                            @can('user.delete')
                                                <div class="btn-group">
                                                    @can('user.edit')
                                                        <p class="btn btn-info btn-sm" data-toggle="modal"
                                                            data-target="{{ '#edit-contact-' . $contact->id }}">
                                                            @lang('global.edit')</p>
                                                    @endcan
                                                    <form action="{{ route('delete-contact', ['id' => $contact->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <p class="btn btn-danger btn-sm"
                                                            onclick="if (confirm('Are you sure you want to delete this?')) { this.parentElement.submit() }">
                                                            @lang('global.delete')
                                                        </p>
                                                    </form>
                                                </div>
                                            @endcan
                                        </td>
                                        <td>{{ App\Models\Vendor::where('id', $contact->vendor_id)->first()->name }}
                                        </td>
                                        <td>{{ $contact->name }}</td>


                                    </tr>
                                    {{-- @include('pages.vendor.modals.contact_edit') --}}
                                {{-- @endforeach  --}}


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

    {{-- @include('pages.vendor.modals.contact_create') --}}
@endsection
