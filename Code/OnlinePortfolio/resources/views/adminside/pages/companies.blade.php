@extends('adminside.layouts.defaultadminsite')
@section('content')
<table class="table table-bordered" id="companies-table">
    <thead>
        <tr>
            <th>Id</th>
            <td>Name</th>
            <td>Action</th>
        </tr>
    </thead>
    <tfoot>
					        	<tr>
					        		<th></th>
					        		<th></th>
					        	</tr>
		</tfoot>
</table>

<script type="text/javascript">

    var table = $('#companies-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'http://localhost:8000/companies/get_datatable',
        columns: [

            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false, searchable: false}

        ],
        order: [[0, 'asc']],
        initComplete: function () {
            this.api().columns([1]).every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    column.search($(this).val(), false, false, true).draw();
                });
            });
    },
  });
  </script>


@endsection
