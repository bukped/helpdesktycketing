<!-- pemanggilan css dan js -->
<link href="<?php echo base_url('nama_direktori/css/bootstrap.min.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('nama_direktori/js/bootstrap.bundle.min.js')
?>"></script>

<!-- Menjalankan Program Sederhana Php -->
<?php
echo "Hello World !";
?>

<!-- Config.php -->
//Mengatur alamat URL aplikasi yang dibuat
$config['base_url'] = 'http://localhost/perusahaan';

//Menghilangkan index.php pada URL
$config['index_page'] = '';

//Mengamankan session
$config['encryption_key'] = 'kuncienkripsi';

<!-- Autoload.php -->
// Melakukan proses autoloading terhadap library yang digunakan
$autoload['libraries'] = array('database', 'session', 'email', 'form_validation');

// Melakukan proses autoloading terhadap helper yang digunakan
$autoload['helper'] = array('url', 'file', 'string', 'form');

<!--Database.php-->
$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'perusahaan';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

<!-- Model -->
<?php

class Testing_model extends CI_Model {


// controller
<?php
class Testing extends CI_Controller{ public function index(){
$this->load->view("view_testing");
}
}

// View
<!DOCTYPE html>
<html>
<head>
<title>Contoh View</title>
</head>
<body>
<p>Ini adalah contoh dari View</p>
</body>
</html>

/