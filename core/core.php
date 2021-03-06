<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "config.php";
session_start();
if(!isset($_SESSION['id'])){$_SESSION['id'] = 0;}
//echo "1";
$pdo_host= $cfg->pdo_host;
$pdo_bd=$cfg->pdo_bd;
$pdo_user=$cfg->pdo_user;
$pdo_pass=$cfg->pdo_pass;

$pdo = new PDO('mysql:host='.$pdo_host.';dbname='.$pdo_bd,$pdo_user, $pdo_pass, array(
    PDO::ATTR_PERSISTENT => true
));


class Login
{
	public $loginIN;
	public $passIN;
	public $passSHA;

	public function salt()
	{
		$hash_start = rand(1,9999999);
		$hash_two= hash('SHA256', $hash_start);
		$hash_3 = substr($hash_two,0,16);
		return $hash_3;
	}
	public function reg($pdo,$login,$pass,$pass2,$mail)
	{
		$login_str=strlen($login);
		$pass_str=strlen($pass);
		$mail_str=strlen($mail);
		$this->passIN=$pass;
		if($pass != $pass2){return "<div class='msg_red'>Ошибка: Пароли не совпадают! </div>";}
		if(($login_str<=4) or ($login_str>=16) ){return "<div class='msg_red'>Ошибка: Некоректная длинна логина!</div>";}
		if(($pass_str<=4)  or ($pass_str>=32)  ){return "<div class='msg_red'>Ошибка: некоректная длинна пароля!</div>";}
		if(($mail_str<=5)  										 ){return "<div class='msg_red'>Ошибка: Некоретный адрес электронной почты!</div>";}
		$sth = $pdo->prepare('Select `id`  FROM `authme` WHERE username = ?');
		$sth->execute(array("$login"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		if($array['id'] >= 1){return "<div class='msg_red'>Ошибка: Логин уже занят!</div>";}
		$salt = $this->salt();
		$this->passSHA = hash('SHA256', $this->passIN);
		$this->passSHA = $this->passSHA.$salt;
		$this->passSHA = hash('sha256', $this->passSHA);
		$this->passSHA = '$SHA$' . $salt . '$' . $this->passSHA;
		$this->passSHA;
		$client_ip  = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$client_time = time()."00";
		$user_name_i = strtolower("$login");

		$sth = $pdo->prepare('INSERT INTO `authme` (username, realname, `password`,ip,regdate,email)
    VALUES (?, ?, ?, ?, ?, ?)');

		$sth->execute(array(
			"$user_name_i",
			"$login",
			"$this->passSHA",
			"$client_ip",
			"$client_time",
			"$mail"			
		));

		return "<div class='msg_green'>Регистрация прошла успешно!</div>
		<script>
		const theOneFunc = delay => {
			location.reload()
		};
		setTimeout(theOneFunc,2000);
		</script>
		";
	
	}
	public function auth($pdo,$login,$pass)
	{
		$this->loginIN = $login;
		$this->passIN = $pass;
		//проверка наличия логина и если есть то берет пароль.
		$sth = $pdo->prepare('Select `id`,`password`  FROM `authme` WHERE username = ?');
		$sth->execute(array("$this->loginIN"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		if($array['id'] < 1){return "<div class='msg_red'>Ошибка: Неверный логин или пароль</div>";}
		$salt = substr($array['password'], 5, 16);
		//String encryptedPassword = "$SHA$" + salt + "$" + sha256(sha256(password) + salt);
		$this->passSHA = hash('SHA256', $this->passIN);
		$this->passSHA = $this->passSHA.$salt;
		$this->passSHA = hash('sha256', $this->passSHA);
		$this->passSHA = '$SHA$' . $salt . '$' . $this->passSHA;
		if($this->passSHA != $array['password']){return "<div class='msg_red'>Ошибка: Неверный логин или пароль</div>";}
		//создание сессии
		$_SESSION['id'] = $array['id'];
		$_SESSION['Login'] = $this->loginIN;

		return "<div class='msg_green'>Добро пожаловать: $this->loginIN </div>
		<script>
		const theOneFunc = delay => {
			location.reload()
		};
		setTimeout(theOneFunc,2000);
		</script>
		";
		//print_r($array);

	}

	public function auth_form($pdo,$login,$pass)
	{
		if ($login == "") {
		return "<div class='msg_red'>Ошибка: Укажите логин!</div>";
		} elseif ($pass == "") {
		return "<div class='msg_red'>Ошибка: Укажите пароль!</div>";
		} else {
		return $this->auth($pdo,$login,$pass);
		}
	}
}



class Rcon
{
    private $host;
    private $port;
    private $password;
    private $timeout;

    private $socket;

    private $authorized = false;
    private $lastResponse = '';

    const PACKET_AUTHORIZE = 5;
    const PACKET_COMMAND = 6;

    const SERVERDATA_AUTH = 3;
    const SERVERDATA_AUTH_RESPONSE = 2;
    const SERVERDATA_EXECCOMMAND = 2;
    const SERVERDATA_RESPONSE_VALUE = 0;

    /**
     * Create a new instance of the Rcon class.
     *
     * @param string $host
     * @param integer $port
     * @param string $password
     * @param integer $timeout
     */
    public function __construct($host, $port, $password, $timeout)
    {
        $this->host = $host;
        $this->port = $port;
        $this->password = $password;
        $this->timeout = $timeout;
    }

    /**
     * Get the latest response from the server.
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->lastResponse;
    }

    /**
     * Connect to a server.
     *
     * @return boolean
     */
    public function connect()
    {
        $this->socket = fsockopen($this->host, $this->port, $errno, $errstr, $this->timeout);

        if (!$this->socket) {
            $this->lastResponse = $errstr;
            return false;
        }

        //set timeout
        stream_set_timeout($this->socket, 3, 0);

        // check authorization
        return $this->authorize();
    }

    /**
     * Disconnect from server.
     *
     * @return void
     */
    public function disconnect()
    {
        if ($this->socket) {
                    fclose($this->socket);
        }
    }

    /**
     * True if socket is connected and authorized.
     *
     * @return boolean
     */
    public function isConnected()
    {
        return $this->authorized;
    }

    /**
     * Send a command to the connected server.
     *
     * @param string $command
     *
     * @return boolean|mixed
     */
    public function sendCommand($command)
    {
        if (!$this->isConnected()) {
                    return false;
        }

        // send command packet
        $this->writePacket(self::PACKET_COMMAND, self::SERVERDATA_EXECCOMMAND, $command);

        // get response
        $response_packet = $this->readPacket();
        if ($response_packet['id'] == self::PACKET_COMMAND) {
            if ($response_packet['type'] == self::SERVERDATA_RESPONSE_VALUE) {
                $this->lastResponse = $response_packet['body'];

                return $response_packet['body'];
            }
        }

        return false;
    }

    /**
     * Log into the server with the given credentials.
     *
     * @return boolean
     */
    private function authorize()
    {
        $this->writePacket(self::PACKET_AUTHORIZE, self::SERVERDATA_AUTH, $this->password);
        $response_packet = $this->readPacket();

        if ($response_packet['type'] == self::SERVERDATA_AUTH_RESPONSE) {
            if ($response_packet['id'] == self::PACKET_AUTHORIZE) {
                $this->authorized = true;

                return true;
            }
        }

        $this->disconnect();
        return false;
    }

    /**
     * Writes a packet to the socket stream.
     *
     * @param $packetId
     * @param $packetType
     * @param string $packetBody
     *
     * @return void
     */
    private function writePacket($packetId, $packetType, $packetBody)
    {
        /*
		Size			32-bit little-endian Signed Integer	 	Varies, see below.
		ID				32-bit little-endian Signed Integer		Varies, see below.
		Type	        32-bit little-endian Signed Integer		Varies, see below.
		Body		    Null-terminated ASCII String			Varies, see below.
		Empty String    Null-terminated ASCII String			0x00
		*/

        //create packet
        $packet = pack('VV', $packetId, $packetType);
        $packet = $packet.$packetBody."\x00";
        $packet = $packet."\x00";

        // get packet size.
        $packet_size = strlen($packet);

        // attach size to packet.
        $packet = pack('V', $packet_size).$packet;

        // write packet.
        fwrite($this->socket, $packet, strlen($packet));
    }

    /**
     * Read a packet from the socket stream.
     *
     * @return array
     */
    private function readPacket()
    {
        //get packet size.
        $size_data = fread($this->socket, 4);
        $size_pack = unpack('V1size', $size_data);
        $size = $size_pack['size'];

        // if size is > 4096, the response will be in multiple packets.
        // this needs to be address. get more info about multi-packet responses
        // from the RCON protocol specification at
        // https://developer.valvesoftware.com/wiki/Source_RCON_Protocol
        // currently, this script does not support multi-packet responses.

        $packet_data = fread($this->socket, $size);
        $packet_pack = unpack('V1id/V1type/a*body', $packet_data);

        return $packet_pack;
    }
}
class MinecraftStatus {
	private $Socket, $Info;
	public $Online, $MOTD, $CurPlayers, $MaxPlayers, $IP, $Port, $Error;
	
	public function __construct($IP, $Port = '25565') {
		$this->IP = $IP;
		$this->Port = $Port;
		
		if(preg_match('/(.*):\/\//', $this->IP)) {
			$this->IP = preg_replace('/(.*):\/\//', '', $this->IP);
		}
		if(strpos($this->IP, '/') !== false) {
			$this->IP = rtrim($this->IP, '/');
			if(strpos($this->IP, '/') !== false) {
				$this->Failed();
				$this->Error = 'Unsupported IP/Domain format, no \'/\'s allowed';
				return;
			}
		}
		if(preg_match_all('/:/', $this->IP, $matches) > 1) {
			unset($matches);
			if(strpos($this->IP, '[') === false && strpos($this->IP, ']') === false)
				$this->IP = '['.$this->IP.']';
		} else if(strpos($this->IP, ':') !== false) {
			$this->Failed();
			$this->Error = 'Unsupported IP/Domain format';
			return;
		}
		
		if($this->Socket = @stream_socket_client('tcp://'.$this->IP.':'.$Port, $ErrNo, $ErrStr, 1)) {
			if(strpos($this->IP, '[') === 0 && strpos($this->IP, ']') === (strlen($this->IP) - 1))
				$this->IP = trim($this->IP, '[]');
			
			$this->Online = true;
			
			fwrite($this->Socket, "\xfe");
			$Handle = fread($this->Socket, 2048);
			$Handle = str_replace("\x00", '', $Handle);
			$Handle = substr($Handle, 2);
			$this->Info = explode("\xa7", $Handle); 
			unset($Handle);
			fclose($this->Socket);
			
			if(sizeof($this->Info) == 3) {
				$this->MOTD       = $this->Info[0];
				$this->CurPlayers = (int)$this->Info[1];
				$this->MaxPlayers = (int)$this->Info[2];
				$this->Error      = false;
			} else if(sizeof($this->Info) > 3) { 
				$Temp = '';
				for($i = 0; $i < sizeof($this->Info) - 2; $i++) {
					$Temp .= ($i > 0 ? '§' : '').$this->Info[$i];
				}
				$this->MOTD       = $Temp;
				$this->CurPlayers = (int)$this->Info[sizeof($this->Info) - 2];
				$this->MaxPlayers = (int)$this->Info[sizeof($this->Info) - 1];
				$this->Error      = 'Faulty motd or outdated script';
			} else {
				$this->Failed();
				$this->Error      = 'Unexpected error, cause may be an outdated script';
			}
		} else {
			$this->Online = false;
			$this->Failed();
			$this->Error = 'Can not reach the server';
		}
	}
	
	public function Info() {
		return array(
			'MOTD'       => $this->MOTD,
			'CurPlayers' => $this->CurPlayers,
			'MaxPlayers' => $this->MaxPlayers
		);
	}
	
	private function Failed() {
		$this->MOTD       = false;
		$this->CurPlayers = false;
		$this->MaxPlayers = false;
	}
}

class Ban
{
	public function banlist($pdo,$pos=0,$limit=10){
		$sth = $pdo->prepare("Select *  FROM bans order by time desc limit $pos , $limit");
		$sth->execute(array());
		
		$x=0;
		while($array = $sth->fetch(PDO::FETCH_ASSOC))
		{
			if($array['expires'] <100)
			{
				$rest_t = "На всегда";
			} else {
				$rest_t =substr($array['expires'],0,10);
				$rest_t = date( 'd.m.Y ', $rest_t );
			}
			$rest=substr($array['time'],0,10);
			$rest = date( 'd.m.Y ', $rest);

			

			if($x == 0){$style="ban_tr_color_1";}
			if($x == 1){$style="ban_tr_color_2";}
			echo "
			<tr class='$style'>
			<td>".$array['name']."</td>
			<td>".$array['reason']."</td>
			<td>".$array['banner']."</td>
			<td>$rest</td>
			<td>$rest_t</td>
			</tr>
			";
			if($x == 0){$x=1;}else{$x=0;}
			
		};
	}
}
class Opis
{
	public function servers($pdo)
	{
		$sth = $pdo->prepare("Select *  FROM opisanie_serverov where pokaz = 1 ");
		$sth->execute(array());
		$spisok = '<ul class="spisok_navig">';
		$text="";
		while($array = $sth->fetch(PDO::FETCH_ASSOC))
		{
			
			$spisok = $spisok. '<a href="#cs' . $array['id'] . '"><li>' . $array['nazv'] . '</li></a>';

			$text= $text .'
			<h3 id="cs'.$array['id'].'">'.$array['nazv'].' </h3>
					<p class="opisanie_serverov">'.$array['text'].'</p>
					';
					
		}
		$total=$spisok."</ul>".$text;
		return $total;
	}
}
class Balance
{
	public $id;
	public function create_bag($pdo,$iduser)
	{
		$sth = $pdo->prepare('Select `id` FROM `balance` WHERE  iduser= ?');
		$sth->execute(array("$iduser"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		if ($array['id'] >= 1)
		{
			return "ready";
		}
		else
		{
			$sth = $pdo->prepare('INSERT INTO `balance` (gold, lp, `iduser`)
    VALUES (?, ?, ?)');

		$sth->execute(array(
			"0",
			"1",
			"$iduser"		
		));
		return "ready";
		}
	}
	public function show_gold($pdo,$iduser)
	{
		$sth = $pdo->prepare('Select * FROM `balance` WHERE  iduser= ?');
		$sth->execute(array("$iduser"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		if($array["id"] >= 1)
		{
			return $array['gold'];
		}
		else
		{
			$this->create_bag($pdo,$iduser);
			return 0;
		}

	}
	public function show_lp($pdo,$iduser)
	{
		$sth = $pdo->prepare('Select * FROM `balance` WHERE  iduser= ?');
		$sth->execute(array("$iduser"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		if($array["id"] >= 1)
		{
			return $array['lp'];
		}
		else
		{
			$this->create_bag($pdo,$iduser);
			return 0;
		}

	}
	public function show_silver($pdo,$iduser)
	{
		$sth = $pdo->prepare('Select * FROM `authme` WHERE  id= ?');
		$sth->execute(array("$iduser"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		$rlm = $array["realname"];

		$sth1 = $pdo->prepare('Select `money` FROM `fe_accounts` WHERE  name= ?');
		$sth1->execute(array("$rlm"));
		$array1 = $sth1->fetch(PDO::FETCH_ASSOC);
		if($array1["money"] <= 1){return 0;}
		return $array1["money"];
	}
}
Class News
{
	public function show_all_new($pdo)
	{
		$sth = $pdo->prepare('Select * FROM `wens` WHERE  soow= ? order by id desc');
		$sth->execute(array("1"));
		while ($array = $sth->fetch(PDO::FETCH_ASSOC))
		{
			echo "
			
			<h3 id='newstarget". $array['id']."'>". $array['h1']."</h3>


<img src='/img/news/". $array['img']."'>
<p class='main_text_page'>
". $array['text']."
</p>
<hr>

			";
		}
	}

	public function show_last_new($pdo)
	{
		$sth = $pdo->prepare('Select * FROM `wens` WHERE  soow= ? order by id desc');
		$sth->execute(array("1"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		
			echo "
			
			<h3 id='message1'>". $array['h1']."</h3>


<img src='/img/news/". $array['img']."'>
<p class='main_text_page'>
". $array['text']."
</p>
<hr>";

		
	}
	public function show_main_new($pdo)
	{
		$sth = $pdo->prepare('Select * FROM `wens` WHERE  soow= ? order by id desc');
		$sth->execute(array("1"));
		while ($array = $sth->fetch(PDO::FETCH_ASSOC))
		{
			echo "

<div class='box_old_news'>
<a href='/news/#newstarget". $array['id']."'>					
<img src='/img/news/". $array['img']."'>
<div class='zagolovok'>". $array['h1']."</div>
<p>". $array['text']."</p>
</a>
</div>

			";
		}
	}
}
Class Ivent
{
	public function right_bar($pdo)
	{
		$sth = $pdo->prepare('Select * FROM `ivent` WHERE  soow= ? order by id desc');
		$sth->execute(array("1"));
		while ($array = $sth->fetch(PDO::FETCH_ASSOC))
		{
			echo "
					<a href='/ivent/#ivent_id". $array['id']."'>
						<img src ='/img/ivent/". $array['img']."' class='ivent_img_main'>
					</a>
			";
		}
	}

	public function show_all_ivent($pdo)
	{
		$sth = $pdo->prepare('Select * FROM `ivent` WHERE  soow= ? order by id desc');
		$sth->execute(array("1"));
		while ($array = $sth->fetch(PDO::FETCH_ASSOC))
		{
			echo "
			
			<h3 id='ivent_id". $array['id']."'>". $array['h1']."</h3>


<img src='/img/ivent/". $array['img']."'>
<p class='main_text_page'>
". $array['text']."
</p>
<hr>

			";
		}
	}
}

Class Shop
{
	public function test_windows()
	{
		return "Ошибка: Укажите пароль!";
	}
	public function by_pex($pdo,$login,$server,$privelegiya,$timed)
	{
		/*
1) Проверить баланс
2) Списать баланс
3) Выдать в инвентарь предмет.
		*/

	}
}

Class Lc
{
	public function name($pdo, $id)
	{
		$sth = $pdo->prepare('Select `username`  FROM `authme` WHERE id = ?');
		$sth->execute(array("$id"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		return $array['username'];
	}	
	public function realname($pdo, $id)
	{
		$sth = $pdo->prepare('Select `realname`  FROM `authme` WHERE id = ?');
		$sth->execute(array("$id"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		return $array['realname'];
	}
	public function status($pdo, $id)
	{
		$sth = $pdo->prepare('Select `isLogged`  FROM `authme` WHERE id = ?');
		$sth->execute(array("$id"));
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		if($array['isLogged'] == 1) 
		{
			return "В сети";
		}
		else 
		{
			return "Не сети";
		}
	}
}
/*

$login = "redLavaz";
$pass="w1111";
$pass2="w1111";
$mail = "gakman@ya.ru";
$test = new Login;
echo $test -> reg($pdo,$login,$pass,$pass2,$mail);
/*
$login = "777771";
$pass="w11111";
$test = new Login;
$test -> auth_form($pdo,$login,$pass);
/*
$name=0;
$sth = $pdo->prepare('Select * FROM `authme` WHERE username != ?');
$sth->execute(array('21'));
$array = $sth->fetch(PDO::FETCH_ASSOC);
print_r($array);
*/
?>