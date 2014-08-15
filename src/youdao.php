<?php
require_once('workflows.php');

class Youdao
{

    private $url = "http://fanyi.youdao.com/openapi.do?keyfrom=shaojieblog&key=111043323&type=data&doctype=json&version=1.1&q=";

    public function getData($query)
    {
        $workflows = new Workflows();

        $api = $this->url . urlencode($query);
        $res = $workflows->request($api);

        $res = json_decode($res, true);

        if ($res != false) {

            $explains = $res['basic']['explains'];

            if ($explains) {
                foreach ($explains as $key => $value) {
                    $workflows->result(
                        $value,
                        $value,
                        $value,
                        $value,
                        'icon_dict.png'
                    );
                }
            } else {
                $workflows->result(
                    '',
                    '',
                    '没查到呀',
                    '没找到你所输入的单词',
                    'notfound.png'
                );
            }

        } else {

            $workflows->result(
                '',
                '',
                '没查到呀',
                '没找到你所输入的单词',
                'notfound.png'
            );
        }


        echo $workflows->toxml();
    }

}
