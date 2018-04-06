<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This Rgdp controller is responsible for launching the microsite 
 */
class Rgdp extends CI_Controller {

	/**
	 * [index this method will load the page the first time
	 */
	public function index()
	{	
		$data['pageToLoad'] = 'rgdp/rgdp';
        $data['pageActive'] = 'rgdp'; 
        $data['private_data'] = $this->politica_privacidade();
        //var_dump($datas);
		$this->load->view('ini',$data);
	}//end of index

	/**
	 * politica_privacidade method will have an array which will data relating to politica privacidade
	 * this method will return an array to the caller
	 * this array has the key, title, and body of panel 
	 * @return [array] with all the data needed for the printing on the view
	 */
	public function politica_privacidade()
	{

		$private_data = [
			'data1'=>["Política de Privacidade e Tratamento de dados",
					"<p>A ACIN iCloud Solutions segue um conjunto de medidas para proteger a privacidade da informação pessoal dos seus Clientes, em todas as suas plataformas. A presente política de privacidade e tratamento de dados regula a recolha e o tratamento dos dados pessoais fornecidos pelos Clientes à ACIN iCloud Solutions, assim como o exercício dos seus direitos relativamente a estes dados, nos termos da legislação relativa à Proteção de Dados Pessoais em vigor<sup>1</sup>.
					</p> 
					<p>A disponibilização dos dados pessoais, pelos Clientes, implica o conhecimento e aceitação das condições constantes desta Política de Privacidade e Tratamento de Dados.
					</p>
					<p>Ao disponibilizar os seus dados pessoais, o Cliente está a autorizar a recolha, uso e divulgação dos mesmos de acordo com as regras definidas neste documento. A ACIN iCloud Solutions garante a confidencialidade de todos os dados fornecidos pelos seus clientes.
					</p>"],
			'data2'=>["A que se aplica esta Política de Privacidade?",
					"A presente Política de Privacidade e Tratamento de Dados aplica-se exclusivamente à recolha e tratamento de dados pessoais pelos Clientes da ACIN iCloud Solutions."],
			'data3'=>["Para que fins se destina o tratamento de dados?",
						"<p>Os dados recolhidos destinam-se ao registo nas plataformas, questionários de satisfação, comunicações com os Clientes, análise estatística, processamento de pedidos de informação/apoio e de eventuais reclamações, bem como a respetiva utilização para efeitos de marketing.
						</p>
						<p>O tratamento da informação recolhida tem como finalidade assegurar os mais elevados níveis de excelência de serviço aos seus Clientes e melhorar continuamente a capacidade de satisfazer as suas necessidades. 
						</p>
						<p>Os dados recolhidos nos formulários dos websites destinam-se ao processamento dos pedidos dos utilizadores, e não serão utilizados para qualquer outro processamento. Caso não autorize o tratamento dos seus dados, não poderemos aceitar o seu registo.
						</p>"],
			'data4'=>["Quem é o responsável pelo tratamento dos seus dados?",
						"<p>A ACIN iCloud Solutions é a entidade responsável pela recolha e tratamento dos seus dados pessoais, para as finalidades referidas na presente política de privacidade. 
						</p>
						<p>Sede: Estrada Regional 104, nº42-A, 9350-203 Ribeira Brava, Madeira<br>
							Tel: 707 451 451<br>
							Fax: 291 957 171<br>
							Email: <a href='mailto:info@acin.pt'>info@acin.pt</a>
						</p>"],
			'data5'=>["Quais são os dados pessoais recolhidos?",
						"<p>A ACIN iCloud Solutions pode, respeitando a presente Política de Privacidade e Tratamento de Dados, recolher e guardar informação que, voluntariamente e com consentimento, lhe for transmitida, incluindo a informação pessoal relativa a uma pessoa singular identificada ou identificável, através do nome, morada, endereço de correio eletrónico, número de telefone, entre outros.
						</p>"],
			'data6'=>["Quando e como são recolhidos os seus dados?",
						"<span>A ACIN recolhe os dados pessoais dos Clientes através de:</span>
						<ul>
						    <li>Website - ‘Formulário de Adesão’;</li>
						    <li>Preenchimento de formulários/matrizes;</li>
						    <li>Todas as outras vias de obtenção de dados ou de transmissão de dados.</li>
						</ul>
						<span>A ACIN iCloud Solutions assume que os dados recolhidos foram inseridos pelo respetivo titular, ou por este disponibilizados, e que a sua inserção foi autorizada pelo próprio, sendo os mesmos verdadeiros e exatos.
						</span>
						<p>Os titulares dos dados pessoais são informados se a recolha dos mesmos constitui ou não uma obrigação legal ou contratual ou um requisito necessário para celebrar um contrato, bem como se o titular está obrigado a fornecer os dados pessoais e as eventuais consequências de não fornecer esses dados.
						</p>
						<p>Acresce clarificar que apenas serão recolhidos e pedidos os dados estritamente necessários à prestação dos serviços em causa, de acordo com a informação explicita na plataforma e as opções do utilizador.
						</p>
						<p>Os dados pessoais dos Clientes podem ser recolhidos e inseridos pela ACIN iCloud Solutions em bases de dados automatizadas para a realização de atividades incluídas no âmbito das finalidades da sua recolha e tratamento.
						</p>"],
			'data7'=>["Por quanto tempo serão conservados os seus dados pessoais?",
						"<p>Após a recolha de dados pessoais, a ACIN iCloud Solutions procederá à sua conservação e manutenção pelo tempo estritamente necessário para assegurar a melhor prestação dos serviços aos seus Clientes.
						</p>
						<p>O arquivo dessa informação será feito pelo período de 20 anos, salvo exista alguma legislação específica que indique o contrário.
						</p>"],
			'data8'=>["Direitos dos Titulares dos Dados",
						"<p>Nos termos da legislação em vigor, é garantido ao titular dos dados: o direito de acesso, atualização, retificação ou eliminação dos seus dados pessoais, em qualquer altura, bem como o direito de oposição à utilização dos dados facultados para fins de marketing. Para tal, deverá enviar um pedido através dos contactos indicados nos websites das diversas plataformas do Grupo ACIN.
						</p>
						<p>Para o exercício dos seus direitos, poderá contactar-nos:
						<ul class='dashed'>
						    <li>Por E-mail: Endereço eletrónico da plataforma respetiva;</li>
						    <li>Presencialmente: Dirigir-se a um dos nossos escritórios (Lisboa, Porto, Madeira e Açores)
						    </li>
						    <li>Via Postal: Para a nossa sede, sita na Estrada Regional 104, nº42-A, 9350-203 Ribeira Brava, Madeira
						    </li>
						</ul>
						</p>"],
			'data9'=>["Direito de portabilidade dos seus dados pessoais",
						"<p>Nos termos do novo Regulamento Geral de Proteção de Dados é conferido ao titular dos dados, o direito de solicitar ao responsável pelo tratamento dos mesmos, os seus dados pessoais num formato estruturado, bem como solicitar a sua transferência para outro responsável pelo tratamento. Este pedido deverá ser realizado por escrito, remitido por email ou via postal.
						</p>"],
			'data10'=>["Como garantimos a segurança dos seus dados pessoais?",
						"<p>A ACIN iCloud Solutions compromete-se a pôr em prática as medidas adequadas para proteger os dados pessoais dos seus Clientes contra a sua destruição/perda acidental ou ilícita, a alteração, a difusão ou o acesso não autorizado. A ACIN iCloud Solutions adotou as medidas necessárias para assegurar que os dados facultados sejam protegidos contra o acesso ou utilização por parte de terceiros não autorizados.
						</p>
						<p>A ACIN iCloud Solutions compromete-se a assegurar a privacidade dos utilizadores registados, não vende nem aluga a terceiros qualquer dado pessoal.
						</p>
						<p>No entanto, no que concerne aos serviços disponíveis na plataforma, a ACIN iCloud Solutions poderá relacionar-se com terceiros para a prestação de determinados serviços, o que implica o acesso, por estas entidades, a dados dos utilizadores.
						</p>
						<p>A ACIN iCloud Solutions não se responsabiliza por ações ou atos praticados pelos seus clientes ou terceiros relativamente a alterações no âmbito dos campos/funcionalidades a que têm acesso.
						</p>
						<p>A ACIN iCloud Solutions não se responsabiliza pela verificação da exatidão contínua do conteúdo dos dados pessoais, pelo que é da inteira responsabilidade dos Clientes a manutenção dos dados atualizados.
						</p>"],
			'data11'=>["Exceção à disponibilização dos dados pessoais a terceiros",
						"<p>A ACIN iCloud Solutions pode comunicar os seus dados pessoais a terceiros, desde que:
						</p>
						<ul>
						    <li>Tenha o consentimento dos utilizadores, de forma inequívoca;</li>
						    <li>Na sequência do cumprimento de uma obrigação legal, de uma deliberação da Comissão Nacional de Proteção de Dados (CNPD) ou de uma ordem judicial;
						    </li>
						    <li>Necessário para a proteção dos interesses vitais dos utilizadores ou qualquer outra finalidade legítima prevista na lei;
						    </li>
						    <i>Quando tal sucede, o utilizador será devidamente informado, sendo-lhe transmitida a identidade dos destinatários e a finalidade do tratamento dos dados cedidos.
						    </i>
						</ul>"],
			'data12'=>["Alterações à Política de Privacidade",
						"<p>A ACIN iCloud Solutions reserva-se o direito de, a qualquer momento, proceder a reajustamentos ou alterações à presente Política de Privacidade e Tratamento de Dados, sendo essas alterações devidamente publicitadas nos diversos websites do Grupo ACIN.
						</p>"],
			'data13'=>["Proteção da Privacidade das crianças",
						"<p>A ACIN iCloud Solutions não recolherá, conscientemente, quaisquer dados pessoais relativos a crianças ou menores de idade, nem lhes enviará quaisquer pedidos para que tais dados sejam fornecidos. No entanto, caso sejam recolhidos dados pessoais relativos a crianças ou a menores de idade, os mesmos, quando desnecessários, serão apagados e não utilizados, ou tratados em estrito respeito pela presente Política de Privacidade e por todas as leis e normas nacionais e internacionais relativas à proteção da privacidade das crianças.
						</p>"],
			'data14'=>["Questões e Sugestões",
						"<p>A recolha e o tratamento de dados pessoais serão efetuados de acordo com a legislação aplicável e vigente, e em consonância com as orientações da Comissão Nacional de Proteção de Dados.
						</p>
						<p>Qualquer questão relativa à recolha e ao tratamento da informação dos Clientes da ACIN iCloud Solutions será regida pela lei em vigor.
						</p>
						<p>Para saber mais sobre a forma como as plataformas do Grupo ACIN tratam os seus dados pessoais, ou para esclarecer qualquer dúvida, reclamação ou comentário sobre a Política de Privacidade, por favor entre em contacto com as mesmas através dos contactos disponíveis nos respetivos websites.
						</p>"],
			'data15'=>["Subscrição de newsletters",
						"<p>A ACIN iCloud Solutions informa regularmente os seus Clientes e parceiros de negócios dos produtos/serviços que comercializa, ou quaisquer outras informações consideradas relevantes através de envio de newsletter. A newsletter só pode ser recebida pelo titular de dados se este tiver um endereço de e-mail válido e se inscrever para a receção da mesma ou prestar consentimento. 
						</p>
						<p>Não haverá transferência de dados pessoais recolhidos pelo serviço de newsletter para terceiros. A assinatura de newsletters pode ser cancelada pelo titular dos dados a qualquer momento. O consentimento para o armazenamento de dados pessoais, que o titular dos dados forneceu para enviar a newsletter, também pode ser revogado a qualquer momento. Para efeitos de revogação do consentimento ou cancelamento de subscrição, o endereço correspondente pode ser encontrado em cada newsletter. 
						</p>
						<p>Para saber mais sobre a forma como as plataformas do Grupo ACIN tratam os seus dados pessoais, ou para esclarecer qualquer dúvida, reclamação ou comentário sobre a Política de Privacidade, por favor entre em contacto com as mesmas através dos contactos disponíveis nos respetivos websites.
						</p>"],
			'data16'=>["Política de Cookies",
						"<p>As plataformas do Grupo ACIN utilizam cookies, que têm como objetivo a gestão da sessão online do utilizador, por consistirem numa forma de garantia da sua autenticação, autorização e contextualização de início de sessão. Os cookies respeitam as regras do anonimato e não são utilizados para recolha de qualquer informação adicional de caráter pessoal, nem para fins de marketing. 
						</p>
						<p>Importa esclarecer que os Cookies consistem em etiquetas de software que retêm a informação relativa às preferências dos utilizadores, não incluindo os seus dados pessoais, e que são armazenadas nos disco rígidos dos computadores dos próprios utilizadores, através do navegador Web. 
						</p>
						<p>Apesar das medidas de segurança adotadas pela ACIN iCloud Solutions, recomenda-se que os utilizadores adotem medidas adicionais, nomeadamente:
						</p>
						<ul>
						    <li>Utilização de um computador e de um navegador Web, atualizados, com as patches de segurança devidamente configuradas, com firewall ativa, antivírus atualizado e anti-spyware;
						    </li>
						    <li>Verificar a autenticidade de todos os portais ou sítios que visitam ou acedem na internet, de forma a evitar o acesso a portais ou sítios de reputação duvidosa ou não confiável.
						    </li>
						</ul>"]
		];
        
		return $private_data;
	}//end politica_privacidade

}//end of controller
