<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="http://localhost:8000/">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="icon" href="{{ asset('assets/logo.png') }}">

		<title>Events</title>

		<link rel="stylesheet" href="{{ asset('assets/member/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/member/css/font-icons/entypo/css/entypo.css') }}">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
		<link rel="stylesheet" href="{{ asset('assets/member/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/member/css/font-icons/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/member/css/neon-core.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/member/css/neon-theme.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/member/css/neon-forms.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/member/css/custom.css') }}">

		

		<script src="{{ asset('assets/member/js/jquery-1.11.3.min.js') }}"></script>

		<style>
			.eventimg{
				max-width:300px;
				max-height:300px;
			}
		</style>

		<!--[if lt IE 9]><script src="assets/member/js/ie8-responsive-file-warning.js"></script><![endif]-->
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="page-body page-left-in">

		<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	








	 	
	<div class="sidebar-menu">
		<div class="sidebar-menu-inner">
			<header class="logo-env">
				<!-- logo -->
				<div class="logo">
					<a href="#">
						<img class="" src="{{ asset('assets/logo.png') }}" style="width: 100px; background-color:white; padding: 5px; border-radius: 15px" alt="" />
					</a>
				</div>
				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>			
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>
			</header>
			<ul id="main-menu" class="main-menu">
				{{-- <li class="">
					<a href="/events/admin#">
						<i class="entypo-gauge"></i>
						<span class="title">Menu</span>
					</a>
				</li> --}}
				<li class="">
					<a href="/events">
						<i class="entypo-gauge"></i>
						<span class="title">Senarai Program</span>
					</a>
				</li>
			</ul>
		</div>
	</div>	
	<div class="main-content">
				
				<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src='{{ asset("assets/member/images/thumb-1@2x.png") }}' alt="" class="img-circle" width="44" />
							{{ auth()->user()->name }}
						</a>
							{{-- <ul class="dropdown-menu">
			
								<!-- Reverse Caret -->
								<li class="caret"></li>
			
								<!-- Profile sub-links -->
								<li>
									<a href="#">
										<i class="entypo-user"></i>
										Edit Profile
									</a>
								</li>
			
								<li>
									<a href="#">
										<i class="entypo-mail"></i>
										Inbox
									</a>
								</li>
			
								<li>
									<a href="#">
										<i class="entypo-calendar"></i>
										Calendar
									</a>
								</li>
			
								<li>
									<a href="#">
										<i class="entypo-clipboard"></i>
										Tasks
									</a>
								</li>
							</ul> --}}
					</li>
				</ul>
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<!-- Language Selector -->
					<li class="dropdown language-selector">
						Language: &nbsp;
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<img src="{{ asset('assets/member/images/flags/flag-uk.png') }}" width="16" height="16" />
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">
									<img src="{{ asset('assets/member/images/flags/flag-my.png') }}" width="16" height="16" />
									<span>Bahasa Melayu</span>
								</a>
							</li>
							<li class="active">
								<a href="#">
									<img src="{{ asset('assets/member/images/flags/flag-uk.png') }}" width="16" height="16" />
									<span>English</span>
								</a>
							</li>
						</ul>
					</li>
		
					<li class="sep"></li>
		
					<li>
						<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							Log Out <i class="entypo-logout right"></i>
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
					</li>
				</ul>
		
			</div>
		</div>
		<hr />				
		<ol class="breadcrumb bc-3" >
			<li>
				<a href="#"><i class="fa fa-home"></i>Halaman Utama</a>
			</li>
			{{-- <li>
				<a href="#">Pages</a>
			</li> --}}
			<li class="active">
				<strong>Kembali ke Senarai Program</strong>
			</li>
		</ol>
		
		<h2>Senarai Program</h2>
		<br>
		
		
		<table class="table table-bordered table-striped datatable">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Program</th>
						<th>Peringkat</th>
						<th>Maklumat</th>
						<th>Tarikh</th>
						<th>Tindakan</th>
					</tr>
				</thead>
				
				<tbody>
					@foreach( $events as $id => $row )
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $row[ 'name' ] }}</td>
							<td>{{ $row[ 'level' ] }}</td>
							<td>{{ $row[ 'description' ] }}</td>
							<td>{{ $row[ 'date' ] }}</td>
							<td>
								<button class="btn btn-default btn-sm btn-icon icon-left btn-edit" data-id="{{ $id }}"><i class="entypo-pencil"></i>Ubah</button>
								<button class="btn btn-danger btn-sm btn-icon icon-left btn-delete" data-id="{{ $id }}"><i class="entypo-cancel"></i>Padam</button>
								<button class="btn btn-info btn-sm btn-icon icon-left btn-view" data-id="{{ $id }}"><i class="entypo-info"></i>Lihat</button>
							</td>
						</tr>
					@endforeach
				</tbody>
		</table>
		<br />
		<a class="btn btn-primary btn-add">
			<i class="entypo-plus"></i> Tambah Program Baru
		</a>
		
		<br />
		<!-- Footer -->
		<footer class="main">
			&copy; 2023 <strong>Program Library</strong>
		</footer>
	</div>
		<!-- Add Form-->
		<div class="modal fade" id="add-event">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Tambah Program Baru</h4>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="add">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Nama</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="name" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Peringkat</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="level" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Maklumat</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="description" type="text" class="form-control">
										</div>
									</div>
								</div>
						
								<div class="form-group">
									<label class="col-sm-3 control-label">Tarikh</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="date" type="date" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Gambar Program</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="eventimage" id="eventimage" type="file" class="form-control" accept="image/*">
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-info">Cipta Program</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!-- Edit Form-->
		<div class="modal fade" id="edit-event">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Ubah Program</h4>
					</div>
					<form method="POST">
						<input type="hidden" name="action" value="edit">
						<input type="hidden" name="id" value="">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Nama</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="name" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Peringkat</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="level" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Maklumat</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="description" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Tarikh</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="date" type="date" class="form-control">
										</div>
									</div>
								</div>
							
								<div class="form-group">
									<label class="col-sm-3 control-label">Gambar Program</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="eventimage" id="eventimage" type="file" class="form-control" accept="image/*">
										</div>
									</div>
									
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">&nbsp;&nbsp;</label>
									<div class="col-sm-9">
										<div class="input-group">
											<img id="eventimg" name="eventimg" class="eventimg"/>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-info">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!-- View Form-->
		<div class="modal fade" id="view-event">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Program</h4>
					</div>
					<form method="POST">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Nama</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="name" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Peringkat</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="level" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Maklumat</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="description" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Tarikh</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="date" type="date" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group" style="display: none;">
									<label class="col-sm-3 control-label">Gambar Program</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="eventimage" id="eventimage" type="file" class="form-control" accept="image/*">
										</div>
									</div>
								</div>
							
								<div class="form-group">
									<label class="col-sm-3 control-label">Gambar Program</label>
									<div class="col-sm-9">
										<div class="input-group">
											<img id="eventimg" name="eventimg" class="eventimg"/>
										</div>
									</div>
									
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						</div>
					</form>
				</div>
			</div>
		</div>







	
