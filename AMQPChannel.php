<?php
class AMQPChannel {
    public function commitTransaction() {}
    public function __construct(AMQPConnection $amqp_connection) {}
    public function isConnected() {}
    public function qos($size, $count) {}
    public function rollbackTransaction() {}
    public function setPrefetchCount($count) {}
    public function setPrefetchSize($size) {}
    public function startTransaction() {}
}