<?php

namespace template;

class ClienteTemp implements ITemplate {
    public function cabecalho() {
        include "<div>/cabecalho.php </div>";
    }

    public function rodape() {
        include "<div>/rodape.php </div>";
    }

    public function layout($caminho, $parametros = null) {
        $this->cabecalho();
        include "<div>/views/$caminho.php </div>";
        $this->rodape();
    }
}
