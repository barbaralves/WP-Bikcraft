<?php
//Template Name: Contato
get_header();
?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="introducao-interna interna-contato">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown">Contato</h1>
            <p data-anime="800" class="fadeInDown">Tire suas dúvidas com a gente</p>
        </div>
    </section>
    <!-- Fim introdução -->

    <section class="contato container fadeInDown" data-anime="1200"> 
        <form id="form-orcamento" method="POST" action="./enviar.php" class="contato-form grid-8 formphp">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone">

            <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
            <input type="text" class="nao-aparece" name="leaveblank">
            <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
            <input type="text" class="nao-aparece" name="dontchange" value="http://">

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
            <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
        </form>
        <div class="contato-dados grid-8">
            <h3>Dados</h3>
            <span>+55 21 93223 3232</span>
            <span>contato@bikcraft.com</span>
            <span>Rua Ali Perto - Botafogo</span>
            <span>Rio de Janeiro - RJ - Brasil</span>
            <h3>Redes Sociais</h3>
            <ul>
                <li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg" alt=""></a></li>
                <li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg" alt=""></a></li>
                <li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg" alt=""></a></li>
            </ul>
        </div>
    </section>
    <!-- Fim contatos -->

    <section class="container contato-mapa">
        <a href="http://google.com" target="_blank" class="grid-16"><img src="img/endereco-bikcraft.jpg" alt="Endereço da Bikcraft"></a>
    </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>