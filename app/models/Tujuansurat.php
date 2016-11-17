<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Tujuansurat extends Eloquent{
    
protected $tujuansurat='tujuansurats';
public $timestamps=false;

public function surat()
{
    return $this->belongsTo('Surat');
}
}