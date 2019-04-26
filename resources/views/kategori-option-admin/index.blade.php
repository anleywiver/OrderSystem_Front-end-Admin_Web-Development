@extends('layouts.appadmin')
@section('style')

@endsection
@section('nav_title')
  Data Kategori
@endsection
@section('content')
<div class="uper">
@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div><br />
@endif
<div>

                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="content">
                								<div class="toolbar">
                	              </div>

                                <button class="btn btn-info btn-fill btn-wd">Tambah</button>

                                <div class="fresh-datatables">
                            					<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            						<thead>
                            							<tr>
                            								<th>Nama Kategori</th>
                            								<th class="disabled-sorting text-right">Actions</th>
                            							</tr>
                            						</thead>
                            						<tfoot>
                            							<tr>
                            								<th>Nama Kategori</th>
                            								<th>Actions</th>
                            							</tr>
                            						</tfoot>
                            						<tbody>

                                          @foreach($kategori_option_admins as $kategori_option_admins)
                            							<tr>
                            								<td>{{$kategori_option_admins->name}}</td>
                            								<td class="text-right">
                            									<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                            									<a href="{{ route('kategori-option-admin.edit',$kategori_option_admins->id)}}" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                              <form action="{{ route('kategori-option-admin.destroy', $kategori_option_admins->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-simple btn-danger btn-icon remove" type="submit"><i class="fa fa-times"></i></button>
                                              </form>
                            								</td>
                            							</tr>
                                          @endforeach

                            						</tbody>
                            					</table>
                    				        </div>
                              </div><!-- end content-->
                          </div><!--  end card  -->
                      </div> <!-- end col-md-12 -->
                  </div> <!-- end row -->

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
		$('#datatables').DataTable({
		    "pagingType": "full_numbers",
		    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		    responsive: true,
		    language: {
		    search: "_INPUT_",
		    searchPlaceholder: "Search records",
		    }

		});


		var table = $('#datatables').DataTable();

		// Edit record
		table.on( 'click', '.edit', function () {
		    $tr = $(this).closest('tr');

		    var data = table.row($tr).data();
		    alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
		} );

		// Delete a record
		table.on( 'click', '.remove', function (e) {
		    $tr = $(this).closest('tr');
		    table.row($tr).remove().draw();
		    e.preventDefault();
		} );

		//Like record
		table.on( 'click', '.like', function () {
		    alert('You clicked on Like button');
		});
	});

    </script>

	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46172202-1', 'auto');
      ga('send', 'pageview');

    </script>
@endsection
