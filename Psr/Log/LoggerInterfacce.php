<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/3/08
 * Time: 22:58
 */
namespace Psr\Log;

interface LoggerInterface
{
    public function emergency($message, array $context = []);
    public function alert($message, array $context = []);
    public function critical($message, array $context=[]);
    public function error($message, array $context = []);
    public function warning($message, array $context = []);
    public function notice($message, array $context = []);
    public function info($message, array $context = []);
    public function debug($message, array $context = []);
    public function log($message, array $context = []);
}