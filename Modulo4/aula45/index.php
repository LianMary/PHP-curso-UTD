<?php  

	
	#incluinfo os dados necessarios
	include_once 'Connect.php';
	include_once 'Manager.php';


	# buscando os dados la na tabela
	$manager = new Manager;

	$dados = $manager->select_common("clientes",null, null, " ORDER BY nome DESC");	

?>
<table border=2>
	<thead>
	<tr>
		<th>id</th>
		<th>nome</th>
		<th>email</th>
		<th>cpf</th>
		<th>bairro</th>
		<th>dataNascimento</th>
		<th>ativo</th>
		<th>cadastradoEm</th>
	</tr>
	</thead>

	<tbody>
		<?php foreach($dados as $d): ?>
			<tr>
			<td><?=$d['id'];?></td>
			<td><?=$d['nome'];?></td>
			<td><?=$d['email'];?></td>
			<td><?=$d['cpf'];?></td>
			<td><?=$d['bairro'];?></td>
			<td><?=$d['dataNascimento'];?></td>
			<td><?=$d['ativo'];?></td>
			<td><?=$d['cadastradoEm'];?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>

</table>
