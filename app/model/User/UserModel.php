<?php
/* Generated by neoan3-cli */

namespace Neoan3\Model\User;

use Neoan3\Core\RouteException;
use Neoan3\Provider\Model\InitProvider;
use Neoan3\Provider\MySql\Database;
use Neoan3\Provider\Model\Model;
use Neoan3\Provider\MySql\Transform;

/**
 * Class UserModel
 * @package Neoan3\Model\User
 * @method static get(string $id)
 * @method static create(array $modelArray)
 * @method static update(array $modelArray)
 * @method static find(array $conditionArray, array $callFunctions = [])
 * @method static delete(string $id, bool $hard = false)
 */

class UserModel implements Model{

    use InitProvider;

    /**
     * @var Database|null
     */
    private static ?Database $db = null;

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public static function __callStatic($method, $args)
    {
        if(!method_exists(self::class, $method)){
            $transform = new Transform('user', self::$db);
            return self::outgoing($transform->$method(...self::incoming(...$args)));
        } else {
            return self::$method(...$args);
        }
    }

    /**
     * @param mixed $transactionRequest
     * @param array|null $callFunctions
     * @return array
     */
    private static function incoming(mixed $transactionRequest, ?array $callFunctions = []): array
    {
//        transform password
        if (isset($transactionRequest['password'])) {
            $transactionRequest['password'] = '=' . password_hash($transactionRequest['password'], algo: PASSWORD_DEFAULT);
        }
        return [$transactionRequest,$callFunctions];
    }

    /**
     * @param array $transactionResult
     * @return array
     */
    private static function outgoing(array $transactionResult): array
    {
        if (isset($transactionResult['password'])) {
            unset($transactionResult['password']);
        }
        elseif(!empty($transactionResult)) {
            $final = [];
            foreach ($transactionResult as $i => $single) {
                $final[] = self::outgoing($single);
            }
            $transactionResult = $final;
        }
        return $transactionResult;
    }

    /**
     * @throws RouteException
     */

    static function login($credentials)
    {
        $foundUser = self::$db->easy('user.id user.password',['email'=>$credentials['email']]);
        if(empty($foundUser || !password_verify($credentials['password'],$foundUser[0]['password']))) {
            throw new RouteException('Unauthorized', 401);
        }
        return self::get($foundUser[0]['id']);
    }
}
