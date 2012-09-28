<?php
class AMQPQueue {
    public function ack($delivery_tag, $flags = AMQP_NOPARAM) {}
    public function bind($exchange_name, $routing_key) {}
    public function cancel($consumer_tag = "") {}
    public function __construct (AMQPConnection $amqp_connection) {}
    public function consume (callable $callback, $flags = AMQP_NOPARAM) {}
    public function _declare() {}
    public function delete() {}
    public function get($flags) {}
    public function getArgument($key) {}
    public function getArguments() {}
    public function getFlags() {}
    public function getName() {}
    public function nack($delivery_tag, $flags = AMQP_NOPARAM) {}
    public function purge() {}
    public function setArgument($key, $value) {}
    public function setArguments(array $arguments) {}
    public function setFlags($flags) {}
    public function setName($queue_name) {}
    public function unbind($exchange_name, $routing_key) {}
}