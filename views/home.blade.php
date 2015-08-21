@extends('html5')

@section('title', 'Página Inicial')

@section('container-class', 'container-fluid')

@section('content')
    <div class="row clearfix">
        <div class="col-md-2 column"></div>
        <div class="col-md-8 column">
            <div class="jumbotron">
                <div class="center red-unicamp">
	            <h2><b>Revis&atilde;o do Estatuto da UNICAMP</b></h2>
                </div>
		<div class="center">
            <h3>O prazo de envio de propostas terminou no dia 14/08.</h3>
		    <h3> &Agrave; comunidade Universit&aacute;ria da UNICAMP </h3>
		</div>
                <br/>
                <br/>
                <div class="right-align">
                    <p><b>Caros Professores, Alunos e Funcionários</b>,</p> </div>
                <div class="left-align justified">
                    <p>
                    O Grupo de Trabalho para Revisão do Estatuto da UNICAMP apresenta à Comunidade Universitária a versão revisada da minuta do Estatuto, agora encaminhada ao Conselho Universitário para apreciação. O GT recebeu de alunos, professores e funcionários 214 sugestões à primeira minuta, distribuídas nos seus vários Títulos e Capítulos, no período entre julho de 2014 e janeiro de 2015. A versão ora apresentada resulta da análise e incorporação desse material.<br/>
                    Esta página divulga de forma comparada ambos os textos, o Estatuto vigente e a nova minuta, e apresenta a possibilidade de a comunidade apresentar propostas que serão diretamente encaminhadas ao Conselho Universitário, que deverá conhecê-las quando do início da apreciação da minuta.
                    </p>
                </div>
                <div class="left-align">
                    <p>As propostas podem ser de três tipos:
                </div>
                <div class="left-align">
                    <ul>
                        <li>Supressão de texto ou artigo;</li>
                        <li>Adição ou inclusão detexto ou artigo; e</li>
                        <li>Substituição do texto ou artigo.</li>
                    </ul>
                </div>
                <div class="left-align justified">
                    A página também permite que os interessados conheçam todas as propostas feitas pela comunidade.
                </div>
                </p>
                <div class="right-align">
                    <p>
                        <b>Saudações acadêmicas,</b>
                        <br>
                        GT Revisão do Estatuto da UNICAMP
                    </p>
                </div>
                <br/>
                <br/>
                <div class="center">
                    <a href='list'>
                        {{ HTML::image('bootstrap/img/LogoUnicamp.png', '', ['class'=>'big-landing-image', 'alt'=>'logo unicamp']) }}
                    </a>
                    <br/>
                    <br/>
                    <p>
                        <a href="list"><button class="btn btn-lg btn-danger">Ver Estatutos</button></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-2 column"></div>
    </div>
@stop
