<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
	<?= $this->Html->css('touche.generic.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>
    </header>
    <div id="container">
	<div id="header-container">
                    
                    <div id="header-outer">
                    <div id="header">
                        <div id="logo"><?php echo $this->Html->link('meupg', '/'); ?></div>
                        <?php
                                $usuario = $this->request->session()->read('User.name');

                                if(!$usuario)
                                {
                        ?>
                        <div id="main-menu">
                            <?php 
                                    echo $this->Html->link('Início', '/');
                                    echo $this->Html->link('Perfil', '/perfil');
                                    echo $this->Html->link('Uploads', array('controller' => 'uploads', 'action' => 'index'));
                                    echo $this->Html->link('Salas', array('controller' => 'salas', 'action' => 'index'));
                             ?>
                        </div>

                        <div id="session_container">
                            
                            <div id="session">
                                <div id="session_foto">
                                    <?php 
                                    echo $this->Html->image('perfis/' . $usuario['foto'], array('width' => '25px', 'height' => '25px')); 
                                    ?>
                                </div>
                                <div id="session_usuario">
                                    <span>
                                    <?php 
                                        $usuario = $this->request->session()->read('User.name');
                                        echo $usuario['nome'] . ' ' . $this->Html->image('default/arrow_down.png');;
                                    ?>
                                    </span>
                                </div>
                            </div>					
                            <div id="session_options">
                                <div id="session_configuracoes"><?php echo $this->Html->link($this->Html->image('default/configuracoes.png') .  '<span>Configurações</span>',   array('controller' => 'usuarios', 'action' => 'configuracoes'), array('escape' => false)); ?></div>
                                <div id="session_ajuda">        <?php echo $this->Html->link($this->Html->image('default/ajuda.png') .          '<span>Ajuda</span>',           array('controller' => 'usuarios', 'action' => 'ajuda'),         array('escape' => false)); ?></div>
                                <div id="session_sair">         <?php echo $this->Html->link($this->Html->image('default/sair.png') .           '<span>Sair</span>',            array('controller' => 'usuarios', 'action' => 'logout'),        array('escape' => false)); ?></div>
                            </div>
                            
                        </div>
                        
                        <div id="search_container">
                            
                            <div id="search">
                                <?php echo $this->Form->text('busca'); ?>
                            </div>
                            <div id="search_results">
                                
                                <div id="search_usuarios"></div>
                                <div id="search_uploads"></div>
                                <div id="search_salas"></div>
                                
                            </div>
                            
                        </div>
                                <?php 
                                        echo $this->Html->scriptBlock("
                                            var focus = false;
                                               var last_search_string = jQuery('#busca').val();

                                               function checkSearchStringChange() {
                                                       var value = jQuery('#busca').val();

                                                       if(value != last_search_string) {
                                                               last_search_string = value;

                                                               jQuery.get('" . $this->Url->build(array('controller' => 'usuarios', 'action' => 'buscar')) . "', {string: value}, function(data) {
                                                                       jQuery('#search_usuarios').html(data);

                                                                       jQuery.get('" . $this->Url->build(array('controller' => 'uploads', 'action' => 'buscar')) . "', {string: value}, function(data) {
                                                                               jQuery('#search_uploads').html(data);

                                                                               jQuery.get('" . $this->Url->build(array('controller' => 'salas', 'action' => 'buscar')) . "', {string: value}, function(data) {
                                                                                       jQuery('#search_salas').html(data);
                                                                                       if(focus){
                                                                                            jQuery('#search_results').show();
                                                                                       }                                                                               });
                                                                       });
                                                               });
                                                       }
                                               }

                                               setInterval(checkSearchStringChange, 1000);
                                        ");
                                ?>
                                <?php
                                      echo $this->Html->scriptBlock("
                                               var mouse_in = false;
                                               
                                               jQuery('#search_results').mouseenter(function() {
                                                       mouse_in = true;
                                               });

                                               jQuery('#search_results').mouseleave(function() {
                                                       mouse_in = false;
                                                       
                                               });
                                               
                                               jQuery(document).click(function() {
                                                       if(!focus && !mouse_in) {
                                                               jQuery('#search_results').hide();
                                                       }
                                               });
                                      ");
                                ?>
                                <?php
                                       echo $this->Html->scriptBlock("
                                               var focus = false;

                                               function placeHolder(element, msg) {
                                                       if(jQuery(element).val() == '') {
                                                               jQuery(element).val(msg);
                                                               last_search_string = msg;
                                                       }
                                                       jQuery(element).focus(function() {
                                                               focus = true;

                                                               if(jQuery(this).val() == msg) {
                                                                       jQuery(this).val('');
                                                                       last_search_string = '';
                                                               }
                                                       });
                                                       jQuery(element).blur(function() {
                                                               focus = false;

                                                               if(jQuery(this).val() == '') {
                                                                       jQuery(this).val(msg);
                                                                       last_search_string = msg;
                                                               }
                                                               if(!mouse_in){
                                                                    jQuery('#search_results').hide();
                                                               }
                                                       });
                                                       jQuery(element).parent('form').submit(function() {
                                                               if(jQuery(element).val() == msg) {
                                                                       jQuery(element).val('');
                                                                       last_search_string = '';
                                                               }
                                                       });
                                               }

                                               placeHolder('#busca', 'Procurar...');
                                       ");
                                ?>
                        <?php
                                }
                        ?>
                    </div>
                    </div>
		</div>
        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>
