<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;
$main_content .= '
<span style="color: #ff0000;"><b>O comércio dentro do jogo por dinheiro RL é ilegal, o player que for pego comprando e/ou vendendo será deletado.</b></span><br/><br/>
Nós do '.$config['server']['serverName'].' esperamos que todos os jogadores se comportem de uma maneira razoável e respeitosa. Ao criar sua conta, você se prontifica a seguir todas regras do servidor, sendo passivo de notações, banimento e delete.<br/>
Em caso de Notation (Notificação): Ao receber três destas, a conta será banida temporariamente.<br/>
Em caso de Banimento (Bloqueio): Ao receber um deste, a conta será banida de maneira escalável:<br/><br/>
<li>7 dias</li>
<li>14 dias</li>
<li>21 dias</li><br/>
Em caso de Delete (Remoção): Ao receber um deste, a conta será deletada, sem aviso prévio.</p>

<b>TÓPICOS ESPECIAIS:</b><br/>
Os jogadores que não cumprirem esta seção estão sujeitos a Banimento/Delete da conta principal, além de em casos específicos as contas secundárias sejam Banidas/Deletadas.<br/>
A) Abuso de Bugs Explorando os erros óbvios do jogo ou de qualquer outra parte dos serviços do '.$config['server']['serverName'].'.<br/>
B) Usando software não oficial para jogar Manipulando o programa oficial do cliente ou usando software adicional para jogar o jogo.<br/><br/>

<b>É MUITO IMPORTANTE QUE SEJA LIDA ESTA SESSÃO:</b><br/>
Caso não seja realizado os testes propostos pelos GameMasters, o jogador estará sujeito ao banimento/bloqueio de sua conta, onde ao não realizar os procedimentos será considerado o uso de SOFTWARES ILEGAIS, onde os testes propostos poderão ser: Dançar com o personagem (CTRL+SETAS DO TECLADO).<br/> Solicitar que pise na seta que aponta para o SQM desejado. Uma simples conversa com o GameMaster (Ignorando o mesmo, estará sujeito a punição).<br/><br/>

<b>Pontos importantes:</b><br/>
Caso o jogador esteja utilizando BOT, porem não esteja 100% AFK, e responder aos testes, o mesmo NÃO RECEBERÁ A PUNIÇÃO.<br/>
Caso o jogador esteja utilizando MC’s NÃO RECEBERÁ PUNIÇÃO, APENAS SERÃO PUNIDOS OS JOGADORES QUE ABUSAREM.<br/>
Caso o jogador esteja utilizando NAVIGATOR, estará sujeito a PUNIÇÃO, como explicado no tópico acima. <br/>Manipulando o programa oficial do cliente ou usando software adicional para jogar o jogo.<br/><br/>

<b>NOMES:</b>
Os jogadores que não cumprirem esta sessão estão passivos de namelock (Troca de nome) e bloqueio do personagem, até que a troca seja realizada, onde caso venha ocorrer novamente estará sujeito a receber uma/um Notação/Banimento, além de um novo namelock.<br/>
A) Nome ofensivo Nomes que são insultantes, racistas, sexualmente relacionados, relacionados com drogas, assédio ou geralmente censurável.<br/>
B) Formato de Nome Inválido Nomes que contêm partes de frases (exceto nomes de guildas), palavras mal formatadas ou combinações absurdas de letras.<br/>
C) Nome que contém publicidade proibida Nomes que anunciam marcas, produtos ou serviços de terceiros, conteúdo que não está relacionado com o jogo ou comércios por dinheiro real.<br/>
D) Violação da regra de apoio ao nome Nomes que suportam, incitam, anunciam ou implicam uma violação das Regras Tibia.<br/><br/>

<b>DECLARAÇÕES:</b><br/>
Os jogadores que não cumprirem esta sessão estão passivos de Notação, sendo assim caso venha receber três, estará sujeito ao Banimento de sua conta temporariamente.<br/>
A) Declaração ofensiva Declarações insultantes, racistas, sexualmente relacionadas, relacionadas com a droga, assédio ou em geral desagradáveis.<br/>
B) Spamming Excessivamente repetindo declarações idênticas ou semelhantes ou usando texto mal formatado ou sem sentido.<br/>
C) Publicidade Proibida.<br/><br/>

<span style="color: #ff0000;"><b>[SESSÃO ESPECIAL]:</b></span><br/> Violação de regras de suporte Declarações que suportam, incitam, anunciam ou implicam uma violação das Regras do '.$config['server']['serverName'].'. <br/>FALSA INDENTIDADE/PASSAR-SE POR UM MEMBRO DA EQUIPE: Os jogadores que não cumprirem esta sessão estarão sujeitos ao bloqueio/delete da conta.<br/>
A) Fingindo ser um GameMaster ou Tutor. Fingindo ser um representante do '.$config['server']['serverName'].' ou ter sua legitimação ou poderes.<br/>
B) difamação ou agitação contra o servidor. Publicar informações claramente erradas sobre ou chamar um boicote contra o '.$config['server']['serverName'].' ou seus serviços.<br/>
C) Informações falsas Fornecer intencionalmente informações erradas ou enganosas referente ao '.$config['server']['serverName'].' como relatórios sobre violações de regras, reclamações, relatórios de bugs ou solicitações de suporte.<br/><br/>

<b>QUESTÕES LEGAIS:</b><br/>
Os jogadores que não cumprirem esta sessão estão sujeitos ao banimento/bloqueio da conta, e em casos específicos a exclusão da conta.<br/>
A) Atacar o Serviço do '.$config['server']['serverName'].', interromper ou danificar a operação de qualquer servidor, o jogo ou qualquer outra parte dos serviços relacionados ao '.$config['server']['serverName'].'.<br/>
B) Violação de leis ou regulamentos Violando qualquer lei aplicável, o Contrato de Serviços referentes ao '.$config['server']['serverName'].': A violação ou tentativa de violação das Regras do '.$config['server']['serverName'].' pode levar a uma suspensão temporária de caracteres e contas. Em casos graves, a remoção ou modificação de habilidades de caráter, atributos e pertences, bem como a remoção permanente de caracteres e contas sem qualquer compensação pode ser considerada. A sanção é baseada na gravidade da violação da regra e no registro anterior do jogador. As regras são determinados a critério exclusivo da Equipe '.$config['server']['serverName'].' e pode ser imposto sem qualquer aviso prévio, onde cada GameMaster tem conhecimento de todas regras do servidor, e a decisão deles é aplicada diretamente as regras, sendo assim o jogador não terá direito a recorrer a punição, como por exemplo, o pedido de provas ao ato realizado. Essas regras podem ser alteradas a qualquer momento. Todas as alterações serão anunciadas no site oficial.<br/><br/>

<b>DOAÇÕES E PONTOS/COINS:</b><br/>
O Jogador que doar uma quantia para a melhora do servidor não fica isento das regras, sendo assim as punições serão aplicadas conforme as regras, independente da quantidade doada, sendo assim o valor doado não será devolvido.<br/>	
';
?>