</div>

	<!-- Sample Modal (Default skin) -->
	<div class="modal fade" id="sample-modal-dialog-1">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Default Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Sample Modal (Skin inverted) -->
	<div class="modal invert fade" id="sample-modal-dialog-2">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Sample Modal (Skin gray) -->
	<div class="modal gray fade" id="sample-modal-dialog-3">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>




	<!-- Imported styles on this page -->
		
	<link rel="stylesheet" href="{{ asset('assets/member/js/datatables/datatables.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/member/js/select2/select2-bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/member/js/select2/select2.css') }}">



	<!-- Bottom scripts (common) -->
	<script src="{{ asset('assets/member/js/gsap/TweenMax.min.js') }}"></script>
	<script src="{{ asset('assets/member/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ asset('assets/member/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/member/js/joinable.js') }}"></script>
	<script src="{{ asset('assets/member/js/resizeable.js') }}"></script>
	<script src="{{ asset('assets/member/js/neon-api.js') }}"></script>
	

	<!-- Imported scripts on this page -->


	<script src="{{ asset('assets/member/js/toastr.js') }}"></script>

	<script src="{{ asset('assets/member/js/datatables/datatables.js') }}"></script>
	<script src="{{ asset('assets/member/js/select2/select2.min.js') }}"></script>

	

	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('assets/member/js/neon-custom.js') }}"></script>

	<!-- Demo Settings -->
	<script src="{{ asset('assets/member/js/neon-demo.js') }}"></script>

	
	<script type="text/javascript">
		$.noConflict();
		jQuery( document ).ready( function( $ ) {
			var table = $( '.datatable' );
			
			// Initialize DataTable
			datatable = table.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
						"aoColumns": [
					{ "bSortable": false },
					null,
					{ "width": "30%" },
					null,
					null,
					null
				],
				"bStateSave": true
			});
			
			// Initalize Select Dropdown after DataTables is created
			table.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});

			table.closest( '.dataTables_wrapper' ).addClass( 'table-responsive' );
		} );
	</script>
		<script>listOfEvents = @json( $events ); 
		
		var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		
		</script>
	
	<script>
		function send_form_via_ajax(form) {
  var formData = new FormData(form); // Create a new FormData object from the form

  formData.append('_token', csrfToken); // Append the CSRF token to the form data

  console.log(formData);
  send_data_via_ajax(formData);
}

