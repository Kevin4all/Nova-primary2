<?= $this->extend('Panel_base/panel_base') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" type="text/css" href="<?= base_url('recursos_panel/plugins/datatables/css/datatables.min.css');?>">

<?= $this->endSection() ?>

<?= $this->section('contenido') ?><h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Alumnos
            </h2>
            <!-- CTA -->
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
                <table class="datatable-own display table nowrap table-striped table-hover w-full whitespace-no-wrap">
                <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre completo</th>
                    <th>Sexo</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Periodo cuatrimestral</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
            <?php
						foreach ($alumnos as $alumno) {
							echo '
							<tr>
                                <td>'.$alumno->matricula.'</td>
								<td>'.$alumno->nombre.' '.$alumno->ap_paterno.' '.$alumno->ap_materno.'</td>
								<td>'.SEXOS[$alumno->sexo].'</td>
								<td>'.$alumno->email.'</td>
								<td>'.$alumno->telefono.'</td>
                <td></td>
                <td><a href="'.route_to('detalles_alumno', $alumno->id_alumno).'" type="button" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Editar</a></td>
							</tr>
							';
						}
					?>
            </tbody>
                </table>
              </div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>

<script src="<?= base_url('recursos_panel/plugins/datatables/js/datatables.min.js');?>"></script>

<script>
    $(document).ready(function() {
        $('.datatable-own').DataTable( {
            "responsive": true,
            "language": {
                "paginate": {
                    "previous": 'Anterior ',
                    "next": ' Siguiente'
                },
                "emptyTable": "No hay información.",
                "lengthMenu": "Mostrar _MENU_ registros.",
                "zeroRecords": "No se encontraron resultados.",
                "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(Filtrando de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "sProcessing": "Procesando...",
                "loadingRecords": "Cargando...",
                "thousands": ","
            }
        } );
    } );
</script>
<?= $this->endSection() ?>
