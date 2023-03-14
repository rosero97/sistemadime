$(document).ready(function() {    
    $('#example').DataTable({        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            },
        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',       
        buttons:[ 
			{
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success'
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',

				customize: function(doc) {
					//Remover el titulo creado por la datatable
					doc.content.splice(0, 1);

					var now = new Date();
					var jsDate = now.getDate() + '-' + (now.getMonth() + 1) + '-' + now.getFullYear();

					doc.pageMargins = [20, 60, 20, 30]; //left, top, right, bottom
					doc.defaultStyle.fontSize = 10;

					doc.styles.tableHeader.fontSize = 12;
					doc['header'] = (function() {
						return {
							columns: [{
								alignment: 'left',
								italics: true,
								text: 'Reporte',
								fontSize: 20,
								bold: true,
							},
							{
									image: 'data:image/png;base64,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',
									width: 150,
									alignment: 'left',
									margin: 0
								},								
							],
							margin: 20
						}
					});

					doc['footer'] = (function(page, pages) {
						return {
							columns: [{
									alignment: 'right',
									text: ['Created on: ', {
										text: jsDate.toString()
									}]
								},
								{
									alignment: 'right',
									text: ['page ', {
										text: page.toString()
									}, ' of ', {
										text: pages.toString()
									}]
								}
							],
							margin: 20
						}
					});
					var objLayout = {};
					objLayout['hLineWidth'] = function(i) {
						return .5;
					};
					objLayout['vLineWidth'] = function(i) {
						return .5;
					};
					objLayout['hLineColor'] = function(i) {
						return '#aaa';
					};
					objLayout['vLineColor'] = function(i) {
						return '#aaa';
					};
					objLayout['paddingLeft'] = function(i) {
						return 4;
					};
					objLayout['paddingRight'] = function(i) {
						return 4;
					};
					doc.content[0].layout = objLayout;
				}
			},

			
			{
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info'
			},
		]	        
    });     
});