function send_data_via_ajax(data) {
  $.ajax({
    url: '',
    type: 'POST',
    data: data,
    processData: false, // Prevent jQuery from automatically processing the data
    contentType: false, // Set the content type to false, jQuery will automatically set the correct type for you
    success: function(response) {
      location.reload();
    }
  });
}

function send_data_via_ajax_delete(data) {
  $.ajax({
    url: '',
    type: 'POST', // Use the appropriate HTTP method for your delete operation
    data: data,
    success: function(response) {
      location.reload();
    }
  });
}
		/*
			function send_form_via_ajax( form ) {
				var data = $(form).serialize();

				console.log(data);
				
				send_data_via_ajax( data );
			}
			function send_data_via_ajax( data ) {
				data += '&_token='+csrfToken;
				//console.log( data );
				$.post( '', data,function( response ){
					// console.log( response );
					// if ( response.result ) {
						//location.reload(true);
					// }
				}, 'text')
				.fail(function( xhr, status, error ){
					//console.log( xhr.responseText );
				});
			}
			*/

			function displayEventDataInForm( eventID, form ) {
			
				var event = listOfEvents[ eventID ];
				form.find( 'input,select' ).each(function(){
					var input = $(this),
						name = input.attr( 'name' );

						if(name == 'eventimage'){

							$(".eventimg").attr("src", 'http://127.0.0.1:8000/Eventimg/' + event[ name ]);
						}
						if ( name == 'action' || name == 'eventimage' ) return;// exclude input hidden named 'action'
					input.val( event[ name ] );
				});
			}
			$(document).ready(function(){ //----------------------------------------------------------------------------------------
				// For modal functionality
					$( '.btn-add' ).click(function(e){
							$( '#add-event' ).modal( 'show' );
						e.preventDefault();
					});
					$( '.btn-edit' ).click(function(e){
							var eventID = $(this).data( 'id' ),
								form = $( '#edit-event form' );
							displayEventDataInForm( eventID, form );

							$( '#edit-event' ).modal( 'show' );
						e.preventDefault();
					});
					
					$( '.btn-view' ).click(function(e){
							var eventID = $(this).data( 'id' ),
								form = $( '#view-event form' );
							displayEventDataInForm( eventID, form );
							$( '#view-event' ).modal( 'show' );
						e.preventDefault();
					});

				// For AJAX functionality
				$('.btn-delete').click(function() {
  var id = $(this).data('id');
  var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // Retrieve the CSRF token

  if (confirm('Are you sure you want to delete this event?')) {
    send_data_via_ajax_delete($.param({ id: id, action: 'delete', _token: csrfToken })); // Pass the CSRF token in the data
  }
});

					$('#add-event, #edit-event').find('form').submit(function(e) {
  send_form_via_ajax(this);
  e.preventDefault();
});

					/*
					$( '#add-event, #edit-event' ).find( 'form' ).submit(function(e){
						send_form_via_ajax( this );
						e.preventDefault();
					});
					*/
			});//-------------------------------------------------------------------------------------------------------------------
	</script>
	
	<script>
			$(document).ready(function() {
				var password = $( '.password' ),
					confirm_password = $( '.confirm-password' ),
					input = $( 'input[type=password]' );

					password.on( 'invalid',function(e){
						if ( this.validity.tooShort ) {
							e.target.setCustomValidity( "Must contain minimum 8 characters." );
						} else if ( this.validity.patternMismatch ) {
							e.target.setCustomValidity( "Must contain at least 1 number, 1 uppercase letter, 1 lowercase letter and 1 special character." );
						}
					});

					$( '#edit-user .password' ).keyup(function(e) {
						var pwd = $(this),
							confirm = pwd.parents( '.modal-body' ).find( '.confirm-password' );
						if ( pwd.val() ) {
							confirm.prop( 'required', true );
						} else {
							confirm.prop( 'required', false );
						}
					});


					confirm_password.keyup(function(e){
						var input = $(this),
							value = input.parents( '.modal-body' ).find( '.password' ).val(),
							confirm_value = input.val();
							//console.log( value+' : '+confirm_value );
						if ( value != confirm_value ) {
							e.target.setCustomValidity( "Password do not match" );
						} else {
							e.target.setCustomValidity( "" );
						}
					});

					input.on( 'input',function(e){
						e.target.setCustomValidity( "" );
					});
			});
	</script>


</body>
</html>