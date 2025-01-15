@extends('admin.layouts.main')
@section('content')
            <section class="app-user-list">
                <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-table table" >
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>
                                        <a href="{{route('edit-blog', $blog->id)}}" class="text-warning edit-customer" data-id=dasda ><i class="fa fa-edit"></i></a>
                                        <a href="{{route('delete-blog', $blog->id)}}" data-jobs="sdadas" class="text-danger course-sure"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal modal-slide-in new-user-modal fade" id="edit-modals-customer">
                        <div class="modal-dialog" id="customer-edit-body">

                        </div>
                    </div>
                </div>
            </section>
@endsection
@section('custom-js')
<script>
        $(document).on('click','.course-sure', function (event) {
        event.preventDefault();
        var approvalLink = $(this).attr('href');
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: "You want to remove this Blog!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, remove it!',
            confirmButtonClass: 'btn btn-primary',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then(function (result) {
            if (result.value) {
                window.location.href = approvalLink;
            }
        });
    });
       
</script>
<script>

    $(function () {
        'use strict';

        var dtCustomerTable = $('.user-list-table');

        // Users List datatable
        if (dtCustomerTable.length)
        {
            dtCustomerTable.DataTable({
            dom:
            '<"d-flex justify-content-between align-items-center header-actions mx-1 row mt-75"' +
            '<"col-lg-12 col-xl-6" l>' +
            '<"col-lg-12 col-xl-6 pl-xl-75 pl-0"<"dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1"<"mr-1"f>B>>' +
            '>t' +
            '<"d-flex justify-content-between mx-2 row mb-1"' +
            '<"col-sm-12 col-md-6"i>' +
            '<"col-sm-12 col-md-6"p>' +
            '>',
            language: {
            sLengthMenu: 'Show MENU',
            search: 'Search',
            searchPlaceholder: 'Search..'
            },
            // Buttons with Dropdown
            // buttons: [
            // {
            //     text: 'Add Testimonial',
            //     className: 'add-new btn btn-primary mt-50',
            //     attr: {
            //     'data-toggle': 'modal',
            //     'data-target': '#modals-customer-slide-in'
            //     },
            //     init: function (api, node, config) {
            //     $(node).removeClass('btn-secondary');
            //     }
            // }
            // ]
            buttons: [
                {
                    text: 'Add Blog',
                    className: 'add-new btn btn-primary mt-50',
                    // attr: {
                    // 'data-toggle': 'modal',
                    // 'data-target': '#modals-job-entry'
                    // },
                    action: function (e, dt, node, config) {
                        window.location.href = '{{ route("add-blog") }}';
                    },
                    init: function (api, node, config) {
                    $(node).removeClass('btn-secondary');
                    }
                }],
            language: {
            paginate: {
                previous: '&nbsp;',
                next: '&nbsp;'
            }
            },
        });
        }
    });
</script>
@endsection
