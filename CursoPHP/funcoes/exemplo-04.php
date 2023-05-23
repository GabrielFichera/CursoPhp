<?php 

$hierarquia = array(
	array(
		'nomeCargo' => 'CEO',
		'subordinados' =>array(
			//Inicio: diretor
			array(
				'nomeCargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: gerente
					array(
						'nomeCargo'=>'Gerente de Vendas'
					)
					//Termino: gerente
				)
			),
			//Termino: diretor
			//Inicio: diretor2
			array(
				'nomeCargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Inicio: gerente de contas
					array(
						'nomeCargo'=>'Gerente de contas',
						'subordinados'=>array(
							//Inicio: supervisor
							array(
								'nomeCargo'=>'Supervisor'
							)
							//termino: supervisor
						)
					),
					//termino: gerente de contas
					//inicio: gerente compras
					array(
						'nomeCargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//inicio supervisor 2
							array(
								'nomeCargo'=>'Supervisor 2'
							)
							//termino supervisor 2
						)
					)
					//termino: gerente compras
				)
			),
			//Termino: diretor2
		) 

	)

);


function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .='<li>';
		$html .=$cargo['nomeCargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html .= exibe($cargo['subordinados']);

		}

		$html .='</li>';

	}

	$html .= '</ul>';

	return $html;
}

echo exibe($hierarquia)

 ?>