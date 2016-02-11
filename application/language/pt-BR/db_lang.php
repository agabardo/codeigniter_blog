<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 * @Traduzido para Português do Brasil por Adrian Gabardo
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Incapaz de determinar as configurações de banco de dados baseado na string de conexão enviada.';
$lang['db_unable_to_connect'] = 'Incapaz de conectar à seu servidor de banco de dados usando as configurações definidas.';
$lang['db_unable_to_select'] = 'Incapaz de selecionar o banco de dados definido: %s';
$lang['db_unable_to_create'] = 'Incapaz de criar o banco de dados especificado: %s';
$lang['db_invalid_query'] = 'A consulta que você enviou não é válida.';
$lang['db_must_set_table'] = 'Você deve definir a tabela de banco de dados a ser usada junto com sua pesquisa.';
$lang['db_must_use_set'] = 'Você deve usar o método "set" para atualizar uma entrada.';
$lang['db_must_use_index'] = 'Você deve especificar um índice para comparar em atualizações de lotes.';
$lang['db_batch_missing_index'] = 'Uma ou mais colunas enviadas para atualização de lote não possuí índice.';
$lang['db_must_use_where'] = 'Atualizações não são permitidas a não ser que contenham uma cláusula "where".';
$lang['db_del_must_use_where'] = 'Exclusões não são permitidas a não ser que contenham uma cláusula "where" ou "like".';
$lang['db_field_param_missing'] = 'Para selecionar campos é necessário usar o nome da tabela como um parâmetro.';
$lang['db_unsupported_function'] = 'Esta função não está disponível para o banco de dados que você está usando.';
$lang['db_transaction_failure'] = 'Falha de Transação: Rollback efetuado.';
$lang['db_unable_to_drop'] = 'Incapaz de excluir o banco de dados especificado.';
$lang['db_unsupported_feature'] = 'Função não suportada na plataforma de banco de dados que você está usando.';
$lang['db_unsupported_compression'] = 'O formato de compressão de arquivo que você escolheu não é suportado por seu servidor.';
$lang['db_filepath_error'] = 'Incapaz de enviar dados no caminho de dados que você escolheu.';
$lang['db_invalid_cache_path'] = 'O caminho de cache que você escolheu não é válido ou não pode ser usado.';
$lang['db_table_name_required'] = 'Um nome de tabela é necessário para esta operação.';
$lang['db_column_name_required'] = 'Um nome de coluna é necessário para esta operação.';
$lang['db_column_definition_required'] = 'É necessário uma definição de coluna para esta operação.';
$lang['db_unable_to_set_charset'] = 'Incapaz de ajustar conexão de caracteres configurada: %s';
$lang['db_error_heading'] = 'Ocorreu um erro de Banco de Dados';
