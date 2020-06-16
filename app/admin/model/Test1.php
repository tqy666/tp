<?php
namespace app\admin\model;


use think\Model;

class Test1 extends Model{

        protected $table='test1';
        protected $schema=[
                  'id' =>'int',
                  'name'=>'varchar',
                  'nick_name'=>'varchar',
                  'created_at'=>'int'
        ];

}