<div class="container-fluid bg-dark p-0">
	<section class="text-light">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height: 600px; overflow: hidden;">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="imgs/slide01.jpg" class="d-block w-100" alt="First Slide">
				</div>
				<div class="carousel-item">
					<img src="imgs/slide02.jpg" class="d-block w-100" alt="Second Slide">
				</div>
				<div class="carousel-item">
					<img src="imgs/slide03.jpg" class="d-block w-100" alt="Third Slide">
				</div>
			</div>
		</div>
	</section>
	<section class="lbModernize py-3">
		<span class="lbModernize2">MODERNIZE O SEU</span>
		<br />
		<h2 class="mt-2">FERRO VELHO / SUCATA</h2>
	</section>
	<div class="container mt-5 pb-5">
		<div class="container mt-4">
			<div class="row d-flex text-justify">
				<!-- Card Agilidade -->
				<div class="col-md-3 col-sm-6">
					<div class="card flex-fill">
						<img src="https://via.placeholder.com/150" class="card-img-top" alt="Agilidade">
						<div class="card-body">
							<h5 class="card-title">Agilidade</h5>
							<p class="card-text">Já chega de usar Papel, Caneta e Calculadora! Com a AIRK DIGITAL em poucos segundos você consegue efetuar a compra de varios tipos de materiais sem demora na hora de calcular o valor total por quilo de cada material da balança.</p>
						</div>
					</div>
				</div>

				<!-- Card Praticidade -->
				<div class="col-md-3 col-sm-6">
					<div class="card flex-fill">
						<img src="https://via.placeholder.com/150" class="card-img-top" alt="Praticidade">
						<div class="card-body">
							<h5 class="card-title">Praticidade</h5>
							<p class="card-text">É tudo no automático, você consegue comprar material o dia todo sem se preocupar se anotou ou não aquela compra ou venda, boa parte do seu serviço complicado será feito de forma automática pelo nosso sistema.</p>
						</div>
					</div>
				</div>

				<!-- Card Segurança -->
				<div class="col-md-3 col-sm-6">
					<div class="card flex-fill">
						<img src="https://via.placeholder.com/150" class="card-img-top" alt="Segurança">
						<div class="card-body">
							<h5 class="card-title">Segurança</h5>
							<p class="card-text">Neste ramo isso é indispensável! Afinal são negociações envolvendo materiais e produtos SEM NOTA FISCAL. Pensando nisso a AIRK DIGITAL criou um banco de dados independente onde fica tudo guardado para você!</p>
						</div>
					</div>
				</div>

				<!-- Card Relatórios -->
				<div class="col-md-3 col-sm-6">
					<div class="card flex-fill">
						<img src="https://via.placeholder.com/150" class="card-img-top" alt="Relatórios">
						<div class="card-body">
							<h5 class="card-title">Relatórios</h5>
							<p class="card-text">Já que todas essas informações ficam registradas em banco de dados, você pode consultar por data e por tipo de material, possibilitando você salvar uma planilha completa ou imprimir todo o relatório em 1 click.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
        // Utiliza o plugin equalHeights para garantir a mesma altura dos cards
		$('.flex-fill').equalHeights();
	});
</script>






















</div>

<script>
	$(document).ready(function() {
		$('#myCarousel').carousel({
            interval: 3000, // Tempo em milissegundos (3 segundos)
            ride: 'carousel'
        });
	});
</script>