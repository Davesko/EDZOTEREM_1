<?php
declare(strict_types=1);

/**
 * @property $DB_HOST
 * @property $DB_DATABASE
 * @property $DB_USER
 * @property $DB_PASS
 */
class Config
{
    private static Config|null $instance = null;

    public static function getInstance() : Config{
        if (self::$instance == null){
            self::$instance = new Config();
        }
        return self::$instance;
    }

    protected array $config = array();

    private function __construct()
    {
        $this->config["DB_HOST"] = "localhost";
        $this->config["DB_USER"] = "edzoterem_user";
        $this->config["DB_PASS"] = "Qi3*qcM1BJGCFgC[";
        $this->config["DB_DATABASE"] = "edzoterem";
    }

    public function __get(string $name)
    {
        return $this->config[$name] ?? "";
    }
}
