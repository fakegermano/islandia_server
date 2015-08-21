<div class="row clearfix">
    <div class="col-md-12 column">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li><a data-toggle="modal" data-target="#legenda">
                            Ver Legenda para <b>Cores</b>
                        </a>
                    </li>
                    <li>{{ HTML::link('list', 'Estatuto', array('class'=>'navbar-link navbar-brand')); }}</li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li>{{ HTML::link('home', 'Página Inicial', array('class'=>'navbar-link navbar-brand'))}}</li>
                </ul>
            </div>
        </nav>
        <div class="modal fade" id="legenda" tabindex="-1" role="dialog" aria-labelledby="legendaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Legenda</h4>
                    </div>
                    <div class="modal-body">
                        <p style="color: black">Texto em preto: redação mantida do artigo anterior vigente</p>

                        <p style="color: red">Texto em vermelho: redação nova (comparado com o texto original)</p>

                        <p style="color: #7030a0">Texto em lilás: informa o que foi feito com o artigo vigente (removido, excluído)</p>

                        <p style="color: #339966">Texto em verde: origem da nova proposta, se proveniente de algum artigo vigente</p>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-12">
                               <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                            
                               <button type="button" id="hideButton" class="btn btn-danger" data-dismiss="modal">N&atilde;o me mostrar mais!</button>
			    </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <script>
            function showModal() {
                $('#legenda').modal('show');
            }
            $(document).ready(function() {

                $('#hideButton').click(function() {
                    sessionStorage.setItem('hidden', true);
                });

                if(!sessionStorage.getItem('hidden')){
                    window.onload = showModal;
                } else {
                    console.log(sessionStorage.getItem('hidden'));
                }
            });
        </script>
    </div>
</div>
