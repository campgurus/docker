<?php

namespace Neoan3\Component\ContactOutlet;

use Neoan3\Apps\Db;
use Neoan3\Frame\Demo;
use Neoan3\Model\Contact\ContactModel;
use Neoan3\Model\Outlet\OutletModel;
use Neoan3\Provider\Model\InitModel;

/**
 * Class ContactOutletController
 * @package Neoan3\Component\ContactOutlet
 *
 * Generated by neoan3-cli for neoan3 v3.*
 */

class ContactOutletController extends Demo{

    /**
    * GET: api.v1/contact-outlet
    * GET: api.v1/contact-outlet/{id}
    * GET: api.v1/contact-outlet?{query-string}
    * @param string|null $id
    * @param array $params
    * @return array
    */
    #[InitModel(OutletModel::class)]
    #[InitModel(ContactModel::class)]
    function postContactOutlet(array $params = []): array
    {
        return $this->provider['db']->smart('>insert into contact_outlet set outlet_id=unhex({{outlet_id}}), contact_id=unhex({{contact_id}})', ['outlet_id' => $params['outlet_id'], 'contact_id' => $params['contact_id']]);
//        return $params;
    }

    /**
     * DELETE: api.v1/contact-outlet
     * @param array $body
     * @return array
     */
    function deleteContactOutlet(array $body): array
    {
        $sql = '>delete from contact_outlet where';
        $condition = [];
        foreach ($body as $key=>$value) {
            $sql.=(!empty($condition)?' AND ': ' ')."$key = unhex({{{$key}}})";
            $condition[$key] = $value;
        }
        return $this->provider['db']->smart($sql, $condition);\
    }
}
