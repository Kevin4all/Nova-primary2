(function ($) {
	//    "use strict";


	/*  Data Table
	-------------*/


/*
	$(document).ready(function() {
		$('#bootstrap-data-table').DataTable({
		   "responsive": true,
		   language: {
			   "paginate": {
				   "previous": '<i class="fa fa-arrow-circle-left"></i>',
				   "next": '<i class="fa fa-arrow-circle-right"></i>'
			   },
			   "emptyTable": "No hay información.",
			   "lengtMenu": "Mostrar _MENU_ registros.",
			   "zeroRecords": "No se encontraron resultados",
			   "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
			   "infoEmpty": "Mostrando resgistros del 0 al 0 de un total de 0 registros",
			   "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			   "sSearch": "Buscar:",
			   "sProcessing": "Procesando...",
			   "loadingRecords": "Cargando...",
			   "thousands": ","
		   }
	   });

	});//end document ready
*/

	$(document).ready(function(){
		$('.datatable-firs').DataTable({
			"responsive": true,
			"language": {
				"paginate": {
					"previous": '<i class="fe fe-arrow-left"></i>',
				   "next": '<i class="fe fe-arrow-right"></i>'
				},
				"emptyTable": "No hay información.",
				"lengthMenu": "Mostrar _MENU_ registros",
				"zeroRecords": "No se encontraron resultados.",
				"info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
				"infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
				"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
				"search": "Buscar:",
				"processing": "Procesando...",
				"loadingRecords": "Cargando...",
				"thousands": ","
			}
		});
	});


	$('#bootstrap-data-table-export').DataTable({
		dom: 'lBfrtip',
		lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});


	$('#row-select').DataTable({
		initComplete: function () {
			this.api().columns().every(function () {
				var column = this;
				var select = $('<select class="form-control"><option value=""></option></select>')
					.appendTo($(column.footer()).empty())
					.on('change', function () {
						var val = $.fn.dataTable.util.escapeRegex(
							$(this).val()
						);

						column
							.search(val ? '^' + val + '$' : '', true, false)
							.draw();
					});

				column.data().unique().sort().each(function (d, j) {
					select.append('<option value="' + d + '">' + d + '</option>')
				});
			});
		}
	});






})(jQuery);