<?php
/* Generated by neoan3-cli */

namespace Neoan3\Model\Contact;

use Neoan3\Model\Outlet\OutletModel;
use Neoan3\Provider\Model\InitProvider;
use Neoan3\Provider\MySql\Database;
use Neoan3\Provider\Model\Model;
use Neoan3\Provider\MySql\Transform;

/**
 * Class ContactModel
 * @package Neoan3\Model\Contact
 * @method static get(string $id)
 * @method static create(array $modelArray)
 * @method static update(array $modelArray)
 * @method static find(array $conditionArray, array $callFunctions = [])
 * @method static delete(string $id, bool $hard = false)
 */

class ContactModel implements Model{

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
            $transform = new Transform('contact', self::$db);
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
        return [$transactionRequest,$callFunctions];
    }

    /**
     * @param array $transactionResult
     * @return array
     */
    private static function outgoing(array $transactionResult): array
    {
        $result = [];
        if (isset($transactionResult['id'])){
            OutletModel::init(['db'=>self::$db]);
            $transactionResult['outlets']=[];
            $outlets = self::$db->smart('>select outlet_id from contact_outlet where contact_id=unhex({{id}})', $transactionResult);
            foreach ($outlets as $outlet) {
                $transactionResult['outlets'][]=OutletModel::get($outlet['outlet_id']);
            }
            $result = $transactionResult;
        } else {
            foreach ($transactionResult as $res) {
                $result[]=self::outgoing($res);
            }
        }
        return $result;
    }

}
