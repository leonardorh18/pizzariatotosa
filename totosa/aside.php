<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script> 

window.onload = function(){
    document.getElementById('promo-close').onclick = function(){
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
    };
};


</script>

<aside id="area-lateral">
	<div class="conteudo-lateral">
			<h4 id='promo-close'> X </h4>
			<h3 >PROMOÇÕES </h3>	
			<div class="postagem-lateral">
				<p>Pizza Grande por apenas R$25,00</p>
				<p>Pizza Media por apenas R$10,00</p>
			</div>


		</div>
	</aside>