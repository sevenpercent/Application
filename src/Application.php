<?php

namespace SevenPercent;

abstract class Application {

	private $_properties = [];

	public function __get($propertyName) {
		return is_callable($this->_properties[$propertyName]) ? $this->_properties[$propertyName] = $this->_properties[$propertyName]($this) : $this->_properties[$propertyName];
	}

	public function __set($propertyName, $value) {
		$this->_properties[$propertyName] = $value;
	}

	abstract public function execute();
}
