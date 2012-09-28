<?php
const AMQP_NOPARAM = 0;
const AMQP_DURABLE = 2;
const AMQP_PASSIVE = 4;
const AMQP_EXCLUSIVE = 8;
const AMQP_AUTODELETE = 16;
const AMQP_INTERNAL = 32;
const AMQP_NOLOCAL = 64;
const AMQP_AUTOACK = 128;
const AMQP_IFEMPTY = 256;
const AMQP_IFUNUSED = 512;
const AMQP_MANDATORY = 1024;
const AMQP_IMMEDIATE = 2048;
const AMQP_MULTIPLE = 4096;
const AMQP_NOWAIT = 8192;
const AMQP_EX_TYPE_DIRECT = 'direct';
const AMQP_EX_TYPE_FANOUT = 'fanout';
const AMQP_EX_TYPE_TOPIC = 'topic';
const AMQP_EX_TYPE_HEADER = '?';