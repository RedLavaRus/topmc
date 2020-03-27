<?php

require_once $_SERVER['DOCUMENT_ROOT']."/core/core.php";
  $iduser = $_SESSION['id'];
  $inventr_balance = new Balance;
  $user_GD = $inventr_balance->show_gold($pdo,$iduser);
  $user_LP = $inventr_balance->show_lp($pdo,$iduser);
  $user_SV = $inventr_balance->show_silver($pdo,$iduser);
if($iduser >= 1){
if(((isset($_GET['server']))and(isset($_GET['type']))) and (isset($_GET['atribut'])))
{
  if($_GET['server'] == "vanila")
  {
    
    //vanila server
    if($_GET['type']== "privelegiya")
    {
      
      //privelegiya
      if($_GET['atribut'] == 1)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус VIP на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 2)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус VIP на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 3)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус VIP на всегда!";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 4)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус VIP на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 5)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус VIP на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 6)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус PREMIUM на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 7)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус PREMIUM на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 8)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус PREMIUM на всегда!";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 9)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус PREMIUM на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 10)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус PREMIUM на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 11)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус LORD на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 12)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус LORD на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 13)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус LORD на всегда!";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 14)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус LORD на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 15)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус LORD на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 16)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус KING на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 17)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус KING на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 18)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус KING на всегда!";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 19)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус KING на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 20)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус KING на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 21)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус МЕЦЕНАТ на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 22)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус МЕЦЕНАТ на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 23)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус МЕЦЕНАТ на всегда!";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 24)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус МЕЦЕНАТ на 30 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      if($_GET['atribut'] == 25)
      {
        $atr_id_by = $_GET['atribut'];
        $namepred= "Статус МЕЦЕНАТ на 90 дней";
        $command_shop = $_GET['atribut'];
        $sth_balance = $pdo->prepare('Select * FROM `shop_items` WHERE  id= ?');
		    $sth_balance->execute(array("$atr_id_by"));
        $array_balans_trade = $sth_balance->fetch(PDO::FETCH_ASSOC);
        $gpr=$array_balans_trade['priv'];
        if( $array_balans_trade['valut'] == "GD")
        {
          if($array_balans_trade['prise']  <= $user_GD)
          {
            $user_GD = $user_GD - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `gold` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_GD","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно денег!<br> >Пополнить баланс<";
          }
        }
        if( $array_balans_trade['valut'] == "LP")
        {
          if($array_balans_trade['prise']  <= $user_LP)
          {
            $user_LP = $user_LP - $array_balans_trade['prise'];
            $sth_balance_minus = $pdo->prepare("UPDATE `balance` SET `lp` = ? WHERE `iduser` = ?");
            $sth_balance_minus->execute(array("$user_LP","$iduser"));
            //добавление привелегии в инвентарь
            //lp user/group <user|group> parent addtemp <group> <duration>
            
            $sth_add_inv = $pdo->prepare('INSERT INTO `inventar` (`server`, username, `comand`,`status`,`namepred`)
            VALUES (?, ?, ?, ?, ?)');

            $sth_add_inv->execute(array(
              "vanila",
              "$iduser",
              "$command_shop",
              "1",
              "$namepred"
            ));

            $sms ="Вы купили \"".$namepred."\" Активируйте в личном кабинете -> сумка";
          }
          else
          {
            $sms = "Недостаточно МОНЕТ УДАЧИ!<br> >ЗАРАБОТАЙТЕ!<";
          }
        }
      }
      


    }
  }
}
else
{
  $sms =  "fatal error!";
}
}
else{
  $sms ="АВТОРИЗУЙТЕСЬ!";
}
//$invitor_server = $_GET['server'];
//$invitor_type = $_GET['type'];
//$invitor_atribut = $_GET['atribut'];

/*
база данных по итемам
 server -> vanila tehno
 type -> predmet privelegiya
 atribut -> ид привелегии или предмета  id9999x99999k99999 (ид, подтип, количество)

*/






?>
<div class="windows_result_by_shop" id="windows_result_by_shop">
<?php 
$shop = new Shop;
echo $sms;//$shop-> test_windows(); 

/*
1) Проверить баланс
2) Списать баланс
3) Выдать в инвентарь предмет.

$host = 'localhost'; // Server host name or IP
$port = 25575;                      // Port rcon is listening on
$password = 'njsdlkjJKNljknbsau323'; // rcon.password setting set in server.properties
$timeout = 3;                       // How long to timeout.


$rcon = new Rcon($host, $port, $password, $timeout);

if ($rcon->connect())
{
  $rcon->sendCommand("lp user JaligWei parent addtemp vip 1585353447");
  
}

*/
?>


</div>