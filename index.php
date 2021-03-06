<?php
    require_once('./app/database/db.php');
    $queryProduct = "SELECT nome, texto, valor, image, link FROM produto";
    $dados = mysqli_query($connect_mysql, $queryProduct) or die();
    $linha = mysqli_fetch_assoc($dados);
    $total = mysqli_num_rows($dados);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Venda - {PRODUTO}</title>
    <link rel="stylesheet" href="./assets/css/page.css" />
</head>
<body>

    <!--CONTAINER-->
    <div id="container">
        <header>
            <div class="hdr">
                <div class="logo"><img src="./assets/images/logo.png" /></div>
                <div class="sub-logo">
                    <h4>Pagina de Venda - {PRODUTO}</h4>
                </div>
            </div>
        </header>

        <section id="products">
            <div class="textProduct">
                <h1>OS MELHORES PRODUTO</h1>
                <h2>Com desconto exclusivos</h2>
            </div>
            <div class="list_product">

        <?php  if($total > 0){

                do {
?>
                <div class="product_client1">
                    <div class="price_product">
                        <h2>R$ <?=$linha['valor']?></h2>
                    </div>
                    <div class="img_product"><img src="<?=$linha['image']?>" /></div>
                    <div class="title_product">
                        <h1><?=$linha['nome']?></h1>
                    </div>
                    <div class="desc_product">
                        <p><?=$linha['texto']?></p>
                    </div>
                    <div class="buy_product">
                        <a type="button" href="<?=$linha['link']?>">VER MAIS</a>
                    </div>
                </div>

               
                <?php
                } while ($linha = mysqli_fetch_assoc($dados));

        }?>






            </div>
            <div class="info_product">Promo????o limtida, at?? enquanto durarem os estoques. Vailido at?? 15/05 - 15/09 (2025)</div>
        </section>

        <section id="info_tec">
            <div class="textInfo">
                <h1>Porque escolher a Page Sale para adquirir os produtos ?</h1>
                <h2>tecnologias, roupas, pe??as, quimicas e etcs</h2>
            </div>

            <div class="list_info">

                <div class="infoTec">
                    <div class="infoImg"><img src="./assets/images/info/img.png" /></div>
                    <div class="infoDesc">
                        <div class="infoTitle">
                            <h1>F??cil e R??pido</h1>
                        </div>
                        <div class="infoText"><label>Leva somente poucos segundos para realizar compras na Page Sale.</label></div>
                    </div>
                </div>
                <div class="infoTec">
                    <div class="infoImg"><img src="./assets/images/info/img.png" /></div>
                    <div class="infoDesc">
                        <div class="infoTitle">
                            <h1>Promo????es especiais</h1>
                        </div>
                        <div class="infoText"><label>N??o perca nossas ofertas incr??veis, sorteios e muito mais somente aqui na Page Sale!</label></div>
                    </div>
                </div>

                <div class="infoTec">
                    <div class="infoImg"><img src="./assets/images/info/img.png" /></div>
                    <div class="infoDesc">
                        <div class="infoTitle">
                            <h1>Pagamentos Convenientes</h1>
                        </div>
                        <div class="infoText"><label>Pague usando os meios de pagamento mais populares do Brasil</label></div>
                    </div>
                </div>

                <div class="infoTec">
                    <div class="infoImg"><img src="./assets/images/info/img.png" /></div>
                    <div class="infoDesc">
                        <div class="infoTitle">
                            <h1>Suporte Qualificado</h1>
                        </div>
                        <div class="infoText"><label>Nossa equipe de suporte est?? sempre dispon??vel para auxiliar entre 9PM-8AM & 10AM-4PM, 7 dias por semana. </label></div>
                    </div>
                </div>

            </div>

        </section>

        <footer id="footer">
            <div class="foo_date">
                <div class="footer_list">

                    <!-- CONTATO -->
                    <div class="column_footer">
                        <div class="columnFooterTitle">
                            <h1>Contato</h1>
                        </div>
                        <div class="columnFooterbar"></div>
                        <div id="contact" class="columnFooterlist">
                            <div class="list">
                                <div class="icon_list"><img src="./assets/images/footer/tel.png" alt="Telefone"></div>
                                <div class="text_list"><h1>+55 69 99292-5520</h1></div>
                            </div>
                            <div class="list">
                                <div class="icon_list"><img src="./assets/images/footer/mail.png" alt="Telefone"></div>
                                <div class="text_list"><h1>salepage@mail.com</h1></div>
                            </div>
                            <div class="list">
                                <div class="icon_list"><img src="./assets/images/footer/address.png" alt="Telefone"></div>
                                <div class="text_list"><h1>Rua S??o Paulo, SP - Setor 2 Quadrado 4</h1></div>
                            </div>
                        </div>
                    </div>

                    <!-- FORMA DE PAGAMENTOS -->
                    <div class="column_footer">
                        <div class="columnFooterTitle">
                            <h1>Forma de Pagamentos</h1>
                        </div>
                        <div class="columnFooterbar"></div>
                        <div id="payment" class="columnFooterlist">
                                <div class="img_payment"><img src="./assets/images/footer/pay.png" alt="Payment"/></div>
                        </div>
                    </div>

                    <!-- POLITICAS -->
                    <div class="column_footer">
                        <div class="columnFooterTitle">
                            <h1>Politicas</h1>
                        </div>
                        <div class="columnFooterbar"></div>
                        <div id="politics" class="columnFooterlist">
                                <div class="link_politics">
                                    <a href="https://" target="_blank">Pol??tica de reembolso</a>
                                    <a href="https://" target="_blank">Pol??tica de privacidade</a>
                                    <a href="https://" target="_blank">Regras de conduta</a>
                                </div>
                        </div>
                    </div>
                    
                </div>
                <div class="copy">?? COPYRIGHT - PAGE SALE (XREZ)?? BY <a href="https://www.instagram.com/victorresende069/">VICTOR RESENDE ???</a> - TODOS OS DIREITOS RESERVADOS.</a></div>
            </div>
        </footer>
        
    </div>
    <!--CONTAINER-->
    <script type="text/javascript" src="./assets/js/page.js"></script>
</body>
</html>