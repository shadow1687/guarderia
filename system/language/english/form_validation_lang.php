<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
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
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= 'El campo {field} es obligatorio.';
$lang['form_validation_isset']			= 'El campo {field} debe tener algún valor.';
$lang['form_validation_valid_email']		= 'El campo {field} debe contener un email válido.';
$lang['form_validation_valid_emails']		= 'El campo {field} debe contener todos emails válidos.';
$lang['form_validation_valid_url']		= 'El campo {field} debe contener una URL válida.';
$lang['form_validation_valid_ip']		= 'El campo {field} debe contener una IP válida.';
$lang['form_validation_min_length']		= 'El campo {field} debe contener al menos {param} caracteres.';
$lang['form_validation_max_length']		= 'El campo {field} debe contener como máximo {param} caracteres.';
$lang['form_validation_exact_length']		= 'El campo {field} debe contener exactamente {param} caracteres.';
$lang['form_validation_alpha']			= 'El campo {field} debe contener solo caracteres alfabéticos.';
$lang['form_validation_alpha_numeric']		= 'El campo {field} solo puede contener valores alfanuméricos';
$lang['form_validation_alpha_numeric_spaces']	= 'El campo {field} solo puede contener valores alfanuméricos y espacios';
$lang['form_validation_alpha_dash']		= 'El campo {field} debe contener solo caracteres alfanuméricos, guión bajo y barras.';
$lang['form_validation_numeric']		= 'El campo {field} debe contener solo números.';
$lang['form_validation_is_numeric']		= 'El campo {field} debe contener solo caracteres numéricos.';
$lang['form_validation_integer']		= 'El campo {field} debe contener un número entero.';
$lang['form_validation_regex_match']		= 'El campo {field} no posee el formato correcto.';
$lang['form_validation_matches']		= 'El campo {field} no coincide con el campo {param}.';
$lang['form_validation_differs']		= 'El campo {field} debe contener un valor diferente que el campo {param}.';
$lang['form_validation_is_unique'] 		= 'El campo {field} debe contener un único valor.';
$lang['form_validation_is_natural']		= 'El campo {field} debe contener solo números.';
$lang['form_validation_is_natural_no_zero']	= 'El campo {field} debe contener un número mayor que cero.';
$lang['form_validation_decimal']		= 'El campo {field} debe contener un número decimal.';
$lang['form_validation_less_than']		= 'El campo {field} debe contener un valor menor a {param}.';
$lang['form_validation_less_than_equal_to']	= 'El campo {field} debe contener un valor menor o igual a {param}.';
$lang['form_validation_greater_than']		= 'El campo {field} debe contener un valor mayor a {param}.';
$lang['form_validation_greater_than_equal_to']	= 'El campo {field} debe contener un valor mayor o igual a {param}.';
$lang['form_validation_error_message_not_set']	= 'No es posible mostrar el mensaje de error correspondiente al campo {field}.';
$lang['form_validation_in_list']		= 'El campo {field} debe ser igual a uno de los siguientes: {param}.';
