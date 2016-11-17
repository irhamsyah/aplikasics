<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Surat extends Eloquent{
    
    protected $surat='surats';
    public $timestamps=false;
    
    public function tujuan_surat()
    {
        return $this->hasMany('Tujuansurat','nomor_surat');
    }
}