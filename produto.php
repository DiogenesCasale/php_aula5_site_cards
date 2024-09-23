<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
 class Produto {
    public $nome;
    public $descricao;
    public $valor;
    public $imagem;
	public $url;

    public function __construct($nome, $descricao, $valor, $imagem, $url) {
	$this->nome = $nome;
	$this->descricao = $descricao;
	$valor = (float) $valor;
	$this->valor = $valor;
	$this->imagem = $imagem;
	$this->url = $url;
    }

	

    public function exibirInformacoes() {
		echo <<<EOD
		<div class="col-md-2">
		<div class="card ml-3 mr-3 mt-3 text-center">
		  <div class="card-body">
		  	<img src="{$this->imagem}" class="card-img-top" height="200px">
			<h5 class="card-title">{$this->nome}</h5>
			<p class="card-text">{$this->descricao}</p>
			<div class="text-sm font-light text-center">A partir de:</div>
			<h3 class="text-sm font-light text-center"> R$ {$this->valor}</h3>
			<div class="text-sm font-light text-center">À vista</div>
			<a href="{$this->url}" target="_blank" class="btn btn-primary">Pegar Promoção</a>
		  </div>
		</div>
		</div>
		EOD;
    }

	
} 
?>


