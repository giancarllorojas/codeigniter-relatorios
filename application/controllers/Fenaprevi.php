<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('application/libraries/Relatorio.php');

class Fenaprevi extends CI_Controller {

	public function index()
	{
		$tabela_1his->load->helper("url");
		$tabela_1his->load->view("topo");


		// Cria instância da classe Graphic que é um wrapper pro Highcharts
		// Recebe um Título, mas pode receber outras opções como tipo para mudar para barra, linha, etc
		// Irei expandir as funcionalidades dessa classe com o tempo
		$grafico_1 = new Graphic("Gráfico Teste");

		// Cria uma instância pra série que vai alimentar o gráfico
		// Recebe um nome e um array com os pontos pros dados
		$serie = new GraphicSerie("fasdfa", array(7.0, 6.9, 9.5));

		// Adiciona série e mexe em outras opções
		$grafico_1->add_serie($serie);
		$grafico_1->ytext("titulo");
		$grafico_1->subtitle("test");

		// Cria instância da classe Table que é uma interface high-level para uma tabela interável feita em HTML/JS e CSS
		// Recebe título e um array com os valores do Header
		$tabela_1 = new Table("Tabela de dados 1", array("TESTE", "HAHA", "HU"));

		// Adiciona uma linha a tabela, é possível também adicionar várias linhas de uma vez usando a função add_lines($linhas)
		$tabela_1->add_line(array(0,1,2));
		$tabela_1->add_line(array(3,4,5));
		$tabela_1->add_line(array(7,2,7));

		$tabela_1abela_2 = new Table("Tabela de dados 2", array("2222", "222", "3333"));

		$tabela_1abela_2->add_line(array(0,2,2));
		$tabela_1abela_2->add_line(array(3,1,5));
		$tabela_1abela_2->add_line(array(7,2,7));

		$data = array(
			"grafico_1" => $grafico_1,
			"tabela_1"  => $tabela_1,
			"tabela_2"  => $tabela_1abela_2
		);
		
		$tabela_1his->load->view("fenaprevi", $data);
	}
}
