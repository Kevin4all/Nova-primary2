<?= $this->extend('Panel_base/panel_base') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" type="text/css" href="<?= base_url('recursos_panel/plugins/datatables/css/datatables.min.css');?>">

<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Materias
            </h2>
            <!-- CTA -->
            
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="datatable-own display table nowrap table-striped table-hover w-full whitespace-no-wrap">
                <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre completo</th>
                    <th>Sexo</th>
                    <th>Email</th>
                    <th>Teléfono</th>
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
							</tr>
							';
						}
					?>
            </tbody>
                </table>
              </div>
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