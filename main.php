<!DOCTYPE html>
<html lang="en">
<head>

    <?php require 'display.php'; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="page.css">

    <title>Sabonete - Mãe</title>

</head>
<body> 

    <div class="Intro">

        <div class="topnavMain">

            <div class="Icon">
                <img src="assets/imgs/background/iconmae21x.png">
            </div>

            <div class="topnav-left">
                <img src="assets/imgs/background/iconmae1x.png">
            </div>

            <div class="topnav-right">
                <a>QUEM SOMOS</a>
                <span> | </span>
                <a onclick="scrollToBottom()">CONTACTOS</a>
            </div>

        </div>

        <div class="topnavMobile">

            <div class="IconMobile">
                <img src="assets/imgs/background/iconmae1x.png">
            </div>

            <div class="miniNavbar" id="miniNavbar" onclick="toggleNavbar()">
                <img src="assets/imgs/background/iconnav1x.png">
            </div>
            
            <div class="navbarExpanded" id="navbarExpanded">
                <div class="cross">
                    <p onclick="toggleNavbar()">x</p>
                </div>
                <div class="navbarOptions">
                    <a>QUEM SOMOS</a>
                    <span> | </span>
                    <a onclick="scrollToBottom()">CONTACTOS</a>
                </div>
            </div>

        </div>

        <div class="containerText">
            <div class="Text1">
                <h1>O SABONETE QUE FAZ ESPUMA NA ÁGUA DO MAR</h1>
            </div>
            <div class="Text2">
                <p>Suave na sua pele e inofensivo para o meio ambiente.</p>
            </div>
        </div>
    </div>


    <div class="products">
        <div class="header2div">
            <h2 id="header2-1">a nossa</h2>
            <h2 id="header2-2">colecção</h2>
        </div>
        <div class="containerBig">
            <div class="containerMini">
                <div class="infoProduct" id="prodYellow">
                    <?php 
                        $id_prod = 1;
                        displayProduct($id_prod);
                    ?>
                    <div class="txtProduct">
                        <p>Sabonete de Mel e Cera de Abelha</p>
                        <div class="price">
                            <p>8,50€</p><p>140 gr - Sem Perfume</p>
                        </div>
                        <p><b>Ingredientes:</b> Sodium Olivate (Azeite), Sodium Cocoate (Óleo de Coco), Sodium palmate 
                        (Óleo de Palma biológico e sustentável), Sodium avocadate (Óleo de Abacate), Aqua, 
                        Glycerine, Sodium cocoa butterate (Manteiga de Cacau), Sodium castorate (Óleo de Rícino), 
                        Camellia sinensis leaf extract (Chá Verde), Parfum, Triticum vulgare grass 
                        (Erva Trigo em pó).</p>
                    </div>
                </div>
            </div>
            <div class="containerMini">
                <div class="infoProduct" id="prodPurple">
                    <?php 
                        $id_prod = 2;
                        displayProduct($id_prod);
                    ?>
                    <div class="txtProduct">
                        <p>Sabonete Alfazema e Erva Príncipe</p>
                        <div class="price">
                            <p>8,50€</p><p>140 gr - Sem Perfume</p>
                        </div>
                        <p>Enriquecido com Óleo de Kukui e Aloé Vera.</p>
                        <p><b>Ingredientes:</b> Sodium cocoa butterate (Manteiga de Cacau), Sodium castorate 
                        (Óleo de Rícino), Camellia sinensis leaf extract (Chá Verde), Parfum, 
                        Triticum vulgare grass (Erva Trigo em pó), Rosmarinus officinalis oleoresin leaf extract, 
                        Hexyl cinnamal, Limonene, Geraniol, Citronellol, Benzyl Salicylate, Eugenol, 
                        Alpha-Isomethyl Ionone, Linalool.</p>
                    </div>
                </div>
            </div>
            <div class="containerMini">
                <div class="infoProduct" id="prodRed">
                    <?php 
                        $id_prod = 3;
                        displayProduct($id_prod);
                    ?>
                    <div class="txtProduct">
                        <p>Sabonete de Groselha Preta e Folha de Tomate</p>
                        <div class="price">
                            <p>8,50€</p><p>140 gr - Sem Perfume</p>
                        </div>
                        <p>Enriquecido com Óleo de Kukui e Aloé Vera.</p>
                        <p><b>Ingredientes:</b> Sodium Olivate (Azeite), Sodium Cocoate (Óleo de Coco), Sodium palmate 
                        (Óleo de Palma biológico e sustentável), Sodium avocadate (Óleo de Abacate), Aqua, 
                        Glycerine, Sodium cocoa butterate (Manteiga de Cacau), Sodium castorate (Óleo de Rícino), 
                        Camellia sinensis leaf extract (Chá Verde), Parfum, Triticum vulgare grass 
                        (Erva Trigo em pó),</p>
                    </div>
                </div>
            </div>
            <div class="containerMini">
                <div class="infoProduct" id="prodGreen">
                    <?php 
                        $id_prod = 4;
                        displayProduct($id_prod);
                    ?>
                    <div class="txtProduct">
                        <p>Sabonete de Chá Verde e Sândalo</p>
                        <div class="price">
                            <p>8,50€</p><p>140 gr - Sem Perfume</p>
                        </div>
                        <p>Enriquecido com Óleo de Abacate e Chá Verde</p>
                        <p><b>Ingredientes:</b> Sodium Olivate (Azeite), Sodium Cocoate (Óleo de Coco), Sodium palmate 
                        (Óleo de Palma biológico e sustentável), Sodium avocadate (Óleo de Abacate), Aqua, 
                        Glycerine, Sodium cocoa butterate (Manteiga de Cacau), Sodium castorate (Óleo de Rícino), 
                        Camellia sinensis leaf extract (Chá Verde), Parfum, Triticum vulgare grass 
                        (Erva Trigo em pó),</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="kitProducts">
        <div class="containerBig2">
            <div class="kitMini">
                <div class="kitMiniTxt">
                    <p id="titleKit">Kit Miniaturas Sabonetes Clássicos</p>

                    <div class="priceWeight">
                        <p>35,00€</p><p>7 sabonetes, 65gr cada</p>
                    </div>

                    <p>Uma coleção de miniaturas, para quem não se consegue decidir por um só sabonete!</p>
                    <div class="listSoap">
                        <div class="itemGroup">
                            <div class="itemSoap">
                                <p>Sabonete de Chá Verde e Sândalo</p>
                                <p class="buttonToggle">+</p>
                            </div>
                            <hr>
                            <div class="contentToggle">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, provident totam debitis blanditiis harum voluptas 
                                magni accusantium esse nam aut, omnis veniam temporibus? Suscipit, ipsum quas nihil sed temporibus et?
                            </div>
                        </div>
                        <div class="itemGroup">
                            <div class="itemSoap">
                                <p>Sabonete de Mel e Cera de Abelhas</p>
                                <p class="buttonToggle">+</p>
                            </div>
                            <hr>
                            <div class="contentToggle">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, provident totam debitis blanditiis harum voluptas 
                                magni accusantium esse nam aut, omnis veniam temporibus? Suscipit, ipsum quas nihil sed temporibus et?
                            </div>
                        </div>
                        <div class="itemGroup">
                            <div class="itemSoap">
                                <p>Sabonete de Tangerina e Cardamomo</p>
                                <p class="buttonToggle">+</p>
                            </div>
                            <hr>
                            <div class="contentToggle">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, provident totam debitis blanditiis harum voluptas 
                                magni accusantium esse nam aut, omnis veniam temporibus? Suscipit, ipsum quas nihil sed temporibus et?
                            </div>
                        </div>
                        <div class="itemGroup">
                            <div class="itemSoap">
                                <p>Groselha Preta e Folha de Tomate</p>
                                <p class="buttonToggle">+</p>
                            </div>
                            <hr>
                            <div class="contentToggle">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, provident totam debitis blanditiis harum voluptas 
                                magni accusantium esse nam aut, omnis veniam temporibus? Suscipit, ipsum quas nihil sed temporibus et?
                            </div>
                        </div>
                        <div class="itemGroup">
                            <div class="itemSoap">
                                <p>Sabonete de Peónia e Neroli</p>
                                <p class="buttonToggle">+</p>
                            </div>
                            <hr>
                            <div class="contentToggle">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, provident totam debitis blanditiis harum voluptas 
                                magni accusantium esse nam aut, omnis veniam temporibus? Suscipit, ipsum quas nihil sed temporibus et?
                            </div>
                        </div>
                        <div class="itemGroup">
                            <div class="itemSoap">
                                <p>Sabonete de Alfazema e Erva Príncipe</p>
                                <p class="buttonToggle">+</p>
                            </div>
                            <hr>
                            <div class="contentToggle">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, provident totam debitis blanditiis harum voluptas 
                                magni accusantium esse nam aut, omnis veniam temporibus? Suscipit, ipsum quas nihil sed temporibus et?
                            </div>
                        </div>
                        <div class="itemGroup">
                            <div class="itemSoap">
                                <p>Sabonete de Chá Verde e Sândalo</p>
                                <p class="buttonToggle">+</p>
                            </div>
                            <hr>
                            <div class="contentToggle">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, provident totam debitis blanditiis harum voluptas 
                                magni accusantium esse nam aut, omnis veniam temporibus? Suscipit, ipsum quas nihil sed temporibus et?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="latest">
        
        <h2>novidades</h2>

        <div class="miniProducts">
            <div class="imgContainer">
                <img src="assets/imgs/products/prodmelancia.png">
                <div class="bottom-left">Bálsamos Labial Melancia</div>
            </div>
            <div class="imgContainer">
                <img src="assets/imgs/products/prodmae.png">
                <div class="bottom-left">Sabonete Sea Lover</div>
            </div>
            <div class="imgContainer">
                <img src="assets/imgs/products/prodtoranja.png">
                <div class="bottom-left">Shampoo Sólido para Cabelos Normais</div>
            </div>
            <div class="imgContainer">
                <img src="assets/imgs/products/prodtomilho.png">
                <div class="bottom-left">Sabonete de Azeite Biológico de Tomilho</div>
            </div>
            <div class="imgContainer">
                <img src="assets/imgs/products/prodincenso.png">
                <div class="bottom-left">Shampoo Sólido para Cabelo e Barba</div>
            </div>
            <div class="imgContainer">
                <img src="assets/imgs/products/prodtodosx.png">
                <div class="bottom-left">Kit Miniaturas Sabonetes Clássicos</div>
            </div>
            <div class="imgContainer">
                <img src="assets/imgs/products/prodbalm.png">
                <div class="bottom-left">Wonder Balm</div>
            </div>
            <div class="imgContainer">
                <img src="assets/imgs/products/prodbalsamo.png">
                <div class="bottom-left">Bálsamo Labial Lima</div>
            </div>    
        </div>
    </div>


    <div class="faq">
        <h2>faq's</h2>

        <div class="faqRow">
            <div class="faqColumn">
                <div class="itemGroup">
                    <div class="itemFaq">
                        <p>Condições Gerais</p>
                        <p class="buttonToggle">+</p>
                    </div>
                    <hr>
                    <div class="contentToggle">
                        Recolhemos o seu nome, número de telefone, endereço postal, e-mail e idade para uso em campanhas de marketing, prémios e 
                        newsletters. Além disso, quando efetuar uma compra no nosso site, recolhemos também informações sobre a morada de entrega e 
                        detalhes do pagamento.<br>Podemos também recolher outras informações sobre a sua experiência no nosso site que contribuem 
                        para a melhoria do nosso serviço. 
                    </div>
                </div>
                <div class="itemGroup">
                    <div class="itemFaq">
                        <p>Política de Privacidade</p>
                        <p class="buttonToggle">+</p>
                    </div>
                    <hr>
                    <div class="contentToggle">
                        Recolhemos o seu nome, número de telefone, endereço postal, e-mail e idade para uso em campanhas de marketing, prémios e 
                        newsletters. Além disso, quando efetuar uma compra no nosso site, recolhemos também informações sobre a morada de entrega e 
                        detalhes do pagamento.<br>Podemos também recolher outras informações sobre a sua experiência no nosso site que contribuem 
                        para a melhoria do nosso serviço. 
                    </div>
                </div>
                <div class="itemGroup">
                    <div class="itemFaq">
                        <p>Que Informação Recolhemos?</p>
                        <p class="buttonToggle">+</p>
                    </div>
                    <hr>
                    <div class="contentToggle">
                        Recolhemos o seu nome, número de telefone, endereço postal, e-mail e idade para uso em campanhas de marketing, prémios e 
                        newsletters. Além disso, quando efetuar uma compra no nosso site, recolhemos também informações sobre a morada de entrega e 
                        detalhes do pagamento.<br>Podemos também recolher outras informações sobre a sua experiência no nosso site que contribuem 
                        para a melhoria do nosso serviço. 
                    </div>
                </div>
            </div>
            <div class="faqColumn">
                <div class="itemGroup">
                    <div class="itemFaq">
                        <p>Como são usados os dados recolhidos?</p>
                        <p class="buttonToggle">+</p>
                    </div>
                    <hr>
                    <div class="contentToggle">
                        A Mãe Bodycare rege-se pela legislação e autorizações de comercialização em vigor em Portugal e não se responsabiliza por 
                        envios de artigos que não estão autorizados a serem comercializados no local de entrega. Nestes casos: <br><br> Se o envio 
                        é efetuado via Correios Portugueses e, entra automaticamente em devolução, por motivos de não autorização de entrada da 
                        mercadoria no país de destino, após a recepção da encomenda devida na nossa loja, reembolsamos o valor dos produtos deduzido
                        de eventuais taxas aduaneiras portuguesas aplicadas, sob forma de vale de desconto.
                    </div>
                </div>
                <div class="itemGroup">
                    <div class="itemFaq">
                        <p>Atualização dos seus dados</p>
                        <p class="buttonToggle">+</p>
                    </div>
                    <hr>
                    <div class="contentToggle">
                        A Mãe Bodycare rege-se pela legislação e autorizações de comercialização em vigor em Portugal e não se responsabiliza por 
                        envios de artigos que não estão autorizados a serem comercializados no local de entrega. Nestes casos: <br><br> Se o envio 
                        é efetuado via Correios Portugueses e, entra automaticamente em devolução, por motivos de não autorização de entrada da 
                        mercadoria no país de destino, após a recepção da encomenda devida na nossa loja, reembolsamos o valor dos produtos deduzido
                        de eventuais taxas aduaneiras portuguesas aplicadas, sob forma de vale de desconto.
                    </div>
                </div>
                <div class="itemGroup">
                    <div class="itemFaq">
                        <p>Clientes Internacionais</p>
                        <p class="buttonToggle">+</p>
                    </div>
                    <hr>
                    <div class="contentToggle">
                        A Mãe Bodycare rege-se pela legislação e autorizações de comercialização em vigor em Portugal e não se responsabiliza por 
                        envios de artigos que não estão autorizados a serem comercializados no local de entrega. Nestes casos: <br><br> Se o envio 
                        é efetuado via Correios Portugueses e, entra automaticamente em devolução, por motivos de não autorização de entrada da 
                        mercadoria no país de destino, após a recepção da encomenda devida na nossa loja, reembolsamos o valor dos produtos deduzido
                        de eventuais taxas aduaneiras portuguesas aplicadas, sob forma de vale de desconto.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>

        <form>

            <p>CONTACTE-NOS</p>

            <div class="inputFields">
                <input type="text" placeholder="Nome" name="nameForm">
                <div class="emailtelFields">
                    <input type="email" placeholder="Email" name="emailForm">
                    <input type="tel" placeholder="Telefone" name="telForm">
                </div>

                <textarea placeholder="Mensagem" rows="6" name="msgForm"></textarea>
            </div>
            
            <input value="ENVIAR" id="btnSendForm" readonly onclick="sendForm()">

            <p id="formMsgConfirm">Mensagem enviada com sucesso!</p>
            <p id="formMsgDeny">Mensagem enviada sem sucesso!</p>

        </form>
        <div class="footer">
            <div class="footerDiv">
                <div class="infoFooter" id="address">
                    <p id="infoFooterTitle">Morada</p>
                    <p>Rua Santa Teresa do Menino Jesus Nº6, 17º andar Miraflores 1495-048 Algés Portugal</p>
                </div>
                <div class="infoFooter">
                    <p id="infoFooterTitle">Email</p>
                    <p>fpg@fpg.pt</p>
                </div>
                <div class="infoFooter" id="contact">
                    <div class="contactDiv">
                        <p id="infoFooterTitle">Telefone sede</p>
                        <p>+351 214 123 780</p>
                    </div>
                    <a onclick="toggleForm()">Contacte-nos</a>
                </div>
                <div class="infoFooter" id="socialNet">
                    <p id="infoFooterTitle">Redes Sociais</p>
                    <div class="socialNetDiv">
                        <img src="assets/imgs/socialnetwork/iconfb.png">
                        <img src="assets/imgs/socialnetwork/iconyt.png">
                        <img src="assets/imgs/socialnetwork/iconig.png">
                    </div>
                </div>
            </div>
            <div class="copyrightDiv">
                <p>© 2023 MÃEBODYCARE. Todos os direitos reservados</p>
                <img src="assets/imgs/background/pwrdmindshaker.png">
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>