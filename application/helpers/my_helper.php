<?php
if (!function_exists('pre')) {

    /**
     * @param	array
     */
    function pre($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}



if (!function_exists('formatarData')) {

    function data_brasil($data)
    {
        $data_brasil = DateTime::createFromFormat('Y-m-d', $data);
        return $data_brasil->format('d/m/Y');
    }
}

if (!function_exists('limitarTexto')) {

    function limitarTexto($texto, $limite)
    {
        $contador = strlen($texto);
        if ($contador >= $limite) {
            $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')).'...';
            return $texto;
        } else {
            return $texto;
        }
    }
}

if (!function_exists('url_amigavel')) {

    function url_amigavel($string)
    {
        $table  = array(
            'Š' => 'S', 'š' => 's', 'Đ' => 'Dj', 'đ' => 'dj', 'Ž' => 'Z',
            'ž' => 'z', 'Č' => 'C', 'č' => 'c', 'Ć' => 'C', 'ć' => 'c',
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A',
            'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
            'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I',
            'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
            'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U',
            'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss',
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a',
            'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e',
            'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i',
            'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o',
            'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u',
            'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b',
            'ÿ' => 'y', 'Ŕ' => 'R', 'ŕ' => 'r',
        );
        // Traduz os caracteres em $string, baseado no vetor $table
        $string = strtr($string, $table);
        // converte para minúsculo
        $string = strtolower($string);
        // remove caracteres indesejáveis (que não estão no padrão)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        // Remove múltiplas ocorrências de hífens ou espaços
        $string = preg_replace("/[\s-]+/", " ", $string);
        // Transforma espaços e underscores em hífens
        $string = preg_replace("/[\s_]/", "-", $string);
        // retorna a string
        return $string;
    }
}

if (!function_exists('maiusculo')) {

    function maiusculo($valor)
    {
        $LATIN_UC_CHARS = "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝ°°ª";
        $LATIN_LC_CHARS = "àáâãäåæçèéêëìíîïðñòóôõöøùúûüý°ºª";
        $valor          = strtr($valor, $LATIN_LC_CHARS, $LATIN_UC_CHARS);
        $valor          = strtoupper($valor);
        return $valor;
    }
}

if (!function_exists('mensagemAfirmacao')) {

    function mensagemAfirmacao($mensagem)
    {
        $echoMensagem = "<div class='alert alert-success' role='alert' style='margin-top: 10px; margin-bottom: 10px'>$mensagem</div>";
        return $echoMensagem;
    }
}

if (!function_exists('convertMonetario')) {

    function convertMonetario($tipo, $valor)
    {
        $result = 0;
        // converte para monetario
        if ($tipo === 'monetario') {
            $result = number_format($valor, 2, ",", ".");
        } elseif ($tipo === 'double') { // converte para double
            $result = str_replace(".", "", $valor);
            $result = str_replace(',', '.', $result);
        }
        return $result;
    }
}

if (!function_exists('mensagemErro')) {

    function mensagemErro($mensagem)
    {
        $echoMensagem = "<div class='alert alert-danger' role='alert' style='margin-top: 10px; margin-bottom: 10px'>$mensagem</div>";
        return $echoMensagem;
    }
}

if (!function_exists('mensagemAlerta')) {

    function mensagemAlerta($mensagem)
    {
        $echoMensagem = "<div class='alert alert-warning' role='alert' style='margin-top: 10px; margin-bottom: 10px'>$mensagem</div>";
        return $echoMensagem;
    }
}

if (!function_exists('mensagemInfo')) {

    function mensagemInfo($mensagem)
    {
        $echoMensagem = "<div class='alert alert-info' role='alert' style='margin-top: 10px; margin-bottom: 10px'>$mensagem</div>";
        return $echoMensagem;
    }
}

if (!function_exists('base_url_cms')) {

    function base_url_admin($local = "")
    {
        $CI          = & get_instance();
        $pasta_admin = $CI->config->item('pasta_admin');
        if ($local == "") {
            return base_url($pasta_admin.'/');
        } else {
            return base_url($pasta_admin.'/'.$local);
        }
    }
}

if (!function_exists('enviar_email')) {

    function enviar_email($from, $to, $assunto, $mensagem)
    {
        $CI = & get_instance();
        $CI->load->library('email');

        $CI->email->from($from['email'], $from['nome']);
        $CI->email->to($to);
        $CI->email->subject($assunto);
        $CI->email->message($mensagem);
        $CI->email->send();
    }
}


if (!function_exists('redirect_cms')) {

    function redirect_admin($local = "")
    {
        $CI          = & get_instance();
        $pasta_admin = $CI->config->item('pasta_admin');
        if ($local == "") {
            return redirect($pasta_admin);
        } else {
            return redirect($pasta_admin.'/'.$local);
        }
    }
}

// grupo de buttons da pagina exibir
if (!function_exists('grupoButtonExibir')) {

    // @var nomePrincipal: ex: Página, Produto
    function grupoButtonExibir($id, $controller, $nomePrincipal, $icone)
    {
        buttonExcluir($id, "Excluír", $controller);
        buttonEditar($id, "Editar", $controller);
        buttonListar($id, $nomePrincipal, $controller, $icone);
    }
}

// grupo de buttons da pagina editar
if (!function_exists('grupoButtonEditar')) {

    function grupoButtonEditar($id, $controller, $nomePrincipal, $icone)
    {
        buttonExcluir($id, "Excluír", $controller);
        buttonExibir($id, "Exibir", $controller);
        buttonListar($id, $nomePrincipal, $controller, $icone);
    }
}

// grupo de buttons da pagina listar
if (!function_exists('grupoButtonListar')) {

    function grupoButtonListar($id, $controller, $nomePrincipal, $icone)
    {
        buttonExcluir($id, '', $controller);
        buttonEditar($id, '', $controller);
        buttonExibir($id, '', $controller, $icone);
    }
}

// button excluir
if (!function_exists('buttonExcluir')) {

    function buttonExcluir($id, $texto = '', $controller)
    {
        echo "<form action = '".base_url_admin($controller.'/excluir')."' method = 'POST' class = 'button-grupo-right' onclick = \" return confirm('Realmente deseja excluir ?')\">";
        echo "<input type = 'hidden' name = 'id' value = '$id' />";
        echo "<button type = 'submit' class = 'btn btn-danger font-2x' title = 'Excluír'>";
        echo "<i class = 'fa fa-trash fa-2x' aria-hidden = 'true'></i>";
        if ($texto != '') {
            echo "<span> $texto </span>";
        }
        echo "</button>";
        echo "</form>";
    }
}

// button Editar
if (!function_exists('buttonEditar')) {

    function buttonEditar($id, $texto = '', $controller)
    {
        echo "<a href = '".base_url_admin("$controller/editar/$id")."' class = 'btn btn-warning button-grupo-right font-2x' title = 'Editar'>";
        echo "<i class = 'fa fa-pencil-square-o fa-2x' aria-hidden = 'true'></i>";
        if ($texto != '') {
            echo "<span> $texto </span>";
        }
        echo "</a>";
    }
}

// button Exibir
if (!function_exists('buttonExibir')) {

    function buttonExibir($id, $texto = '', $controller)
    {
        echo "<a href = '".base_url_admin("$controller/exibir/$id")."' class = 'btn btn-info button-grupo-right font-2x' title = 'Editar'>";
        echo "<i class = 'fa fa-eye fa-2x' aria-hidden = 'true'></i>";
        if ($texto != '') {
            echo "<span> $texto </span>";
        }
        echo "</a>";
    }
}

// button Exibir
if (!function_exists('buttonListar')) {

    function buttonListar($id, $texto = '', $controller, $icone)
    {
        echo "<a href = '".base_url_admin($controller)."' class = 'btn btn-primary button-topo font-2x button-grupo-right'>";
        echo "<i class = 'fa $icone fa-2x' aria-hidden = 'true'></i>";
        if ($texto != '') {
            echo "<span> $texto </span>";
        }
        echo "</a>";
    }
}


