
@extends('adminside.layouts.defaultadminsite')
@section('content')
<table class="table table-bordered" id="users-table">
    <thead>
        <tr>
            <th class="non_searchable non_orderable"></th>
            <th>Id</th>
            <td>Name</th>
            <th>Email</th>
            <th>User lvl</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
					        	<tr>
					        		<th></th>
					        		<th></th>
					        		<th></th>
                      <th></th>
                      <th></th>
					        	</tr>
		</tfoot>
</table>


<script id="details-template" type="text/x-handlebars-template">
  <table class="table">
    <tr>
          <td class="col-md-4">Full name:</td>
          <td class="col-md-8"><div class="col-md-8">@{{name}}</div></td>
      </tr>
      <tr>
            <td class="col-md-4">Profile pic:</td>
            <td class="col-md-8"><div class="col-md-8 col-md-offset-1"><img src='/uploads/avatars/default.png' style="width:100px;height:100px;border-radius:50"></div></td>
      </tr>
      <tr>
          <td class="col-md-4">ID real life:</td>
          <td class="col-md-8"><div class="col-md-8">@{{idlife}}</div></td>
      </tr>
      <tr>
          <td class="col-md-4"> Current Address:</td>
          <td class="col-md-8"><div class="col-md-8">@{{adr}}</div></td>
      </tr>
      <tr>
          <td class="col-md-4"> Skill:</td>
          <td class="col-md-8">@{{#each listskill}}
          <div class="col-md-6">@{{this.name}}</div>
          <div class="col-md-6">Rate : @{{this.pivot.rate}}</div></br>
                    @{{/each}}
          </td>
      </tr>
      <tr>
          <td class="col-md-4"> Degree:</td>
          <td class="col-md-8">@{{#each listdegree}}
          <div class="col-md-6">@{{this.name}}</div>
          <div class="col-md-6">Date : @{{this.pivot.date}}</div></br>
                    @{{/each}}
          </td>
      </tr>
      <tr>
          <td class="col-md-4"> Experience:</td>
          <td class="col-md-8">@{{#each listexp}}
          <div class="col-md-8">@{{this.exdetails}}</div></br>
                    @{{/each}}
          </td>
      </tr>
      <tr>
          <td class="col-md-4">Employee:</td>
          <td class="col-md-8">@{{#each listcompany}}
          <div class="col-md-3">@{{this.name}}</div>
          <div class="col-md-3">Position : @{{this.pivot.pos}}</div>
          <div class="col-md-3">Start : @{{this.pivot.sdate}}</div>
          <div class="col-md-3">End : @{{this.pivot.edate}}</div></br>
                    @{{/each}}
          </td>
      </tr>
      </table>
</script>


<script type="text/javascript">

    var template = Handlebars.compile($("#details-template").html());
    var table = $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'http://localhost:8000/users/get_datatable',
        columns: [
            {
               "className":      'details-control',
               "orderable":      false,
               "searchable":     false,
               "data":           null,
               "defaultContent": '',
             },
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'ulvl', name: 'ulvl'},
            {data: 'action', name: 'action', orderable: false, searchable: false}

        ],
        order: [[1, 'asc']],
        initComplete: function () {
            this.api().columns([1,2,3,4]).every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    column.search($(this).val(), false, false, true).draw();
                });
            });
    },

  });


    $('#users-table tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
        } else {
            row.child(template(row.data())).show();
            tr.addClass('shown');
        }
    });
$.fn.DataTable.ext.errMode = 'throw';

</script>
@endsection
