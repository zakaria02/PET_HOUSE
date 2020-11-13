<?php
 namespace MailPoetVendor\Doctrine\ORM\Query; if (!defined('ABSPATH')) exit; use function trim; class Parameter { private $name; private $value; private $type; private $typeSpecified; public function __construct($name, $value, $type = null) { $this->name = \trim($name, ':'); $this->typeSpecified = $type !== null; $this->setValue($value, $type); } public function getName() { return $this->name; } public function getValue() { return $this->value; } public function getType() { return $this->type; } public function setValue($value, $type = null) { $this->value = $value; $this->type = $type ?: \MailPoetVendor\Doctrine\ORM\Query\ParameterTypeInferer::inferType($value); } public function typeWasSpecified() : bool { return $this->typeSpecified; } } 