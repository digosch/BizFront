<form action="confirma.php" method="GET">
					<div id="form" class="well">
						


					<h3 class=" label-success" style="color:#fff; border-radius:20px ">Digite a quantia do Empréstimo desejado : </h3>
				<input class="form-control" type="text" v-model="valor" id="valoremprestimo" name="valoremprestimo" onchange="verificavalor()" data-mask="000000" required>
				<p>*** Valor não pode exceder R$ 100.000</p>
						
						<h3 class=" label-success" style="color:#fff; border-radius:20px ">Em quantos meses deseja realizar o pagamento ? </h3>
						<div  class="radio" required>
							<label>
								3 |
								<input type="radio" id="recebejuros1" onclick="funcjuros1()"  name="optionsCheckboxes" value="3" v-model="picked" required>
								
							</label>
							<label>
								4 |
								<input type="radio" id="recebejuros2" onclick="funcjuros2()" name="optionsCheckboxes" value="4" v-model="picked">
							
							</label>
							<label>
								5 |
								<input type="radio" id="recebejuros3" onclick="funcjuros3()" name="optionsCheckboxes" value="5" v-model="picked">
							
							</label>
							<label>
								6 |
								<input type="radio" id="recebejuros4" onclick="funcjuros4()" name="optionsCheckboxes"  value="6" v-model="picked">
						
							</label>
							<label>
								7 |
								<input type="radio" id="recebejuros5" onclick="funcjuros5()" name="optionsCheckboxes" value="7" v-model="picked">
							
							</label>
							<label>
								8 |
								<input type="radio"  id="recebejuros6" onclick="funcjuros6()" name="optionsCheckboxes" value="8" v-model="picked">
							
							</label>
							<label>
								9 |
								<input type="radio"  id="recebejuros7" onclick="funcjuros7()" name="optionsCheckboxes" value="9" v-model="picked">
							
							</label>
							<label>
								10 |
								<input type="radio"  id="recebejuros8" onclick="funcjuros8()" name="optionsCheckboxes" value="10" v-model="picked">
							
							</label>
							<label>
								11 |
								<input type="radio"  id="recebejuros9" onclick="funcjuros9()" name="optionsCheckboxes" value="11" v-model="picked">
							
							</label>
							<label>
								12 |
								<input type="radio"  id="recebejuros10" onclick="funcjuros10()" name="optionsCheckboxes" value="12" v-model="picked">
								
							</label>
						</div>
						<span>Escolhido: {{ picked }} X Parcelas</span>
						<input id="juros" name="juros" class="label-warning" value="" readonly></input><br>

						<div class="">
						  <h2>Informações do Empréstimo</h2>
						  <p>Confira na Tabela se os valores são conforme solicitado e Pressione o botão SOLICITAR</p>            
						  <table class="table table-striped">
						    <thead class="text-center">
						      <tr>
						        <th class="text-center">Valor do Empréstimo</th>
						        <th class="text-center">Parcelas a Pagar</th>
						        <th class="text-center">Juros sobre o Valor</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>R$ {{valor}}</td>
						        <td>{{picked}} <b>X</b></td>
						        <td name="jurosnum" id="jurosnum" value=""></td>

						        
						      </tr>
						     
						    </tbody>
						  </table>
						
						</div>
							<hr>
						<button   id="solicitar"  class="btn btn-success" > SOLICITAR </button>

			</form>