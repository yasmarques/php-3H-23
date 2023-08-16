<?php 

include_once 'php_action/conexao_bd.php';

 ?>
 <div class="row">
 	<div class="col s12 m6 push-m3">
 		<h3 class="light"> Alimentos </h3>
 		<table class="striped"> 
 			<thead>
 				<tr>
 					<th>Nome</th>
 					<th>Quantidade</th>
 					<th>Preço</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
                    $sql = "SELECT * FROM tbAlimentos";

                    $resultado = mysqli_query($connection, $sql);

                        
                    while($dados = mysqli_fetch_array($resultado)){


                 ?>

                 <tr>
                            <td><?php echo $dados['nomeAlim']; ?></td>
                            <td><?php echo $dados['qtdAlim']; ?></td>
                            <td><?php echo $dados['precoAli']; ?></td>

                            <td><a href="alterar.php?id=<?php echo $dados['codAlim']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

                            <td><a href="#modal<?php echo $dados['codAlim']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                            <!-- Modal Structure in Materializecss -->
                              <div id="modal<?php echo $dados['codAlim']; ?>" class="modal">
                                <div class="modal-content">
                                  <h4>Aviso.</h4>
                                  <p>Deseja excluir o Produto?</p>
                                </div>
                                <div class="modal-footer">
                                  

                                  <form action="php_action/excluir_alimento.php" method="POST">
                                    <input type="hidden" name="codAlim" value="<?php echo $dados['codAlim']; ?>">

                                    <button type="submit" name="btn-excluir" class="btn red">Excluir</button>

                                    <a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>

                                  </form>
                                </div>
                              </div>

                        </tr>
                    <?php }

                    ?>
                    
            </tbody>

            </table>
            <br>
            <a href="cadastrar.php" class="btn">Adicionar Produto</a>
        </div>      
    </div>


<?php 
    
    //rodapé

    include_once 'includes/footer.php';


 ?>