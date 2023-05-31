<?php
/*
 * Desenvolvido por Luiz Flávio
 * 
 * Classe Funçoes
 * 
 * Listar Menu
 */

class Funcoes
{
    public function get_submenu($items)
    {
        $html2 = '<ul class="sub-menu">';
        foreach ($items as $key => $value) {
            $html2 .= '<li class=""><a href="/' . $value['url_pag'] . '" target="' . $value['target_url'] . '">' . $value['tit_pag'] . '</a>';
            if (array_key_exists('child', $value)) {
                $html2 .= $this->get_submenu($value['child'], 'child');
            }
            $html2 .= "</li>";
        }
        $html2 .= '</ul>';
        return $html2;
    }

    public function get_menu($items)
    {
        $html = '<ul class="page-sidebar-menu">';
        foreach ($items as $key => $value) {
            if (array_key_exists('child', $value)) {
                $html .= '<li class=""><a href="/' . $value['url_pag'] . '" target="' . $value['target_url'] . '" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<span class="title">' . $value['icon'] . $value['tit_pag'] . '</span><span class="arrow "></span></a>';
            } else {
                $html .= '<li class="start active"><a href="/' . $value['url_pag'] . '" target="' . $value['target_url'] . '">' . $value['icon'] . $value['tit_pag'] . '</a>';
            }
            if (array_key_exists('child', $value)) {
                $html .= $this->get_submenu($value['child'], 'child');
            }
            $html .= "</li>";
        }
        $html .= '</ul>';
        return $html;
    }

    public function menu()
    {
        $items = array(
            1 => array('parent' => '0', 'tit_pag' => 'Dashboard', 'url_pag' => '/', 'target_url' => '_self', 'id' => '1', 'icon' => '<i class="fa fa-home"></i>'),
            2 => array(
                'parent' => '0', 'tit_pag' => 'Cadastro', 'url_pag' => '/', 'target_url' => '_self', 'id' => '2', 'icon'  => '<i class="fa fa-file-text"></i>',
                'child' => array(
                    3 => array('parent' => '2', 'tit_pag' => 'Cliente', 'url_pag' => '', 'target_url' => '_self', 'id' => '3',),
                    4 => array('parent' => '2', 'tit_pag' => 'Fornecedor', 'url_pag' => '', 'target_url' => '_self', 'id' => '4',),
                    5 => array('parent' => '2', 'tit_pag' => 'Perfil de acesso', 'url_pag' => '', 'target_url' => '_self', 'id' => '4',),
                    6 => array('parent' => '2', 'tit_pag' => 'Usuário', 'url_pag' => '', 'target_url' => '_self', 'id' => '5',),
                ),
            ),
            7 => array(
                'parent' => '0', 'tit_pag' => 'Relatório', 'url_pag' => '', 'target_url' => '_self', 'id' => '6', 'icon' => '<i class="fa fa-bar-chart-o"></i>',
                'child' => array(
                    7 => array('parent' => '6', 'tit_pag' => 'Cliente', 'url_pag' => '', 'target_url' => '_self', 'id' => '7',),
                    8 => array('parent' => '6', 'tit_pag' => 'Faturamento', 'url_pag' => '', 'target_url' => '_self', 'id' => '8',),
                    9 => array('parent' => '6', 'tit_pag' => 'Produtos', 'url_pag' => '', 'target_url' => '_self', 'id' => '9',),
                ),
            ),
        );

        return $this->get_menu($items);
    }
}
