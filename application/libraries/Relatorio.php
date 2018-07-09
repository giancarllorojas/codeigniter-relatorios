<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Ghunti\HighchartsPHP\Highchart as Highchart;
use Ghunti\HighchartsPHP\HighchartJsExpr;

class Graphic {
        private $chart;

        public $title = "";
        public $type  = "bar";

        function __construct($title, $width = "100%", $height = "100%")
        {
                $this->main =& get_instance();
                $this->chart = new Highchart();
                $this->chart->includeExtraScripts();
                $this->id = generate_id();

                $this->chart->chart->renderTo = $this->id;
                $this->chart->title->text = $title;
                $this->chart->credits->enabled = FALSE;
        }

        public function render($native = TRUE){
                $chart_code = $this->chart->render($this->id);

                $graphic_code = "<div class=\"graphic_container shadow\"> <div id=\"$this->id\"></div> <script type=\"text/javascript\">$chart_code</script></div>";

                if($native){
                        return $graphic_code;
                }

                $this->main->output->append_output($graphic_code);
        }

        public function subtitle($title){
                $this->chart->subtitle->text = $title; 
        }

        public function ytext($title){
                $this->chart->yAxis->title->text = $title; 
        }

        public function xtext($title){
                $this->chart->yAxis->title->text = $title; 
        }

        public function add_serie($serie){
                $this->chart->series[] = $serie->get_array();
        }

}

/**
 * Classe para Série pro Gráfico
 * Específica opções para um Gráfico
 */
class GraphicSerie{
        private $name = "";
        private $data;
        private $type;

        public function __construct($name, $data, $type = "line"){
                $this->name = $name;
                $this->data = $data;
                $this->type = $type;
        }

        public function get_array(){
                return array(
                        'name' => $this->name,
                        'data' => $this->data,
                        'type' => $this->type,
                        'color' => new HighchartJsExpr("Highcharts.getOptions().colors[0]")
                );
        }
}

/**
 * Classe de Tabela de dados
 */
class Table{
        private $top;
        private $bottom;
        private $title = "";
        private $header = "";
        private $content = "";

        function __construct($title, $header, $data = array()){
                $this->main =& get_instance();

                $this->title = $title;

                $this->add_lines($data);

                $this->id = generate_id();

                $this->top    = "<table id=\"$this->id\" class=\"display table nowrap shadow\" style=\"width:100%\">";
                $this->bottom = "</table>";

                $this->_process_header($header);
        }

        private function _process_header($header){
                $this->header .= "<thead><tr>";
                foreach($header as $h){
                        $this->header .= "<th>" . $h . "</th>";
                }
                $this->header .= "</tr></thead>";
        }

        private function _get_content(){
                return "<tbody>" . $this->content . "</tbody>";
        }

        public function add_line($line){
                $this->content .= "<tr>";
                foreach($line as $v){
                        $this->content .= "<td>" . $v . "</td>";
                }
                $this->content .= "</tr>";
        }

        public function add_lines($lines){
                foreach($lines as $line){
                        $this->add_line($line);
                }
        }

        public function render($native = TRUE){
                $info_in = "<div class='table_container'>";
                
                $info_out = "</div>";
                $table_code = $info_in . $this->top . $this->header . $this->_get_content() . $this->bottom . $info_out;
                $init_code = '<script type="text/javascript">$(document).ready(function(){$("#' . $this->id . '").DataTable({"searching": false, "paging": false, "bInfo" : false, dom:"frtipB",buttons:["csv","excel",{extend: "pdf", title:"' . $this->title . '"},{extend: "print", text:"Imprimir"}]})});</script>';
                
                if($native){
                        return $table_code . $init_code;
                }
                $this->main->output->append_output($table_code);
                $this->main->output->append_output($init_code);
        }
}

function generate_id($length = 10) {
        return substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}