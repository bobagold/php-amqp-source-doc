<?php
class AMQPExchange {
    public function bind($destination_exchange_name, $source_exchange_name, $routing_key) {}
    public function __construct(AMQPChannel $amqp_channel) {}
    public function _declare() {}
    public function delete($flags = AMQP_NOPARAM) {}
    public function getArgument($key) {}
    public function getArguments() {}
    public function getFlags() {}
    public function getName() {}
    public function getType() {}
    public function publish($message, $routing_key, $flags = AMQP_NOPARAM, array $attributes = array()) {}
    public function setArgument($key, $value) {}
    public function setArguments(array $arguments) {}
    public function setFlags($flags) {}
    public function setName($exchange_name) {}
    public function setType($exchange_type) {}
}