<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Relatório Fenaprevi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=base_url()?>static/css/relatorio.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="//code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="//code.highcharts.com/highcharts-more.js"></script>
    <script type="text/javascript" src="//code.highcharts.com/modules/exporting.js"></script>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.1/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rr-1.2.4/sl-1.2.6/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.1/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rr-1.2.4/sl-1.2.6/datatables.min.js"></script>    
    </head>
<body>
    
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://labmapro.im.ufrj.br/web/relatorios/../"><img src="https://labmapro.im.ufrj.br/web/relatorios/../logo.png"></a>
            <a class="navbar-brand" href="https://labmapro.im.ufrj.br/web/relatorios/">Relatórios - LabMA/UFRJ</a>
        </div>
        <div class="navbar-collapse collapse">
            <div id="navbar_graphicos"></div>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="https://labmapro.im.ufrj.br/web/relatorios/../sobre" data-opened="false"><span class="glyphicon glyphicon-question-sign"></span>
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-user"></span> labma_test <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Configurações</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://labmapro.im.ufrj.br/web/auth/logout">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>