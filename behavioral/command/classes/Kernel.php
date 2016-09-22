<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 10:06 AM
 */

namespace classes;


class Kernel
{
    public function switchToCommand(string $command_key)
    {
        $command = "";
        switch ($command_key){
            case 'new': {
                $command_key = new NewDirectory();
                $command_key->addInput("Shazzad, the New Directory");
            }
            break;
            case 'delete': {
                $command_key = new DeleteDirectory();
                $command_key->addInput("Shazzad, delete the  Directory");
            }
            break;
            default: {
                $command_key = new DefaultProcess();
            }
            break;
        }
        $command_key->execute();
    }


}