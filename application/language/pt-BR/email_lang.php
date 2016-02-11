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

$lang['email_must_be_array'] = 'É necessário passar uma array para o método de validação de email.';
$lang['email_invalid_address'] = 'Endereço de email inválido: %s';
$lang['email_attachment_missing'] = 'Incapaz de localizar o seguinte anexo de email: %s';
$lang['email_attachment_unreadable'] = 'Incapaz de abrir este anexo: %s';
$lang['email_no_from'] = 'Não é possível enviar um email sem o campo "De" preenchido.';
$lang['email_no_recipients'] = 'Você deve incluir os recipientes: Para, Cc, ou Bcc';
$lang['email_send_failure_phpmail'] = 'Incapaz de enviar email usando a função PHP mail(). Seu servidor pode não estar configurado para usar este método.';
$lang['email_send_failure_sendmail'] = 'Incapaz de enviar email usando a função PHP Sendmail. Seu servidor pode não estar configurado para enviar emails utilizando este método.';
$lang['email_send_failure_smtp'] = 'Incapaz de enviar email usando a função PHP SMTP. Seu servidor pode não estar configurado para enviar emails utilizando este método.';
$lang['email_sent'] = 'Sua mensagem foi enviada com sucesso utilizando o seguinte protocolo: %s';
$lang['email_no_socket'] = 'Incapaz de abrir uma conexão com o Sendmail. Por favor verifique as configurações.';
$lang['email_no_hostname'] = 'Você não específicou um hostname SMTP.';
$lang['email_smtp_error'] = 'O seguinte erro de SMTP foi encontrado: %s';
$lang['email_no_smtp_unpw'] = 'Erro: Você deve especificar um nome de usuário e uma senha SMTP.';
$lang['email_failed_smtp_login'] = 'Falha ao enviar o comando AUTH LOGIN. Erro: %s';
$lang['email_smtp_auth_un'] = 'Falha ao autenticar o nome de usuário. Erro: %s';
$lang['email_smtp_auth_pw'] = 'Falha ao autenticar a senha. Erro: %s';
$lang['email_smtp_data_failure'] = 'Incapaz de enviar dados: %s';
$lang['email_exit_status'] = 'Código de Status para Saída: %s';
