<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author daw
 */
interface Manager {
    function add($objeto);
    function edit($objeto);
    function get($id);
    function getAll();
    function remove($id);
}


